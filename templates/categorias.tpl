{include 'header.tpl'}

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
   <td><a href='edit/{$category->id}' type='button' class='btn-outline-secondary'>Editar</a></td>
   <td><a href='deleteCat/{$category->id}' type='button' class='btn btn-danger'>Borrar</a></td>
  {{/if}}
   <td> <a class="btn btn-outline-secondary" type="button" href="filtrar/{$category->id}">Ver por categoria </td>
</tbody>
{/foreach}
</table>

{include file="formAddCategorys.tpl"}

{include file='footer.tpl'}