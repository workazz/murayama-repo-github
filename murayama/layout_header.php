<!-- layout_header.php -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', sans-serif;
    background: black;
    overflow-x: hidden;
  }

  /* Background bintang */
  .stars {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: transparent;
    z-index: 0;
    pointer-events: none;
    background-image: radial-gradient(white 1px, transparent 1px),
                      radial-gradient(white 1px, transparent 1px);
    background-size: 100px 100px;
    background-position: 0 0, 50px 50px;
    animation: twinkle 2s infinite ease-in-out;
  }

  @keyframes twinkle {
    0%, 100% { opacity: 0.9; }
    50% { opacity: 0.3; }
  }

  .navbar {
    position: relative;
    z-index: 10;
    background: linear-gradient(to right, #1a1a1a, #2b2b2b);
    color: white;
    padding: 10px 30px;
  }

  .navbar-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }

  .logo {
    height: 40px;
    margin-right: 10px;
  }

  .logo-group {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 20px;
    font-weight: bold;
  }

  .search-container {
    flex: 1;
    margin: 0 20px;
  }

  .search-container input {
    width: 100%;
    padding: 8px 15px;
    border: none;
    border-radius: 8px;
    background-color: #3b3b3b;
    color: white;
    font-size: 14px;
  }

  .right-options {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .lang-select {
    background: #3b3b3b;
    color: white;
    padding: 5px 10px;
    border-radius: 8px;
    border: none;
    font-size: 14px;
  }

  .navbar-bottom {
    display: flex;
    align-items: center;
    gap: 25px;
    border-top: 1px solid #444;
    padding-top: 10px;
  }

  .navbar-bottom a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 14px;
    position: relative;
    padding-bottom: 5px;
    transition: color 0.3s ease;
  }

  .navbar-bottom a:hover {
    color: #ffc107;
  }

  .navbar-bottom a.active {
    color: yellow;
  }

  .navbar-bottom a.active::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 100%;
    background: yellow;
  }

  .navbar-bottom .icon {
    font-size: 16px;
  }

  .auth-links a {
    background-color: #ffc107;
    color: #222;
    padding: 5px 10px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .auth-links a:hover {
    background-color: #ffca2c;
    color: black;
  }
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- Background Stars -->
<div class="stars"></div>

<!-- Navbar -->
<div class="navbar">
  <div class="navbar-top">
    <!-- Logo & Title -->
    <div class="logo-group">
      <img src="murayama_logo.jpg" alt="Logo" class="logo" />
      <span>MURAYAMA.MLBB</span>
    </div>

    <!-- Search Bar -->
    <div class="search-container">
      <input type="text" placeholder="Cari Game atau Voucher" />
    </div>

    <!-- Language & Auth -->
    <div class="right-options">
      <select class="lang-select">
        <option selected>ID / IDR</option>
        <option>EN / USD</option>
      </select>
      <div class="auth-links">
        <a href="#"><i class="fas fa-sign-in-alt"></i> Masuk</a>
        <a href="#"><i class="fas fa-user"></i> Daftar</a>
      </div>
    </div>
  </div>

  <!-- Navbar Links -->
  <div class="navbar-bottom">
    <a href="dashboard.php"><i class="fas fa-clock icon"></i> Jasa Joki</a>
    <a href="cek_transaksi.php"><i class="fas fa-search-dollar icon"></i> Cek Transaksi</a>
    <a href="#"><i class="fas fa-trophy icon"></i> Leaderboard</a>
    <a href="#"><i class="fas fa-newspaper icon"></i> Artikel</a>
    <a href="kalkulator.php"><i class="fas fa-scale-balanced icon"></i> Kalkulator Win Rate</a>
  </div>
</div>
