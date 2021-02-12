<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7d4ffebbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras,do,meu,site">
    <meta name="description" content="descrição do meu site">
    <title>Projeto-01</title>
</head>
<body>

    <header>
    <div class="center">
        <div class="logo left"><a href="<?php echo INCLUDE_PATH ?>">Logomarca</a></div><!--logo-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
            </ul>
        </nav><!--desktop-->
        <nav class="mobile right">
            <div class="botao-menu-mobile"><i class="fas fa-bars"></i></div>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
            </ul>
        </nav><!--mobile-->
    </div><!--center-->
    <div class="clear"></div>
    </header>

    <?php 
    
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }
        else{
            //podemos fazer o que quiser pois a página não existe.
            include('pages/404.php');
        }
    
    ?>

    </footer>
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/scripts.js"></script>
</body>
</html>