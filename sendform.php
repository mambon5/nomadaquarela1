<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 $load = "false";
if(isset($_POST['submit'])){
       

//     require '../../PHPMailer-master/src/Exception.php';
//     require '../../PHPMailer-master/src/PHPMailer.php';
//     require '../../PHPMailer-master/src/SMTP.php';
    
    //online hosting
            require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

        $mail = new PHPMailer;
        $mail->isSMTP(); 
        // $mail->SMTPDebug = 2
        $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
        $mail->Host = "mail.gandi.net"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
        $mail->Port = 587; // TLS only
        $mail->SMTPSecure = 'tls'; // ssl is deprecated
        $mail->SMTPAuth = true;
        $mail->Username = 'contacto@nomadaquarela.world'; // email
        $mail->Password = 'Aquarela??22'; // password
        $mail->setFrom('contacto@nomadaquarela.world', 'Nomad Aquarela'); // From email and name
        
        $to = "contacto@nomadaquarela.world"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['name'];
        $phone = $_POST['phone'];
//         echo("informacio del email: " . $to . " " . $from . " " . $first_name );
        $subject = "Envio de formulario desde nomadaquarela.world";
        $subject2 = "Copia del envio del formulario";
        $message = $first_name . " con email " . $from . " y teléfono " . $phone . " ha escrito: <br> <i>"  . 
                $_POST['message'] . " </i>";
        $message2 = "Esta es una copia de tu mensaje. <br>" . $first_name . " con teléfono " . $phone . 
                " has escrito: <br> <i> " . $_POST['message'] . "</i>";


        $mail->addAddress($to, $first_name); // to email and name
        $mail->Subject = $subject;
        $mail->msgHTML($message); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
        $mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
        // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
        $mail->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );
        if(!$mail->send()){
//             echo "Mailer 1 Error: " . $mail->ErrorInfo;
        }else{
//             echo "Message 1 sent!";
        }
        
        $mail->ClearAllRecipients(); //clear previously recorded recipients..
        $mail->addAddress($from, "Nomad Aquarela"); // to email and name
        $mail->Subject = $subject2;
        $mail->msgHTML($message2); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
        $mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
        // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
        $mail->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );
        if(!$mail->send()){
//             echo "Mailer 2 Error: " . $mail->ErrorInfo;
        }else{
//             echo "Message 2 sent!";
        }
    $load="true";
    }
    
   
?>

<!DOCTYPE html>
<html>
<title>Nomad Aquarela</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/4/w3.css">
<link rel="stylesheet" href="w3css/googlefont.css">
<link rel="stylesheet" href="w3css/font-awesome.min.css">
<link rel="stylesheet" href="w3css/4/fonts.css">

