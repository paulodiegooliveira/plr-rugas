
<div class="headline-HkBGbz0384083">

  <form name="formQuiz">    
    <input class="inputHidden" type="hidden" name="quizCta" value="<?= QUIZ_CTA; ?>">
    <input class="inputHidden" type="hidden" name="quizCtaTitle" value="<?= QUIZ_CTA_TITLE; ?>">
    <input class="inputHidden" type="hidden" name="quizQuestionOne" value="<?= QUIZ_QUESTION_ONE; ?>">
    <input class="inputHidden" type="hidden" name="quizQuestionTwo" value="<?= QUIZ_QUESTION_TWO; ?>">
  </form>

  <div class="headline-HkBGbz0384083-element headline">    
    <h1><?php 
      
      $text = explode("##", QUIZ_TITLE);
      $newText = '';
      foreach($text as $key => $t) {
        if($key % 2 != 0){
          $newText .= '<span style="color:#a8dadc">' . $t .'</span>';
        }else {
          $newText .=  $t;
        }
      }

      if(!empty(CAPITALIZE)) :        
        echo ucwords($newText);
      elseif (!empty(UPPERCASE)) : 
        echo strtoupper($newText);
      else: 
        echo $newText; 
      endif;

      ?></h1>
    <!-- <h1> Descubra o&nbsp; <span style="color:#a8dadc">Real Motivo</span>&nbsp;de&nbsp; <span style="color:#a8dadc">99%</span>&nbsp;Dos Cremes Anti-Rugas&nbsp; <span style="color:#a8dadc">Não Funcionam</span> -->
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
  <div class="info hidden">Escolha uma das opções!</div>
  <button id="submit">Enviar</button>
</div>