var vid = document.getElementById("myVideo");
var eventAt = Math.floor(vid.currentTime);
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer",
  {

    backgroundColor: null,
    animationEnabled: true,
    title:{
    text: ""
    },
    axisX:{
      title: "Time(s)",
      lineThickness: 1,
      lineColor: "white",
      labelFontColor: "#bababa",
      titleFontColor: "white",
      titleFontSize: 16
    },
    axisY:{
      gridThickness: 0,
      title: "Fish count",
      lineThickness: 1,
      lineColor: "white",
      labelFontColor: "#bababa",
      titleFontColor: "white",
      titleFontSize: 16
    },
    toolTip: {
    backgroundColor: "rgba(255,255,0,.2)",
    enabled: false
  },
     data: [
    {
      lineThickness: 1,
      markerSize: 10,
      color: "#ECF700",
      type: "line",

  click: function(e){
  vid.currentTime = e.dataPoint.x;

},
      dataPoints: [
      { x: 2, y: 1 },
      { x: 3, y: 3 },
      { x: 10, y: 5 },
      { x: 17, y: 6 },
      { x: 25, y: 9 },
      { x: 32, y: 12 },
      { x: 39, y: 26 },
      ]
    }
    ]
  });

  chart.render();
}
