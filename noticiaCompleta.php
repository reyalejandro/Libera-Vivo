<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libera vivo - El centro de los hechos</title>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="admin">
        <a href="adminlogin.php" id="icono" style="margin-right:4em; margin-bottom:3em;"><i class="fas fa-user-cog fa-4x"></i></a>
        </div>

        <div class="container">
    <div class="row">
        <div class="col-md-12"> 
           <a href="index.html"> <h1 id="titulo"> Libera vivo </h1></a>
        </div>
    </div>
</div>



       <br> <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-12" id="contNoticiascomp">
                <?php include 'getNoticias.php';
                    $noticias = getNoticia($_GET['id']);

                        echo '<h1>',$noticias['titulo'],'</h1>','<br>';
                        echo '<h5>',$noticias['copete'],'</h5>','<br>';
                        echo '<img class="img-fluid mb-8" style="display: block;
                        margin-left: auto;
                        margin-right: auto;
                        width: 50%;" src="',$noticias['imagen'],'" alt="Noticia" id="imagenN">','<br>';
                        echo '<div class= "card-body">','<br>';
                        echo '<p>',$noticias['cuerpo'],'</p>';
                        echo '<img class="img-fluid mb-8" style="display: block;
                        margin-left: auto;
                        margin-right: auto;
                        width: 50%;" src="',$noticias['imagen_cuerpo'],'" alt="Noticia" id="imagenN">','<br>','</div>';
                    
                    
                    ?>
                

                </div>
            </div>
        </div>
    
    <script src="https://kit.fontawesome.com/d70a136586.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>