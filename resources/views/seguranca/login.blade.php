@extends('layouts/head')

@include('seguranca/css/style')

@section('conteudo')

@if(!empty($mensagem))
@include('layouts/mensagem',['mensagem' => $mensagem])
@endif


<div style="background-image: url('https://i.stack.imgur.com/fhEwl.png');">
    <!-- @include('layouts/erros',['errors' => $errors]) -->
    <form method="POST">
        @csrf
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-4 ">
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control borda-redonda @error('email') is-invalid @enderror" id="email" name="email">
                    @error('email')
                    <span class="alert alert-danger row d-felx justify-content-center alertaEstilizado">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>senha</label>
                    <input type="password" class="form-control borda-redonda" id="password" name="password">
                    @error('password')
                    <span class="alert alert-danger row d-felx justify-content-center alertaEstilizado">{{ $message }}</span>
                    @enderror
                </div>
                <span class="d-felx justify-content-between" style="display: flex;">
                    <button class="btn btn-primary btn-lg mt-2 botao-redendo">
                        Entrar
                    </button>
                    <a href="/registrar" class="btn btn-danger btn-lg mt-2 botao-redendo">Registrar-se</a>
                </span>
            </div>
        </div>
    </form>
</div>

@extends('layouts/footer')
@endsection