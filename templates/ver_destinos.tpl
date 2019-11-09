{include file="header.tpl"}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ExploArgentina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ir a 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="hoteles">Lista de Hoteles</a>
          <a class="dropdown-item" href="destinos">Lista de Destinos</a>
        </div>
      </li>
    </ul>
     <form class="form-inline my-2 my-lg-0" action="logout" method="post">
      <button class="btn btn-outline-success my-2 my-sm-0 btn-light" type="submit">logout</button>
    </form>
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
             <th scope="col">Mostrar Hoteles</th>
            <th scope="col">borrar</th>
            </tr>
            </thead>
            {foreach from=$destinos  item=destino}
            <tr>
            <th scope="row">{$destino->id_destino}</th>
               <td>{$destino->nombre}</td>
               <td>{$destino->descripcion}</td>
               <td>{$destino->temporada_alta}</td>
               <td>{$destino->puntaje}</td> 
               <td><a href='iddestino/{$destino->id_destino}'>Mostrar destino</a></td>
               <td><a href='mostrarHoteles/{$destino->id_destino}'>Mostrar Hoteles</a></td>
               <td><a href='borrarDestino/{$destino->id_destino}'>Borrar</a></td>
             </tr>
            {/foreach}
            </tbody>
        </table>

              <form class="form-inline"action="insertar" method="post">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="nombre"placeholder="Destino">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="descripcion"placeholder="Descripcion">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="temporada_alta"placeholder="Temporada Alta">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="puntaje"placeholder="Puntaje">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Insertar</button>
        </form>
        {****************************************************************************************************}
         <form class="form-inline"action="editarTabla" method="post">
           <div class="form-group mx-sm mb-2">
                <input type="number" class="form-control" name="id_destino"placeholder="ID">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="nombre"placeholder="Destino">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="descripcion"placeholder="Descripcion">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="temporada_alta"placeholder="Temporada Alta">
            </div>
            <div class="form-group mx-sm mb-2">
                <input type="text" class="form-control" name="puntaje"placeholder="Puntaje">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Editar</button>
        </form>
    </body>
</html>
