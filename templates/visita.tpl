{include file="header.tpl"}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ExploArgentina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="iniciarRegistro">Registrarse <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ir a 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="hotelesVisita">Lista de Hoteles</a>
          <a class="dropdown-item" href="iniciarVisita">Lista de Destinos</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#id</th>
            <th scope="col">Destino</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Temporada Alta</th>
            <th scope="col">Puntaje</th>
            <th scope="col"></th>
            </tr>
            </thead>
            {foreach from=$ver_destinos  item=destino}
            <tr>
            <th scope="row">{$destino->id_destino}</th>
               <td>{$destino->nombre}</td>
               <td>{$destino->descripcion}</td>
               <td>{$destino->temporada_alta}</td>
               <td>{$destino->puntaje}</td>
               <td><a href='mostrarHoteles/{$destino->id_destino}'>Mostrar Hoteles</a></td>
             </tr>
            {/foreach}
            </tbody>
        </table>
    </body>
</html>
