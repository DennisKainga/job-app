document.addEventListener('DOMContentLoaded', function () {
    // Initialize Select2 on the multiple select element
    $(".js-example-basic-multiple").select2({
        placeholder: 'What is your interest?',
        allowClear: true
    });

    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#job-description'))
        .catch(error => {
            console.error(error);
        });
});
