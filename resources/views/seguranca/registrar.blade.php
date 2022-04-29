@extends('layouts/head')

@include('seguranca/css/style')

@section('conteudo')

<div style="background-image: url('https://i.stack.imgur.com/fhEwl.png');">
    <form method="POST">
        @csrf
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-4 ">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" required class="form-control borda-redonda">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control borda-redonda" required id="email" name="email">
                </div>
                <div class="form-group">
                    <label>senha</label>
                    <input type="password" class="form-control borda-redonda" required id="password" name="password">
                </div>
                <span class="d-felx justify-content-between" style="display: flex;">
                    <button class="btn btn-primary btn-sm mt-2">
                        Salvar
                    </button>
                    <a href="/entrar" class="btn btn-danger btn-sm mt-2">Voltar</a>
                </span>
            </div>
        </div>
    </form>
</div>
@extends('layouts/footer')
@endsection