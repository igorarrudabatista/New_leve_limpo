@extends('base.base')

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
            <div class="text-center mb-5">
                <div class="image">
                    <img src="https://www.sogoodlanguages.com/wp-content/uploads/2016/09/22142159_l.jpg" alt="...">
                </div>
                <br>
                <h3>{{$cliente->Nome_fantasia}}</h3>
                </div>
        </div>

       
                <!--//row-->
                <div class="card-body">
               {!! Form::model($cliente, ['method' => 'PATCH','route' => ['cliente.update', $cliente->id]]) !!}
                      

                          <div class="row">
                            <div class="col-md-3 pr-1">
                              <div class="form-group">
                                <label>CNPJ</label>
                                {!! Form::text('Cnpj', null, array('class' => 'form-control')) !!}
                              </div>
                            </div>
                            <div class="col-md-4 px-1">
                              <div class="form-group">
                                <label>Nome Fantasia</label>
                                {!! Form::text('Nome_fantasia', null, array('class' => 'form-control')) !!}
                              </div>
                            </div>
                            <div class="col-md-5 pl-1">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Responsável</label>
                                {!! Form::text('Nome_responsavel', null, array('class' => 'form-control')) !!}
                              </div>
              
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3 pr-1">
                              <div class="form-group">
                                <label>Telefone</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Telefone', null, array('class' => 'form-control')) !!}
                                  </div>                            </div>
                            </div>
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label>E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Email', null, array('class' => 'form-control')) !!}
                                  </div>                            </div>
                            </div>
                            <div class="col-md-4 pr-1">
                              <div class="form-group">
                                <label>Endereço</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-signpost-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M7.293.707A1 1 0 0 0 7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414A1 1 0 0 0 7.293.707z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Endereco', null, array('class' => 'form-control')) !!}
                                  </div>                            </div>
                            </div>
                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>CEP</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-sort-numeric-up" viewBox="0 0 16 16">
                                            <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z" />
                                            <path fill-rule="evenodd"
                                                d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z" />
                                            <path
                                                d="M4.5 13.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Cep', null, array('class' => 'form-control')) !!}
                                  </div>                            </div>
                            </div>
                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>N°</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-sort-numeric-up" viewBox="0 0 16 16">
                                            <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z" />
                                            <path fill-rule="evenodd"
                                                d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z" />
                                            <path
                                                d="M4.5 13.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Numero', null, array('class' => 'form-control')) !!}
                                  </div>                            </div>
                            </div>
                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>Bairro</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-signpost-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M7.293.707A1 1 0 0 0 7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414A1 1 0 0 0 7.293.707z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Bairro', null, array('class' => 'form-control')) !!}
                                  </div>                            </div>
                            </div>
                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>Quantidade em Estoque</label>
                                
                                {!! Form::select('Estado', ['AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM' , 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF',
                                'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA',
                                'PB' => 'PB', 'PR' => 'PR', 'PE' =>'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' =>'RS',
                                'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO', 'Estrangeiro' => 'Estrangeiro'    
                                 ], null, ['class' => 'choices form-select']) !!}                   </div>
                            </div>
                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>Cidade</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Cidade', null, array('class' => 'form-control')) !!}
                                  </div>
                            </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">

                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>Site</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                            <path
                                                d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                            <path
                                                d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Site', null, array('class' => 'form-control')) !!}
                                  </div>
                            </div>
                            </div>
                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>Instagram</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Instagram', null, array('class' => 'form-control')) !!}
                                  </div>
                            </div>
                            </div>
                            <div class="col-md-2 pr-1">
                              <div class="form-group">
                                <label>Facebook</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </span>
                                    {!! Form::text('Facebook', null, array('class' => 'form-control')) !!}               
                                  </div>
                            </div>
                            </div>
                          </div>
