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
        <div class="front"><img src="../ảnh/Teeth.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Teeth1.jpg">
          <div class="text">Teeth</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Head.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Head1.jpg">
          <div class="text">Head</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Face.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Face1.jpg">
          <div class="text">Face</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Hair.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Hair1.jpg">
          <div class="text">Hair</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Eyes.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Eyes1.jpg">
          <div class="text">Eyes</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Nose.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Nose1.jpg">
          <div class="text">Nose</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Mouth.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Mouth1.jpg">
          <div class="text">Mouth</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Ears.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Ears1.jpg">
          <div class="text">Ears</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Hand.png" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Hand1.jpg">
          <div class="text">Hands</div>
        </div>
      </div>
      <div class="card" onclick="flipCard(this)">
        <div class="front"><img src="../ảnh/Legs.jpg" alt="img" draggable="false"></div>
        <div class="back" onclick="flipCardToSpeech(this)">
          <img src="../ảnh/Legs1.jpg">
          <div class="text">Legs</div>
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
          <button class="tablinks" onclick="openCity(event, 'Teeth')"id="defaultOpen">Teeth</button>
          <button class="tablinks" onclick="openCity(event, 'Head')">Head</button>
          <button class="tablinks" onclick="openCity(event, 'Face')">Face</button>
          <button class="tablinks" onclick="openCity(event, 'Hairs')">Hairs</button>
          <button class="tablinks" onclick="openCity(event, 'Eyes')">Eyes</button>
          <button class="tablinks" onclick="openCity(event, 'Nose')">Nose</button>
          <button class="tablinks" onclick="openCity(event, 'Mouth')">Mouth</button>
          <button class="tablinks" onclick="openCity(event, 'Ears')">Ears</button>
          <button class="tablinks" onclick="openCity(event, 'Hands')">Hands</button>
          <button class="tablinks" onclick="openCity(event, 'Legs')">Legs</button>
        </div>
        
        <div id="Teeth" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/tvCeSX9Pthw?si=c3MwyOID05JtPUEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      
        <div id="Head" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/ORLN1UZYJD0?si=WVO0lznZbp_b0V0C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Face" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/Ma5EMrurTmU?si=9KvsofTFc0cRXwAC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
        </div>

        <div id="Hairs" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/1q7coZjoIhk?si=qyLO_DSg76csG_Ns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Eyes" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/TqX8Q_I0gG4?si=r_WdiX1QvNH_GXBJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Nose" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/lo6uyfMww-w?si=8gDGRbRNBbEytAFL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div id="Mouth" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/UTJniBAx5fY?si=8KINAJFOCxhjkjSo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Ears" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/HMXoHKwWmU8?si=x8nIOpVP9QoE2hfu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Hands" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/Scrq15ikvmw?si=_aQKgS7LpE1S8yee" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div id="Legs" class="tabcontent">
          <iframe src="https://www.youtube.com/embed/EvjsGTSJFuI?si=8xduLFCpGkLXY68y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      <div class="bottom"></div>
    </div>
    
  </div>
  <script src="../JAVASCRIPT/script.js"></script>
</body>
</html>
