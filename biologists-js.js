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
  var vidLength = Math.floor(vid.duration);
  //alert(vidLength);
  //eventAt = eventAt.toString();
  //vid.currentTime = 11;
  /*
  if (vid.currentTime < 10 && vid.currentTime != 0) {
    eventAt = "0:0" + eventAt;
  } else if (vid.currentTime == 0) {
    eventAt = "0:" + eventAt + "0";
  } else if (vid.currentTime > 10 && vid.currentTime <= 59) {
    eventAt = "0:" + eventAt;

   minutes = Math.floor(seconds / 60);
   minutes = (minutes >= 10) ? minutes : "0" + minutes;
   seconds = Math.floor(seconds % 60);
   seconds = (seconds >= 10) ? seconds : "0" + seconds;
  }
  */
  //document.getElementById('timeString').innerHTML = eventAt;
  document.getElementById('timeString').value = eventAt;
  //console.log(vid.currentTime);
}

setInterval(customTime, 100);
//Functions
customTime();
//1
function mouseOver1() {
    document.getElementById("output-1").innerHTML = "Raw footage captured by the underwater camera";
}

function mouseOut1() {
  document.getElementById("output-1").innerHTML = "";
}
//2
function mouseOver2() {
    document.getElementById("output-2").innerHTML = "Adjustment of original video's photographic and pixel qualities (contrast, brightness, saturation)";
}

function mouseOut2() {
  document.getElementById("output-2").innerHTML = "";
}
//3
function mouseOver3() {
    document.getElementById("output-3").innerHTML = "Removal of background and static objects";
}

function mouseOut3() {
  document.getElementById("output-3").innerHTML = "";
}
//4
function mouseOver4() {
    document.getElementById("output-4").innerHTML = "Extraction of moving objects, such as fishes and other sea creatures";
}

function mouseOut4() {
  document.getElementById("output-4").innerHTML = "";
}
//5
function mouseOver5() {
    document.getElementById("output-5").innerHTML = "Analysis of 2-dimensional size of extracted objects and their geometrical qualities";
}

function mouseOut5() {
  document.getElementById("output-5").innerHTML = "";
}
//6
function mouseOver6() {
    document.getElementById("output-6").innerHTML = "Final data of how many objects are present in a frame and grouping of such objects";
}

function mouseOut6() {
  document.getElementById("output-6").innerHTML = "";
}
