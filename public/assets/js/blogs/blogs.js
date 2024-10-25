document.addEventListener('DOMContentLoaded',function(){

    ClassicEditor
    .create(document.querySelector('#description'))
    .catch(error =>{
        console.error(error);
    });
    });

