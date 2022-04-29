@extends('layouts/head')

@include('clientes/css/style')

@section('conteudo')


@include('layouts/menu',['pagina' => 'Cliente' ,'mensagem' => 'Aqui você encontra todos os clientes cadastras no sistema, podendo também cadastrar novos! '])


@if(!empty($mensagem))
@include('layouts/mensagem',['mensagem' => $mensagem])
@endif
<div class="mt-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cadastrar Cliente</button>
    <a class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-question-circle"></i></a>

</div>
<div class="mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Municipio</th>
                <th scope="col">Estado</th>
                <th scope="col">CEP</th>
                <th scope="col">Situação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($clientes as $cliente)

                <th scope="row">{{$cliente->id}}</th>
                <td>{{$cliente->cliente_nome}}</td>
                <td>{{$cliente->cliente_cnpj}}</td>
                <td>{{$cliente->cliente_endereco}}</td>
                <td>{{$cliente->cliente_bairro}}</td>
                <td>{{$cliente->cliente_cidade}}</td>
                <td>{{$cliente->cliente_estado}}</td>
                <td>{{$cliente->cliente_cep}}</td>
                <td>{{$cliente->cliente_situacao}}</td>
                <td>
                    <button class="btn btn-sm btn-primary">editar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@include('clientes/create')

@include('layouts/help',['infos' => [
'Aqui será realizado o cadastro do clientes que serão utilizados para confecção das suas comissões no futuro.',
'Ao digitar o CNPJ do cliente algumas informações (publicas da receita) serão preenchidas automaticamente. Caso deseje alterar alguma informação basta seleciona o que deseja alterar e informa o que deseja'
]
]
)

@endsection

@section('scripts')
@include('clientes/js/js')
@endsection