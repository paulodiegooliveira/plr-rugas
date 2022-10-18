<?php
$timer = 20;
$pixelFacebook = '640570114361468';
$trackCustom = 'PreSellRapunzel';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="refresh" content="<?=$timer;?>; url='http://localhost/sites/vsl/rapunzel/'" />
    <link rel="shortcut icon" href="data:" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://produtosmentoria.com/rugas" />
    <meta property="og:title" content="Método Rugas Nunca Mais" />
    <meta property="og:description" content="Método Rugas Nunca Mais" />
    <meta
      property="og:image"
      content="https://img.imageboss.me/atm/cdn/u/3gEIylv7L4aXC2PbmTRqcmlRCgw2/l/rjwPMc0140871.jpeg"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Roboto:wght@400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
      media="print"
      onload="this.onload=null;this.removeAttribute('media');"
    />

    <link rel="stylesheet" href="css/presell.css" />

    <title>Protocolo Rugas nunca mais</title>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RYCP4MGWW3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-RYCP4MGWW3');
    </script>

    <!-- Meta Pixel Code -->
    <script>
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js"
      );
      fbq("init", "<?=$pixelFacebook; ?>");
      fbq("track", "PageView");
      fbq("trackCustom", "<?= $trackCustom; ?>");
    </script>
    <noscript
      ><img
        height="1"
        width="1"
        style="display: none"
        src="https://www.facebook.com/tr?id=<?=$pixelFacebook; ?>&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
  </head>
  <body>
    <section>
      <div id="pressel" class="container grid grid-auto-rows-1 gap text-center">
        <h1>
          Para você que tem ou conhece alguém que gosta de 
          <span class="color-blue">de cuidar da pele</span> …
        </h1>       

        <p>
          Se você soubesse que há um método natural para tratar suq pele, você o faria ? Pressione o botão de
          continuar para ver mais detalhes:
        </p>
        
        <a href="https://rugas.autoestimadamulher.online?utm_source=facebook&utm_medium=fbads&utm_campaign=rugas&utm_id=rugas">
          <button class="radius">CONTINUAR <h2 id="timer"></h2></button>
        </a>
        
      </div>
    </section>
  </body>
</html>

<script>
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const product = urlParams.get("product");
  console.log(product);

  // Tempo em segundos
  var tempo = <?=$timer;?>;
  // $("#myAlert").hide();
  // document.querySelector("#myAlert").style.display = "none";

  function countdown() {
    // Se o tempo não for zerado
    if (tempo - 1 >= -1) {
      // Pega a parte inteira dos minutos
      var min = parseInt(tempo / 60);
      // Calcula os segundos restantes
      var seg = tempo % 60;

      // Formata o número menor que dez, ex: 08, 07, ...
      if (min < 10) {
        min = "0" + min;
        min = min.substr(0, 2);
      }
      if (seg <= 9) {
        seg = "0" + seg;
      }

      // Cria a variável para formatar no estilo hora/cronômetro
      // horaImprimivel = "00:" + min + ":" + seg;
      horaImprimivel = seg;
      //JQuery pra setar o valor
      // $("#timer").html(horaImprimivel);
      document.getElementById("timer").innerHTML = horaImprimivel;

      // Define que a função será executada novamente em 1000ms = 1 segundo
      setTimeout("countdown()", 1000);

      // diminui o tempo
      tempo--;

      // Quando o contador chegar a zero faz esta ação
    } else {
      // $("#myAlert").show().fadeOut(5000);
    }
  }

  // Chama a função ao carregar a tela
  countdown();

</script>
