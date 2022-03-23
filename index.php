<?php
require 'banco.php';
$banco = new Banco("localhost","db_faculdade","root","");
$banco->query("SELECT * FROM aluno ORDER BY RA ASC");
$numero = $banco->numRows();
//echo "QTD ".$banco->numRows();
?>
<!DOCTYPE html>
<html lang="pt-br">
   <header>
      <meta http-equiv="Content-Type" xontent="text/html: charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/css_geral.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
         
         <title>CRUD PHP</title>
   </header>
   <body>
      	<H3 >CRUD em PHP puro</H3>
      	
        <div class="wrapper">
         <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                </div>
                      <ul class="list-unstyled components">
                         <p><h4>Tarefas</h4></p>
                            <li>
                               <a href="alunos.php">Alunos</a>
                            </li>
                            <li>
                                <a href="professores.php">Pofessores</a>
                            </li>
                            <li>
                                <a href="departamentos.php">Departamentos</a>
                             </li>
                             <li>
                                 <a href="cursos.php">Cursos</a>
                             </li>
                             <li>
                                 <a href="materias.php">Matérias</a>
                             </li>
                             <li>
                                 <a href="#">Sobre</a>
                             </li>
                      </ul> 	
              <!--   <ul class="list-unstyled CTAs">
                             <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                             <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                      </ul>-->   
             </nav>
                        <!-- Page Content Holder 
                        <div id="content">
                          <nav class="navbar navbar-default">
                                <div class="container-fluid">
            
                                    <div class="navbar-header">
                                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                            <i class="glyphicon glyphicon-align-left"></i>
                                            <span>Toggle Sidebar</span>
                                        </button>
                                    </div>
            
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#">Page</a></li>
                                            <li><a href="#">Page</a></li>
                                            <li><a href="#">Page</a></li>
                                            <li><a href="#">Page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                       
                       </div>-->
                        <div id="content">
              
                        	<!--     <form class="row g-4" method="POST" action="cadastro.php">
                                        
                           	<div class="col-md-5">
                           			<label for="formGroupExampleInput" class="form-label">Nome:</label>
                                    <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Nome">
                           		</div>
                           		 <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                 </div>
                           </form>  --> 
        </div>
            <script src="js/jquery-3.6.0.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>