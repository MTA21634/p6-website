  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener('click', () => {
        // show navbar
        nav.classList.toggle('show')
        // change icon
        toggle.classList.toggle('fa-times')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        headerpd.classList.toggle('body-pd')
      })
    }
  }

  showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

  var linkColor = document.querySelectorAll('.nav-link')

  function colorLink() {
    if (linkColor) {
      linkColor.forEach(l => l.classList.remove('active'))
      this.classList.add('active')
    }
  }
  linkColor.forEach(l => l.addEventListener('click', colorLink))


//Event listener
// Add today's date to footage date selector
//document.getElementById('datePicker').valueAsDate = new Date();

// Custom timestamps for the video
function customTime() {
  var vid = document.getElementById("myVideo");
  var eventAt = Math.floor(vid.currentTime);
  eventAt = eventAt.toString();
  //vid.currentTime = 11;

  if (vid.currentTime < 10 && vid.currentTime != 0) {
    eventAt = "0:0" + eventAt;
  } else if (vid.currentTime == 0) {
    eventAt = "0:" + eventAt + "0";
  } else if (vid.currentTime > 10 && vid.currentTime <= 59) {
    eventAt = "0:" + eventAt;
  }
  //document.getElementById('timeString').innerHTML = eventAt;
  document.getElementById('timeString').value = eventAt;
  //console.log(vid.currentTime);
}

setInterval(customTime, 100);
//Functions
customTime();
