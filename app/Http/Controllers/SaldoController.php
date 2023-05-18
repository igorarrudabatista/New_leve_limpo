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

    
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
   public function index()
   {
     $clienteqtd  = Empresa_Cliente::count();

     return view('cliente.index', ['cliente'=> $cliente, 
     'search' => $search, 
     'titulo' => $titulo, 
     'clienteqtd' =>$clienteqtd,
     'saldo' =>$saldo,
   ]);
    return view('cliente.create', []);

   }
   public function create()
   {

    return view('cliente.create', []);

   }


    public function store(Request $request)
    {
        $sal =  new Saldo;
        
        $sal -> valor_saldo              = $request->valor_saldo;
        $sal -> Observacoes              = $request->Observacoes;
        $sal -> empresa_cliente_id       = $request->empresa_cliente_id;

        $sal ->save();


        return back()->withInput();
    
     }
    
    public function show(Saldo $saldo)
    {
        return view('saldo.show',compact('saldo'));
    }

     public function edit(Saldo $saldo)
     {

          
         return view('cliente.index',compact('saldo'));
     }

     public function update(Request $request, $id)
     {
          $sal = Saldo::find($id);

//https://pt.stackoverflow.com/questions/233677/update-com-soma-e-subtração-laravel

          $sal -> Observacoes              = $request->Observacoes;
          $sal -> empresa_cliente_id       = $request->empresa_cliente_id;
          $sal -> valor_saldo              = $request->valor_saldo;
  
          $sal ->save();        
          
          return back()->withInput();

     }

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