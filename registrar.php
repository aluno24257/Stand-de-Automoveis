<?php
include('conexao.php');

if(isset($_POST['email_cad']) || isset($_POST['senha_cad'])) {

        $email = $mysqli->real_escape_string($_POST['email_cad']);
        $senha = $mysqli->real_escape_string($_POST['senha_cad']);

        $sql_code = "INSERT INTO usuarios (email, senha)
        VALUES ('$email', '$senha');";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

      //  $quantidade = $sql_query->num_rows;

 /*       if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
*/
            header("Location: index.php");
/*
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
*/
}
?>
<<!DOCTYPE html>
    <html lang="pt">
        <head>
          <link rel="stylesheet" type="text/css" href="style.css">
        </head>

			<script>
			
			
			</script>
        
        <body >
          <header class="cabecalho">
            <img class="cabecalho-imagem" src="logotipo.png" alt="Logotipo de satnd de automoveis">
            <text class="cabecalho-menu-palavra"><strong><center>Faça o seu registro</center></strong></text>
            <nav class="cabecalho-menu">
              <a class="cabecalho-menu-item" href="http://portal2.ipt.pt/pt/comunidade/Alunos/manual_inscricoes/contactos/">Contacto-nos</a>
              <a class="cabecalho-menu-item" href="index.php">Pagina Inicial</a>
            </nav>
          </header>
		  
        
            <div class="container" >
                <a class="links" id="paracadastro"></a>
                <a class="links" id="paralogin"></a>
                 
                <div class="content">      
                  
                  <!--FORMULÁRIO DE CADASTRO-->
				 <center>
                  <div id="cadastro">
                    <form method="post" action=""> 
                      <h1 class="cabecalho-menu-palavra">Cadastro</h1> 
                       
                      <p> 
                        <label class="cabecalho-menu-item">Seu e-mail</label>
                        <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
                      </p>
                       
                      <p> 
                        <label for="senha_cad" class="cabecalho-menu-item">Sua senha</label>
                        <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
                      </p>
                       
                      <p> 
                        <input type="submit" name="Cadastro" value="Cadastrar"/> 
                      </p>
                       
                      <p class="link">  
                        Já tem conta?
                        <a href="login.php" > Ir para o Login </a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
			 </center>


            
        </body>
    </html>