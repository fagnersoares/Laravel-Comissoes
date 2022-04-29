<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js" integrity="sha512-hAJgR+pK6+s492clbGlnrRnt2J1CJK6kZ82FZy08tm6XG2Xl/ex9oVZLE6Krz+W+Iv4Gsr8U2mGMdh0ckRH61Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script>
    $(document).ready(function(){
        $('.cliente_cnpj').mask('00.000.000/0000-00', {reverse: true});
    })


    $('#cliente_cnpj').change(function() {
        $cnpj = $('#cliente_cnpj').val().replace(/[^0-9]/g,'');
        $.ajax({
            url: 'https://receitaws.com.br/v1/cnpj/'+$cnpj,
            type: "GET",
            dataType: 'jsonp',
            success: function(data) {
                $('#cliente_nome').val(data.nome)
                $('#cliente_cep').val(data.cep)
                $('#cliente_endereco').val(data.logradouro)
                $('#cliente_bairro').val(data.bairro)
                $('#cliente_cidade').val(data.municipio)
                $('#cliente_estado').val(data.uf)
            },
            error: function() {
                console.log('alguma coisa deu errado no servidor..');
            }
        });
    })
</script>