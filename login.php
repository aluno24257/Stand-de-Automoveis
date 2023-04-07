<?php
include('conexao.php');

if(isset($_POST['email_login']) || isset($_POST['senha_login'])) {

        $email = $mysqli->real_escape_string($_POST['email_login']);
        $senha = $mysqli->real_escape_string($_POST['senha_login']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: anunciar.php");
            echo "Falha ao logar! E-mail ou senha incorretos";

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

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
            <text class="cabecalho-menu-palavra"><strong><center>Faça o seu login</center></strong></text>
            <nav class="cabecalho-menu">
              <a class="cabecalho-menu-item" href="http://portal2.ipt.pt/pt/comunidade/Alunos/manual_inscricoes/contactos/">Contacto-nos</a>
              <a class="cabecalho-menu-item" href="index.php">Pagina Inicial</a>
            </nav>
          </header>
		     <center>
        
            <div class="container" >
                <a class="links" id="paracadastro"></a>
                <a class="links" id="paralogin"></a>
                 
                <div class="content">      
                  <!--FORMULÁRIO DE LOGIN-->
                  <div id="login">
                    <form method="post" action=""> 
                      <h1 class="cabecalho-menu-palavra">Login</h1> 
                      <p> 
                        <label for="email_login" class="cabecalho-menu-item">Seu email</label>
                        <input id="email_login" name="email_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
                      </p>
                       
                      <p> 
                        <label for="senha_login" class="cabecalho-menu-item">Sua senha</label>
                        <input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha" /> 
                      </p>
                       
                      <p> 
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                        <label for="manterlogado" class="cabecalho-menu-item">Guardar Sessão</label>
                      </p>
                       
                      <p> 
                        <input type="submit" value="Login" /> 
                      </p>
                       
                      <p class="link">
                        Ainda não tem conta?
                        <a href="registrar.php">Cadastre-se</a>
                      </p>
                    </form>
                  </div>
				   </center>
            
        </body>
    </html>
    