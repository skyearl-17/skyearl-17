<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>OBAT PATAH HATI (?)!</title>
  <style>
    :root {
      --background: linear-gradient(135deg, #1e1e2f, #776d94);
      --card: rgba(255, 255, 255, 0.08);
      --accent: #a78bfa;
      --text: #ffffff;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", sans-serif;
      background: var(--background);
      color: var(--text);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .player {
      max-width: 600px;
      width: 90%;
      background: var(--card);
      padding: 30px 20px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(10px);
    }

    .player h2 {
      font-size: 24px;
      color: var(--accent);
      margin-bottom: 10px;
    }

    .now-playing {
      font-style: italic;
      color: #ccc;
      margin-bottom: 20px;
    }

    audio {
      width: 100%;
      border-radius: 12px;
      outline: none;
    }

    .back-link {
      display: inline-block;
      margin-top: 30px;
      font-size: 16px;
      padding: 10px 20px;
      color: white;
      background-color: var(--accent);
      border-radius: 12px;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .back-link:hover {
      background-color: #c4b5fd;
    }
  </style>
</head>
<body>

  <div class="player">
    <h2>🎵 Music Player</h2>
    <p class="now-playing">Now Playing: <span id="songTitle">Favorite Girl (Nadia)</span></p>
    <audio id="audioPlayer" controls autoplay>
      <source src="5387dfcd-32d5-47b6-b7cd-873a95a8661e.mp3" type="audio/mp3" />
      Your browser does not support the audio element.
    </audio>

    <a class="back-link" href="index.php">← Kembali</a>
  </div>

  <script>
    // Bisa ditambahin fitur script di sini nanti
  </script>
</body>
</html>
