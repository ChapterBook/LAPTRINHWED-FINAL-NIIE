<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>
<!DOCTYPE >
<html>
<head>
  <title>EBOOK ENGLISH</title>
  <link rel="icon" type="image/x-icon" href="../ảnh/Owl.png">
  <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
  <div id="icon"><img src="../ảnh/Owl.png"></div>
  <div class="wrapper">
    <i id="left" class="fa-solid fa-angle-left"><img src="../ảnh/previous.png"></i>
    <div class="carousel">
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/America.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/America1.jpg">
          <div class="text">America/USA</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Russia.png" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Russia1.jpg">
          <div class="text">Russia</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/China.png" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/China1.jpg">
          <div class="text">China</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Germany.png" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Germany1.jpg">
          <div class="text">Germany</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/France.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/France1.jpg">
          <div class="text">France</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Japan.png" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Japan1.jpg">
          <div class="text">Japan</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Saudi Arabia.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Saudi Arabia1.jpg">
          <div class="text">Saudi Arabia</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/South Korea.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/South Korea1.png">
          <div class="text">Korea/South Korea</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Canada.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Canada1.png">
          <div class="text">Canada</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Vietnam.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Vietnam1.jpg">
          <div class="text">Vietnam</div>
        </div>
      </div>
    </div>
    <i id="right" class="fa-solid fa-angle-right"><img src="../ảnh/next.png"></i>
  </div>
  <div class="latter">
    <button id="backButton">Back</button>
    <div class="avatar_owl"><img src="../ảnh/owlnice.png"></div>
    <div class="part_video">
      <div class="noted">
        <div class="title">List</div>
        <div class="content">This is video</div>
      </div>
      <div class="video">
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'America/USA')"id="defaultOpen">America/USA</button>
          <button class="tablinks" onclick="openCity(event, 'Russia')">Russia</button>
          <button class="tablinks" onclick="openCity(event, 'China')">China</button>
          <button class="tablinks" onclick="openCity(event, 'Germany')">Germany</button>
          <button class="tablinks" onclick="openCity(event, 'France')">France</button>
          <button class="tablinks" onclick="openCity(event, 'Japan')">Japan</button>
          <button class="tablinks" onclick="openCity(event, 'Saudi Arabia')">Saudi Arabia</button>
          <button class="tablinks" onclick="openCity(event, 'Korea/South Korea')">Korea/South Korea</button>
          <button class="tablinks" onclick="openCity(event, 'Canada')">Canada</button>
          <button class="tablinks" onclick="openCity(event, 'Vietnam')">Vietnam</button>
        </div>
        
        <div id="America/USA" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/OdigP3FVZBE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Russia" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/eIHQKQxKKhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="China" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/FqZBIjKmls0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Germany" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/hRts4_qpqr4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="France" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/F-xdxWg7OcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Japan" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/QEC3MrWgnMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Saudi Arabia" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/VUFvBRC609s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Korea/South Korea" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/7EX5wTOQTvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Canada" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/zm6gHJ3SQIM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Vietnam" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/ywi5C1T2F7Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      <div class="bottom"></div>
    </div>
    
  </div>
  </main>
  <script src="../JAVASCRIPT/script.js"></script>
</body>
</html>
