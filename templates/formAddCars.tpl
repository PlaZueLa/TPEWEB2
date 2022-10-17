{{if isset($smarty.session.IS_LOGGED)}}

    <h1>Agregue un auto</h1>
<form action="add" method="POST" class="my-4">
    

<div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Marca</label>
                <input name="marca" type="text" value="{$car->marca}" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
            <label>Modelo</label>
            <input name="modelo" type="text" value="{$car->modelo}" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
            <label>Año</label>
            <input name="fecha_creacion" type="number" value="{$car->fecha_creacion}" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
            <label>Precio</label>
            <input name="precio" type="number" value="{$car->precio}" class="form-control">
            </div>
        </div>
        
    <div class="form-group">
        <label>Descripcion del vehiculo</label>
        <textarea name="descripcion" value="{$car->descripcion}" class="form-control" rows="3"></textarea>
    </div>

    <div class="col-3">
            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control">
                    <option selected value={$car->id_categoria}>{$car->categoria}</option>
                    <option value="1">1 - Urbano</option>
                    <option value="2">2 - Pick Up</option>
                    <option value="3">3 - Comercial</option>
                    
                </select>
            </div>
        </div>

   
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form>
{{/if}}