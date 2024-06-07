<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedTime</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    <div class="container-fluid"> <?php
        include_once("includes/elementos.include.php");
        ?>

        <!-- Linha da imagem e da linha para contatos -->
        <div class="row">
            <div class="col-md-6 mt-3 p-4 ">
                <p class="h2">Área de feedback:</p>
                <p class="text-md-start"> Olá!<br>

                    Agradecemos por dedicar seu tempo para nos fornecer seu feedback. Sua opinião é muito importante para nós e nos ajuda a melhorar continuamente nossos serviços. Seja um elogio, uma sugestão ou uma crítica, queremos ouvir de você.<br><br>

                    Por favor, compartilhe suas impressões, experiências e qualquer ideia que possa ter para que possamos tornar sua próxima visita ainda melhor. Estamos comprometidos em oferecer a melhor experiência possível e sua contribuição é essencial para isso. </p>
            </div>
            <!-- Linha do envio de feedback -->
            <div class="col-md-6 rounded-3  mb-2 p-4">
                <p class="h2 text-center">Deixe seu feedback sobre o site</p>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome completo</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Por favor deixe seu feedback a abaixo para que os desenvolvedores possam melhorar o site</label>
                    <textarea class="form-control" id="deixe seu feedback aqui" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-primary">Enviar feedback</button>
            </div>
        </div>


        <!-- Linha do Rodapé -->
        <div class="row rodape justify-content-center pb-3">
            <div class="col-md-4 mt-4 ms-3">
                <p class="h2">Contatos</p><br>
                <p><i class="bi bi-instagram fs-5"></i>ﾠ@medtime</p>
                <p><i class="bi bi-envelope fs-5"></i>ﾠmedtime@gmail.com</p>
                <p><i class="bi bi-whatsapp fs-5"></i>ﾠ(12)98334-1234</p>
            </div>

            <div class="col-md-4 mt-4">
                <p class="h2">Profissionais</p><br>
                <p>Otorrinolaringologista</p>
                <p>Oftalmologista</p>
                <p>Psiquiatra</p>
                <p>Entre outros</p>
            </div>

            <div class="col-md-2 mt-4">
                <p class="h2">Institucional</p><br>
                <p>Quem Somos</p>
                <p>Sobre os Exames</p>
                <p>Opiniões Médicas</p>
                <p>Política de Privacidade</p>
            </div>
        </div>
        <!-- Linha do Rodapé 2 -->
        <div class="row bg-black">
            <div class="col py-3 ms-2">
                <span class="text-light ">Copyright MedTime Agendamentos Online-2032. Todos os direitos reservados</span>
            </div>
        </div>


        <!-- Modais -->
        <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center mt-3">
                            <div class="col-10 conteudo ">
                                <!-- Forms de login -->
                                <form id="formLogin" action="actions/login/validar_login.php" method="POST">
                                    <!-- Div de email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <!-- Div de senha -->
                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha" name="senha">
                                    </div>
                                    <!-- Botão de login -->
                                    <div class="form-group">
                                        <button type="submit" id="btnEntrar" class="form-control btn btn-purple rounded text-white submit px-3">Entrar</button>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <p class="text-center">Não possui conta?
                                            <!-- tag <a> que redirecionada para página de cadastro com JS -->
                                            <a href="#" id="btnCadastroToggle">Cadastre-se</a>
                                        </p>
                                    </div>
                                </form>

                                <!-- Forms de cadastro -->
                                <form id="formCadastro" action="actions/clientes/cadastrar_cliente.php" method="POST">
                                    <!-- Div de Nome -->
                                    <div class="mb-3">
                                        <label for="nomeCadastro" class="form-label">Nome
                                            Completo:</label>
                                        <input type="text" class="form-control" id="nomeCadastro" name="nome" placeholder="Digite seu nome completo" required>
                                    </div>
                                    <!-- Div de Email Principal -->
                                    <div class="mb-3 py-2">
                                        <label for="emailCadastro" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="emailCadastro" name="email" placeholder="Digite o e-mail que você deseja cadastrar" required>
                                    </div>
                                    <!-- Div de senha -->
                                    <div class="mb-3 py-3">
                                        <label for="senhaCadastro" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senhaCadastro" name="senha">
                                        <!-- Checkbocx se clicado ele executára um evento JS que mostra senha -->
                                        <input type="checkbox" id="senhaCheckBox" onclick="mostrarSenha()">
                                        Mostrar Senha
                                    </div>
                                    <!-- Div de telefone -->
                                    <div class="mb-3">
                                        <label for="telefoneCadastro" class="form-label">Telefone para
                                            contato</label>
                                        <input type="tel" class="form-control" id="telefoneCadastro" name="telefone" maxlength="11" placeholder="Exemplo: (DD) 9 9999-9999">
                                    </div>
                                    <!-- Div de CPF -->
                                    <div class="mb-3 py-3">
                                        <label for="cpfCadastro" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="cpfCadastro" name="cpf" maxlength="11" placeholder="Exemplo: 000.000.000-00">
                                    </div>
                                    <!-- Div de data de nascimento -->
                                    <div class="mb-3">
                                        <label for="data_nascimentoCadastro" class="form-label">Data de
                                            nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimentoCadastro" name="data_nascimento">
                                    </div>
                                    <!-- Botão de cadastro -->
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-purple rounded text-white submit px-3" id="btnCadastrar">Cadastrar</button>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <p class="text-center">Já possui conta?
                                            <!-- Caso clicado irá redirecionar para a página de login -->
                                            <a href="#" id="btnLoginToggle">Entrar</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- puxar js -->
    <script src="CSS_e_JS/script.js"></script>


</body>