{include file="header.tpl"}
  <form action="editarTabla" method="get">
            <input type="num" value="{$id}">
            <input type="text" value="{$destino->nombre}">
            <input type="text" value="{$destino->descripcion}">
            <input type="text" value="{$destino->temporada_alta}">
            <input type="numb" value="{$destino->puntaje}">
            <input type="submit" value="Guardar">
            </form>
   

    </body>
</html>