<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Júnior Gonçalves | Recados</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand logo-text" href="">MELANCOLIA.</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">HOME</a>
                  </li>
              </div>
            </div>
        </nav>        
    </header>
    <main> 
        <section id="lista-recados">
            <div class="container">                
            <h1>Meus recados</h1>
            <p><a href="recados-form.html">Clique aqui</a> para deixar o seu recado</p><br>
            
            <?php
                $sql = "SELECT * FROM recados";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=site-helano','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
            ?>

            <?php foreach ($lista as $linha): ?>
                <div class="balao">
                    <p class="recado"><?php echo $linha['recado'] ?></p>			
                    <h4 class="nome"><?php echo $linha['nome'] ?></h4>
                </div>
            <?php endforeach ?>

            </div>
        </section>        
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <p class="text-center"><em>Desenvolvido por Helano Rangel</em></p>
        </div>
    </footer>
  </body>
</html>