<?php
/* Smarty version 4.2.1, created on 2022-10-16 01:23:07
  from 'C:\xampp\htdocs\tpeweb2autos\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b40db8fe894_21661344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f32cb687f163b4e99f8902c922760ae3407931fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2autos\\templates\\categorias.tpl',
      1 => 1665876184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b40db8fe894_21661344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
<thead>
  <tr>
    <th scope="col">Tipo de Categoria</th>
  </tr>
</thead>
<tbody>
<tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
   <td><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</td>
   <td><a href='edit/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
' type='button' class='btn-outline-secondary'>Editar</a></td>
   <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
   <td> <a class="btn btn-outline-secondary" type="button" href="filtrar/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">Ver por categoria </td>
</tbody>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
