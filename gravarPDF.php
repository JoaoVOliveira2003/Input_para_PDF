<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['pdf']['tmp_name'];
        $fileName = $_FILES['pdf']['name'];
        $fileSize = $_FILES['pdf']['size'];
        $fileType = $_FILES['pdf']['type'];

        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedfileExtensions = array('pdf');

        if (in_array($fileExtension, $allowedfileExtensions)) {
         
            $uploadFileDir = './pdfsSalvos/';
         
            $dest_path = $uploadFileDir . $fileName;
  
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
                $message = 'Arquivo salvo corretamente';
          
            } else {
          
                $message = 'Erro ao mover o PDF para o diretório de upload';
         
            }
        } else {
         
            $message = 'Tipo de arquivo não aceito, apenas PDF aceitável';
        
        }
    } else {
       
        $message = 'Erro no envio do arquivo. Código do erro: ' . $_FILES['pdf']['error'];
    
    }
    
    echo $message;

} else {

    echo 'Requisição inválida';

}

?>
