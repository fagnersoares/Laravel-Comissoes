@extends('layouts/head')

@section('conteudo')


@include('layouts/menu',['pagina' => 'Lojas' ,'mensagem' => 'Aqui você encontra todas as lojas cadastras no sistema, podendo também cadastrar novas! '])


@if(!empty($mensagem))
@include('layouts/mensagem',['mensagem' => $mensagem])
@endif

<div class="mt-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cadastrar Lojas</button>
    <a class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-question-circle"></i></a>

</div>


@include('layouts/help',['infos' => [
'Tela responsavel pelo cadastro e manuntenção das lojas que serão utilazadas durante a experiencia no sistema',
]
]
)

@endsection

@section('scripts')
@include('clientes/js/js')
@endsection