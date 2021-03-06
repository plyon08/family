require('./bootstrap');

require('alpinejs');

$(function() {
    setTimeout(function() {
      $('#alert').fadeOut('fast');
    }, 3000);

    $('input[name="category"]').on('change', function() {
        $('#category-list').collapse('toggle');
        $('#category-button').html($(this).val());
    });

    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
});