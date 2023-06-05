<?php
    
namespace App\Http\Controllers;

use App\Models\Empresa_Cliente;
use App\Models\Recibo;
use App\Models\Contrato;
use App\Models\MinhaEmpresa;
use App\Models\Produto;
use App\Models\Pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Exports\ContratoExport;
use Maatwebsite\Excel\Facades\Excel;


class PedidosController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:pedidos-list|pedidos-create|pedidos-edit|pedidos-delete|pedidos-invoice', ['only' => ['index','show']]);
         $this->middleware('permission:pedidos-create', ['only' => ['create','store']]);
         $this->middleware('permission:pedidos-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:pedidos-delete', ['only' => ['destroy']]);
         $this->middleware('permission:pedidos-invoice', ['only' => ['invoice']]);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $titulo = 'Pedidos';

        $pedidos = Pedidos::with('empresa_cliente')->get();  
        $produto = Produto::get();
        $produtoqtd  = Produto::count();

        $empresa_cliente = Empresa_Cliente::get();
        $search = request('search');

        if($search) {
            $empresa_cliente = Empresa_Cliente::where([['Nome_Empresa', 'like', '%'.$search. '%' ]])->get();

             } else {
                $empresa_cliente = Empresa_Cliente::all();
            }

        return view('pedidos.index', [
                                     'pedidos'        => $pedidos, 
                                     'empresa_cliente' => $empresa_cliente,
                                     'search'          => $search,
                                     'titulo'          => $titulo,
                                     'produto'        => $produto,
                                     'produtoqtd'     => $produtoqtd
                                    ]);
    }
    


    public function create() {
        
        $produtos = Produto::get();
        $ultimos_produtos = Produto::orderBy('id', 'DESC')->limit(8)->get();


        $titulo = 'Pedidos';
        $produto         = Produto::orderBy('id','asc')->get();
        $empresa_cliente = Empresa_Cliente::orderBy('id', 'asc')->get();

        $search = request('search');

        if($search) {
            $produtos = Produto::where ([['Nome_Produto', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produtos = Produto::all();
            }

        return view('pedidos.create', compact('empresa_cliente',
                                              'produto',
                                              'titulo',
                                              'produtos',
                                              'ultimos_produtos',
                                              'search'
                                            ));

                                            
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
            
    $contrato = Contrato::create($request->all());

        $products = $request->input('products', []);
            $quantities = $request->input('quantities', []);
            for ($product=0; $product < count($products); $product++) {
                if ($products[$product] != '') {
                    $contrato->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
                }
            }

        return redirect()->route('contrato.index')
                        ->with('success','Contrato criado com sucesso!');
    }
    
     public function show(Contrato $contrato)
     {
         return view('contrato.show',compact('contrato'));
     }

     
    public function invoice($id) {

        $contrato = Contrato::with('empresa_cliente')->findOrFail($id);
        $minha_empresa   = MinhaEmpresa::all();
        $recibox   = Recibo::all();

        return view('contrato.invoice', ['contrato'    => $contrato, 
                                       'minha_empresa' => $minha_empresa,
                                       'recibox'       => $recibox

       ]);

    }
    public function contrato($id)
    {

        $contrato = Contrato::with('empresa_cliente')->findOrFail($id);
        $cliente = Empresa_Cliente::get();
      //  $recibo          = Recibo::with('empresa_cliente')->get();  
        $minha_empresa   = MinhaEmpresa::all();
        $recibox   = Recibo::all();

        return view('contrato.contrato', ['contrato'        => $contrato, 
                                       'minha_empresa' => $minha_empresa,
                                       'recibox'       => $recibox,
                                       'cliente'       =>$cliente

       ]);

    }

    public function edit(Contrato $contrato)
    {
        $titulo = 'Contrato';

        $produto = Produto::get();
        $contrato->load('produto');

        $contratos = Contrato::with('empresa_cliente')->get();
        $empresa_cliente = Empresa_Cliente::get();

        return view('contrato.edit',compact('contrato','empresa_cliente', 'contratos', 'produto', 'titulo'));
    }
    
    public function update(Request $request, Contrato $contrato)
    {

        $contrato->update($request->all());

        $contrato->produto()->detach();

        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $contrato->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
            }

            return redirect()->route('contrato.index')
            ->with('edit','Contrato atualizado com sucesso!');
   
    }
}   

    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return redirect()->route('contrato.index')
                        ->with('delete','Contrato deletado com sucesso');
    }

    public function export () {
        
        return Excel::download(new ContratoExport, 'Contratos.xlsx');
    }
}