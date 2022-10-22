const baseUrl = document.formBaseUrl.elements["base"].value;
const quizQuestionOne = document.formQuiz.elements["quizQuestionOne"].value;
const quizQuestionTwo = document.formQuiz.elements["quizQuestionTwo"].value;
const quizData = [
  {
    question: quizQuestionOne,
    a: "Não",
    b: "Sim",
    correct: "b",
  },
  {
    question: quizQuestionTwo,
    a: "Não",
    b: "Sim",
    correct: "b",
  },
];

const quiz = document.getElementById("quiz");
const answerElements = document.querySelectorAll(".answer");
const questionElement = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
// const c_text = document.getElementById("c_text");
// const d_text = document.getElementById("d_text");
const submitButton = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

const deselectAnswers = () => {
  answerElements.forEach((answer) => (answer.checked = false));
};

const getSelected = () => {
  let answer;
  answerElements.forEach((answerElement) => {
    if (answerElement.checked) answer = answerElement.id;
  });
  return answer;
};

const loadQuiz = () => {
  deselectAnswers();
  const currentQuizData = quizData[currentQuiz];
  questionElement.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
};

const lastSegment = window.location.href.split("/");

if (lastSegment.includes("quiz")) {
  loadQuiz();
  submitButton.addEventListener("click", () => {
    const answer = getSelected();

    if (typeof answer === "undefined") {
      document.querySelector(".info").style.display = "block";
      setTimeout(function () {
        document.querySelector(".info").style.display = "none";
      }, 3000);
    }

    if (answer) {
      if (answer === quizData[currentQuiz].correct) score++;
      currentQuiz++;

      if (currentQuiz < quizData.length) loadQuiz();
      else {
        const quizCtaTitle = document.formQuiz.elements["quizCtaTitle"].value;
        const quizCta = document.formQuiz.elements["quizCta"].value;
        quiz.innerHTML = `
              <img src="${baseUrl}/img/tick.png"/>
              <h2>${quizCtaTitle}</h2>
              <form action="${baseUrl}">
              <button submit="" class="radius">${quizCta}</button>
              </form>
          `;
        // quiz.innerHTML = `
        //       <h2>You answered ${score}/${quizData.length} questions correctly</h2>
        //       <button onclick="history.go(0)">Play Again</button>
        //   `;
      }
    }
  });
}
