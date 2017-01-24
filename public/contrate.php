<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Porto Seguro Conecta - Arizona Seguros</title>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>   

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- WebCA Custom -->
    <link href="css/webca.css" rel="stylesheet">

    <style type="text/css">
        .col-lg-6 {
            width: 50%;
            float: left;
        }
        .col-lg-3 {
            width: 25%;
            float: left;
        }
        .col-lg-9 {
            width: 75%;
            float: left;
        }
        body {
            background-color: #0f9bf2;
            color: #FFF;
        }
        input[type=text] {
            background-color: #0f9bf2;
            border: solid 2px #FFF;
            padding: 10px;
            width: 100%;
        }
        input[type=submit] {
            color: #0f9bf2;
            background: #ffffff;
            padding: 14px 40px;
            text-transform: uppercase;
            border: 0px;
            border-radius: 25px;
            font-family: OxygenBold,sans-serif;
            font-size: 1.1em;
            font-weight: bold;
            text-shadow: none;
        }
        select {
            background-color: #0f9bf2;
            border: solid 2px #FFF;
            padding: 10px;
            height: 40px;
            width: 100%;
        }
        .row {
            margin-bottom: 10px;
        }
        .text1 {
            padding-top: 10px;
            display: inline-block;
        }
        .invisivel {
            display: none;
        }
        textarea { color: #333; }
    </style>

    <script type="text/javascript">
        $(document).ready(function(){
            $( "#data_de_nascimento" ).mask( "99/99/9999" );
            $( "#cpf" ).mask("999.999.999-99");
            $( "#cpf" ).change(function() { 
                validarCPF( "cpf" ); 
            });
        });



         

        $(document).ready(function(){

            $('#ckportabilidade').change(function(){
                if($("#ckportabilidade").is(':checked')) {
                    $("#dvportabilidade").fadeIn(1000);
                } else {
                    $("#dvportabilidade").fadeOut(100);
                }
            });

            $('#ckendchip').change(function(){
                if($("#ckendchip").is(':checked')) {
                    $("#dvendchip").fadeIn(1000);
                } else {
                    $("#dvendchip").fadeOut(100);
                }
            });

            $('#slplano').on('change', function() {
                if ( $('#slplano').val() == 'Itaú - Débito em conta corrente' || $('#slplano').val() == 'Bradesco - Débito em conta corrente' || $('#slplano').val() == 'Santander - Débito em conta corrente' ) {
                    $("#dvplano").fadeIn(1000);
                } else {
                    $("#dvplano").fadeOut(100);
                }
            })

        });

        $(document).ready(function(){
            $("#telefone_residencial").mask("(99) 9999-9999?9");
            $("#telefone_celular").mask("(99) 9999-9999?9");
            $("#numero_da_portabilidade").mask("(99) 9999-9999?9");
        });

    </script>
</head>

<body class="">
    <form method="post" action="envia.php">

        <!-- Planos -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Informações do plano</h2>
                        <hr class="light">

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Selecione seu DDD</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <select name="ddd">
                                    <option>-- Selecione --</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>19</option>
                                    <option>21</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Qual plano você deseja?</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <select name="plano">
                                    <option>-- Selecione --</option>
                                    <option>Conecta+ com ligação local e DDD ilimitado - 5 GB de Internet - R$ 129,90/mês</option>
                                    <option>Conecta+ com ligação local e DDD ilimitado - 10 GB de Internet - R$ 199,90/mês</option>
                                    <option>Conecta+ com ligação local ilimitada - 1 GB de Internet - R$ 99,90/mês</option>
                                    <option>Conecta+ com ligação local ilimitada - 2 GB de Internet - R$ 109,90/mês</option>
                                    <option>Conecta100 - 1 GB de Internet - R$ 59,90/mês</option>
                                    <option>Conecta100 - 2 GB de Internet - R$ 69,80/mês</option>
                                    <option>Conecta100 - 4 GB de Internet - R$ 84,80/mês</option>
                                    <option>Conecta100 - 11 GB de Internet - R$ 159,80/mês</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                &nbsp;
                            </div>
                            <div class="col-lg-9 text-left" style="margin-bottom: 10px;">
                                <input type="checkbox" id="ckportabilidade" name="ckportabilidade"> <span class="text1">Quero fazer uma portabilidade?</span>

                                <div style="margin-top: 10px;" class="invisivel" id="dvportabilidade" name="dvportabilidade">
                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">De qual número?</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="numero_da_portabilidade" id="numero_da_portabilidade">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Operadora atual?</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <select name="operadora_atual">
                                                <option>-- Selecione --</option>
                                                <option>Claro</option>
                                                <option>Vivo</option>
                                                <option>Oi</option>
                                                <option>Nextel</option>
                                                <option>Tim</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Tipo de Fatura</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <select name="tipo_de_fatura">
                                    <option>-- Selecione --</option>
                                    <option>Eletrônica - detalhada - por e-mail</option>
                                    <option>Impressa - resumida - por correio</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Data de vencimento</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <select name="data_de_vencimento">
                                    <option>-- Selecione --</option>
                                    <option>Dia 1</option>
                                    <option>Dia 6</option>
                                    <option>Dia 10</option>
                                    <option>Dia 16</option>
                                    <option>Dia 22</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Forma de pagamento</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <select id="slplano" name="slplano">
                                    <option>-- Selecione --</option>
                                    <option>Itaú - Débito em conta corrente</option>
                                    <option>Bradesco - Débito em conta corrente</option>
                                    <option>Santander - Débito em conta corrente</option>
                                    <option>Boleto Bancário</option>
                                    <option>Cartão de Crédito Porto Seguro</option>
                                </select>

                                <div class="invisivel" id="dvplano" name="dvplano">
                                    <div style="margin: 15px;">Digite as informações para débito em conta corrente:</div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Agência</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="agencia">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Conta Corrente</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="conta_corrente">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Dígito</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="digito">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 style="margin-top: 60px;" class="section-heading">Informações pessoais</h2>
                        <hr class="light">


                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Nome completo</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="nome_completo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Sexo</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <select name="sexo">
                                    <option>-- Selecione --</option>
                                    <option>Feminino</option>
                                    <option>Masculino</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Data de Nascimento</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="data_de_nascimento" id="data_de_nascimento">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">CPF</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="cpf" id="cpf">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">RG</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="rg">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Nome da mãe</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="nome_da_mae">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">E-mail</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Telefones residencial/comercial</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="telefone_residencial" id="telefone_residencial">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Telefones celular</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="telefone_celular" id="telefone_celular">
                            </div>
                        </div>

                        <h2 style="margin-top: 60px;" class="section-heading">Endereço</h2>
                        <hr class="light">

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Endereço</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="endereco">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Número</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="endereco_numero">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Complemento</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="endereco_complemento">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Cidade</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="endereco_cidade">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Estado</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="endereco_estado">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">CEP</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="text" name="endereco_cep">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 text-right">
                                &nbsp;
                            </div>
                            <div class="col-lg-9 text-left">
                                <input type="checkbox" id="ckendchip" name="ckendchip"> <span class="text1">Utilizar outro endereço para entrega do chip?</span>


                                <div class="invisivel" id="dvendchip" name="dvendchip">
                                    <div style="margin: 15px;">Digite as informações de endereço referente a entrega do CHIP:</div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Endereço</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="endereco_entrega">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Número</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="endereco_entrega_numero">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Complemento</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="endereco_entrega_complemento">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Cidade</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="endereco_entrega_cidade">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">Estado</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="endereco_entrega_estado">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 text-right">
                                            <span class="text1">CEP</span>
                                        </div>
                                        <div class="col-lg-9 text-left">
                                            <input type="text" name="endereco_entrega_cep">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <h2 style="margin-top: 60px;" class="section-heading">Observações adicionais</h2>
                        <hr class="light">


                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <span class="text1">Algo a acrescentar?</span>
                            </div>
                            <div class="col-lg-9 text-left">
                                <textarea rows="5" style="width: 100%;" name="observacoes"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <input type="submit" name="enviar" value="Enviar">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </form>

    <script type="text/javascript">
        function validarEmail(email){
            campo = email;
            email = $( '#'+ email ).val();
            var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{0,10}(?:\.[a-z]{2,10})?)$/i;
            if(filter.test(email))
              valido = true;
            else{
                alert('E-Mail inválido!');
                $('#'+ campo ).val('');
                $('#'+ campo ).focus();
                valido = false;
            }
            return valido;
        }


        function validarCPF(cpf) {
            campo = cpf;
            cpf = $( '#'+ cpf ).val();
            cpf = cpf.replace(/[^\d]+/g,'');
            if(cpf == '') return false;
            // Elimina CPFs invalidos conhecidos
            if (cpf.length != 11 ||
                cpf == "00000000000" ||
                cpf == "11111111111" ||
                cpf == "22222222222" ||
                cpf == "33333333333" ||
                cpf == "44444444444" ||
                cpf == "55555555555" ||
                cpf == "66666666666" ||
                cpf == "77777777777" ||
                cpf == "88888888888" ||
                cpf == "99999999999")
                    CPFInvalido(campo);
            // Valida 1o digito
            add = 0;
            for (i=0; i < 9; i ++)
                add += parseInt(cpf.charAt(i)) * (10 - i);
                rev = 11 - (add % 11);
                if (rev == 10 || rev == 11)
                    rev = 0;
                if (rev != parseInt(cpf.charAt(9)))
                    CPFInvalido(campo);
            // Valida 2o digito
            add = 0;
            for (i = 0; i < 10; i ++)
                add += parseInt(cpf.charAt(i)) * (11 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(10)))
                CPFInvalido(campo);

            return true
        }

        function CPFInvalido(campo) {
            alert('CPF inválido!');
            $('#'+ campo ).val('');
            $('#'+ campo ).focus();
        }
    </script>

<!-- Google Code for Contrate129 Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script>
window.addEventListener('load',function(){
jQuery('.page-scroll.btn.btn-default.btn-xl.sr-button.contato').click(function(){
goog_report_conversion()
})
});
</script>


<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 945871214;
    w.google_conversion_label = "OXStCKuByW0Q7rKDwwM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>

</body>

</html>