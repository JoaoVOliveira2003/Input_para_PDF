<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Codigo em Desenvolvimento</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/css/style.css" />
</head>
<nav class="navbar navbar-expand-lg justify-content-center bg-dark">
    <div class="d-flex flex-column align-items-center">
        <h4 class="text-light mt-2">Input de File</h4>
    </div>
</nav>
<body style="overflow-x: hidden;">
    <center class="container mt-4">

        <label for="pdf" class="form-label">Escolha um arquivo PDF</label>
        <input class="form-control" type="file" id="pdf" accept="application/pdf">
        <br>
        <button onclick="SalvarArquivo()">Inserir PDF</button>
    </center>

    <script src="jQuery/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>

 
</body>
</html>
