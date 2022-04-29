<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Clientes</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">


        <ul class="list-group list-group-flush list-group-numbered">
            @foreach($infos as $info)
            <li class="list-group-item mb-2">
                {{$info}}
            </li>
            @endforeach
        </ul>
    </div>
</div>