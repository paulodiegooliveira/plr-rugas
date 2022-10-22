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

$urlLocalhostRedirect = "http://localhost/sites/vsl/rapunzel?utm_source=".$utm_source_pressel_facebook."&utm_medium=".$utm_medium_pressel."&utm_campaign=".$utm_campaign_pressel."&utm_id=".$utm_id_pressel;
$urlProductionRedirect = "https://rapunzel.autoestimadamulher.online/?utm_source=".$utm_source_vsl."&utm_medium=".$utm_medium_vsl."&utm_campaign=".$utm_campaign_vsl."&utm_id=".$utm_id_vsl;
$baseUrlRedirect = ($_SERVER['HTTP_HOST'] == 'localhost' ? $urlLocalhostRedirect : $urlProductionRedirect);



include_once 'Client.inc.php';
include_once 'Seo.class.php';

function pr($datas) {
  echo '<pre>';
    print_r($datas);
  echo '</pre>';
}
