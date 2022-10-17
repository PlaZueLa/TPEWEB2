{include file="header.tpl"}

    <h1> Información del auto </h1>

   <h2>Marca: {$car->marca}</h2>
   <h2>Modelo: {$car->modelo}</h2>
   <h2>Año: {$car->fecha_creacion}</h2>
   <h2>Precio: {$car->precio}</h2>
   <h2>Descripcion: {$car->descripcion}</h2>
   {{if {$car->id_categoria == 1}}}
    <h2>Categoria: Urbano</h2>
   {{else if {$car->id_categoria == 2}}}
    <h2>Categoria: Pick Up</h2>
    {{else if {$car->id_categoria == 3}}}
    <h2>Categoria: Comercial</h2>
    {{/if}}








{include file="footer.tpl"}