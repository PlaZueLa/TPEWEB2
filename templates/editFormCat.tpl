{include file="header.tpl"}


 <form action="editCat" method="POST" class="my-4">
 <input type="hidden" value="{$categories->id}" name="id">
  <label for="nombre">Nombre</label>
  <input name="nombre" type="text" class="form-control" id="marca" placeholder="Nombre" value="{$categories->nombre}">
  <button type="submit" class="btn btn-primary">Actualizar</button>
  </form







{include file="footer.tpl"}