//countdown = https://codepen.io/SitePoint/pen/NWxKgxN/

setTimeout(function () {
  const deadline = new Date(Date.parse(new Date()) + 1 * 5 * 60 * 60 * 1000);
  initializeClock("clockdiv", deadline);
  document.querySelector("#division-EWzQJh0319568").style.display = "block";
  document.querySelector(".luiptx4767087").style.display = "block";
  document.querySelector(".fbComments-WCYfbN0108460").style.display = "block";
  document.querySelector(".payment__card").style.display = "flex";
  document.querySelector(".button-ldARWA0528648").style.display = "flex";
  document.querySelector("a.button-ldARWA0528648-element").style.display =
    "block";
}, 15 * 60 * 1000);

setInterval(function () {
  document.getElementById("online").innerHTML =
    Math.floor(Math.random() * 10) + 70;
}, 3000);

const quizData = [
  {
    question: "Você já fez Tratamento para rugas?",
    a: "Não",
    b: "Sim",
    correct: "b",
  },
  {
    question: "Você quer ter uma pele mais jovem?",
    a: "Não",
    b: "Sim",
    correct: "b",
  },
  //, {
  //   question: "What does HTML stand for?",
  //   a: "Hypertext Markup Language",
  //   b: "Hypertext Markdown Language",
  //   c: "Hyperloop Machine Language",
  //   d: "Helicopters Terminals Motorboats Lamborginis",
  //   correct: "a"
  // },
  // {
  //   question: "What year was JavaScript launched?",
  //   a: "1996",
  //   b: "1995",
  //   c: "1994",
  //   d: "none of the above",
  //   correct: "b"
  // },
  // {
  //   question: "Is javaScript is programming language?",
  //   a: "Yes",
  //   b: "No",
  //   c: "Not sure",
  //   d: "none of the above",
  //   correct: "a"
  // },
  // {
  //   question: "How we can alert hello world?",
  //   a: "alertbox('hello world')",
  //   b: "alert('hello world')",
  //   c: "myalert('hello world')",
  //   d: "none of the above",
  //   correct: "b"
  // },
  // {
  //   question: "HTML is used for?",
  //   a: "Build the Website/App",
  //   b: "Programming",
  //   c: "Hacking",
  //   d: "none of the above",
  //   correct: "a"
  // },
  // {
  //   question: "Best place to add script tag in HTML?",
  //   a: "Head",
  //   b: "Body",
  //   c: "Bottom of the HTML",
  //   d: "Both A and B",
  //   correct: "d"
  // },
  // {
  //   question: "Coding is?",
  //   a: "Art",
  //   b: "Science",
  //   c: "Headache",
  //   d: "Both A and B",
  //   correct: "d"
  // },
  // {
  //   question: "Who's your Saylani",
  //   a: "Sir Kashif suleman",
  //   b: "Sir Rizwan",
  //   c: "None of Them",
  //   d: "Both A and B",
  //   correct: "a"
  // }
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
  // c_text.innerText = currentQuizData.c;
  // d_text.innerText = currentQuizData.d;
};

const lastSegment = window.location.href.split("/").pop();

if (lastSegment) {
  loadQuiz();
  submitButton.addEventListener("click", () => {
    const answer = getSelected();
    if (answer) {
      if (answer === quizData[currentQuiz].correct) score++;
      currentQuiz++;

      if (currentQuiz < quizData.length) loadQuiz();
      else {
        quiz.innerHTML = `
              <h2>ASSISTA O VIDEO ATÉ O FIM</h2>
              <form action="https://rugas.autoestimadamulher.online">
              <button submit="">SIM! Assistir vídeo agora</button>
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

// COUNTDOWN
function getTimeRemaining(endtime) {
  const total = Date.parse(endtime) - Date.parse(new Date());
  const seconds = Math.floor((total / 1000) % 60);
  const minutes = Math.floor((total / 1000 / 60) % 60);
  const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
  const days = Math.floor(total / (1000 * 60 * 60 * 24));

  return {
    total,
    days,
    hours,
    minutes,
    seconds,
  };
}

function initializeClock(id, endtime) {
  const clock = document.getElementById(id);
  const daysSpan = clock.querySelector(".days");
  const hoursSpan = clock.querySelector(".hours");
  const minutesSpan = clock.querySelector(".minutes");
  const secondsSpan = clock.querySelector(".seconds");

  function updateClock() {
    const t = getTimeRemaining(endtime);

    daysSpan.innerHTML = "0" + t.days;
    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
    secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}
