<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\Empresa_Cliente;
use App\Models\Saldo;


use App\Exports\Empresa_ClienteExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;





class Empresa_ClienteController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:cliente-list|cliente-create|cliente-edit|cliente-delete', ['only' => ['index','show']]);
         $this->middleware('permission:cliente-create', ['only' => ['create','store','saldo_store']]);
         $this->middleware('permission:cliente-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:cliente-delete', ['only' => ['destroy']]);
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
    $titulo = 'Clientes';

    $clientes = Empresa_Cliente::all();

    $search = request('search');
    $response = Http::get('https://brasilapi.com.br/api/cnpj/v1/' . $search);

    $result = '';

    $data = json_decode($response); // convert JSON into objects 

    
    
    //dd($data);
    return view('cliente.create', ['search' => $search,
                                   'data' =>$data,
                                   'clientes' =>$clientes,
                                   'result' =>$result,
                                   'titulo' =>$titulo,
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
      // Empresa_Cliente::create($request->all());
        
    Empresa_Cliente::create($request->all());
    return redirect()->route('cliente.index')
    ->with('success','Cliente criado com sucesso!');
}


   //     $valor_saldo = $request->input('valor_saldo');
     //   dd($recibo);
     //   $Observacoes = $request->input('Observacoes');

      // $recibo->saldo($valor_saldo);
      //  $recibo->saldo()->attach(valor_saldo);

        
        // $products = $request->input('products', []);
        // $quantities = $request->input('quantities', []);
        // for ($product=0; $product < count($products); $product++) {
        //     if ($products[$product] != '') {
        //         $recibo->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
        //     }
        // }







    
//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */

    public function show(Empresa_Cliente $cliente)
    {
        return view('cliente.show',compact('cliente'));
    }
//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function edit(Empresa_Cliente $cliente)
     {
        $titulo = $cliente->Nome_fantasia;
       // $titulo = 'Cliente';
        $saldo_historico = Saldo::with('empresa_cliente')->where('empresa_cliente_id', '=',  $cliente->id)->orderBy('valor_saldo', 'DESC')->get();
        $saldo = Saldo::with('empresa_cliente')->where('empresa_cliente_id', '=',  $cliente->id)->get();
        //$saldo = Saldo::with('empresa_cliente')->get();
        $clientes = Empresa_Cliente::get();
       // $clientex = Empresa_Cliente::with('valor_saldo', 'empresa_cliente_id')->get();
        //$saldo = Saldo::where('empresa_cliente_id', '=', $cliente);

         return view('cliente.edit',compact('cliente', 'titulo', 'clientes', 'saldo_historico', 'saldo',));
     }


     public function update(Request $request, Empresa_Cliente $cliente)
     {
    
         $cliente->update($request->all());
    
         return redirect()->route('cliente.index')
                         ->with('edit','Cliente Atualiazado com sucesso!');
     }
    
//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Product  $product
//      * @return \Illuminate\Http\Response
//      */
     public function destroy(Empresa_Cliente $cliente)
     {
         $cliente->delete();
    
         return redirect()->route('cliente.index')
                         ->with('delete','Cliente deletado com sucesso!');
     }

     public function export () {
        
        return Excel::download(new Empresa_ClienteExport, 'clientes.xlsx');
    }

    }