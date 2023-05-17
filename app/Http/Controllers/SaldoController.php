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
   public function create()
   {


    //$clientes = Empresa_Cliente::all();


    
    
    //dd($data);
    return view('cliente.create', [
                                  ]);

   }


    public function store(Request $request)
    {
       // $cliente = Empresa_Cliente::get();

        $sal =  new Saldo;
        
        $sal -> valor_saldo       = $request->valor_saldo;
        $sal -> Observacoes       = $request->Observacoes;
        $sal -> empresa_cliente_id       = $request->empresa_cliente_id;

        $sal ->save();

      //  $a= Saldo::create($request->all());
       // dd($sal);
      
    //$valor_saldo = $request->input('valor_saldo');

      // $Observacoes = $request->input('Observacoes');

      //  $recibo->saldo($valor_saldo);
     //   $a->empresa_cliente()->attach($a);


 //      dd($a);

      return view('/cliente.index', [
                                    
                                    
                                    ]);
    

     }
    
    public function show(Saldo $saldo)
    {
        return view('saldo.show',compact('saldo'));
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
    
      //   $saldo->update($request->all());

      $sal =  new Saldo;
        
      $sal -> valor_saldo       = $request->valor_saldo;
      $sal -> Observacoes       = $request->Observacoes;
      $sal -> empresa_cliente_id       = $request->empresa_cliente_id;

      $sal ->save();
    
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