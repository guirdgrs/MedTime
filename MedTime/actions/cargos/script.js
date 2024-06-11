function excluirCargo(id){
    Swal.fire({
    title: "Tem certeza?",
    text: "Não será possível desfazer essa ação!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Sim, apagar!"
    }).then((result) => {
    if (result.isConfirmed) {
    window.location.href='deletar_cargo.php?id=' + id;
    }
    });
    }