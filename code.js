 fetch('index.php')
      .then(res => res.json())
      .then(data => {
        
        data.forEach(noticia => {
          let divNoticia = document.getElementById('contNoticias');
          let row = `
          <div class="col-md-4 col-sm-6 mb-3" id="noticia" style="padding: 0 0 0 0;"> <a href="noticiaCompleta.php?id=${noticia.id}" class="linkNoticia">
          <div class="card box-shadow">
            <div class="card-header" id="tituloN">
            <h3>${noticia.titulo}<h3>
            </div>
            <div class="card-body">
             <img class="img-fluid mb-3" src="${noticia.imagen}" alt="Noticia" id="imagenN">
            <p>${noticia.copete}</p>
            </div>
          </div>
          </a>
          </div> `;
          divNoticia.innerHTML += row;
        });
      });

  

const IniciarSesion = () =>
{
  var dato = new FormData();
  var password = document.getElementById("pass").value;
  
  dato.append('password', password);
  
  fetch('checkPassword.php', {
    method: 'POST',
    body: dato
  })
  .then(response => response.json())
  .catch(error => console.error('Error:', error))
  .then(response => {
    if(response==0)
    {
      
    } else{ window.location = "admin.php"; }


  });
  
};