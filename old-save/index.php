<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>SurfRider - BA$HROOM</title>
    <link rel="icon" href="assets/img/orange.ico">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/index.css">
  </head>
  <body>
    <header>
      <nav id="navBar">
        <ul>
          <li><a href="index.html">Accueil</a></li>
          <li><a href="assets/pages/article.php">Blank</a></li>
          <li>
            <a href="#">Blank</a>
            <ul>
              <li><a href="assets/pages/visite.php">Blank</a></li>
              <li><a href="assets/pages/visite.php">Blank</a></li>
              <li><a href="assets/pages/visite.php">Blank</a></li>
            </ul>
          </li>
          <li><a href="assets/pages/visite.php">Fraise</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <h1 hidden>Bienvenue sur le site de gestion des spots de surf</h1>
      <article>
        <h3 hidden>Liens</h3>
        <div class="linker">
          <a href="index.php">Accueil</a>
        </div>
        <div class="linker">
          <a href="assets/pages/article.php">Blank</a>
        </div>
        <div class="linker">
          <a href="https://lostsh.github.io/">Blank</a>
        </div>
        <div class="linker">
          <a href="assets/pages/visite.php">Fraise</a>
        </div>
        <div class="linker">
          <figure>
            <img src="assets/img/orange.ico" alt="Somme fruit !">
          </figure>
        </div>
        <?php include("assets/pages/login_module.php") ?>
        <div id="navShutter">
          <nav>
            <ul>
              <li><a href="index.php">Accueil</a></li>
              <li><a href="assets/pages/article.php">Article</a></li>
              <li>
                <a href="#">Blank</a>
                <ul>
                  <li><a href="assets/pages/visite.php">Blank</a></li>
                  <li><a href="assets/pages/visite.php">Blank</a></li>
                  <li><a href="assets/pages/visite.php">Blank</a></li>
                </ul>
              </li>
              <li><a href="assets/pages/visite.php">Fraise</a></li>
            </ul>
          </nav>
        </div>
      </article>
    </section>
    <?php include("assets/pages/footer.php") ?>
  </body>
</pages>