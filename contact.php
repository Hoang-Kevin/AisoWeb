<!doctype php>
<html lang="fr">
  <head>
    <title>AISO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index2.css">
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
        <h1 class="Titre"><a href="index.html">AISO</a></h1>
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
      <h2>Contact</h2><br/>
      <div id="contact_mail">  
        <h3>Envoyer un mail</h3>
        <form method="post">
            <label>Nom</label><br/>
            <input type="text" name="nom" required><br/>
            <label>Email</label><br/>
            <input type="email" name="email" required><br/>
            <label>Message</label><br/>
            <textarea rows="10" cols="30" name="message" required></textarea><br/>
            <input type="submit">
        </form>
        <?php include 'mail.php'; ?>
      </div>
      <div id="contact_social">
        <div class="element1"><a href="https://www.facebook.com" target="_blank"><figure><img src="assets/f_logo.png" title="Logo de Facebook" class="facebook"><figcaption>Facebook</figcaption></figure></a></div>
        <div class="element2"><a href="https://twitter.com" target="_blank"><figure><img src="assets/logo_t.png" title="Logo de Twitter" class="twitter"><figcaption>Twitter</figcaption></figure></a></div>
        <div class="element3"><a href="https://www.instagram.com" target="_blank"><figure><img src="assets/logo_i.png" title="Logo d'Instagram" class="instagram"><figcaption>Instagram</figcaption></figure></a></div>
      </div>
    </main>
    <footer>
      <a href="https://www.service-public.fr/professionnels-entreprises/vosdroits/F31228" target ="_blank" class="Mentions">
          Mentions legales
      </a>
    </footer>
  </body>
</html>