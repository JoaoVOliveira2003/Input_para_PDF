
function SalvarArquivo() {
     var fileInput = document.getElementById('pdf');
     var file = fileInput.files[0];
     var formData = new FormData();
     formData.append('pdf', file);
 
     $.ajax({
         url: 'gravarPDF.php',
         type: 'POST',
         data: formData,
         processData: false,
         contentType: false,
         success: function(response) {
             alert('Arquivo enviado com sucesso!');
             fileInput.value = '';

         },
         error: function() {
             alert('Erro ao enviar o arquivo.');
         }
     });
 }