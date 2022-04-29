<form method="POST">
    @csrf
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadasto de cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="cliente_situacao" id="cliente_situacao" value="A" />
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>CNPJ</label>
                                <input type="text" data-mask="00.000.000/0000-00" required class="form-control cliente_cnpj" id="cliente_cnpj" name="cliente_cnpj" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Cliente</label>
                                <input type="text" class="form-control cliente_nome" required id="cliente_nome" name="cliente_nome" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>CEP</label>
                                <input type="text" class="form-control cliente_cep" id="cliente_cep" name="cliente_cep" />
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" class="form-control cliente_endereco" id="cliente_endereco" name="cliente_endereco" />
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label>bairro</label>
                                <input type="text" class="form-control cliente_bairro" id="cliente_bairro" name="cliente_bairro" />
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control cliente_cidade" id="cliente_cidade" name="cliente_cidade" />
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" class="form-control cliente_estado" id="cliente_estado" name="cliente_estado" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>