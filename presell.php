<section>
  <div id="pressel" class="container grid grid-auto-rows-1 gap text-center">
    <h1>
      Para Você Que Tem Ou Conhece Alguém Que Gosta De 
      <span class="color-blue">Cuidar Do Cabelo</span> …
    </h1>       

    <p>
      Se você soubesse que há um método natural para tratar seu cabelo, você o faria ? Pressione o botão de
      continuar para ver mais detalhes:
    </p>
    
    <?php if ($URL[1]): ?>
      <a href="<?= LINK_REDIRECT; ?>">
        <button class="radius">CONTINUAR <h2 id="timer"></h2></button>
      </a>
    <?php else: ?>
      <a href="<?= LINK_REDIRECT; ?>">
        <button class="radius">CONTINUAR</button>
      </a>
    <?php endif; ?>
    
  </div>
</section>

