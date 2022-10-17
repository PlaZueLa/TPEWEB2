{include 'header.tpl'}


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
   {{if {$car->id_categoria == 1}}}
    <td>Urbano</td>
   {{else if {$car->id_categoria == 2}}}
    <td>Pick Up</td>
    {{else if {$car->id_categoria == 3}}}
    <td>Comercial</td>
    {{/if}}



</tbody>
{/foreach}
</table>
{include file='footer.tpl'}






