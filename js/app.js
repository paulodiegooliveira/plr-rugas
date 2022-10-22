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
