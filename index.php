<!DOCTYPE html>
<html lang="it">

    <head>
        <!-- Required meta tags -->
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Bootstrap CSS -->
        
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="icon" type="image/x-icon" href="favicon.ico">

      <script type="text/javascript" src="js/main.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="css/generic.css">
      <link rel="stylesheet" href="css/navbar.css">
      <link rel="stylesheet" href="css/banner.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/chisiamocard.css">
      <link rel="stylesheet" href="css/map.css">
      <link rel="stylesheet" href="css/cookie.css">
     
      <title>GSTT San Salvatore</title>
    
    </head>

    <body>

      <!--
        SCRIPT PER CARD AOS ANIMATIONS
      -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
          duration: 500,
        });
      </script>
        
        <!--
        NAVBAR
      -->
      <?php
        include("php/navbar.php");
      ?>  

      <!--
      HOME
      -->
      <div class="conteiner-fluid" id="banner">
      
        <img src="img/logo+bordo.png" alt="Responsive image" class="img-fluid logobanner">
        <h1>TennisTavolo <br> SAN SALVATORE</h1>
         
      </div>


     

      <!--
      CONTENT
      -->
      <div class="content">

        <!--
          GREEN LINE2
        -->
        <div id="greenline2" class="conteiner-fluid"></div>

        <!--
          CHI SIAMO
        -->
        <div class="conteiner-fluid">
  
          <div class="conteiner" id="chisiamo">
           <br>
          </div>
  
          <div class="conteiner text-center" style="margin: 50px;">
            
            <p class="h2" style="font-size: 60px; color: hsl(42, 90%, 46%);"> Chi Siamo?</p>
      
          </div>
      
          <div class="text-center" style="font-size: 20px; margin: 50px;">
      
            <li class="list-group-flush">
              Siamo una ristretta cerchia di persone che ha una passione in comune e con l'obbiettivo di miglioramento. <br>
            </li>
            <br>
            <li class="list-group-flush">
              T.T.Derthona è una società dilettantistica di TennisTavolo nata con lo scopo di far conoscere questo magnifico sport divertendosi e allenandosi in compagnia!
            </li>
            <br>
            <li class="list-group-flush">
              La nostra squadra è iscritta alla Federazione Italiana TennisTavolo <a href="http://piemonte.fitet.org/it/piemonte/federazioni-sportive/dettagliosocieta.html?societa=784">(Fitet)</a> per la partecipazione di tornei e campionati. In questo momento giochiamo un campionato di D2 con la speranza di giocare a livelli più alti.
            </li>
            <br>
            <li class="list-group-flush">
              La nostra palestra dispone di 4 tavoli regolamentari e omologati (Butterfly, Stiga, Cornelleau), transenne, riscaldamento, defibrillatore e spogliatoi.
            </li>
            <br>
            <li class="list-group-flush" style="font-size: 22px;">
              Vi aspettiamo in moltissimi!
            </li>
            <br>
            <br>
            <p>&#8595;</p>
      
          </div>
    
          <div class="card-group">
  
            <div class="card border-0 border-right-0 border-left-0" id="card" data-aos="flip-right">
              <img id="cardimg1" class="imgeffects" src="" alt="">
              <div class="border-0"id="overlay">
                <h1 id="titlecard">D2</h1>
                <h2 id="subtitle">La squadra di d2</h2>
              </div>
            </div>
  
            <div class="card border-0" id="card" data-aos="zoom-in">
              <img id="cardimg2" class="imgeffects" src="" alt="">
              <div id="overlay">
                <h1 id="titlecard">PostPartita</h1>
                <h2 id="subtitle">Che Vittoria!</h2>
              </div>
            </div>
  
            <div class="card border-0" id="card" data-aos="flip-left">
              <img id="cardimg3" class="imgeffects" src="" alt="">
              <div id="overlay">
                <h1 id="titlecard">PrePartita</h1>
                <h2 id="subtitle">Carichi per la partita!</h2>
              </div>
            </div>
            
          </div>
  
      
        </div>  
        
        <!--
          DOVE
        -->  
        <div class="conteiner-fluid">

          <div class="conteiner" id="dove">
            <br>
            <br>
            <br>
          </div>
            
          <div class="conteiner text-center">
    
            <p class="h2" style="font-size: 60px; color: hsl(42, 90%, 46%);"> Dove?</p>
        
          </div>
    
          <div class="text-center" style="font-size: 20px;">
       
            <li class="list-group-flush">
              La nostra società pongistica, si trova a Tortona (AL) <br>
              in Corso Giuseppe Garibaldi, 9.
            </li>
            <br>
            <li class="list-group-flush">
              Qui sotto vi lasciamo una mappa per potersi orientarsi meglio!
            </li>
            <br>
            <br>
            <p>&#8595;</p>
            <br>

            <div class="map-responsive" style="margin:50px;">
    
              <iframe id="map-shadow" class="rounded border-primary" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2821.485290783404!2d8.566636076621828!3d44.99476616463709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4787a120cf18147f%3A0xadcb892a008459e6!2sPalestra%20comunale!5e0!3m2!1sit!2sit!4v1693834911595!5m2!1sit!2sit" width="" height="" frameborder="0" style="border:0" allowfullscreen ></iframe>
             
            </div>

            <div class="conteiner" id="quando">

              <br>
              <br>
              
            </div>

          </div>
    
        </div>
            
        <!--
          QUANDO
        -->
        <div class="conteiner-fluid">
      
        
          <div class="conteiner text-center">
      
            <p class="h2" style="font-size: 60px; color: hsl(42, 90%, 46%);"> Quando?</p>
          
          </div>
                  
          <div class="text-center" style="font-size: 20px; margin: 50px;">
          
            <li class="list-group-flush">
              I nostri giorni di allenamento sono:
            </li>
            <br>
            <p>- Martedì <br>- Giovedì</p>
            <br>
            <li class="list-group-flush">
              Dalle 20:00 alle 22:00!
            </li>
            <br>
            <br>
            <p>In futuro c'è la speranza di aggiungere un giorno di allenamento <br> per dare spazio a tutti.</p>
            <br>
            
            <div class="conteiner" id="contatti">
              <br>
            </div>

          </div>
      
        </div>

        <!--
          CONTATTI
        -->
        <div class="conteiner-fluid">
                    
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      
          <div class="conteiner text-center">
      
            <p class="h2" style="font-size: 60px; color: hsl(42, 90%, 46%);">Contatti</p>
          
          </div>
      
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

          <div class="text-center" style="font-size: 20px; margin: 50px;">
            
            <li class="list-group-flush">
              Qui potrai trovare tutti i nostri contatti per raggiungerci al meglio!
            </li>

            <br>

            <li class="list-group-flush">
              Presidente: Tosetti Andrea
            </li>
            <br>
            <li class="list-group-flush">
              Numero di telefono (presidente): <a href="tel:3397304875">3397304875</a> 
            </li>
            <br>
            <li class="list-group-flush">
              Email: <a href="mailto:ttsansalvatore@gmail.com"><u>ttsansalvatore@gmail.com</u> </a> 
            </li>

          </div>

          <div class="conteiner text-center" style="margin: 50px;">

            <p class="h2" style="font-size: 60px; color: hsl(42, 90%, 46%);"> Social</p>
    
          </div>

          <div class="text-center" style="font-size: 20px; margin: 50px;">

            <li class="list-group-flush">
              Facebook: <a href="https://www.facebook.com/groups/411057292583276"><u>facebook.com/GSTTSanSalvatore</u> </a> 
            </li>
            <li class="list-group-flush">
              Instagram: <a href="https://www.instagram.com/gsttsansalvatore/"><u>instagram.com/GSTTSanSalvatore</u> </a> 
            </li>
            
            <div class="container-fluid text-center">
              <div class="row">
                <div class="col">
                  <blockquote style='width:500px;' class='instagram-media' data-instgrm-version='14'>
                    <a href='https://www.instagram.com/p/Cryy2oZs1-Z/?img_index=1' ></a>
                  </blockquote>
                  <script src="//www.instagram.com/embed.js"></script>
                </div>
                <div class="col">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D100425076485509%26id%3D100095540490179&show_text=true&width=500" width="500" height="424" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
              </div>
            </div>

            
            
          
          </div>

          <div class="conteiner text-center" style="margin: 50px;">

            <p class="h2 text-success" style="font-size: 15px;"> Codice Affiliazione FiTeT: 3173</p>
    
          </div>

        </div>    
      
      </div>

      <!--
        FOOTER
      -->
      <?php
        include("php/footer.php");
      ?>     
      
      
    </body>

</html>

