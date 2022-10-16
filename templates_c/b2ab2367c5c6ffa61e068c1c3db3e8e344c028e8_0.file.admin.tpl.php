<?php
/* Smarty version 4.2.1, created on 2022-10-15 23:14:52
  from 'C:\xampp\htdocs\tpeweb2autos\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b22ccda37e2_10091771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ab2367c5c6ffa61e068c1c3db3e8e344c028e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2autos\\templates\\admin.tpl',
      1 => 1665866696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b22ccda37e2_10091771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <form method="POST" action="validate">
        <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-outline-secondary">INGRESAR</button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class= "alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>    
    </form>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
