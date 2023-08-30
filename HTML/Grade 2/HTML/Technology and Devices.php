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
        <div class="front"><img src="../ảnh/Computer.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Computer1.png">
          <div class="text">Computer</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Smart phone.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Smart phone1.jpg">
          <div class="text">Smart phone/cell phone</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Camera.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Camera1.jpg">
          <div class="text">Camera</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Headphones.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Headphones1.png">
          <div class="text">Headphone</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Fridge.png" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Fridge1.png">
          <div class="text">Fridge</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Microwave oven.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Microwave oven1.png">
          <div class="text">Microwave oven</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Electric cooker.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Electric cooker1.jpg">
          <div class="text">Electric cooker</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Television.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Television1.jpg">
          <div class="text">Television</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Radio.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Radio1.png">
          <div class="text">Radio</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Electric fan.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Electric fan1.jpg">
          <div class="text">Electric fan</div>
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
          <button class="tablinks" onclick="openCity(event, 'Computer')"id="defaultOpen">Computer</button>
          <button class="tablinks" onclick="openCity(event, 'Smart phone')">Smart phone/cell phone</button>
          <button class="tablinks" onclick="openCity(event, 'Camera')">Camera</button>
          <button class="tablinks" onclick="openCity(event, 'Headphones')">Headphones</button>
          <button class="tablinks" onclick="openCity(event, 'Fridge')">Fridge</button>
          <button class="tablinks" onclick="openCity(event, 'Microwave oven')">Microwave oven</button>
          <button class="tablinks" onclick="openCity(event, 'Electric cooker')">Electric cooker</button>
          <button class="tablinks" onclick="openCity(event, 'Television')">Television</button>
          <button class="tablinks" onclick="openCity(event, 'Radio')">Radio</button>
          <button class="tablinks" onclick="openCity(event, 'Electric fan')">Electric fan</button>
        </div>
        
        <div id="Computer" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/RmbFJq2jADY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      
        <div id="Smart phone" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/DoBhZEgjEuA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Camera" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/Ey6S3rKH_o4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
        </div>

        <div id="Headphones" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/d3XBmz7Zuoo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Fridge" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/avdC6LXOV74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Microwave oven" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/qCRm503O0po" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Electric cooker" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/TWV3FbgPPXo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Television" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/iHdsRBzKAmQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Radio" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/3d8vNnw9uWk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Electric fan" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/thwNxtEE7KI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      <div class="bottom"></div>
    </div>
    
  </div>
  <script src="../JAVASCRIPT/script.js"></script>
</body>
</html>
