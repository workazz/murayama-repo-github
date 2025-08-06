<?php include 'layout_header.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk Populer & Artikel - Takapedia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(120deg, #000000, #1a1a1a);
      color: #fff;
      overflow-x: hidden;
    }

    /* Bintang Kelap-Kelip */
    .stars {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: 0;
      background: transparent;
      pointer-events: none;
    }

    .stars span {
      position: absolute;
      width: 2px;
      height: 2px;
      background: white;
      border-radius: 50%;
      opacity: 0.6;
      animation: blink 2s infinite ease-in-out alternate;
    }

    @keyframes blink {
      0% { opacity: 0.2; transform: scale(1); }
      100% { opacity: 1; transform: scale(1.5); }
    }

    .container {
      max-width: 1200px;
      margin: 80px auto;
      padding: 0 20px;
      position: relative;
      z-index: 1;
    }

    h2 {
      font-size: 24px;
      color: #ffcc70;
      margin-bottom: 8px;
    }

    p.description {
      color: #e0e0e0;
      margin-bottom: 25px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .card {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      filter: grayscale(100%);
      transition: filter 0.4s ease, transform 0.3s ease;
    }

    .card:hover img {
      filter: grayscale(0%);
    }

    .info {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: linear-gradient(90deg, #ffe600, #ffcc00);
      color: #333;
      padding: 12px 16px;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 15px;
    }

    .publisher {
      font-size: 13px;
      font-weight: normal;
      color: #5c5c5c;
    }

    /* Artikel Section */
    .artikel-section {
      margin-top: 60px;
    }

    .artikel-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .artikel-card {
      background: #111;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      cursor: pointer;
      position: relative;
    }

    .artikel-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.6);
    }

    .artikel-card img {
      width: 100%;
      height: 170px;
      object-fit: cover;
    }

    .artikel-info {
      padding: 15px 18px;
      background: #1a1a1a;
    }

    .artikel-info h4 {
      margin: 0;
      font-size: 17px;
      color: #ffd700;
    }

    .artikel-info p {
      margin: 8px 0 0;
      font-size: 14px;
      color: #bbb;
    }
  </style>
</head>
<body>

<!-- Background Bintang -->
<div class="stars">
  <?php for ($i = 0; $i < 150; $i++): ?>
    <span style="
      top: <?= rand(0, 100) ?>%;
      left: <?= rand(0, 100) ?>%;
      animation-delay: <?= rand(0, 300) / 100 ?>s;
      animation-duration: <?= rand(2, 6) ?>s;
    "></span>
  <?php endfor; ?>
</div>

<!-- Konten -->
<div class="container">
  <h2>PRODUK POPULER</h2>
  <p class="description">Berikut adalah beberapa produk yang paling dicari saat ini.</p>

  <div class="grid">
    <!-- Gambar produk -->
    <div class="card"><img src="lance.jpg"><div class="info"><span>Joki Rank</span><span class="publisher">Murayama.mlbb</span></div></div>
    <div class="card"><img src="claude.jpg"><div class="info"><span>Jasa Gendong</span><span class="publisher">Murayama.mlbb</span></div></div>
    <div class="card"><img src="benet.jpg"><div class="info"><span>Jasa Video Montage</span><span class="publisher">Murayama.mlbb</span></div></div>
    <div class="card"><img src="fany.jpg"><div class="info"><span>Jasa Push MMR</span><span class="publisher">Murayama.mlbb</span></div></div>
    <div class="card"><img src="tigreal.jpg"><div class="info"><span>Joki Classic</span><span class="publisher">Murayama.mlbb</span></div></div>
    <div class="card"><img src="gift_starlight.jpg"><div class="info"><span>Jasa Gift Starlight</span><span class="publisher">Murayama.mlbb</span></div></div>
  </div>

  <!-- Artikel -->
  <div class="artikel-section">
    <h2>ARTIKEL TERBARU</h2>
    <p class="description">Baca artikel menarik seputar dunia Mobile Legends & joki gaming!</p>

    <div class="artikel-grid">
      <div class="artikel-card">
        <img src="liquid.jpeg" alt="Tips Joki ML">
        <div class="artikel-info">
          <h4>CHAMPION EWC 2025</h4>
          <p>MSC 2025 Grand Final: Team Liquid PH Menang, Kalahkan Juara Bertahan SRG.OG</p>
        </div>
      </div>
      <div class="artikel-card">
        <img src="baru.jpg" alt="Starlight ML">
        <div class="artikel-info">
          <h4>UPDATE MLBB PATCH TERBARU 1.8.30: PENYESUAIAN HERO, BUFF, NERF, DAN SKIN BARU</h4>
          <p></p>
        </div>
      </div>
  </div>
</div>

</body>
</html>