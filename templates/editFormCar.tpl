{include file="header.tpl"}

</div>
 <form action="updateCar/{$car->id}" method="POST" class="my-4">
  <label for="modelo">Modelo</label>
  <input name="modelo" type="text" class="form-control" id="modelo" placeholder="Modelo de vehiculo" value="{$car->modelo}">
  <label for="marca">Marca</label>
  <input name="marca" type="text" class="form-control" id="marca" placeholder="Marca del vehiculo" value="{$car->marca}">
  <label for="fecha de creacion">Fecha de creacion</label>
  <input name="fecha_creacion" type="number" class="form-control" id="fecha_creacion" placeholder="fecha de creacion" value="{$car->fecha_creacion}">
  <label for="precio">Precio</label>
  <input name="precio" type="number" class="form-control" id="precio" placeholder="precio" value="{$car->precio}">
  <label for="descripcion">Descripcion</label>
  <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion del vehiculo" value="{$car->descripcion}">
  <label for="id_categoria">Categoria</label>
                <select name="id_categoria" class="form-control" id="id_categoria" placeholder="Categoria del vehiculo">
                    <option selected value={$car->id_categoria}></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                 </select>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form
















{include file="footer.tpl"}