<hr>
                          <button type="submit"
                          class="btn btn-primary me-1 mb-1 text-light">Salvar
                      </button>
                    </div>
                  </div>
                </div>
                {{-- {!! Form::close() !!}                 --}}
                {{-- {!! Form::model($saldo, ['method' => 'PATCH','route' => ['saldo.update', $saldo->id]]) !!} --}}
                
                {!! Form::close() !!}

                
                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="image">
                      <img src="https://www.cursospm3.com.br/wp-content/uploads/2022/04/product-designer-o-que-faz-a-pessoa-de-design-de-produto.png" alt="...">
                    </div>
                    <div class="card-body">
                      <div class="author">
                        <a>
                          <img class="avatar border-gray" src="{{ asset('/images/cart.png') }}" alt="...">
                        </a>
                      </div>
       
                      <div class="text-right ">

                             <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#extratomodal">
                                <i class="now-ui-icons files_paper"> Extrato
                            </i>  
                            </button>
                            
                      

                          <!-- Modal Extrato -->

  <div class="modal fade" id="extratomodal" tabindex="-1" role="dialog" aria-labelledby="extratomodalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="card card-usser">
              <div class="card-body">
                <div class="text-center mb-5">
                  <br>
                  <h4> <strong> HISTÓRICO DA CONTA </strong></h4>
                  <br><br> 

                    <h6 class="text-danger">
            <table class="table app-table-hover mb-20 text-left">
              <thead>
                <tr>
                  <th class="cell ">Data</th>
                  <th class="cell text-right">Saldo
                    <i class="now-ui-icons business_money-coins">
                      </i>
                    </th>

                </tr>
              </thead>
            @foreach ($saldo_historico as $clientes_saldo) 

            <tbody>
              <tr>
                
                <td><p class="text-primary"> {{($clientes_saldo->updated_at)->format('d/m/Y')}} </td>

                  @if ($clientes_saldo->hist_valor_saldo >= '0')
                    <td class="cell text-success text-right"> <big> {{"R$ " . number_format($clientes_saldo->hist_valor_saldo, 2, ",", ".")}} </big>
                  @elseif ($clientes_saldo->hist_valor_saldo <= '0')   
negativo                    @endif

                  <p class="text-primary"> <small> Obs. {{$clientes_saldo->hist_Observacoes}} </small>  </td>
                    @endforeach
              </tr>
            </tbody>
          </table>
              
  </div>



</div>
</div>    
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>

          </div>
        </div>
      </div>
    </div>

    {{-- Fim Modal Extrato --}}
                        
                        

    @if ($saldo_existe == true)



    <div class="text-center mb-5">
      <h5> <strong> Saldo Atual </strong></h5>
          @foreach ($saldo as $clientes_saldo)


          @if ($clientes_saldo->valor_saldo >= '0')
          <h1 class="text-success">
            <strong>
              {{"R$ " . number_format($clientes_saldo->valor_saldo, 2, ",", ".")  }}
            </strong>
          </h1>

            @elseif ($clientes_saldo->valor_saldo <= '0')

            <h1 class="text-danger">
              <strong>
                {{"R$ " . number_format($clientes_saldo->valor_saldo, 2, ",", ".")  }}
              </strong>
            </h1>

            @endif


            @endforeach                                      

<br>

<svg style="color: rgb(14, 208, 11);" xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" fill="#0ed00b"></path> </svg>

<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#adicionar_valor">
Adicionar
</button> 

<!-- Modal 1 -->
<div class="modal fade" id="adicionar_valor" tabindex="-1" role="dialog" aria-labelledby="adicionar_valorTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
{!! Form::model($saldo, ['method' => 'PATCH','route' => ['saldo.incremento', $cliente->id]]) !!} 
<div class="modal-header">
<div class="image">
<img src="" alt="...">
</div>

</div>
<div class="modal-body">

<div class="row">
<div class="col-md-5 pr-1">
<div class="form-group">
<svg style="color: rgb(14, 208, 11);" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" fill="#0ed00b"></path> </svg>

<label class="text-success"> <strong> Adicionar Valor </strong></label>
<div class="input-group">
<span class="input-group-text text-success" id="basic-addon1">
  <i class="now-ui-icons business_money-coins"> R$ </i> 
</span>

<input type="text" class="form-control text-success" id="valor_saldo" name="valor_saldo" data-mask="000000" > 


 <input type="hidden" class="form-control" id="empresa_cliente_id" name="empresa_cliente_id" value="{{$cliente->id}}" > 
</div>
</div>
</div>
<div class="col-md-7 pr-1">
<div class="form-group">
<label>Descrição</label>
<div class="input-group">
<span class="input-group-text" id="basic-addon1">
  <i class="now-ui-icons text_align-left"></i>
</span> 
{!! Form::text('Observacoes', null, array('class' => 'form-control')) !!}
</div>
</div>
</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
<button type="submit" class="btn btn-success"> <i class="now-ui-icons ui-1_simple-add"> 
</i>  Adicionar valor</button>
{!! Form::close() !!}

