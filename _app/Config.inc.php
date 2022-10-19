<?php 
// GERAL
$utm_source_pressel_facebook = 'facebook';
$utm_medium_pressel = 'fbads';
$utm_campaign_pressel = 'rapunzel';
$utm_id_pressel = 'rapunzel';

$utm_source_vsl = 'facebook';
$utm_medium_vsl = 'fbads';
$utm_campaign_vsl = 'rapunzel';
$utm_id_vsl = 'rapunzel';

$urlLocalhost = "http://localhost/sites/vsl/rapunzel";
$urlProduction = "https://rapunzel.autoestimadamulher.online";
$baseUrl = ($_SERVER['HTTP_HOST'] == 'localhost' ? $urlLocalhost : $urlProduction);

$urlLocalhostRedirect = "http://localhost/sites/vsl/rapunzel/?utm_source=".$utm_source_pressel_facebook."&utm_medium=".$utm_medium_pressel."&utm_campaign=".$utm_campaign_pressel."&utm_id=".$utm_id_pressel;
$urlProductionRedirect = "https://rapunzel.autoestimadamulher.online/?utm_source=".$utm_source_vsl."&utm_medium=".$utm_medium_vsl."&utm_campaign=".$utm_campaign_vsl."&utm_id=".$utm_id_vsl;
$baseUrlRedirect = ($_SERVER['HTTP_HOST'] == 'localhost' ? $urlLocalhostRedirect : $urlProductionRedirect);

define('BASE', $baseUrl);
define('LINK_REDIRECT', $baseUrlRedirect);
define('LINK_KIWIFY', 'https://pay.kiwify.com.br/loQkV7s');
define('REQUIRE_PATH', '.');
define('INCLUDE_PATH', '.');

define('PIXEL_FACEBOOK', '873620213605688');
define('TRACK_CUSTOM_FB', 'PreSellRapunzel');

define('SITE_NAME', 'Cabelo Rapunzel');
define('SITE_TITLE', 'Protocolo Cabelo Rapunzel');
define('SITE_DESC', 'Protocolo Cabelo Rapunzel');

define('REDIRECT_PRESSEL_TIME', 200000);
define('ADMIN_MAINTENANCE', 0);


include_once 'Seo.class.php';

function pr($datas) {
  echo '<pre>';
    print_r($datas);
  echo '</pre>';
}
