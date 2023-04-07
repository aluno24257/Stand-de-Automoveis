<html>
<!DOCTYPE html>
<html lang="pt">

   <head>
     <title>Crie o seu anuncio</title>
     <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <style>
          img{ width: 400px; height: 250px }
          th{color: #FFF2E7;}
          td{color: #FFF2E7;}
          
   </style>
   <script>	
			
   </script>
   <body>
    <header class="cabecalho">
      <text class="cabecalho-menu-palavra"><strong>Encontre o seu carro de sonho</strong></text>
      <nav class="cabecalho-menu">
        <a class="cabecalho-menu-item" href="login.php">Login</a>
        <a class="cabecalho-menu-item" href="http://portal2.ipt.pt/pt/comunidade/Alunos/manual_inscricoes/contactos/">Contacto-nos</a>
        <a class="cabecalho-menu-item" href="index.php">Pagina Inicial</a>
      </nav>
    </header>
    <center>
      <?php
      //echo("Teste ");
      require_once 'carrosbd.php';
      $sql = "SELECT * FROM carros";
      $result = mysqli_query($mysqli, $sql);
      
      
      while($row = mysqli_fetch_assoc($result)){
        echo "<table >";
        echo "<th>";
        echo '<img src="data:image/jpeg;base64,'.$row['imagem'].'" width="250" height="200" /><br>';
        echo "</th>";
        echo "<tr><th class='corner'>ID do anúncio:</th><td>".$row["id"]."</td>";
        echo "</tr>";
        echo "<tr><th>Marca:</th><td>".$row["marca"]."</td></tr>";
        echo "<tr><th>Nº Kilometros:</th><td>".$row["km"]."</td></tr>";
        echo "<tr><th>Preço:</th><td>".$row["preço"]."€"."</td></tr>";

        echo "</table><br>";
//mysqli_close($mysqli);
      }
     
      ?>
   </center>
   </body>

</html> 