</div>
</div>
</div>
</div>

<!-- Modal 2 -->
<button type="button" class="btn btn-secondary btn-sm btn-danger" data-toggle="modal" data-target="#subtrair_valor">
Subtrair
</button>
<svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" fill="red"></path> </svg>
<div class="modal fade" id="subtrair_valor" tabindex="-1" role="dialog" aria-labelledby="subtrair_valorTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
{!! Form::model($saldo, ['method' => 'PATCH','route' => ['saldo.decremento', $cliente->id]]) !!} 
<div class="modal-header">
<div class="image">
<img src="" alt="...">
</div>

</div>
<div class="modal-body">

<div class="row">
<div class="col-md-5 pr-1">
<div class="form-group">
<label class="text-danger"> <strong> Subtrair valor </strong></label>
<div class="input-group">
<span class="input-group-text text-danger" id="basic-addon1">
  <i class="now-ui-icons business_money-coins"> R$ </i> 
</span>

<input type="text" class="form-control text-danger" id="valor_saldo" name="valor_saldo" data-mask="000000"  > 


 <input type="hidden" class="form-control" id="empresa_cliente_id" name="empresa_cliente_id" value="{{$cliente->id}}" > 
</div>
</div>
</div>
<div class="col-md-7 pr-1">
<div class="form-group">
<label>Descrição</label>
<div class="input-group">
<span class="input-group-text" id="basic-addon1">
  <i class="now-ui-icons text_align-left"></i>
</span> 
{!! Form::text('Observacoes', null, array('class' => 'form-control')) !!}
</div>
</div>
</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
<button type="submit" class="btn btn-danger"> <i class="now-ui-icons ui-1_simple-delete">  Subtrair valor </i> </button>

{!! Form::close() !!}

</div>
</div>
</div>
</div>



</form>     
  
</div>

        

    @elseif  ($saldo_existe == false)
    {!! Form::open(['route' => 'saldo.add', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}



    <input type="hidden" class="form-control" id="empresa_cliente_id" name="empresa_cliente_id" value="{{$cliente->id}}" > 

    <div class="text-center mb-5">
      <h5> <strong> Saldo Atual </strong></h5>

          <h1 class="text-success">
            <strong>
              <button type="submit" class="btn btn-lg btn-success"> <i class="now-ui-icons business_money-coins">  Criar conta </i> </button>
            </strong>
          </h1>

      
<br>           
</div>

    {!! Form::close() !!}
    


    @endif        


  </div>
</div> </div>

<div class="card card-usser">
  <div class="card-body">
    <div class="text-center mb-5">
<br>
      <h6> <strong> Pedidos do Cliente </strong></h6>
        <h6 class="text-danger">

          <img src="https://yt3.googleusercontent.com/ytc/AL5GRJXK0p5pOrvNoBR4merZH7Y3rM1inYfOIY5tjvA3=s900-c-k-c0x00ffffff-no-rj" width="120px">

          <table class="table app-table-hover mb-20 text-left">
            <thead>
              <tr>
                <th class="cell ">Data</th>
                <th class="cell text-right">Saldo
                  <i class="now-ui-icons business_money-coins">
                    </i>
                  </th>

              </tr>
            </thead>
          @foreach ($saldo_historico as $clientes_saldo) 

          <tbody>
            <tr>
              
              <td><p class="text-primary"> {{($clientes_saldo->updated_at)->format('d/m/Y')}} </td>
<?php $valor1 = '0' ?>
<?php $valor2 = '0' ?>
                @if ($clientes_saldo > $valor1)
              <td class="cell text-success text-right"> <big> {{"R$ " . number_format($clientes_saldo->hist_valor_saldo, 2, ",", ".")}} </big>
                @elseif ($clientes_saldo < $valor2)
                <td class="cell text-danger text-right"> <big> {{"R$ " . number_format($clientes_saldo->hist_valor_saldo, 2, ",", ".")}} </big>
                  @endif       

                <p class="text-primary"> <small> Obs. {{$clientes_saldo->hist_Observacoes}} </small>  </td>
                  @endforeach
            </tr>
          </tbody>
        </table>

    
  </div>



</div>
</div>      



</div>


<script>
$(document).ready(function() {
  $('#Cnpj').mask('00000000000000');
});

$(document).ready(function() {
  $('#telefone').mask('(00) 0000-0000#');
});
</script>

@endsection

    

