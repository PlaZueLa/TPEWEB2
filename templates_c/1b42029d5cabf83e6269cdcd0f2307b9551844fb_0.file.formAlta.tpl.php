<?php
/* Smarty version 4.2.1, created on 2022-10-16 22:50:43
  from 'C:\xampp\htdocs\tpeweb2autos\templates\formAlta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c6ea3443107_85161897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b42029d5cabf83e6269cdcd0f2307b9551844fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb2autos\\templates\\formAlta.tpl',
      1 => 1665953407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c6ea3443107_85161897 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ((isset($_SESSION['IS_LOGGED']))) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<form action="add" method="POST" class="my-4">
    

<div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Marca</label>
                <input name="marca" type="text" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->marca;?>
" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
            <label>Modelo</label>
            <input name="modelo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->modelo;?>
" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
            <label>Año</label>
            <input name="fecha_creacion" type="number" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->fecha_creacion;?>
" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
            <label>Precio</label>
            <input name="precio" type="number" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->precio;?>
" class="form-control">
            </div>
        </div>
        
    <div class="form-group">
        <label>Descripcion del vehiculo</label>
        <textarea name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['car']->value->descripcion;?>
" class="form-control" rows="3"></textarea>
    </div>

    <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                    <option selected value=<?php echo $_smarty_tpl->tpl_vars['car']->value->id_categoria;?>
><?php echo $_smarty_tpl->tpl_vars['car']->value->categoria;?>
</option>
                    <option value="1">1 - Urbano</option>
                    <option value="2">2 - Pick Up</option>
                    <option value="3">3 - Comercial</option>
                    
                </select>
            </div>
        </div>

   
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form>
<?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;
}
}
