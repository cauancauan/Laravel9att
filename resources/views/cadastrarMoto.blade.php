<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoStore</title>
    <link rel="icon" href="img/logo.png">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/estilo.css">

</head>
<body>
    
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<header>
        <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="home">MOTOSTORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                <a class="nav-link"  aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="listarMoto">Loja</a>
                </li>
                <li class="nav-item">
                <a  class="nav-link active" href="cadastrarMoto">Cadastrar</a>
                </li> 
            </ul>
            </div>
        </div>
        </nav>
    </header>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    
<div class="controle-forms">
<img src="/img/img23.jpg" alt="">
<div class="container1">
    <div class="title1">Cadastrar ve??culo</div>
    <div class="content1">
      <form action="#">
        <div class="user-details1">
          <div class="input-box">
            <span class="details1">Modelo</span>
            <input type="text" placeholder="Informe o modelo" required>
          </div>
          <div class="input-box">
            <span class="details1">Marca</span>
            <input type="text" placeholder="Informe a marca" required>
          </div>
          <div class="input-box">
            <span class="details1">Ano</span>
            <input type="text" placeholder="Informe o ano" required>
          </div>
          <div class="input-box">
            <span class="details1">Cor</span>
            <input type="text" placeholder="Informe a cor" required>
          </div>
          <div class="input-box">
            <span class="details1">Valor</span>
            <input type="text" placeholder="Informe o valor" required>
          </div>
        </div>
        <div class="button1">
          <input type="submit" value="Cadastrar">
        </div>
      </form>
    </div>
  </div>
  </div>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  
<footer>
    <a>Moto<span>Store</span></a>
    <H1>Copyright ?? Cauan</H1>
    
</footer>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

</body>
</html>