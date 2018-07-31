<!doctype html>
<html>

    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <title>Cuetzalan del Progreso</title>
        <link rel="stylesheet" type="text/css" href="<?php $this->url_templet(); ?>stylesheets/estilo.css">
    </head>

<body>

    <div id="jmy_web"></div>
    <div id="jmy_web_tools"></div>

    <header>
        
        <h1>
            <div class="col-12 jmy_web_div" data-page="header" id="titulo" data-editor="no"><?php $this->pnt('titulo','Visita Cuetzalan Pueblo Mágico',["secundario"=>"header"]); ?></div>
        </h1>
        <nav class="menu">
            <ul>
                <li class="men"><a href="<?php $this->url_inicio(); ?>">Inicio</a></li>
                <li class="men"><a href="<?php $this->url_inicio(); ?>formulario">Lugares que visitar</a></li>
                <li class="men"><a href="<?php $this->url_inicio(); ?>tienda">Tienda</a></li>
            </ul>
        </nav>
        <br><br><br>
    </header>