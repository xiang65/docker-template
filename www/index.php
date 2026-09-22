<?php
session_start();
require 'database.php';

// Albums ophalen
$stmt = $conn->prepare("SELECT * FROM albums");
$stmt->execute();
$albums = $stmt->fetchAll(PDO::FETCH_ASSOC);

require 'header.php';
?>
<link rel="stylesheet" href="styles.css">

<div class="wrap">

  <section class="hero">
    <div>
      <h1>Plaat voor plaat,<br>al sinds 1994.</h1>
      <p class="lede">Blader door onze collectie vinyl en cd's, zoek op titel of artiest, en bestel online om op te halen in de winkel aan de Grote Markt.</p>
      <div class="actions">
        <a href="#" class="btn-primary">Bekijk het aanbod</a>
        <a href="#" class="btn-secondary">Hoe werkt bestellen?</a>
      </div>
    </div>

    <div class="hero-visual">
      <div class="sleeve s2"></div>
      <div class="sleeve s1"><div class="disc"></div></div>
    </div>
  </section>

  <div class="genre-rail">
    <a href="#" class="genre-pill active">Alle genres</a>
    <a href="#" class="genre-pill">Rock</a>
    <a href="#" class="genre-pill">Pop</a>
    <a href="#" class="genre-pill">Hip-Hop</a>
    <a href="#" class="genre-pill">Electronic</a>
    <a href="#" class="genre-pill">Indie / Alternative</a>
    <a href="#" class="genre-pill">Jazz</a>
    <a href="#" class="genre-pill">Klassiek</a>
  </div>

  <section>
    <div class="section-head">
      <h2>Vers uit de bak</h2>
      <span class="count"><?php echo count($albums); ?> albums</span>
    </div>

    <div class="grid">

      <?php foreach ($albums as $album): 
          $album_id    = htmlspecialchars($album['id']);
          $album_title = htmlspecialchars($album['titel']);
          $album_artist = htmlspecialchars($album['artiest_id']);
          $album_price = htmlspecialchars($album['prijs']);
          $album_image = htmlspecialchars($album['albumfoto']);
      ?>

        <a href="album.php?id=<?php echo $album_id; ?>" class="card">
          <div class="card-art art-1">
            <span><?php echo $album_title; ?></span>
          </div>

          <div class="card-meta">
            <div class="artist"><?php echo $album_artist; ?></div>
            <div class="title"><?php echo $album_title; ?></div>
            <div class="price">€ <?php echo number_format($album_price, 2, ',', '.'); ?></div>
          </div>
        </a>

      <?php endforeach; ?>

    </div>
  </section>

</div>

<?php require 'footer.php'; ?>
        