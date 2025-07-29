<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Be Alright - Music Player</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
  body {
    background: linear-gradient(to right, #1c1c1c, #2c2c2c);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px 20px;
    color: #f5f5f5;
  }
  h1 {
    font-size: 3rem;
    color: #ff4b5c;
    margin-bottom: 10px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
  }
  .subtitle {
    font-size: 1.2rem;
    margin-bottom: 20px;
    text-align: center;
    color: #aaa;
  }
  .player-container {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    text-align: center;
    margin-bottom: 40px;
  }
  .player-container h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #ff4b5c;
  }
  audio {
    width: 100%;
    max-width: 400px;
    outline: none;
    border-radius: 10px;
    background-color: #333;
  }
  .btn {
    margin-top: 15px;
    background-color: #ff4b5c;
    padding: 10px 25px;
    border: none;
    border-radius: 50px;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    transition: 0.3s;
  }
  .btn:hover {
    background-color: #e03c4e;
  }
</style>

</head>
<body>
  <h1>Be <span style="color:#d0d0ff">Alright</span></h1>
  <p class="subtitle">
    Setiap masalah datang dengan solusinya, setiap badai pasti berlalu<br />
    <em>"Kamu lebih kuat dari yang kamu kira, lebih mampu dari yang kamu bayangkan"</em>
  </p>

  <div class="player-container">
    <h2>🎵 Music Player</h2>
    <p>Now Playing: Message in a Bottle</p>
    <audio id="audioPlayer" controls>
      <source src="Message in a Bottle.mp3" type="audio/mpeg" />
      Browser kamu tidak mendukung pemutar audio.
    </audio>
    <button class="btn" onclick="document.getElementById('audioPlayer').play()">▶️ Play Manual</button>
  </div>

  <div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:center">
    <div style="background:white;color:#333;padding:20px;border-radius:15px;max-width:300px;box-shadow:0 0 10px rgba(0,0,0,0.1)">
      <h3 style="color:#6c63ff">❤️ Ingat Ini</h3>
      <p>Setiap perasaan tidak nyaman yang kamu rasakan saat ini adalah proses menuju versi terbaik dirimu.</p>
    </div>
    <div style="background:white;color:#333;padding:20px;border-radius:15px;max-width:300px;box-shadow:0 0 10px rgba(0,0,0,0.1)">
      <h3 style="color:#6c63ff">💭 Perspektif Baru</h3>
      <p>Kesulitan yang kamu hadapi saat ini bukanlah akhir dari perjalananmu, tapi bagian penting dari pertumbuhanmu.</p>
    </div>
  </div>
</body>
</html>
