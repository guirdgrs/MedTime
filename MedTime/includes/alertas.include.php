<?php
    $alertas_sucesso = [
        //Cliente
        "cadastrarcliente" => "Cadastro realizado com sucesso!",
        "removercliente" => "Usuário removido!",
        "editarcliente" => "Usuário editado!",

        //Funcionarios
        "cadastrarfuncionario" => "Cadastro realizado com sucesso!",
        "removerfuncionario" => "Funcionário removido!",
        "editarfuncionario" => "Funcionário editado!",

        //Localização
        "cadastrarlocalizacao" => "Localização Cadastrada!",
        "removerlocalizacao" => "Localização removido!",
        "editarlocalizacao" => "Localização editada!",

        //Agendamento
        "cadastraragendamento" => "Agendamento realizado!",
        "removeragendamento" => "Agendamento deletado",
        "editaragendamento" => "Informações editadas",

        //Cargos
        "cadastrarcargo" => "Cargo cadastrado",
        "removercargo" => "Cargo removido!",

        //Convenio
        "cadastrarconvenio" => "Cadastro realizado",
        "removerconvenio" => "Convenio removido",

        //Especialidade
        "cadastrarespecialidade" => "Cadastro realizado",
        "removerespecialidade" => "Especialidade removida",

        //Resultado
        "cadastrarresultado" => "Resultado adicionado",
        "removerresultado" => "Resultado removido",
        "editarresultado" => "Informações editadas",

        //Suporte
        "cadastrarsuporte" => "Seu pedido foi realizado!",

        //Login
        "logar" => "Login realizado, você será redirecionado!"
    ];

    $alertas_falha = [
        //Cliente
        "cadastrarcliente" => "Ocorreu um erro!",
        "removercliente" => "Erro ao remover!",
        "editarcliente" => "Erro ao editar usuario",

        //Funcionarios
        "cadastrarfuncionario" => "Erro! Tente novamente",
        "removerfuncionario" => "Ocorreu um erro!",
        "editarfuncionario" => "Erro! Verifique as informações!",

        //Localização
        "cadastrarlocalizacao" => "Erro!",
        "removerlocalizacao" => "Erro ao remover localização",
        "editarlocalizacao" => "Erro!",

        //Agendamento
        "cadastraragendamento" => "Erro ao cadastrar agendamento",
        "removeragendamento" => "Erro!",
        "editaragendamento" => "Erro ao editar agendamento",

        //Cargos
        "cadastrarcargo" => "Erro!",
        "removercargo" => "Erro ao remover cargo",

        //Convenio
        "cadastrarconvenio" => "Erro ao cadastrar convenio",

        //Especialidade
        "cadastrarespecialidade" => "Ocorreu um erro",

        //Resultado
        "cadastrarresultado" => "Ocorreu um erro ao cadastrar o resultado",
        "editarresultado" => "Ocorreu um erro ao editar as informações",

        //Suporte
        "cadastrarsuporte" => "Erro ao cadastrar suporte!",

        //Login
        "logar" => "Erro! Vefifique as informações e tente novamente!",

        //Post
        "post" => "A página deve ser carregada por post"
    ];
?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        <?php if(isset($_GET['sucesso'])){ ?> //Verificando se o valor do array está setado
            Swal.fire({
            title: "Sucesso!",
            text: "<?=$alertas_sucesso[$_GET['sucesso']];?>",
            icon: "success"
          });
          //Redefinindo a URL
          window.history.replaceState(null, '', window.location.pathname);
        <?php }?>

        <?php if(isset($_GET['falha'])){ ?>
            Swal.fire({
            title: "Erro!",
            text: "<?=$alertas_falha[$_GET['falha']];?>",
            icon: "error"
          });
          window.history.replaceState(null, '', window.location.pathname);
        <?php }?>
        
</script>