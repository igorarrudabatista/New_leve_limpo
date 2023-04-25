<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\FICHA;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class APIController extends Controller
{

  public Function responsavel() {

    $titulo = 'Responsável';
    $search = request('search');

    $search = request('search');
    $response = Http::post('http://webservice.seduc.mt.gov.br/webservice/rest/retornalistaalunos', [
        'chaveautenticacao' => '10221210000',
        'cpf' =>  $search
    ]);


//     dd($response);

    $data = json_decode($response); // convert JSON into objects 

 //   dd($data);
return view('API.responsavel/index', ['search' => $search,
                             'data' =>$data,
                             'titulo' =>$titulo,
                            ]);

      //dd($search);

}

    public Function cep() {

       $titulo = 'CEP';
        $search = request('search');
        $response = Http::get('https://brasilapi.com.br/api/cep/v2/' . $search);

   //     dd($response);

        $data = json_decode($response); // convert JSON into objects 

     //   dd($data);
  return view('API.CEP/index', ['search' => $search, 
                                'data' =>$data,
                                'titulo' =>$titulo,
                        ]);

          //dd($search);

  }
    public Function cnpj() {


        $titulo = 'CNPJ';
        $search = request('search');
        $response = Http::get('https://brasilapi.com.br/api/cnpj/v1/' . $search);

   //     dd($response);

        $data = json_decode($response); // convert JSON into objects 
        //   dd($data);

        return view('API.CNPJ.index', ['search' => $search,
                                 'data' =>$data,
                                 'titulo' =>$titulo,
                                ]);

  }
    public Function cpf() {

      $titulo = 'CPF';

        $search = request('search');
        $response = Http::post('https://h-apigateway.conectagov.estaleiro.serpro.gov.br/api-cpf-light/v2/consulta/cpf' . $search);

      // dd($response);

        $data = json_decode($response); // convert JSON into objects 

      //  dd($data);
  return view('API.CPF.index', ['search' => $search,
                                 'data' =>$data,
                                ]);

          //dd($search);

  }

public Function filmes(){
  
        $search = request('search');
        $response = Http::get('https://api.themoviedb.org/3/movie/550?api_key=6c0f0d37611cda7851f7c2e5b044ec10' . $search);


        return view('API.CNPJ/index', ['search' => $search,
       ]);

}

}
