const labels = [
  '5 min',
  '11 min',
  '19 min',
  '26 min',
  '31 min',
  '49 min',
  '59 min',
  '69 min',
  '79 min',
];

/*
  Here is where you can adjust the data.
  The constant already features a reference to labels above.
  You can also give a name to the line in the 'label': section.
*/
const data = {
  labels: labels,
  datasets: [{
    label: 'Fish count',
    backgroundColor: '#C8F205',
    borderColor: '#C8F205',
    data: [1, 2, 3, 4, 8, 20, 25, 26, 35, 37],

  }]
};

/*
  Here you can specify the type of the chart.
  This part already features reference to the data and labels above.
*/
const config = {
  type: 'line',
  data,
  options: {}
};

/*
  In here we get the chart element, from the html above.
  And we construct the chart, by passing it the things we established above.
*/
var ctx = document.getElementById('myChart').getContext('2d');
//var myChart = new Chart(ctx, config);
var myChart = new Chart(document.getElementById("myChart"), config);

document.getElementById("myChart").onclick = function(evt){
    var activePoints = myChart.getElementsAtEvent(evt);
    console.log(activePoints);
    // use _datasetIndex and _index from each element of the activePoints array
};
