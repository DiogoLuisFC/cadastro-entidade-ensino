function cadastrar(){
    const form = document.getElementById('form_cadastro');
    formData = new FormData(form);

    $.ajax({
        url: "functions.php",
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        beforeSend: function(){
            // alert('before');
        },
        erro: function(){

        },
        success: function(data){
          alert(data);
        }
      });

}