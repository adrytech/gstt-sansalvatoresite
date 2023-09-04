<?php
session_start();

?>

<!DOCTYPE html>
<html lang="it">

    <head>
        <!-- Required meta tags -->
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Bootstrap CSS -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/calendar.js"></script>

        <link rel="stylesheet" href="css/generic.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/banner.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/chisiamocard.css">
        <link rel="stylesheet" href="css/map.css">
        <link rel="stylesheet" href="css/cookie.css">
        <link rel="stylesheet" href="css/loginform.css">
        <link rel="stylesheet" href="css/calendar.css">

        <title>T.T.Derthona - Login</title>
    
    </head>

    <body onLoad="date()">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

            <div class="container-fluid my-container-fluid">
    
              <a class="navbar-brand" href="index.php">
                <img src="Derthona Logo/Derthona Logo 2.png" alt="" width="auto" height="30px" class="d-inline-block align-text-top">
                T.T.Derthona
              </a>
    
              <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php#home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#chisiamo">Chi siamo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#dove">Dove</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#quando">Quando</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#contatti">Contatti</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#crediti">Crediti</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-success" id="userid" href="">Ciao <?php echo session_name($name);?></a>
                  </li> 
                </ul>
        

              </div>
    
    
            </div>
    
        </nav>

        <div class="conteiner-fluid content">

            <div class="conteiner text-center" style="margin: 50px;">
            
                <p class="h2" style="font-size: 50px; color: hsl(42, 90%, 46%);"> Area riservata!</p>
                <br>
                <p class="h5">In questa area tu puoi prenotare la palestra nei seguenti giorni:</p>
                <br>
                <p class="list-item">● Martedì</p>
                <p class="list-item">● Giovedì</p>
                

                <div class="calendar card">

                  <div class="row justify-content-center">
                    
                    <div class="text-danger">
                      <h2 id="date" class="text-uppercase"></h2>
                      <h6 id="orario" class="orario">20:00 - 21:30</h6>
                    </div>

                    <div class="col-md-8" id="col1">
                      <div class="prenotati">
                        <h4>Prenotati:</h4>
                    </div>

                  </div>
                  
                  <div class="justify-content-center text-center" id="btn">
                    <button onclick="change()" type="submit" class="buttonprenota" id="buttonchange">Prenota</button>
                  </div>
                  
             
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