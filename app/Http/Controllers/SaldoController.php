<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\Empresa_Cliente;
use App\Models\Saldo;


use App\Exports\Empresa_ClienteExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;





class SaldoController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:saldo-list|saldo-create|saldo-edit|saldo-delete', ['only' => ['index','show']]);
         $this->middleware('permission:saldo-create', ['only' => ['create','store']]);
         $this->middleware('permission:saldo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:saldo-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clienteqtd  = Empresa_Cliente::count();
        $saldo = Saldo::with('empresa_cliente')->get();  
        $titulo = 'Clientes';
        $cliente = Empresa_Cliente::all();

        $search = request('search');

        if($search) {
            $cliente = Empresa_Cliente::where ([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $cliente = Empresa_Cliente::all();
            }
        
        return view('cliente.index', ['cliente'=> $cliente, 
                                      'search' => $search, 
                                      'titulo' => $titulo, 
                                      'clienteqtd' =>$clienteqtd,
                                      'saldo' =>$saldo,
                                    
                                    ]);

    }
    
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
   public function create()
   {


    //$clientes = Empresa_Cliente::all();


    
    
    //dd($data);
    return view('cliente.create', [
                                  ]);

   }



    

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
    public function store(Request $request)
    {

    
        Saldo::create($request->all());
    
         return redirect()->route('cliente.index')
                         ->with('success','Saldo criado com sucesso!');
     }
    
//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */

    public function show(Saldo $saldo)
    {
        return view('cliente.show',compact('saldo'));
    }
//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function edit(Saldo $saldo)
     {

         return view('saldo.edit',compact('saldo'));
     }
    
//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function update(Request $request, Saldo $saldo)
     {
    
         $saldo->update($request->all());
    
         return redirect()->route('cliente.index')
                         ->with('edit','Cliente Atualiazado com sucesso!');
     }
    
//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function destroy(Saldo $saldo)
     {
         $saldo->delete();
    
         return redirect()->route('cliente.index')
                         ->with('delete','Cliente deletado com sucesso!');
     }

     public function export () {
        
        return Excel::download(new Empresa_ClienteExport, 'clientes.xlsx');
    }

    }