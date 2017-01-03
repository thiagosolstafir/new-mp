<!DOCTYPE html>

<html class="no-js" lang="pt-br">

<head>

    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
          content="target-densitydpi=device-dpi, width=device-width, user-scalable=no, maximum-scale=1, minimum-scale=1"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $mainFolder; ?>/includes/css/style.css?<?php echo rand(); ?>"/>

    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/jquery.mask.js" type="text/javascript"></script>
    <script src="<?php echo $mainFolder; ?>/includes/js/wow.js" type="text/javascript"></script>

    <script src="<?php echo $mainFolder; ?>/includes/js/scripts.js?<?php echo time(); ?>"
            type="text/javascript"></script>


    <script type="text/javascript">
        window.mainFolder = '<?php echo $mainFolder; ?>';
        window.idMP = '';
        window.descMP = '';
        window.mpPage = '<?php echo ucfirst($page); ?>';
        window.mainTitle = '<?php echo $pageTitle; ?>';
    </script>

    <script src="<?php echo $mainFolder; ?>/includes/js/mp-onepage.js?<?php echo rand(); ?>"></script>


    <script> new WOW().init(); </script>


    <script type="text/javascript">

        $(document).keyup(function (e) {
            if (e.which == '27') {
                lt(0, 0, 0);
            }
        });
        var co = 0;
        function lt(num, idgaleria, idlightbox) {


            if (co == 0) {
                $("#load").css("display", "flex");
            }

            var url;

            switch (idlightbox) {

                case 1:
                    url = '/afroditemodapraia.com.br/lightbox/processa.galeria';
                    break;
                case 2:
                    url = '/afroditemodapraia.com.br/lightbox/processa.catalogo';
                    break;
            }

            if (num == 1) {

                $("#lt_int").html('');
                scroll_site = y;
                $("#lt , #lt_int").fadeIn();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: 'parametro=' + idgaleria,
                    beforeSend: function (txt) {
                    },
                    success: function (txt) {

                        console.log(txt);

                        setTimeout(function () {
                            $('#conteudo_page').css('position', 'fixed').css('height', '100%').css('overflow',
                                'hidden');
                            $('#conteudo_page_int').css('margin-top', '-' + scroll_site + 'px');
                            $('#lt').css('min-height', h_tela + 'px');
                            $("#lt_int").html(txt);
                            $("#load").fadeOut();
                            co = 1;
                        }, 2700);


                    },
                    error: function (txt) {
                        console.log(txt);
                    }
                });

            } else {
                co = 0;
                $("#lt_int").html('');

                $("#lt , #lt_int").fadeOut();
                $('#conteudo_page').css('position', 'relative').css('height', 'auto').css('overflow', 'visible');
                $('#conteudo_page_int').css('margin-top', '0px');
                $('html, body').animate({scrollTop: scroll_site + 'px'}, 0);
                $('body').unbind('scroll touchmove mousewheel');
            }
        }

    </script>

    <title><?php echo $pageTitle; ?></title>

</head>

<body>

<div id="lt">
    <div id="lt_int"></div>
</div>

<div id="lt_page">
    <div id="lt_int_page">
    </div>
</div>


<header></header>
