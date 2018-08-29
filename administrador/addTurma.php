<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style2.css">  
    <title>ADM - Adcionar Turma</title>
</head>
<body>

  <?php include "menu.inc" ?>

  <h3>Adcionar Turma</h3>

    <div class="col-md-6 col-sm-6 col-12 col-lg-6 container_cadastrar">
      <form action="turmas.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome do Professor(a):</label>
          <input type="text" name="nometurma" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Nome">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Login:</label>
          <input type="text" name="loginturma" class="form-control" id="InputLogin" placeholder="Login">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha:</label>
          <input type="text" name="senhaturma" class="form-control" id="InputSenha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
      
    </div>

</body>
</html>