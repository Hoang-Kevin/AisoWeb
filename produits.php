<!doctype html>
<html lang="fr">
  <head>
    <title>AISO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css?3">
  </head>


  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    

    <!-- Header -->
    <header>
        <h1 class="Titre"><a href="index.php">AISO</a></h1>
        <div id="toggle" class= "togglebutton" onClick="Opensidenav()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>
        
        </nav>
    </header>

    <!-- Side Menu -->
    <div id="Sidenav0" class="sidenav">
      <div class="SideMenuChoices">
        <a href="https://github.com/Hoang-Kevin" target="_blank">GitHub</a><br/>
      </div>
      <div class="SideMenuChoices">
        <a href="https://github.com/rodriguetac" target="_blank">devRod</a><br/>
      </div>
      <div class="SideMenuChoices">
        <a href="https://github.com/Hoang-Kevin" target="_blank">devSazu</a><br/>
      </div>
      <div class="SideMenuChoices">
        <a href="contact.php">Contact</a><br/>
      </div>
    </div>

    <main>
    <div id="connectBDD">
      <h2>Produits</h2><br/>
      <?php include 'connexion.php' ?>
      </div>
      <div id="BDD">
      <form method="post">
          <input id="param" type="text" value="1" name="param"/> 
          <input type="submit" value="Trier par prix"/>
        <?php include 'trieprix.php' ?>
        </form>
    </div>
    </main>
    <footer>
      <a href="https://www.service-public.fr/professionnels-entreprises/vosdroits/F31228" target ="_blank" class="Mentions">
          Mentions legales
      </a>
    </footer>
  </body>
</html>