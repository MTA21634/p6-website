window.onload = function () {
   var chart = new CanvasJS.Chart("chartContainer",
   {
     title:{
       text: ""
     },
     animationEnabled: true,
      axisX: {
        labelFontSize: 22,
        labelFontColor: "black"
 },
     data: [
     {
       type: "bar",
       dataPoints: [
       { y: 10, label: "🔴", color: "red"},
       { y: 20, label: "⚫", color: "grey"},
       { y: 50, label: "🔵", color: "blue"}
       ]
     }
     ]
   });

chart.render();
}
