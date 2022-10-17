{include file="header.tpl"}

<table class="table">
<thead>
  <tr>
    <th scope="col">Marca</th>
    <th scope="col">Modelo</th>
    <th scope="col">Año</th>
    <th scope="col">Precio</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Categoria</th>
  </tr>
</thead>
<tbody>
<tr>
{foreach from=$cars item=$car}
   <td>{$car->marca}</td>
   <td>{$car->modelo}</td>
   <td>{$car->fecha_creacion}</td>
   <td>{$car->precio}</td>
   <td>{$car->descripcion}</td>
   <td>{$car->categoria}</td>

   {{if isset($smarty.session.IS_LOGGED)}}
   <td><a href='ShowFormEditCar/{$car->id}' type='button' class='btn-outline-secondary'>Editar</a></td>
   <td><a href='delete/{$car->id}' type='button' class='btn btn-danger'>Borrar</a></td>
   
   {{/if}}
</tbody>
{/foreach}
</table>

 

{include file="formAddCars.tpl"}






{include file="footer.tpl"}


