<html>
<!DOCTYPE html>
<html lang="pt">

   <head>
     <title>Crie o seu anuncio</title>
     <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <style>
    
          
   </style>
   <script>	
   </script>
   <body>
    <header class="cabecalho">
      <img class="cabecalho-imagem" src="logotipo.png" alt="Logotipo de satnd de automoveis">
      <text class="cabecalho-menu-palavra"><strong>Venda aqui o seu carro</strong></text>
      <nav class="cabecalho-menu">
        <a class="cabecalho-menu-item" href="login.php">Login</a>
        <a class="cabecalho-menu-item" href="http://portal2.ipt.pt/pt/comunidade/Alunos/manual_inscricoes/contactos/">Contacto-nos</a>
        <a class="cabecalho-menu-item" href="index.php">Pagina Inicial</a>
      </nav>
    </header>
    <main>
      <section class="conteudo-principal">
        <form action="vender.php" method="POST" enctype="multipart/form-data">
          Imagem: <input type="file" name="imagem"  accept="image/png, image/jpeg">
          <p> 
             <label class="cabecalho-menu-item">Marca</label>
             <select name="marca">
      <option value="Abarth">Abarth</option>
      <option value="Alfa Romeo">Alfa Romeo</option>
      <option value="Aston Martin">Aston Martin</option>
      <option value="Audi">Audi</option>
      <option value="BMW">BMW</option>
      <option value="Citroen">Citroen</option>
      <option value="BMW">Cupra</option>
      <option value="BMW">Dacia</option>
      <option value="BMW">DS</option>
      <option value="BMW">Ferrari</option>
      <option value="BMW">Fiat</option>
      <option value="BMW">Ford</option>
      <option value="BMW">Honda</option>
      <option value="BMW">Hyundai</option>
      <option value="Fiat">Jaguar</option>
      <option value="Fiat">Jeep</option>
      <option value="Lamborghini">Lamborghini</option>
      <option value="Fiat">Land Rover</option>
      <option value="Fiat">Maserati</option>
      <option value="Fiat">Mercedes-Benz</option>
      <option value="Fiat">Mini</option>
      <option value="Fiat">Mitsubishi</option>
      <option value="Fiat">Nissan</option>
      <option value="Fiat">Opel</option>
      <option value="Opel">Peugeot</option>
      <option value="Opel">Porsche</option>
      <option value="Opel">Renault</option>
      <option value="Opel">Seat</option>
      <option value="Opel">Skoda</option>
      <option value="Opel">Suzuki</option>
      <option value="Opel">TESLA</option>
      <option value="Opel">Toyota</option>
      <option value="Opel">Volkswagen</option>
      <option value="Opel">Volvo</option>
      </select>
          </p>            
          <p> 
              <label for="km" class="cabecalho-menu-item">KM</label>
              <input type="number" min="0" max="9999999" step="1" name="km" placeholder="Kms..." />
          </p>
          <p> 
              <label for="preço" class="cabecalho-menu-item">Preço</label>
              <input type="number" min="0" name="preco" type="number" placeholder="1000€"/>
          </p>          
          <input type="submit" name="vender" >
      </form>
      </section>
    </main>

       
   </body>

</html>