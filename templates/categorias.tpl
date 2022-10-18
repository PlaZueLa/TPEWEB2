{include 'header.tpl'}
{{if isset($smarty.session.IS_LOGGED)}}
<h1> Precaución, para poder eliminar una categoria debe antes remover sus vehiculos </h1>
{{/if}}
<table class="table">
<thead>
  <tr>
    <th scope="col">Tipo de Categoria</th>
  </tr>
</thead>
<tbody>
<tr>
{foreach from=$categories item=$category}
   <td>{$category->nombre}</td>
   {{if isset($smarty.session.IS_LOGGED)}}
   <td><a href='ShowFormEditCat/{$category->id}' type='button' class='btn btn-warning'>Editar</a></td>
   <td><a href='deleteCat/{$category->id}' type='button' class='btn btn-danger'>Borrar</a></td>
   
  {{/if}}
   <td> <a class="btn btn-info" type="button" href="filtrar/{$category->id}">Ver por categoria </td>
</tbody>
{/foreach}
</table>



{include file="formAddCategorys.tpl"}

{include file='footer.tpl'}