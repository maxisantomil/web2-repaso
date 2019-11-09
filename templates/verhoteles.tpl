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
                    <th scope="col">Hotel</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Precio</th>
                    <th scope="col">ocupado</th>
                    <th scope="col">id_destino</th>
                    </tr>
                </thead>

{foreach from=$ver_hoteles item=hotel}
{if $hotel->ocupado eq 1}
<strike><tr><th scope="row">{$hotel->id_hotel}</th>
<td>{$hotel->nombre}</td>
<td>{$hotel->telefono}</td>
<td>{$hotel->direccion}</td>
<td>{$hotel->precio}</td>
<td>{$hotel->ocupado}</td>
<td>{$hotel->id_destino}</td></strike>
<td><a href='inicializar/{$hotel->id_hotel}'>Inicializar</a> -<a href='borrarHotel/{$hotel->id_hotel}'>Borrar</a></td></tr>
{else}
<tr><th scope="row">{$hotel->id_hotel}</th>
<td>{$hotel->nombre}</td><td>{$hotel->telefono}</td>
<td>{$hotel->direccion}</td><td>{$hotel->precio}</td>
<td>{$hotel->ocupado}</td>
<td>{$hotel->id_destino}</td>
<td><a href='finalizar/{$hotel->id_hotel}'>Ocupado Totalidad</a>- <a href='borrarHotel/{$hotel->id_hotel}'>Borrar</a></td></tr>
{/if}

{/foreach}

 <form class="form-inline"action="insertarHotel" method="post">
            <div class="form-group mx-sm mb-2">
                <tr><td></td>
                <td><input type="text" class="form-control" name="nombre"placeholder="Hotel"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="telefono"placeholder="Teléfono"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="text" class="form-control" name="direccion"placeholder="Direcciónn"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="precio"placeholder="Precio"></td>
            </div>
            <td></td>
            <div class="form-group mx-sm mb-2">
               <td><input type="numb" class="form-control" name="id_destino"placeholder="id"></td>
            </div>
            <td><button type="submit" class="btn btn-primary mb-2">Insertar</button></td></tr>
        </form>
    {****************************************************************************************************}    
<form class="form-inline"action="editarHotel" method="post">
           <div class="form-group mx-sm mb-2">
                <tr><td><input type="number" class="form-control" name="id_hotel"placeholder="ID"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="text" class="form-control" name="nombre"placeholder="Hotel"></td>
            </div><div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="telefono"placeholder="Teléfono"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="text" class="form-control" name="direccion"placeholder="Dirección"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="precio"placeholder="Precio"></td>
            </div>
            <div class="form-group mx-sm mb-2">
                <td><input type="numb" class="form-control" name="id_destino"placeholder="id_destino"></td>
            </div>
            <td><button type="submit" class="btn btn-primary mb-2">Editar</button></td></tr>
        </form>
</table>
</body>
</html>