<script>
$(document)
    .ready(function () {
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
load = <?php 
 echo($load) 
?>;

</script>



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
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Dibujos</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Clases</a> 
    <a href="#precios" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-precios fa-fw w3-margin-right"></i>Precios</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-phone fa-fw w3-margin-right"></i>Contacto</a>
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
    <br>
    <br>
      <span class="w3-margin-right"><h3>Dibujos:</h3></span> 

      <a href="#dibujos eunice" class="w3-button w3-white"> <!---<i class="fa fa-diamond w3-margin-right"></i>-->Eunice</a>
      <a href="#dibujos roma" class="w3-button w3-white w3-hide-small"><!--- <i class="fa fa-photo w3-margin-right"></i> --> Romà</a>
    </div>

  </header>
  <br>
 	<div class="w3-container">
 	<span class="w3-margin-right"><h3>Romà</h3>
 	</span>
 	</div>
 	

  <!-- First Photo Grid-->
  <div class="w3-row-padding" id="dibujos roma">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/barceloneta beach lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Platja de la Barceloneta</b></p>
        <p>Un dia que hi havia força gent a l'estiu.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
  	  <img src="dibujos/low res roma/bogatell beach 1 lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Bogatell Beach</b></p>
        <p>La playa de Bogatell un día de viento.</p>
       </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res roma/bogatell beach 2 lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Bogatell Beach 2</b></p>
        <p>La playa de Bogatell un día de más tranquilo.</p>
       </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/carrer verdi gracia senyor gras lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Carrer Verdi amb senyor Gras</b></p>
        <p>Un día assolejat de l'estiu vaig pintar aquest dolç carrer.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/castellersbdn012019_2_lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Castellers de Montacada</b></p>
        <p>Entrenaments dels Castellers de Montacada a la diada de Badalona 2019.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res roma/clownfishpoem2_lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Clownfish Poem</b></p>
        <p>Dibuixos sobre el poema al professor de Chicago, Igor.</p>
      </div>
    </div>
  </div>

  <!-- Third Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/font ciutadella lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Font de la ciutadella</b></p>
        <p>Dibuix de la font de la Ciutadella un dia gloriós.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/LaMola012019TonoAutomatico_lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>La Mola</b></p>
        <p>Vista desde Montacad i Reixac Santa Maria.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res roma/menjar coctails lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Tapes i Cotails</b></p>
        <p>A la Barceloneta.</p>
      </div>
    </div>
  </div>

  <!-- Fourth Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/menjar ragoli lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Menjar Indi Ragoli</b></p>
        <p>Acompanyat dels meus amics i un bon menjar Indi a la Barceloneta.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/musics placa diamant coolcats lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Músics Coolcats</b></p>
        <p>A la plaça del Diamant de Gràcia un dia d'agost.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res roma/pati tarongers escola labouré lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Pati dels Tarongers</b></p>
        <p>De la escola Labouré, al costat del MACBA.</p>
      </div>
    </div>
  </div>

  <!-- Fifth Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/pooya jessica sina diego lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Amics al costat del Hotel W</b></p>
        <p>Els meus amics: Pooya, Jessica, Sina, Diego.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res roma/SuperCastell09_2018_lr.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Super Castell</b></p>
        <p>A Montacada i Reixac per l'11 de Setembre del 2018..</p>
      </div>
    </div>

  </div>
  
  
  <div class="w3-container">
 	<span class="w3-margin-right"><h3>Eunice</h3>
 	</span>
 	</div>


 

  
<!-- EUNICE-->

<!-- Fourth Photo Grid-->
  <div class="w3-row-padding" id="dibujos eunice">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res eunice/escarabajo y su doble.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Escarabajo y su doble</b></p>
        <p>Dos escarabajitos creados de la mano de Eu.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
  	  <img src="dibujos/low res eunice/bicho y su amigo.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Bicho y su amigo</b></p>
        <p>Catarina trae a su amigo.</p>
       </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res eunice/caballet de mar lr.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Caballet de mar</b></p>
        <p>En su salsa..</p>
       </div>
    </div>
  </div>
  
    <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res eunice/calendario setiembre.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Calendario Setiembre</b></p>
        <p>Con sus setas de temporada.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
  	  <img src="dibujos/low res eunice/dibujo apoyado en pared.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Dibujo en Pared</b></p>
        <p>De unos tobillos bien floridos.</p>
       </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res eunice/dibujo en una sala.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Semiluna en pared</b></p>
        <p>Decorado con un estilo sobrio y agradable.</p>
       </div>
    </div>
  </div>
  
      <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res eunice/et vaig somiar.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Et vaig somiar</b></p>
        <p>Y em va encantar.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
  	  <img src="dibujos/low res eunice/flor rara lr.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lliri taronja</b></p>
        <p>Amb tronc verd.</p>
       </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res eunice/flores de fondo.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Fondo florido</b></p>
        <p>Con colores transparentes.</p>
       </div>
    </div>
  </div>
  
<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res eunice/fondo de malla creativa.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Fondo de malla creativa</b></p>
        <p>Con espacio multicolor.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
  	  <img src="dibujos/low res eunice/mandala de cristal.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Mandala de cristal</b></p>
        <p>Mandala delicada.</p>
       </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res eunice/mandala de otoño.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Mandala de Otoño</b></p>
        <p>Con algún vacío.</p>
       </div>
    </div>
  </div>
  

<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res eunice/Mandala llena.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Mandala Llena</b></p>
        <p>Y muy redonda.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
  	  <img src="dibujos/low res eunice/Merkaba con montañas pinkish.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Merkaba con Montañas</b></p>
        <p>De color pinkish y fantásticos.</p>
       </div>
    </div>
    <div class="w3-third w3-container">
      <img src="dibujos/low res eunice/pez y estrella de mar.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Pez y estrella</b></p>
        <p>Mar y bonito.</p>
       </div>
    </div>
  </div>
  
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dibujos/low res eunice/Pink moon.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Luna Rosa</b></p>
        <p>Con acuarelas y todo.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
  	  <img src="dibujos/low res eunice/tres escarabajos.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Tres escarabajos</b></p>
        <p>De distintos colores y carácter. Hay guerra, paz y tranquilidad.</p>
       </div>
    </div>

  </div>
  
  
  <!-- Pagination -->
<!--   <div class="w3-center w3-padding-32"> -->
<!--     <div class="w3-bar"> -->
<!--       <a href="#" class="w3-bar-item w3-button w3-hover-black">&laquo;</a> -->
<!--       <a href="#" class="w3-bar-item w3-black w3-button">1</a> -->
<!--       <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a> -->
<!--       <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a> -->
<!--       <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a> -->
<!--       <a href="#" class="w3-bar-item w3-button w3-hover-black">&raquo;</a> -->
<!--     </div> -->
<!--   </div> -->

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" >
    <div class="w3-col m6">
        <img src="images/montjuic mesa.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
        <img src="images/pintura paret.jpeg" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h3 id="about" class="red">Sobre nosotr@s</h3>
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
    
    <h3 class="red" id="precios">Cuánto cobramos</h3>
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
      <li>Enfermos crónicos (oncológicos, psicológicos, trauma, etc)</li>
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
    <form  id="form" method="post" action="sendform.php" >
      <div class="w3-section">
        <label>Nombre</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
       <label>Teléfono</label>
       <input class="w3-input w3-border" type="text" name="phone" required>
      
       </div>
      <div class="w3-section">
        <label>Mensaje</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
       <input type="submit" name="submit" value="Enviar mensaje" class="w3-button w3-black w3-margin-bottom">
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="images/eunice corta.jpg" class="w3-left w3-margin-right" style="width:80px">
          <span class="w3-large">Eunice</span><br>
          <span>Velázquez.  Soy original de Querétaro y me fascina pintar en acuarela animales y escenarios exóticos. Pongo purpurina (glitter) en los dibujos para darle un poco más de magia ;). Me encantan los Alebrijes</span>
        </li>
        </ul>
      <p>© 2021 Nomad Aquarela</p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">

        <li class="w3-padding-16">
          <img src="images/roma.jpg" class="w3-left w3-margin-right" style="width:80px">
          <span class="w3-large">Romà</span><br>
          <span>Masana. Holi! Jo he nascut a Barcelona i m'encanta dibuixar les persones, els carrers i les cares de la gent. Tinc un estil influenciat per la tècnica artística de la meva mare i la meva àvia. Crec que dibuixo i pinto una mica com elles.</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Aire libre</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Barcelona</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Acuarela</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Creatividad</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">SPAIN</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Dibujo</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Flores</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Amigos</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Edificios</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Paisaje</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Grupos reducidos</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Bichos</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Colores</span>
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