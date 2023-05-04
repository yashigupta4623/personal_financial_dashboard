<script>
  
  var labels2 = ['Mutual_funds','Emergency_fund','Fixed_deposit','Liquid_cash'];
  var data = {
  labels: labels2,
  datasets: [{
    axis: 'y',
    label:  'Savings',
    data:<?php echo json_encode($amount2) ?>,
   
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth:1
    }]
  };
    var config = {
    type: 'bar',
    data,
    options: {
        indexAxis: 'y',
    }
    };


  var myChart = new Chart(
    document.getElementById('myChart2'),
    config
  );
</script>
