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
        <div class="front"><img src="../ảnh/Piano.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Piano1.png">
          <div class="text">Piano</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Guitar.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Guitar1.png">
          <div class="text">Guitar</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Drum Set.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Drum Set1.jpg">
          <div class="text">Drum Set</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Violin.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Violin1.jpg">
          <div class="text">Violin</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Saxophone.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Saxophone1.jpg">
          <div class="text">Saxophone</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Flute.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Flute1.jpg">
          <div class="text">Flute</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Trumpet.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Trumpet1.jpg">
          <div class="text">Trumpet</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Xylophone.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Xylophone1.jpg">
          <div class="text">Xylophone</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Harmonica.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Harmonica1.jpg">
          <div class="text">Harmonica</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Organ.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Oragn1.gif">
          <div class="text">Organ/Keyboard</div>
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
          <button class="tablinks" onclick="openCity(event, 'Piano')"id="defaultOpen">Piano</button>
          <button class="tablinks" onclick="openCity(event, 'Guitar')">Guitar</button>
          <button class="tablinks" onclick="openCity(event, 'Drum Set')">Drum Set</button>
          <button class="tablinks" onclick="openCity(event, 'Violin')">Violin</button>
          <button class="tablinks" onclick="openCity(event, 'Saxophone')">Saxophone</button>
          <button class="tablinks" onclick="openCity(event, 'Flute')">Flute</button>
          <button class="tablinks" onclick="openCity(event, 'Trumpet')">Trumpet</button>
          <button class="tablinks" onclick="openCity(event, 'Xylophone')">Xylophone</button>
          <button class="tablinks" onclick="openCity(event, 'Harmonica')">Harmonica</button>
          <button class="tablinks" onclick="openCity(event, 'Organ/Keyboard')">Organ/Keyboard</button>
        </div>
        
        <div id="Piano" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/ln6BHszNoz8?si=Ylt2C0Y0CguedMIO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      
        <div id="Guitar" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/SAdk4FuE1pU?si=k5rPIsr9GhGmjLWY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Drum Set" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/BiSTHHG1DqY?si=5i8CrijM6G7aCz1m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
        </div>

        <div id="Violin" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/TuWcC7JtEbA?si=vzy8CrElHH-7erpR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Saxophone" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/9KbPMwstGyM?si=7VxjiAN5pn5ZcR34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Flute" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/OWT4VlGm_N8?si=A7VmlwlWJKI6M3UC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Trumpet" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/QCIGNNa6k5U?si=jmOMaxhSoy5ph-n4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Xylophone" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/Vx93TKR9_YA?si=KPS56gqVbWgvyTT6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Harmonica" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/UmJOwNzrsec?si=JEn0coSEEZtHLxeV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Organ/Keyboard" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/77SAx5496GU?si=YaQZ1ktWqBBiBeEN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      <div class="bottom"></div>
    </div>
    
  </div>
  <script src="../JAVASCRIPT/script.js"></script>
</body>
</html>
