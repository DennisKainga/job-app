document.addEventListener('DOMContentLoaded',function(){

    ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error =>{
        console.error(error);
    });
    });
    $(document).ready(function() {
        $('#category').select2();
    });

