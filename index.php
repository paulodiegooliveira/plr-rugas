<?php 
ob_start();
date_default_timezone_set('America/Sao_Paulo');
include_once '_app/Config.inc.php';

$getURL = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setURL = (empty($getURL) ? 'index' : $getURL);
$URL = explode('/', $setURL);
$SEO = new Seo($setURL);
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    
    <link rel="shortcut icon" href="<?= $SEO->getImage(); ?>" />
    
    <?php if ($URL[0] == 'presell') : ?>
        <meta http-equiv="refresh" content="<?= $URL[1] ;?>; url='<?= LINK_REDIRECT; ?>'" />
    <?php endif; ?>

    <meta itemprop="name" content="<?= $SEO->getTitle(); ?>" />
    <meta itemprop="description" content="<?= $SEO->getDescription(); ?>" />
    <meta itemprop="image" content="<?= $SEO->getImage(); ?>" />
    <meta itemprop="url" content="<?= BASE; ?>/<?= $getURL; ?>" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $SEO->getTitle(); ?>" />
    <meta property="og:description" content="<?= $SEO->getDescription(); ?>" />
    <meta property="og:image" content="<?= $SEO->getImage(); ?>" />
    <meta property="og:url" content="<?= BASE; ?>/<?= $getURL; ?>" />
    <meta property="og:site_name" content="<?= SITE_NAME; ?>" />
    <meta property="og:locale" content="pt_BR" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="facebook-domain-verification" content="xq2w3j2mh2d85x370de1oujmlqp30b" />
    
    <title><?= $SEO->getTitle(); ?></title>

    <?php include_once ('./components/vturn-header.php'); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="<?= $SEO->cssRoute(); ?>">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Roboto:wght@400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');">    

    <!-- Google tag (gtag.js) -->
    <?php if($_SERVER['HTTP_HOST'] != 'localhost'): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RYCP4MGWW3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-RYCP4MGWW3');
        </script>
    <?php endif; ?>

    <!-- Meta Pixel Code -->
    <?php if($_SERVER['HTTP_HOST'] != 'localhost'): ?>
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?= PIXEL_FACEBOOK; ?>');
        fbq('track', 'PageView');
        
        <?php if($setURL == 'presell'): ?>
            fbq('trackCustom', '<?= TRACK_CUSTOM_FB; ?>'); 
        <?php endif; ?>
        
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=<?= PIXEL_FACEBOOK; ?>&ev=PageView&noscript=1"
        /></noscript>
    <?php endif; ?>
    <!-- End Meta Pixel Code -->
  </head>
  <body>
    <form name="formBaseUrl">
        <input class="inputHidden" type="hidden" name="base" value="<?= BASE; ?>">
    </form>
    
    <?php      
      // REDIRECT PUBLIC TO MAINTENANCE
      if (ADMIN_MAINTENANCE && (empty($_SESSION['userLogin']['user_level']) || $_SESSION['userLogin']['user_level'] < 6)) :
          require 'maintenance.php';
      else :
          // PESQUISA
          $Search = filter_input_array(INPUT_POST, FILTER_DEFAULT);
          if ($Search && !empty($Search['s'])) :
              $Search = urlencode(strip_tags(trim($Search['s'])));
              header('Location: ' . BASE . '/pesquisa/' . $Search);
              exit;
          endif;

          // HEADER
          if (file_exists("./inc/header.php")) :
              require "./inc/header.php";
          else :
              trigger_error('Crie um arquivo /inc/header.php na pasta do tema!');
          endif;

          // CONTENT
          $URL[1] = (empty($URL[1]) ? null : $URL[1]);

          if ($URL[0] == 'rss' || $URL[0] == 'feed' || $URL[0] == 'rss.xml') :
              header("Location: " . BASE . "/rss.php");
              exit;
          endif;

          $Pages = array();
        // $Read->FullRead("SELECT page_name FROM " . DB_PAGES);
        // if ($Read->getResult()) :
        //     foreach ($Read->getResult() as $SinglePage) :
        //         $Pages[] = $SinglePage['page_name'];
        //     endforeach;
        // endif;
            // pr($URL[0]);

          if (in_array($URL[0], $Pages) && file_exists(REQUIRE_PATH . '/pagina.php')) :
            if (file_exists(REQUIRE_PATH . "/page-{$URL[0]}.php")) :
                require REQUIRE_PATH . "/page-{$URL[0]}.php";
            else :
                require REQUIRE_PATH . '/pagina.php';
            endif;
          elseif (file_exists($URL[0] . '.php')) :

            if ($URL[0] == 'artigos' && file_exists(REQUIRE_PATH . "/cat-{$URL[1]}.php")) :
                require REQUIRE_PATH . "/cat-{$URL[1]}.php";
            elseif ($URL[0] == 'index') :
                require "page.php";
            else :
                require $URL[0] . ".php";
            endif;

          elseif (file_exists(REQUIRE_PATH . '/' . $URL[0] . '/' . $URL[1] . '.php')) :              
              require REQUIRE_PATH . '/' . $URL[0] . '/' . $URL[1] . '.php';

          else :
              if (file_exists(REQUIRE_PATH . "/404.php")) :
                  require REQUIRE_PATH . '/404.php';
              else :
                  trigger_error("Não foi possível incluir o arquivo themes/xxx.php <b>(O arquivo 404 também não existe!)</b>");
              endif;
          endif;

          // FOOTER
          if (file_exists("./inc/footer.php")) :
              require "./inc/footer.php";
          else :
              trigger_error('Crie um arquivo /inc/footer.php na pasta do tema!');
          endif;
      endif;
    ?>    
    <!-- <script src="js/luiptx4767087.js" charset="utf-8"></script> -->
    <script src="<?= $SEO->jsRoute(); ?>"></script>
  </body>
</html>
<?php ob_end_flush();?>