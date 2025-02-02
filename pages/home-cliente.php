<!DOCTYPE html>
<html class="home" lang="pt-BR">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home cliente</title>
    <link rel="stylesheet" href="../styles/home-cliente.css">
    <script src="https://kit.fontawesome.com/3bc1a873c3.js" crossorigin="anonymous"></script>
</head>
<body class="home-body">
    <header class="tabs-home">
        <div class="box-imagem">
            <img class="logo-home" src="../images/logo.png" alt="">
            <div class="fundo-logo"></div>
        </div>

        <ul class="navbar">
            <div class="atual"></div>
            <a href="home-cliente.html">
                <li><i class="fas fa-home"></i> Home</li>
            </a>
            <a href="visualizarOrcamento-cliente.html">
                <li><i class="fa-solid fa-file-contract"></i> Visualizar orçamento</li>
            </a>
            <a href="validarOrcamento-cliente.html">
                <li><i class="fa-solid fa-circle-check"></i> Validar orçamento</li>
            </a>
        </ul>

        <div class="user">
            <div class="user-image">
            </div>
            <p>Usuário: Cliente</p>
        </div>
    </header>

    <section class="section-home">
        <h1>Olá, $nomeCliente!</h1>
        <img src="../images/print-tela-cliente.png" alt="Tela home de cliente" style="width: 600px;">
    </section>
</body>
</html>