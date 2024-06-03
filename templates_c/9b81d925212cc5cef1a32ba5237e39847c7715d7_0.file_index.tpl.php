<?php
/* Smarty version 5.1.0, created on 2024-06-03 14:57:01
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665dbd9d552332_97166640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b81d925212cc5cef1a32ba5237e39847c7715d7' => 
    array (
      0 => 'index.tpl',
      1 => 1717419419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665dbd9d552332_97166640 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/smartyViewer/templates';
?><html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Übersicht</title>
</head>
<style>
    html {
        height: 100%;
        width: 100%;
    }

    * {
        margin: 0;
        box-sizing: border-box;
        font-family: "Fira sans", sans-serif;
    }

    body {
        display: flex;
        flex-direction: column;
        background-image: -webkit-image-set('https://thumbs.dreamstime.com/b/bereiten-sie-zerknitterte-beschaffenheit-des-braunen-papiers-alte-papieroberfl%C3%A4che-f%C3%BCr-hintergrund-auf-108204796.jpg');
        background-size: cover;
        min-height: 100vh;
        padding: 2rem 1rem;
        max-width: 100%;
        width: 100vw;
        height: 100vh;
        margin: 0 auto;
    }

    .preview {
        height: 90vh;
        width: 90vw;
    }

    #svg-maps {
        height: 100%;
        width: 100%;
    }
</style>

<body>
    <nav class="navbar navbar-expand-xl navbar-light">
        <a href="#" class="navbar-brand mb-0 h1">
            <img class="d-inline-block algin-top" src="übersicht_icon.png" width="60" height="60" />
            Übersicht
        </a>
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
            aria-controls="navabarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('htmlfiles'), 'filename');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filename')->value) {
$foreach0DoElse = false;
?>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="<?php echo $_smarty_tpl->getValue('iframeController')->navigateTo($_smarty_tpl->getValue('pathToHtmlFiles')[$_smarty_tpl->getValue('filename')]);?>
"><?php echo $_smarty_tpl->getValue('filename');?>
</a>
                </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>            
        </div>
    </nav>

    <div class="preview">
        <iframe src="http://localhost:8080/smartyViewer/markmaps/IPv4-protokolle.html" id="svg-maps"></iframe>
    </div>

    <?php echo '<script'; ?>
 src="bootstrap\js\bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
