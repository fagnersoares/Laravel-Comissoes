@extends('layouts/head')

@include('seguranca/css/style')

@section('conteudo')


@include('layouts/menu',['pagina' => 'Home' ,'mensagem' => ':-D']) 

@if(!empty($mensagem))
@include('layouts/mensagem',['mensagem' => $mensagem])
@endif

@extends('layouts/footer')
@endsection