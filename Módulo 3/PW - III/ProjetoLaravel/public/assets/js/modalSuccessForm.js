const form = document.querySelector('form')

form.addEventListener('submit', function(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Formulário enviado!',
        text: 'O formulário será enviado em instantes.',
        icon: 'success',
        showConfirmButton: false, 
        timer: 2000,
        timerProgressBar: true
    }).then(function() {
        event.target.submit();
    });
});