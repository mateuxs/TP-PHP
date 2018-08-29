<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style2.css">  
    <title>ADM - Adcionar Disciplina</title>
</head>
<body>
    
    <?php include "menu.inc" ?>

    <h3>Adcionar Discplina</h3>

    <div class="col-md-6 col-sm-6 col-12 col-lg-6 container_cadastrar">
        <form action="disciplinas.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Disciplina:</label>
            <input type="text" name="nomeDisciplina" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Nome">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        
    </div>

</body>
</html>