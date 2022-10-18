<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz-App</title>
  <!-- <script src="https://kit.fontawesome.com/b91379b65b.js" crossorigin="anonymous"></script> -->
  <!-- <link rel="shortcut icon" href="./js-brands.svg" type="image/x-icon"> -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '640570114361468');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=640570114361468&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<body id="img-bg">
  <div class="headline-HkBGbz0384083">
    <style>
      .headline-HkBGbz0384083-element h1 {
        font-size: 1.98vw;
        text-align: center;
        padding-top: 4vh;
        padding-bottom: 2vh;
        color: #f1faee;
        line-height: 1.1;
        font-weight: 600;
      }

      @media (max-width: 1200px) {
        .headline-HkBGbz0384083-element h1 {
          font-size: 3.30vw;
          padding-top: 3vh;
          padding-bottom: 1.5vh;
        }
      }

      @media (max-width: 640px) {
        .headline-HkBGbz0384083-element h1 {
          font-size: 4.50vw;
          text-align: center;
        }
      }
    </style>
    <div class="headline-HkBGbz0384083-element headline">
      <h1> Descubra o&nbsp; <span style="color:#a8dadc">Real Motivo</span>&nbsp;de&nbsp; <span style="color:#a8dadc">99%</span>&nbsp;Dos Cremes Anti-Rugas&nbsp; <span style="color:#a8dadc">Não Funcionam</span>
      </h1>
    </div>
  </div>

  <div class="quiz-container" id="quiz">    
    <div class="quiz-header">
      <h2 id="question">Question is loading...</h2>
      <ul>
        <li>
          <input type="radio" name="answer" id="a" class="answer" />
          <label for="a" id="a_text">Answer...</label>
        </li>
        <li>
          <input type="radio" name="answer" id="b" class="answer" />
          <label for="b" id="b_text">Answer...</label>
        </li>
        <!-- <li>
          <input type="radio" name="answer" id="c" class="answer" />
          <label for="c" id="c_text">Answer...</label>
        </li>
        <li>
          <input type="radio" name="answer" id="d" class="answer" />
          <label for="d" id="d_text">Answer...</label>
        </li> -->
      </ul>
    </div>
    <button id="submit">Enviar</button>
  </div>
  <script src="./js/app.js"></script>
  
</body>
<!-- https://codepen.io/SIDDDIQUI/pen/oNqVXXE?editors=0010 -->
</html>