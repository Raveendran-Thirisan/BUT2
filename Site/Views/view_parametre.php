<?php 
$_SESSION['view'] = 'Parametre';
require "view_header.php"?>
    <main>
      <section>
        <h1>Parametre</h1>
        <div class="grandDiv">
          <div class="div1">
            <a href="?controller=accueil&action=infor">
              <img src="../MVC/Content/img/user.png" alt="mon profil">
            </a>
            <p>Mes informations personnelles</p>
          </div>
          <div class="div2">
            <a href="?controller=boutique&action=bilan">
              <img src="../MVC/Content/img/bdd.png" alt="Historique">
            </a>
            <p> Historique des ventes </p>
          </div>
        </div>
      </section>
    </main>
    <?php require "view_Footer.php"?>
    <script src="../MVC/Content/js/Header.js"></script>
  </body>
</html>