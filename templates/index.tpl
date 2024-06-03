<html lang="en">
{literal}

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="dis/bootstrap/css/bootstrap.min.css" rel="stylesheet"
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
{/literal}
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
                {foreach $htmlfiles as $filename}
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="{$iframeController->navigateTo($pathToHtmlFiles.$filename)}">{$filename}</a>
                </li>
                {/foreach}
            </ul>            
        </div>
    </nav>

    <div class="preview">
        <iframe src="http://localhost:8080/smartyViewer/markmaps/IPv4-protokolle.html" id="svg-maps"></iframe>
    </div>

    <script src="dis/bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>