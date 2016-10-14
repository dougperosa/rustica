<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <title>Corridas Unimed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
        <meta name="description" content="Corridas Unimed"/>
        <meta name="author" content="Douglas Perosa"/>

        <link rel="shortcut icon" href="img/favicon.ico">

            <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
            <link href="css/estilo.css" type="text/css" rel="stylesheet" />
            <link rel="stylesheet" href="css/gallery.theme.css"/>
            <link rel="stylesheet" href="css/gallery.min.css"/>

            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/functions.js"></script>       

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="jquery.gallerie.js"></script>
            <script src="gallerie.jquery.json"></script>
            <link rel="stylesheet" type="text/css" href="gallerie.css"/>
            <link rel="stylesheet" type="text/css" href="gallerie-effects.css"/>

            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.knob.js"></script>
            <script src="js/jquery.ccountdown.js"></script>
            <script src="js/init.js"></script>

            <style>
                body {
                    background-color: white;
                }

                #gallery {
                    margin-left: auto;
                    margin-right: auto;
                }
            </style>
            
    </head>
    <body>
        <?php
        error_reporting(0);
        ?>
        <div id="cabecalho" style="background-color: #00995D; width: 100%; height: 85px; z-index: 999999; position: fixed; top: 0px; left: 0px; right: 0px">
            <?php
            include './menu.php';
            ?>
        </div>