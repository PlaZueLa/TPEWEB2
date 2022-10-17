{{if isset($smarty.session.IS_LOGGED)}}

    <h1>Agregue una categoria</h1>
    <form action="addCategory" method="POST" class="my-4">
        
    
    <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" type="text"  class="form-control">
                </div>
            </div>
    
       
        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
    {{/if}}