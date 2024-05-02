<?php

session_start();

if(!isset($_SESSION['usuario'])){
    //Retornar a tela de login
    header('Location: ../login/index.php');
    die();
  }

require_once('../../classes/Localizacao.class.php');

$localizacao = new Localizacao();
$lista_localizacao = $localizacao->Listar();

include_once('validar_cep.php');


?>
<!DOCTYPE html>
<html lang="pt-br"> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciamento de Endereço</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootsstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="shortcut icon" type="image/png" href="../img/favico.png">

</head>

<body>

  <!-- Container principal -->
  <div class="container-fluid mt-5">
    <!-- Navbar geral -->
    <nav class="navbar navbar-expand-lg navbar-custom righteous-regular">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center py-2" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item px-3 mx-3">
                                <a class="nav-link active" href="#">
                                    <img src="../../img/logo.png" alt="logo" width="100px">
                                </a>
                            </li>
                            <li class="nav-item px-3 mt-4">
                                <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
                            </li>
                            <li class="nav-item px-3 mt-4">
                                <a class="nav-link" href="#">Consultas</a>
                            </li>
                            <li class="nav-item px-3 mt-4">
                                <a class="nav-link" href="#">Exames disponíveis</a>
                            </li>
                            <li class="nav-item px-3 mt-4">
                                <a class="nav-link" href="#">Agendamentos</a>
                            </li>
                            <li class="nav-item px-3 mt-4">
                                <a class="nav-link" href="#">Contate-nós</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-end mx-5">
                    <a class="btn btn-danger mx-1 text-white" href="logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                    </a>
                </div>
            </nav>

      </div>

    <!-- Container de gerenciamento / Cadastrar novo endereço -->
    <div class="container mt-5">
      <h2 class="text-center mb-4">Gerenciamento de Endereço</h2>
      <form action="" method="POST">
        <label for="cepValidar"><h6>CEP</h6></label>
        <input type="text" class="mx-2" id="cepValidar" maxlenght="14" placeholder="Digite o CEP" name="cepValidar">
        <button class="btn btn-success mx-2">Cadastrar CEP</button>
      </form>
    </div>
  </div>


      <!-- Container de gerenciamento / Endereços já cadastrados -->
      <div class="container mt-5">
      <div class="row mb-3">
      </div>
      <table class="table table-striped table-hover table-primary mt-2">
      <div class="d-flex justify-content-end">
        <h4>Endereços cadastrados</h4>
        </div>
        <thead>
          <tr>
            <th hidden>ID</th>
            <th>CEP</th>
            <th>Logradouro</th>
            <th hidden>Complemento</th>
            <th>Bairro</th>
            <th>Localidade</th>
            <th>UF</th>
            <th>DDD</th>
            <th>Tipo</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($lista_localizacao as $local){ ?>
            <tr>
                <td hidden><?=$local['id'];?></td>
                <td><?=$local['cep'];?></td>
                <td><?=$local['logradouro'];?></td>
                <td hidden><?=$local['complemento'];?></td>
                <td><?=$local['bairro'];?></td>
                <td><?=$local['localidade'];?></td>
                <td><?=$local['uf'];?></td>
                <td><?=$local['ddd'];?></td>
                <td><?=$local['tipo'];?></td>
                <td><a href="#" class="btn btn-danger btn-sm" onclick="excluir(<?=$local['id'];?>)"><i class="bi bi-file-earmark-x"></i> Excluir</a></td>
                <td><button type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEdicao"
                    data-id="<?=$local['id'];?>" data-cep="<?=$local['cep'];?>" 
                    data-logradouro="<?=$local['logradouro'];?>" data-complemento="<?=$local['complemento'];?>" 
                    data-bairro="<?=$local['bairro'];?>" data-localidade="<?=$local['localidade'];?>"
                    data-uf="<?=$local['uf'];?>" data-ddd="<?=$local['ddd'];?>" data-tipo="<?=$local['tipo'];?>">
                    <i class="bi bi-pencil-square"></i> Editar</button></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>

    </div>
  </div>

  <div class="modal fade" id="modalEdicao" tabindex="-1" role="dialog" aria-labelledby="modalEdicaoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="editar_endereco.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEdicaoLabel">Edição de endereço</h5>
                        </button>
                        </div>
                <div class="modal-body">
                        <input type="hidden" class="id" name="id">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control cep" id="cep" name="cep" readonly>
                        </div>
                        <div class="form-group mt-3">
                            <label for="logradouroEdi">Logradouro</label>
                            <input type="text" class="form-control logradouro" id="logradouroEdi" name="logradouro"> 
                        </div>
                        <div class="form-group mt-3">
                            <label for="complementoEdi">Complemento</label>
                            <input type="text" class="form-control complemento" id="complementoEdi" name="complemento"> 
                        </div>
                        <div class="form-group mt-3">
                            <label for="bairroEdi">Bairro</label>
                            <input type="text" class="form-control bairro" id="bairroEdi" name="bairro"> 
                        </div>
                        <div class="form-group mt-3">
                            <label for="localidadedEdi">Localidadde</label>
                            <input type="text" class="form-control localidade" id="localidadeEdi" name="localidade"> 
                        </div>
                        <div class="form-group mt-3">
                            <label for="ufEdi">UF</label>
                            <input type="text" class="form-control uf" id="ufEdi" name="uf"> 
                        </div>
                        <div class="form-group mt-3">
                            <label for="dddEdi">DDD</label>
                            <input type="text" class="form-control ddd" id="dddEdi" name="ddd"> 
                        </div>
                        <div class="form-group mt-3">
                            <label for="tipoEdi">Tipo</label>
                            <select name="tipo" id="tipoEdi" class="form-control">
                              <option value="Residencial">Residencial</option>                              <option value="Comercial">Comercial</option>
                              <option value="Clinica">Clinica</option>
                            </select>
                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php include_once('../../includes/alertas.include.php')?>

<script src="script.js"></script>

</body>

</html>