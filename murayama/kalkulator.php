<?php include 'layout_header.php'; ?>

<div style="background: linear-gradient(135deg, #1e293b, #0f172a); min-height: 100vh; display: flex; justify-content: center; align-items: center; padding: 20px; color: white;">
  <div class="card" style="background: #1e293b; padding: 30px; border-radius: 16px; max-width: 400px; width: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
    <h2 style="text-align: center; margin-bottom: 20px; color: #facc15;">Kalkulator Winrate ML</h2>

    <label for="match" style="display: block; margin-top: 15px; color: #cbd5e1;">Total Match Saat Ini</label>
    <input type="number" id="match" placeholder="Contoh: 1000" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 8px; border: none; background: #334155; color: white; font-size: 16px;">

    <label for="winrate" style="display: block; margin-top: 15px; color: #cbd5e1;">Winrate Saat Ini (%)</label>
    <input type="number" id="winrate" placeholder="Contoh: 60" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 8px; border: none; background: #334155; color: white; font-size: 16px;">

    <label for="target" style="display: block; margin-top: 15px; color: #cbd5e1;">Target Winrate (%)</label>
    <input type="number" id="target" placeholder="Contoh: 80" style="width: 100%; padding: 10px; margin-top: 5px; border-radius: 8px; border: none; background: #334155; color: white; font-size: 16px;">

    <button onclick="hitungKebutuhanMatch()" style="margin-top: 20px; width: 100%; padding: 12px; background: linear-gradient(90deg, #facc15, #f59e0b); border: none; border-radius: 10px; font-weight: bold; font-size: 16px; color: #1e293b; cursor: pointer; transition: 0.3s;">Hitung Match Tambahan</button>

    <div id="hasil" class="result" style="margin-top: 20px; font-size: 18px; font-weight: 600; text-align: center;"></div>
  </div>
</div>

<script>
function hitungKebutuhanMatch() {
  const match = parseFloat(document.getElementById('match').value);
  const winrateNow = parseFloat(document.getElementById('winrate').value);
  const target = parseFloat(document.getElementById('target').value);
  const hasil = document.getElementById('hasil');

  if (isNaN(match) || isNaN(winrateNow) || isNaN(target)) {
    hasil.textContent = "Masukkan semua angka dengan benar!";
    hasil.style.color = "#f87171";
    return;
  }

  if (target <= winrateNow) {
    hasil.textContent = "Target winrate harus lebih tinggi dari winrate sekarang!";
    hasil.style.color = "#f87171";
    return;
  }

  const winNow = (winrateNow / 100) * match;
  const R = target / 100;

  const x = (R * match - winNow) / (1 - R);

  if (x < 0) {
    hasil.textContent = "Kamu sudah melewati target!";
    hasil.style.color = "#4ade80";
  } else {
    hasil.textContent = `Kamu perlu menang berturut-turut sebanyak ${Math.ceil(x)} match untuk mencapai winrate ${target}%`;
    hasil.style.color = "#4ade80";
  }
}
</script>
