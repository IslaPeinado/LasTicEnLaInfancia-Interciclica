<!DOCTYPE html>
<html lang="es">         
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css" />
    <!--
Tooplate 2111 Pro Line
http://www.tooplate.com/view/2111-pro-line
-->
  </head>
        <div class="container">
            <div class="row tm-row tm-mb-120">
                <div class="col-12">
                    <h2 class="tm-color-primary tm-post-title tm-mb-60">Contactanos</h2>
                </div>
                <div class="col-lg-7 tm-contact-left">
                    <form method="POST" action="conexion.php" class="mb-5 ml-auto mr-0 tm-contact-form">                        
                        <div class="form-group row mb-4">
                            <label for="nombre" class="col-sm-3 col-form-label text-right tm-color-primary"><h3>Nombre</h3></label>
                            <div class="col-sm-9">
                                <input class="form-control mr-0 ml-auto" name="nombre" id="nombre" type="text" required>                            
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary"><h3>Email</h3></label>
                            <div class="col-sm-9">
                                <input class="form-control mr-0 ml-auto" name="email" id="email" type="email" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="asunto" class="col-sm-3 col-form-label text-right tm-color-primary"><h3>Asunto</h3></label>
                            <div class="col-sm-9">
                                <input class="form-control mr-0 ml-auto" name="asunto" id="asunto" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="mensaje" class="col-sm-3 col-form-label text-right tm-color-primary"><h3>Mensaje</h3></label>
                            <div class="col-sm-9">
                                <textarea class="form-control mr-0 ml-auto" name="mensaje" id="mensaje" rows="8" required></textarea>                                
                            </div>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col-12">
                                <button class="tm-btn tm-btn-primary tm-btn-small">Enviar</button>                        
                            </div>                            
                        </div>   

                            <?php
                            if (isset($_GET["enviado"])  && $_GET["enviado"] == "true") {
                                echo("<script> window.alert('Enviado')</script>");
                            }
                            ?>  

                    </form>



                </div>
                <!-- <div class="col-lg-5 tm-contact-right">
                    <span class="d-block">
                        <img src="" alt="">
                         <p>Tel:</p>
                        <a href="tel:060-070-0980" class="tm-color-gray"><p>060-070-0980</p></a>
                    </span>
                    <span class="mb-4 d-block">
                        <p>Email:</p>
                        <a href="mailto:info@company.com" class="tm-color-gray"><p>info@company.com</p></a>
                    </span>
                    <p class="mb-5 tm-line-height-short">
                        No dudes en seguirnos en nustras redes sociales para saber más
                    </p>
                    <ul class="tm-social-links">
                        <li class="mb-2">
                            <a href="https://facebook.com" class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://twitter.com" class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://youtube.com" class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://instagram.com" class="d-flex align-items-center justify-content-center mr-0">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>    
        </main>
    </div>
    </div>  
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>