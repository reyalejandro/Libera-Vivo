<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="col-lg-12 col-md-8 col-sm-6">
    <div class="card">
        <div class="card-header">Verifica que eres admin iniciando sesión</div>
            <div class="card-body card-block">
                
               
                    <input type="password" id="pass" name="password" placeholder="1234">
                    <button type="button" id="btnCheckpass" onclick="IniciarSesion()" class="btn btn-primary btn-dark" data-toggle="modal" data-target="#exampleModal">Validar</button>
               
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Error de inicio de sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        No ingresó los datos correctamente, intente nuevamente
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-dark" data-dismiss="modal">De acuerdo</button>
      </div>
    </div>
  </div>
</div>
            </div>
            <form action="index.html"style="margin-left:1.3em;">
            <button type="submit" class="btn btn-secondary btn-dark">Volver</button>
</form><br>
        </div>
        
    </div>
    
</div>
<div class="divAlerta"></div>


<script src="code.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>