<!DOCTYPE html>
<html lang="en">
<head>
<base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Venta De Autos</title>
</head>
<body>
   
<header>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex">
         
        {if !isset($smarty.session.USER_EMAIL)}
          <li class="nav-item">
              <a class="nav-link active" href="login">login</a>
          </li>
          {else}
              <li class="nav-item">
              <a class="nav-link active" href="logout">logout({$smarty.session.USER_EMAIL})</a>
          </li>
          {/if}

         
         <li class="nav-item">
         <a class="nav-link" aria-current="page" href="categorias">Categorias</a>
       </li> 
        </ul>
      </div>
    </div>
  </nav>
</header> 

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1> VENTA DE AUTOS USADOS </h1>

  