<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use App\Models\Empresa_Cliente;
use App\Models\Saldo;
use App\Models\Hist_Saldo;


use App\Exports\Empresa_ClienteExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;





class SaldoController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:saldo-list|saldo-create|saldo-edit|saldo-delete', ['only' => ['index','show']]);
         $this->middleware('permission:saldo-create', ['only' => ['create','store']]);
         $this->middleware('permission:saldo-edit',   ['only' => ['edit','update','incremento']]);
         $this->middleware('permission:saldo-delete', ['only' => ['destroy']]);
    }

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


      $saldo =  new Saldo;  
      $saldo -> valor_saldo              = '0';
      $saldo -> Observacoes              = '';
      $saldo -> empresa_cliente_id       = $request->id;
      $saldo ->save();


        // $sal =  new Saldo;
        // $sal -> valor_saldo              = $request->valor_saldo;
        // $sal -> Observacoes              = $request->Observacoes;
        // $sal -> empresa_cliente_id       = $request->id;
        // $sal ->save();

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

     public function incremento(Request $request, Saldo $saldo, Hist_Saldo $historico)
     {

 //https://pt.stackoverflow.com/questions/233677/update-com-soma-e-subtração-laravel

           $saldo -> Observacoes              = $request->Observacoes;
           $saldo -> empresa_cliente_id       = $request->empresa_cliente_id;
           $saldo  = Saldo::where
           ('empresa_cliente_id', $request->empresa_cliente_id)->increment('valor_saldo', $request->valor_saldo);
           //-------------//

           $historico =  new Hist_Saldo;
           $historico -> hist_valor_saldo              = $request->valor_saldo;
           $historico -> hist_Observacoes              = $request->hist_Observacoes;
           $historico -> empresa_cliente_id            = $request->empresa_cliente_id;
           $historico ->save();

           return back()->withInput();

  
     }
  
     public function decremento(Request $request, Saldo $saldo, Hist_Saldo $historico)
     {
         $saldo -> Observacoes              = $request->Observacoes;
         $saldo -> empresa_cliente_id       = $request->empresa_cliente_id;         
         $saldo  = Saldo::where
         ('empresa_cliente_id', $request->empresa_cliente_id)->decrement('valor_saldo', $request->valor_saldo);
         
           //-------------//

         $historico =  new Hist_Saldo;  
         $historico -> hist_valor_saldo              = $request->valor_saldo;
         $historico -> hist_Observacoes              = $request->hist_Observacoes;
         $historico -> empresa_cliente_id            = $request->empresa_cliente_id;
         $historico ->save();


           return back()->withInput();
     }
     public function add(Request $request, Saldo $saldo, Hist_Saldo $historico)
     {
      $saldo =  new Saldo;  
      $saldo -> valor_saldo              = '0';
      $saldo -> Observacoes              = '';
      $saldo -> empresa_cliente_id    =    $request->empresa_cliente_id; 
      $saldo ->save();

      return back()->withInput();


     }

     public function update(Saldo $saldo)
     {

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