const laboratorioModal = document.getElementById('cadastroForm');

laboratorioModal.addEventListener('submit', function(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Cadastrado com Sucesso!',
        icon: 'success',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    }).then(function() {
        event.target.submit();
    });
});
