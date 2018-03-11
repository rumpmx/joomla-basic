<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!doctype html>
<html   class="no-js" 
        xmlns="http://www.w3.org/1999/xhtml" 
        xml:lang="<?php echo $this->language; ?>" 
        lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <header>
            <div class="logo">
                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="Logotipo">
                <h1>Localhost</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <nav class="mainmenu">
                <jdoc:include type="modules" name="mainmenu" style="xhtml" />
            </nav>
        </header>
        
        <section class="main">
            <article class="content">
                <jdoc:include type="component" />
            </article>
            <aside class="left">
                <jdoc:include type="modules" name="left" style="xhtml" />
            </aside>
            <aside class="right">
                <jdoc:include type="modules" name="right" style="xhtml" />
            </aside>
        </section>

        <footer>
            PIE DE PÁGINA
        </footer>

        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
