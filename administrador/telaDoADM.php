<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <title>Administrador</title>
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><h5><b>Cronograma digital</b></h5></a>
        <ul class="navbar-nav mr-auto "></ul>
        <h5>Olá, ADM!</h5>
        <button class="btn btn-outline-success" type="button"  >Log Out</button>
    </nav>

                
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ADM Menu</h3>
            </div>
    
            <ul class="list-unstyled components">
                <p>Funcionalidades</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Adcionar</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="file:///home/a2016951600/TP-PHP/administrador/addTurma.php">Adcionar Turma</a>
                        </li>
                        <li>
                            <a href="file:///home/a2016951600/TP-PHP/administrador/addProfessor.php">Adcionar Professor</a>
                        </li>
                        <li>
                            <a href="file:///home/a2016951600/TP-PHP/administrador/addDisciplina.php">Adcionar Disciplina</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Excluir</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li>
                            <a href="#">Excluir Turma</a>
                        </li>
                        <li>
                            <a href="#">Excluir Professor</a>
                        </li>
                        <li>
                            <a href="#">Excluir Disciplina</a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                        <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Editar</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu3">
                            <li>
                                <a href="#">Editar Turmas</a>
                            </li>
                            <li>
                                <a href="#">Editar Professores</a>
                            </li>
                            <li>
                                <a href="#">Editar Disciplinas</a>
                            </li>
                            
                        </ul>
                    </li>
                <li>
                    <a href="../telaDeLogin.php">Sair</a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
        
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
        
                </div>
            </nav>
        </div>
    
    </div>

    

     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
     <!-- jQuery Custom Scroller CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
    
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
    

    </script>

</body>
</html>