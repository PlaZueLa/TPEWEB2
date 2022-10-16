<?php
/* Smarty version 4.2.1, created on 2022-10-16 22:53:37
  from 'C:\xampp\htdocs\tpeweb2autos\templates\carsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c6f51534fd3_38248472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f8456f227582163af32180727ac1961a9cf2191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2autos\\templates\\carsList.tpl',
      1 => 1665953609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAlta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c6f51534fd3_38248472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
   <td><?php echo $_smarty_tpl->tpl_vars['car']->value->marca;?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['car']->value->modelo;?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['car']->value->fecha_creacion;?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['car']->value->precio;?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['car']->value->descripcion;?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['car']->value->categoria;?>
</td>

   <?php ob_start();
if ((isset($_SESSION['IS_LOGGED']))) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

   <td><a href='ShowFormEditCar/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
' type='button' class='btn-outline-secondary'>Editar</a></td>
   <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
   <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

</tbody>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

 

<?php $_smarty_tpl->_subTemplateRender("file:formAlta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
