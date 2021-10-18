<!DOCTYPE html>
<html>
<title>Nomad Aquarela</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/4/w3.css">
<link rel="stylesheet" href="w3css/googlefont.css">
<link rel="stylesheet" href="w3css/font-awesome.min.css">
<link rel="stylesheet" href="w3css/4/fonts.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: Amatic}
body {font-family: Montserrat}
a, button {font-family:OpenSans}
h3 {color: #d92929}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div style="text-align:center">
  <span class="dot"></span>
</div>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="images/logo4.png" style="width:45%;" class="w3-round"><br><br>
    <h3 style="color:#d92929 ">PORTFOLIO</h3>
    <p class="w3-text-grey">escola d'aquarel·la</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>GALERIA</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE NOSOTR@S</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-phone fa-fw w3-margin-right"></i>CONTACTO</a>
  </div>
  <div class="w3-panel w3-large">
    <a class="fa fa-facebook-official w3-hover-opacity" target="blank" href="https://www.facebook.com/nomadaquarela"></a>
    <a class="fa fa-instagram w3-hover-opacity" target="blank" href="https://www.instagram.com/nomad_aquarela/"></a>
    <a class="fa fa-meetupp w3-hover-opacity" target="blank" href="https://www.meetup.com/es-ES/acuarela-urbana/"></a>
    <a class="fa fa-linkedin w3-hover-opacity" target="blank" href="https://es.linkedin.com/company/nomad-aquarela?trk=public_profile_topcard-current-company"></a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
        <h2 style="color:#d92929"><span style="font-family:OpenSans;font-size:50px;">NOMAD </span>aquarela</h2>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"> <!---<i class="fa fa-diamond w3-margin-right"></i>-->Design</button>
      <button class="w3-button w3-white w3-hide-small"><!--- <i class="fa fa-photo w3-margin-right"></i> --> Photos</button>
      <button class="w3-button w3-white w3-hide-small"><!--- <i class="fa fa-map-pin w3-margin-right"></i> -->Art</button>
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/w3images/mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/w3images/lights.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="/w3images/nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/w3images/p1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/w3images/p2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="/w3images/p3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">&laquo;</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">&raquo;</a>
    </div>
  </div>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
        <img src="images/montjuic mesa.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
        <img src="images/pintura paret.jpeg" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h3 class="red">Sobre nosotr@s</h3>
            <h3 >Una pequeña presentación</h3>
            <p ><strong>Clases de acuarela al aire libre </strong></p>
            <p >Damos clases de acuarela cada semana al aire libre y en locales. Elegimos lugares particulares que inspiren a las personas a dibjujar más y con más pasión. Nos centramos en el dibujo y la pintura en
            acuarela sobre papel de 300gr de tamaño din-A4. Los profes tenemos estilos diferentes pero a los dos nos gusta aprender uno del otro.</p>
            <img src="images/hotel w eu roma2.jpeg"  class="img1" style="width:200px;">
                <p><strong>Nuestro método de enseñanza</strong></p>
                <p>Estamos un poco en contra del método tradicional o académico de enseñanza de bellas artes (al menos Romà). Creemos que se debe primero dar al estudiante tiempo para intentar pintar por sí sola, y luego
                si no sabe cómo continuar o qué hacer, entonces sí darle un consejo. Manejamos las proporciones y los puntos de fuga pero no nos gusta saturar a los estudiantes con teoría antes de pasar a la práctica. Nos gusta dar consejos 
                progresivamente a medida que el estudiante va ganando confianza con la acuarela.</p>
    <hr>
    
    <h3 class="red">Qué aprenderás en nuestras clases</h3>
    <!-- Progress bars / Skills -->
    <p>Pintura en acuarelas</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:95%">95%</div>
    </div>
    <p>Dibujo</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:85%">85%</div>
    </div>
    <p>Creatividad</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:80%">80%</div>
    </div>
    <p>
      <button class="w3-button w3-teal w3-padding-large w3-margin-top w3-margin-bottom"
              onclick="location.href='#contact'">
        <i class="fa fa-download w3-margin-right"></i>Apúntate a las clases
      </button>
    </p>
    
                <h3 >¿Qué ofrecemos?</h3>
            <p class="clr-6"><strong>Clases de acuarela e ilustraciones</strong></p>
            <p class="clr-6">La verdad esque nos encanta pintar, y vendemos nuestros dibujos y sus prints. También nos emociona dar clases.</p>
       
              <ul class="list-2">
                <li><a href="#">Clases de acuarela al aire libre</a></li>
                <li><a href="#">Prints de nuestros dibujos</a></li>
                <li><a href="#">Dibujos originales</a></li>
              </ul>
              <ul class="list-2 last">
                <li><a href="#">Clases de acuarela sobre cielos, paisejes, personas etc...</a></li>
                <li><a href="#">Taller de pintura botánica (pinta flora)</a></li>
                <li><a href="#">Consejos y ejemplos de pintura gratis online en nuestras redes </a> <a class="fa fa-facebook-official w3-hover-opacity" target="blank" href="https://www.facebook.com/nomadaquarela"></a>
    <a class="fa fa-instagram w3-hover-opacity" target="blank" href="https://www.instagram.com/nomad_aquarela/"></a>
    <a class="fa fa-meetupp w3-hover-opacity" target="blank" href="https://www.meetup.com/es-ES/acuarela-urbana/"></a>
    <a class="fa fa-linkedin w3-hover-opacity" target="blank" href="https://es.linkedin.com/company/nomad-aquarela?trk=public_profile_topcard-current-company"></a></li>
              </ul>
          
    <hr>
    
    <h3 class="red">Cuanto cobramos</h3>
    <!-- Pricing Tables -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">Clase</li>
          <li class="w3-padding-16">material incluido</li>
          <li class="w3-padding-16">grupo reducido</li>
          <li class="w3-padding-16">ambiente que inspira</li>
          <li class="w3-padding-16">2h de clase</li>
          <li class="w3-padding-16">financias un proyecto comprometido socialmente</li>
                    

          <li class="w3-padding-16">
            <h2> 20 €</h2>
            <span class="w3-opacity">por sesión</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
      
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-teal w3-xlarge w3-padding-32">4 clases al mes</li>
          <li class="w3-padding-16">material incluido</li>
          <li class="w3-padding-16">grupo reducido</li>
          <li class="w3-padding-16">ambiente que inspira</li>
          <li class="w3-padding-16">2h de clase</li>
          <li class="w3-padding-16">financias un proyecto comprometido socialmente</li>
          <li class="w3-padding-16">
            <h2> 70 €</h2>
            <span class="w3-opacity">al mes</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
      
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-teal w3-xlarge w3-padding-32">Print</li>
          <li class="w3-padding-16">réplica de dibujo original</li>
          <li class="w3-padding-16">con tarjeta agradecimiento</li>
          <li class="w3-padding-16">sin marco</li>
          <li class="w3-padding-16">envio a todo el mundo</li>
          <li class="w3-padding-16">
            <h2> 20 €</h2>
            <span class="w3-opacity">por print</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    </div>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third" >
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">Dibujo original</li>
          <li class="w3-padding-16">dibujo original</li>
          <li class="w3-padding-16">con tarjeta agradecimiento</li>
          <li class="w3-padding-16">Usin marco</li>
          <li class="w3-padding-16">enviamos a todo el mundo</li>
          <li class="w3-padding-16">
            <h2>95 €</h2>
            <span class="w3-opacity">por dibujo</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  
  <h3>Obra social</h3>
  
  <p>Estamos comprometidos con llevar el arte visual, en particular la acuarela, a personas que no tienen acceso a él.
  Lo que denominamos Grupos con Difícil Acceso al Arte (GDAA). Entre estos colectivos estarían:</p>
  <ul>
      <li>Enfermos crónicos (oncológicos, psicológicos, trauma, etc</li>
      <li>Niños, y jóvenes que no tienen una familia que les sostenga y pueda pagar clases de arte</li>
  </ul>
  
  Estamos firmemente comprometidos con llevar la pintura en acuarela a todo el mundo que podamos, y por eso hemos ofrecido un 
  proyecto en Fabra i Coats en este sentido
  
  <hr>
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h3 class="red" id="contact">Contáctanos</h3>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p style="font-size:18px"><p style="font-size:13px">contacto@nomadaquarela.world</p></p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Barcelona, Espanya</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>+34 611 648 478</p>
      </div>
    </div>
    
    <p>Envíanos un email, Whatsapp con el número aquí marcado, o una solicitud en la página web comentándonos cúando te gustaría
        hacer las clases. Puedes consultar y apuntarte a las clases actuales en <a href="https://www.meetup.com/es-ES/acuarela-urbana/"> Meetup </a>si lo prefieres.</p>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Nombre</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Mensaje</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Enviar mensaje</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>© 2021 Nomad Aquarela</p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24" style="font-size:10px">© 2021 Nomad Aquarela</div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>