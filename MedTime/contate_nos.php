<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedTime</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="shortcut icon" type="image/png" href="img/favico.png">

    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="CSS_e_js/style.css">


    <!-- api google fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Amatic+SC:wght@400;700&family=Bungee&family=Bungee+Spice&family=Press+
    Start+2P&family=Righteous&family=Rubik+Doodle+Shadow&family=Uchen&display=swap" rel="stylesheet">
    <style>
        #formCadastro {
            display: none;
        }
    </style>
</head>

<body>

<div class="container-fluid align-items-center text-center justify-content-center">
        <div class="row pt-2 corsi">
            <div class="col-1 col-3">

                <!-- Logotipo -->
                <div class="colv-md-3 col-12"><img src="img/logo.png" width="100px" alt="Logo"
                        class="img-fluid mx-auto d-block">
                    <p class="container-fluid text-center mt-1 righteous-regular">MedTime </br> Cotate-nos </p>
                </div>



            </div>

            <div class="col-5 pt-5">
                <div class="input-group mb-3 d-flex">

                    <!-- Barra de pesquisa -->
                    <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Buscar..."
                        aria-describedby="button-addon2">
                    <!-- Botão de busca -->
                    <button type="button" class="btn btn-purple">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Linha do menu NAV-->
    <div class="row sticky-top">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-custom righteous-regular">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item px-3">
                                <a class="nav-link" aria-current="page" href="paginainicial.php">Página
                                    Inicial</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="consultas.php">Consultas</a>
                            </li>

                            <li class="nav-item px-3">
                                <a class="nav-link" href="agendamentos.php">Agendamentos</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link active" href="contate_nos.php">Contate-nós</a>
                            </li>
                        </ul>
                    </div>
                        <!-- USUARIO E LOGIN -->
                        <?php if(!isset($_SESSION['usuario'])){ ?>
                            <div class="d-flex justify-content-center align-items-center">
                            <button class="btn me-md-2" type="button">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="botaoLogin" name="botaoLogin">
                                    <div class="position-absolute top-0 end-0"><i class="bi bi-person-circle text-light fs-1 me-4"></i>
                                    </div>
                            </div>
                            <?php } ?>
            
                            <?php if(isset($_SESSION['usuario'])){?>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="position-absolute top-0 end-0 dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-circle text-dark fs-5"> <?php echo'Olá! ' . $_SESSION['usuario']['nome'] ?></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-center" type="button" href="perfil.php">Meu Perfil</a></li>
                                            <li><a class="dropdown-item text-center" type="button" href="perfil.php">Resultados</a></li>
                                            <li><a class="dropdown-item text-center" type="button" href="agendamentos.htm">Agendamentos</a></li>
                                            <li class="mt-3 border border-danger py-1"><a class="bi bi-box-arrow-left fs-6 ms-5 text-danger" href="actions/login/logout.php"> Sair</a></li>
                                        </ul>
                                    </div>
                                </div>      
                           <?php } ?>
                        </div>
                    </div>
                </div>
                                    
           </div>
        </div>
    </div>

    </nav>

    </div>
    </div>


        <!-- Linha de contato -->
        <div class="row">
            <div class="col-md-4 mt-3 mb-3 px-5">
                <img src="img/logo.png" class="" alt="Medtime" width="350px">
            </div>
            <div class="col-md-6 mt-3 px-5">
                <p class="h2">Área para contato:</p>
                <p class="text-md-start"> Olá, nesta area voce pode se comunicar com o suporte deste site de
                    agendamento. abaixo deixaremos um formulario que deve ser preenchido
                    antes de contatar algum de nossos atendentes. <br><br>
                    Por favor lembre-se de manter o respeito quando contatar o suporte deste site, tentaremos retornar
                    com a resposta o mais rapido possivel para sabermos qual seria o problema
                    e o arruma-lo o mais rapido possivel.<br><br>
                    Nos da equipe de suporte e programadores agradecem des de ja pelo contato e insentivamos o contato
                    caso ache alguma falha ou bug dentro de nosso site. </p>
            </div>
        </div>
        <div class="row px-3 ">
            <div class="col">
                <table border="4">
                    <tr>
                        <th colspan="2">
                            <h2>Area de contato</h2>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <form>
                                <p>Por favor, digite seu nome no campo abaixo</p>
                                <p>
                                    <label for="Nome">Nome: </label>
                                    <input type="text" id="Nome" placeholder="Deixe aqui seu nome:" required>
                                </p>
                        <td>
                            <p>Escolha abaixo o genero que o corresponde</p>
                            <p>
                                <label>Genero: </label>
                                <br>
                                <input type="radio" id="Femininio" name="Genero"><label
                                    for="Femininio">Femininio</label>
                                <br>
                                <input type="radio" id="Masculino" name="Genero"><label
                                    for="Masculino">Masculino</label>
                                <br>
                                <input type="radio" id="naoresponder" name="Genero"><label
                                    for="naoresponder">outro</label>
                            </p>
                        </td>
                        </td>
                    </tr>
                    <br>

                    <br>
                    <tr>
                        <td>
                            <p>Digite sua data de nascimento</p>
                            <p>
                                <label for="datanascimento"></label>
                                <input type="date" id="datanascimento" name="datanascimento" required>
                            </p>
                        <td>
                            <p>Deixe seu email para retorno</p>
                            <p>
                                <label for="Email">Email: </label>
                                <input type="text" id="Email" placeholder="Deixe aqui seu email:" required>
                            </p>

                        </td>
                        <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Por favor, deixe sua reclamação na caixa abaixo</p>
                            <p>
                                <label for="justificativa">deixe aqui um texto se identificando e dizendo o motivo do
                                    contato com no maximo 3000 caracteres</label><br>
                                <textarea id="justificativa" maxlength="3000"></textarea>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p>
                                <Input type="checkbox" id="Propaganda" name="Propaganda" checked>
                                <label>confirmo que todas as afirmações são veridicas. (em caso de calunia, difamação ou
                                    qualquer outro ato de desrespeito, sera acionado medidas judiciais ).</label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p>
                                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ<input type="submit">
                            </p>
                        </td>
                    </tr>
                    </form>
                </table>
            </div>
        </div>



        <!-- Linha do Rodapé -->
        <div class="row bg-secondary-subtle ">
            <div class="col-md-4 col-12 mt-5">
                <p class="h2">Quem Somos</p><br>
                <p>somos essas pessoas mesmo que voce esta pensando</p>
            </div>

            <div class="col-md-4 col-12 mt-5">
                <p class="h2">Categorias</p><br>
                <p>Perfumes Masculinos</p>
                <p>Perfumes Femininos</p>
                <p>Hidratantes</p>
                <p>Desodorantes</p>
                <p>Para sua casa</p>
                <p>Promoções</p>
            </div>

            <div class="col-md-4 col-12 mt-5">
                <p class="h2">Institucional</p><br>
                <p>Quem somos</p>
                <p>Sobre perfumes</p>
                <p>Dicas do Perfumista</p>
                <p>Política de Privacidade</p>
                <p>Entregas</p>
                <p>Pagamentos</p>
                <p>Trocas e Devoluções</p>
            </div>

        </div>

        <!-- Linha dos Recursos -->
        <div class="row bg-secondary-subtle">
            <div class="col">
                <i class="bi bi-shield-check h1"></i>
            </div>
        </div>

        <!-- Linha do Rodapé 2 -->
        <div class="row bg-black">
            <div class="col py-3">
                <span class="text-light ">Copyright MedTime Agendamentos Online-2032. Todos os direitos
                    reservados</span>
            </div>
        </div>


        
                    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="CSS_e_JS/script.js"></script>


</body>