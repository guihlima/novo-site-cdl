<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Associado</title>
    
    <link rel="icon" type="image/png" sizes="512x512" href="assets/img/logos/cdl-icon.png">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/resposives.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-primary clean-navbar">
        <div class="container"><img src="assets/img/logos/cdl_caxias_icon_white.png" style="width: 122px;"><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-light"
                            href="https://servicos.spc.org.br/spc/controleacesso/autenticacao/entry.action">ASSOCIADOS</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-light"
                            href="/certificacao_digital.html">CERTIFICAÇÃO DIGITAL</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-light"
                            href="/noticias.html">nOTICIAS</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Publicações</a>
                        <div class="dropdown-menu mt-lg-4 bg-primary">
                          <a class="dropdown-item text-light item-service" target="_blank" download href="assets/arquivos/Cartilha-Boas-Práticas-de-Ecommerce.pdf">Cartilha CNCP</a>
                        </div>
                      </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-light" href="/sobre.html"
                            target="_top">sOBRE</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-light" href="contate-nos.html"></a>
                    </li>
                </ul>
            </div><img src="assets/img/logos/logo_spc_brasil_icon_white.png" style="width: 110px;">
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block m-auto p-5">

            <header class="container-lg mt-2">
                <!-- <header> -->
                <h4 class="font-weight-bold text-center">ADMISSÃO DE SÓCIO USUÁRIO</h4>
                <!-- </header> -->
                <div class="mt-4">
                    <h5>Olá, empresário</h5>
                    <p>
                        Para que possamos entrar em contato e mostramos as vantagens de ser um associado CDL e ter
                        acesso aos
                        benefícios do SPC Brasil, preencha o formulário a seguir que entraremos em contato.
                    </p>
                    <p>
                        Em caso de dúvidas entrar em contato com o (99) 35214150 ou 35212622.
                    </p>
                </div>
            </header>

            <form class="mt-5" action="envio.php" method="post">

                <fieldset class="">
                    <legend class="text-center">Dados da Empresa</legend>
                    <div class="row justify-content-center">
                        <div class="border border-dark col-lg-8 p-3 rounded">
                            <div class="form-group m-auto">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="razao">
                                            Razão Social <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="razao" id="razao" size="30" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="fantasia">
                                                Nome Fantasia <span class="text-danger">*</span> :
                                            </label>
                                            <input type="text" name="fantasia" id="fantasia" size="30" class="form-control" required>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group m-auto">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="razao">
                                            CNPJ <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" class="form-control" name="cnpj" id="cnpj" onkeypress="$(this).mask('00.000.000/0000-00')" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="endereco">
                                            Endereço <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="endereco" id="endereco" size="30" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="fone">
                                            Fone/Fax <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="fone" id="fone" size="30" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="bairro">
                                            Bairro <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="bairro" id="bairro" size="30" class="form-control" required>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="cep">
                                            Cep <span class="text-danger">*</span> :
                                        </label>
                                        <!--<input type="text" name="cep" id="cep" size="30" class="form-control">-->
                                        <input type="text" class="form-control" name="cep" id="cep" onkeypress="$(this).mask('00000-000')" required>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="cidade">
                                            Cidade <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="cidade" id="cidade" size="30" class="form-control" required>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="estado">
                                            Estado <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="estado" id="estado" size="30" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="site">
                                            Site <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="site" id="site" size="30" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">
                                            E-mail <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="email" id="email" size="30" class="form-control" required>
                                    </div>
                                </div>
    
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="titular">
                                            Nome Titular, Sócio <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="titular" id="titular" size="30" class="form-control" required>
                                    </div>
                                </div>
    
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="contato">
                                            Telefone de contato/whatsapp <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" class="form-control" name="contato" id="contato" onkeypress="$(this).mask('(00) 00000-0000')" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="funcionario">
                                            Gerente/Funcionário(a) que substitui <span class="text-danger">*</span> :
                                        </label>
                                        <input type="text" name="funcionario" id="funcionario" size="30" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <!--<div class="col-lg-12 ">-->
                                <div class="g-recaptcha col-lg-3 mr-4" data-sitekey="6LeAyesUAAAAABZMeJ3o2UxvbmpTIm9mHTDYOKpA"></div>
                                <!--</div>-->
                            </div>
                            <div class="row mt-5">
                                <button type="submit" name="submit" class="btn btn-primary w-25 p-2 m-auto">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </div>
                    <p class="container-lg mt-5" style="font-size: .9rem;">
                        Essa entidade realiza o tratamento de dados de acordo com os parâmetros da LGPD ( lei n° 13.709/2018), para maiores informações acessar a <a href="politicas.html">política de privacidade</a> em nosso site.
                    </p>
                </fieldset>
            </form>


        </section>

        <!--<form action=""></form>-->
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>]
</body>

</html>
