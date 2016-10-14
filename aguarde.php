<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <title>Super Volta Unimed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
        <meta name="description" content="Super Volta Unimed Erechim"/>
        <meta name="author" content="Douglas Perosa"/>
        <link rel="shortcut icon" href="img/favicon.ico"/>

        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/functions.js"></script> 

        <link rel="stylesheet" type="text/css" href="css/contagem.css"/>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/jquery.ccountdown.js"></script>
        <script src="js/init.js"></script>

    </head>
    <body style="background-color: rgb(177,211,75); width: 95%; height: 95%; text-align: center">
        <div class="container navbar-wrapper">
            <table style="width: 100%; height: 80%">
                <tr>
                    <td style="width: 20%;  height: 100%">
                        <table style=" margin-left: 15px;">
                            <tr><td>    
                                    <img src="img/LOGO-3TRE.png" style="width: 100%">
                                </td>
                            </tr>
                            <tr style="height: 15px"></tr>
                            <tr><td>
                                    <img src="img/Logotipo - Trail Adventure.png" style="width: 85%">
                                </td>
                            </tr>
                            <tr style="height: 15px"></tr>
                            <tr><td>
                                    <img src="img/LOGOTIPO PÉ NO PEDAL.png" style="width: 85%">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 60%; text-align: center">
                        <img src="img/UE 03715 card_facebook-02.jpg" style="border-radius: 15px; width: 90%; height: 65%; margin-top: -10px">
                    </td>
                    <td style="width: 20%;  height: 100%">
                        <table style=" margin-left: 25px;">

                            <tr>
                                <td>
                                    <img src="img/Logo-Scott.png" style="width: 100%">
                                </td>
                            </tr>       
                            <tr style="height: 15px"></tr>
                            <tr><td>
                                    <img src="img/bk-propaganda_logo_2015.png" style="width: 80%">
                                </td>
                            </tr>
                            <tr><td>    
                                    <img src="img/TAMANINI.png" style="width: 80%">
                                </td>
                            </tr>
                            <tr style="height: 15px"></tr>
                            <tr><td>
                                    <img src="img/PINGUINDIO 30 ANOS.2.png" style="width: 80%">
                                </td>
                            </tr>
                            <tr><td>    
                                    <img src="img/Logo---PME-2013.png" style="width: 90%">
                                </td>
                            </tr>

                            <tr><td>
                                    <img src="img/logo-Herbalife.png" style="width: 90%">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </div>
        <br><br>
                
        <!-- CONTAGEM REGRESSIVA -->
        <div style="background-color: rgba(0,153,93,0.4); width: 500px; border-radius: 15px; margin-top: -60px" class="container navbar-wrapper">
            <div id="top" class="container" style="margin-left: 40px; width: 500px">
                <div class="ccounter" style="margin-top: 15px">
                    <!-- 
                    Altere as cores das barras de contagem e o tamanho dos círculos modificando os valores em "data-width" (largura/tamanho) e "data-fgColor" (cor da barra)
                    -->
                    <!-- CÍRCULO 1 - DIAS -->
                    <div style="float:left;"><input class="knob days" data-width="80" data-min="0" data-max="365" data-displayPrevious=true data-fgColor="#00995D" data-readOnly="true" value="1"></div><div class="texto" style="color: #00995D">Dias</div>
                    <!-- CÍRCULO 2 - HORAS -->
                    <div style="float:left;"><input class="knob hour" data-width="80" data-min="0" data-max="24" data-displayPrevious=true data-fgColor="#00995D" data-readOnly="true" value="1"></div><div class="texto" style="color: #00995D">Hor</div>
                    <!-- CÍRCULO 2 - MINUTOS -->
                    <div style="float:left;"><input class="knob minute" data-width="80" data-min="0" data-max="60" data-displayPrevious=true data-fgColor="#00995D" data-readOnly="true" value="1"></div><div class="texto" style="color: #00995D">Min</div>
                    <!-- CÍRCULO 2 - SEGUNDOS -->
                    <div style="float:left;"><input class="knob second" data-width="80" data-min="0" data-max="60" data-displayPrevious=true data-fgColor="#00995D" data-readOnly="true" value="0" data-bgcolor="#eee"></div><div class="texto" style="color: #00995D">Seg</div>
                </div>	
            </div>

            <script>
                // Informe a data final da contagem no formato $(".ccounter").ccountdown((ano, mês, dia, 'hora:minuto');
                $(".ccounter").ccountdown(2015, 09, 14, '18:00');
            </script>

            <!-- FONTES DO GOOGLE : início -->
            <script type="text/javascript">
                var primary_font_code = 'Sintony:400,700:latin,latin-ext';
                var secondary_font_code = 'Bree+Serif::latin,latin-ext';
                var web_fonts = [primary_font_code];
                if (secondary_font_code != '') {
                    web_fonts.push(secondary_font_code);
                }

                WebFontConfig = {
                    google: {families: web_fonts}
                };
                (function() {
                    var wf = document.createElement('script');
                    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                    wf.type = 'text/javascript';
                    wf.async = 'true';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(wf, s);
                })();

            </script>
        </div>

    </body>
</html>