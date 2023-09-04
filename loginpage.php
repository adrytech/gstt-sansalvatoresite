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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css ">
        
        
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/login.js"></script>

        <link rel="stylesheet" href="css/generic.css">
        <link rel="stylesheet" href="css/navbar.css">    
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/cookie.css">
        <link rel="stylesheet" href="css/loginform.css">
        
        <title>GSTT San Salvatore - Login</title>
    
    </head>

    <body></body>

        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

            <div class="container-fluid my-container-fluid">
    
              <a class="navbar-brand" href="index.php">
                <img src="img/logogsttsansalvatore.png" alt="" width="auto" height="30px" class="d-inline-block align-text-top">
                ASD GSTT San Salvatore
              </a>
    
              <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">

                <li>
                <a href="/gsttsansalvatore" class="nav-link"><i class="fas fa-house"></i></a>
                </li>
              
              </ul>

              </div>
    
            </div>
    
        </nav>


        <div class="conteiner-fluid content">

          <div class="row d-flex justify-content-center align-items-center">

              <div class="col-12 col-md-8 col-lg-6 col-xl-5" style="max-width: 1200px;">
                
                <div class="card bg-dark text-white" style="border-radius: 1rem; margin-top:6rem; margin-bottom:6rem;">
                
                  <div class="card-body p-5 text-center">
              
                  

                  <img src="img/logogsttsansalvatore.png" alt="Responsive image" width="100px" height="100px" class="logocard img-fluid">

                    <form action="login/login.php" method="POST" class="mb-md-5 mt-md-4 pb-5 form-group">

                      <h2 class="fw-bold mb-2 text-uppercase">GSTTSanSalvatore Login</h2>
                      <br>
                      <p class="text-white-50 mb-5">Inserisci il tuo nome, cognome e Password per accedere alla tua area riservata</p>

                      <div class="row">

                        <div class="col">

                          <label class="form-label" for="name">Nome</label>
                          <br>
                          <input type="text" name="name" id="name" placeholder="Inserire il nome" required class="mb-4 form-control" maxlength="50">
                          <br>

                        </div>

                        <div class="col">

                          <label class="form-label" for="surname">Cognome</label>
                          <br>
                          <input type="text" name="surname" id="surname" placeholder="Inserire il cognome" required class="form-control mb-4" maxlength="50">
                          <br>

                        </div>

                      </div>
                     
                      <label class="form-label" for="password">Password</label>
                      <br>
                      <input type="password" name="password" id="password" placeholder="Inserire la password" required class="form-control mb-4" maxlength="20">
                        
                      <p>show password</p>
                      <label class="switch">
                      
                        <input type="checkbox" id="checkbox" onclick="passVisible()">

                        <div class="slider round"></div>
                       
                      </label>
                      
                      
                      <br>

                      <div class="form-check mb-2">
                        <input class="form-check-input d-flex justify-content-start" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label  d-flex justify-content-between" for="autoSizingCheck">Remember me</label>
                      </div>

                      <button class="btn btn-outline-light btn-lg px-5 mb-0" type="submit">Login</button>

                    </form>
              
                  <div>

                  <p class="text-white-50 mb-0">Per poter accedere devi essere iscritto alla società.</p>

                    
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