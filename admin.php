<?php include('getNoticiaId.php');
 session_start();
if (isset($_GET['id'])) {
    $noticia = getNoticia($_GET['id']);
  } else {
    $noticia = array(
      "id" => '',
      "titulo" => '',
      "copete" => '',
      "imagen" => '',
      "cuerpo" => '',
      "imagen_cuerpo" => ''
    );
  }

  $pdo = connect();

  $stmt = $pdo -> prepare("SELECT * FROM noticias");

  $stmt -> execute();

  $noticias = $stmt -> fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Lista de noticias</title>
  <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container" style="margin-bottom:3em">
    <div class="row">
        <div class="col-md-12"> 
           <a href="index.php"> <h1 id="titulo"> Libera vivo </h1></a>
        </div>
    </div>
</div>


<div class="container">
    <br><div class="row">
          <div class="col-md-12"> 
           <br> 

           <p>
  <a class="btn btn-dark" data-toggle="collapse" href="#collapseExample" data-target= "#managenoticia"role="button" aria-expanded="false" aria-controls="collapseExample">
    Administrar Noticias
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#addnoticia" aria-expanded="false" aria-controls="collapseExample">
    Agregar Noticias
  </button>
</p>
<div class="collapse" id="addnoticia">
  <div class="card card-body">
  <div class="container"> <h5><b>Agregar Noticia</b></h5>
    <br><div class="row">
        <div class="col-md-12"> 
           <br> <form class = "col-md-4 col-sm-6 my-2" action="insertNoticia.php" method="POST">
      
      <div>
        <label for="">Titulo</label>
        <input type="text" name="titulo" value="<?php echo $noticia['titulo']; ?>">
      </div>
      <div>
        <label for="">Copete</label>
        <input type="text" name="copete" value="<?php echo $noticia['copete']; ?>">
      </div>
      <div>
        <label for="">Imagen</label>
        <input type="text" name="imagen" value="<?php echo $noticia['imagen']; ?>">
      </div>
      <div>
        <label for="">Cuerpo</label>
        <input type="text" name="cuerpo" value="<?php echo $noticia['cuerpo']; ?>">
      </div>
      <input type="hidden" name="id" value="<?php echo $noticia['id']; ?>">
  
      <div>
        <label for="">Imagen del Cuerpo</label>
    <input type="text" name="imagen_cuerpo" value="<?php echo $noticia['imagen_cuerpo']; ?>">
    
      </div>

      <br> <input type="submit" value="Agregar Noticia">
    </form>
        </div>
    </div>
</div>
 
  </div>
</div>

</div>
</div>
</div>

<div class="collapse" id="managenoticia">
  <div class="card card-body">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Editar/Eliminar</th>
      <th scope="col">Titulo</th>
      <th scope="col">Copete</th>
      <th scope="col">Imagen</th>
      <th scope="col">Cuerpo</th>
      <th scope="col">Imagen del Cuerpo</th>
    </tr>
  </thead>
  <tbody>
  <?php
      for ($i = 0; $i < count($noticias); $i++) {
        ?>
    <tr>
      <th scope="row"><?php echo $noticias[$i]['id'] ?></th>
            <td><a href= "admin.php?id= + <?php echo $noticias[$i]['id'] ?>" ><button type="button" id="btnCheckpass" class="btn btn-dark">Editar</button></a><br>
            <a href="deleteNoticias.php?id= + <?php echo $noticias[$i]['id'] ?>"><button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Eliminar</button></a></td>
            <td ><?php echo $noticias[$i]['titulo'] ?></td>
            <td><?php echo $noticias[$i]['copete'] ?></td>
            <td><?php echo $noticias[$i]['imagen'] ?></td>
            <td><?php echo $noticias[$i]['cuerpo'] ?></td>
            <td><?php echo $noticias[$i]['imagen_cuerpo'] ?></td>
            
    </tr>
  </tbody>

 

  <?php
  
      }
    ?>
</table>

  </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


