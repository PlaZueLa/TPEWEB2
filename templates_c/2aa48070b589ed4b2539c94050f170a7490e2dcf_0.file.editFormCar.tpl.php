<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:34:52
  from 'C:\xampp\htdocs\tpeweb2autos\templates\editFormCar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c78fc0d1069_11397760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aa48070b589ed4b2539c94050f170a7490e2dcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2autos\\templates\\editFormCar.tpl',
      1 => 1665956081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c78fc0d1069_11397760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
 <form action="updateCar/<?php echo $_smarty_tpl->tpl_vars['car']->value->id;?>
" method="POST" class="my-4">
  <label for="modelo">Modelo</label>
  <input name="modelo" type="text" class="form-control" id="modelo" placeholder="Modelo de vehiculo" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->modelo;?>
">
  <label for="marca">Marca</label>
  <input name="marca" type="text" class="form-control" id="marca" placeholder="Marca del vehiculo" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->marca;?>
">
  <label for="fecha de creacion">Fecha de creacion</label>
  <input name="fecha_creacion" type="number" class="form-control" id="fecha_creacion" placeholder="fecha de creacion" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->fecha_creacion;?>
">
  <label for="precio">Precio</label>
  <input name="precio" type="number" class="form-control" id="precio" placeholder="precio" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->precio;?>
">
  <label for="descripcion">Descripcion</label>
  <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion del vehiculo" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->descripcion;?>
">
  <label for="id_categoria">Categoria</label>
                <select name="id_categoria" class="form-control" id="id_categoria" placeholder="Categoria del vehiculo">
                    <option selected value=<?php echo $_smarty_tpl->tpl_vars['car']->value->id_categoria;?>
></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                 </select>
  <button type="submit" class="btn btn-primary">updateCar</button>
</form
















<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
