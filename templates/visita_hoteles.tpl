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
                    <th scope="col">Hotel</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Precio</th>
                    <th scope="col">ocupado</th>
                    <th scope="col">id_destino</th>
                    </tr>
                </thead>

{foreach from=$ver_hoteles item=hotel}
<tr><th scope="row">{$hotel->id_hotel}</th>
<td>{$hotel->nombre}</td><td>{$hotel->telefono}</td>
<td>{$hotel->direccion}</td><td>{$hotel->precio}</td>
<td>{$hotel->ocupado}</td>
<td>{$hotel->id_destino}</td>
{/foreach}
</table>
</body>
</html>
