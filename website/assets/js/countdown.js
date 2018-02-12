
// Set the date we're counting down to
var countDownDate = new Date("Apr 12, 2018 12:00:00").getTime();

// Update the count down every 1 second
var updateEverySecond = setInterval(function() {

  // Get todays date and time
  var today = new Date().getTime();

  // Find the distance between today an the count down date
  var distance = countDownDate - today;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="portfolioDayCountDown"
  document.getElementById("portfolioDayCountDown").innerHTML = days + " <span>d</span> " + hours + " <span>h</span> "
  + minutes + " <span>m</span> " + seconds + " <span>s</span> ";

  // If the count down is finished, do something cool?
  if (distance < 0) {
    clearInterval(updateEverySecond);
    document.getElementById("portfolioDayCountDown").innerHTML = "EXPIRED";
  }
}, 1000);
