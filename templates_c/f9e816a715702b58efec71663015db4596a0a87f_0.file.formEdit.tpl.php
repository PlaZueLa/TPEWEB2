<?php
/* Smarty version 4.2.1, created on 2022-10-16 04:58:31
  from 'C:\xampp\htdocs\tpeweb2autos\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b73575e4776_19759378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e816a715702b58efec71663015db4596a0a87f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2autos\\templates\\formEdit.tpl',
      1 => 1665889052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634b73575e4776_19759378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
<form action="editar/<?php echo $_smarty_tpl->tpl_vars['cars']->value->id;?>
" method='POST'>
    
    <input class="form-control" placeholder=marca type="text" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['cars']->value->marca;?>
" >
    <input class="form-control" placeholder=modelo type="text" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['cars']->value->modelo;?>
">
    <input class="form-control" placeholder=año type="number" name="fecha_creacion"value="<?php echo $_smarty_tpl->tpl_vars['cars']->value->fecha_creacion;?>
">
    <input class="form-control" placeholder=precio type="number" name="precio"value="<?php echo $_smarty_tpl->tpl_vars['cars']->value->precio;?>
">
    <input class="form-control" placeholder=descripcion type="text" name="descripcion"value="<?php echo $_smarty_tpl->tpl_vars['cars']->value->descripcion;?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['cars']->value->id_categoria) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <button class="btn btn-outline-secondary" type="submit">editar</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>















<?php }
}