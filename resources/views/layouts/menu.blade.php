<div class="mt-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="\home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="\clientes">Clientes</a>
                    <a class="nav-link" href="\lojas">Lojas</a>
                    <a class="nav-link disabled">Disabled</a>
                </div>
            </div>
            <a href="/sair" class="btn btn-lg"><i class="fas fa-sign-out-alt"></i></a>
        </div>
    </nav>
</div>

<div class="jumbotron jumbotron-fluid mt-3">
    <div class="container">
        <span class="d-flex justify-content-start">
        <h1 class="display-4">{{$pagina}}</h1>
        </span>
        <p class="lead">{{$mensagem}}</p>
    </div>
</div>