<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta description="Outlines est un collectif de musique électronique. Découvre et retrouve ici nos événements, podcasts, galeries et merch exclusifs. Rejoins la communauté Outlines !">
  <title>Outlines HQ</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- IMAGE DE FOND -->
  <img src="./img/Pics/back_picture.webp" alt="photo soirée" class="background-image">


  <!-- NAVBAR -->
  <header>
    <nav class="navbar" role="navigation" aria-label="Navigation principale">
      <a href="index.php" class="logo" aria-label="Retour à l’accueil"><img src="./img/Outlines_Logo_White.png" alt="Outlines Logo"></a>
      
      <button class="burger"><a href="#"><img src="./img/Menu Button.png" alt=""></a></button>

      <ul class="nav-links">
        <li><a href="#">Events</a></li>
        <li><a href="#">Audio</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Merch</a></li>
        <li><a href="#">Outlines</a></li>
        <li><a href="#">Contacts</a></li>
        <li class="close-btn">→</li>
      </ul>
    </nav>
  </header>

  <!-- MAIN CONTENT -->
  <main>

    <!-- BANDEAU NEWS -->
    <div class="news-banner">
      <p id="bandeau" role="status" aria-live="polite">🚨 NEWS DE LA SEMAINE : NOUVEAU DROP DE MERCH DISPO ! 🚨 NEXT EVENT : 30 / 01 🚨 TEA TIME
        PODCAST : DISPO SUR SOUNDCLOUD 🚨 ABONNE-TOI A LA NEWSLETTER POUR AVOIR DES REDUC SUR LE MERCH ET LA BILLETTERIE
        🚨</p>
    </div>

    <section class="hero">
      <h1>[OUTLINES]</h1>
    </section>

    <section class="dualBlocks">

      <div id="eventBlock">
        <div class="boxName"><h2>Prochain RDV :</h2></div>
        <div class="boxTitle">WAVZ#1</div>
        <div class="boxInfos">21 Novembre 2025<br>Le BouduPont<br>Gratuit</div>
        <div class="boxPic"><img src="./img/Outlines_wavz_final_6.webp" alt="flyer event" class="boxImage"></div>
        <div class="boxButton"><button class="boxBtn"><a href="#">+ d'infos</a></button></div>
      </div>
    
      <div id="merchBlock">
        <div class="boxName"><h2>Merch drop :</h2></div>
        <div class="boxTitle">Limited T-shirt</div>
        <div class="boxInfos">T-shirt Logo B&W<br>Unisex<br>Taille S-XL</div>
        <div class="boxPic"><img src="./img/tshirt_merch.webp" alt="Tshirt Outlines" class="boxImage"></div>
        <div class="boxButton"><button class="boxBtn"><a href="https://outlineslabel.bandcamp.com/merch" target="_blank">Accès boutique</a></button></div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="footer-container">
      <!-- Bloc gauche -->
      <div class="footer-left">
        <div class="social-icons">
          <a href="https://www.instagram.com/outlines_frequencies/" target="_blank"><img src="./img/icon-instagram.png"
              title="Instagram" alt="Instagram"></a>
          <a href="https://www.facebook.com/Outlines.frequencies" target="_blank"><img src="./img/icon-facebook.png"
              title="Facebook"></a>
          <a href="#" target="_blank"><img src="./img/icon-tiktok.png" title="TikTok" alt="TikTok"></a>
          <a href="https://www.youtube.com/@outlines5689" target="_blank"><img src="./img/icon-youtube.png"
              title="YouTube" alt="YouTube"></a>
          <a href="https://soundcloud.com/outlines-frequencies" target="_blank"><img src="./img/icon-soundcloud.png"
              title="SoundCloud" alt="Soundcloud"></a>
          <a href="#" target="_blank"><img src="./img/icon-bandcamp2.png" title="Bandcamp" alt="Bancdamp"></a>
        </div>
        <div class="footer-links">
          <a href="legal-notice.php">Mentions Légales</a> |
          <a href="privacy-policy.php">Politique de Confidentialité</a> |
          <a href="terms-of-use.php">CGU</a>
        </div>
        <p>© Outlines 2025 - Tous droits réservés</p>
        
      </div>

      <!-- Bloc central : Podcast -->
      <div class="footer-center">
        <h2>Dernier Podcast</h2>
        <iframe title="player" id="SoundCloud" width="100%" height="100" scrolling="no" frameborder="no" allow="autoplay"
          src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/2070907608&color=%23ff5500&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false&show_teaser=false"></iframe>
        <div 
          style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
          <a href="https://soundcloud.com/egreg-re" title="Egregore Collective" target="_blank"
            style="color: #cccccc; text-decoration: none;">Egregore Collective</a> · <a
            href="https://soundcloud.com/egreg-re/trail-dibby-outlines-session-avril-2025"
            title="Trail &amp; Dibby - Outlines Session (Avril 2025)" target="_blank"
            style="color: #cccccc; text-decoration: none;">Trail &amp; Dibby - Outlines Session (Avril 2025)</a></div>
      </div>

      <!-- Bloc droit : Newsletter -->
      <div class="footer-right">
        <form id="newsletterForm" action="newsletter.php" method="POST">
          <h3 class="newsletter-title">Outlines Newsletter :</h3>      
          <input type="email" id="email" name="email" placeholder="Entre ton email ici" required>      
            <label class="consent">
              <input type="checkbox" id="consent" name="consent" required> 
              J’ai lu et accepte la Politique de Confidentialité.
            </label>      
          <button type="submit">Je m'inscris</button>
          <p id="msg"></p>
        </form>
      </div>
      
      
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
