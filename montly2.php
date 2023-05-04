<script>
  const ctx = document.getElementById('monthly2');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels:['total_expanses','total_savings','total_income'],
      datasets: [{
        label: 'Total_Income <?php echo json_encode($total_income) ?> ,Total_Expanses <?php echo json_encode($total_expanses) ?> ,Total_Savings <?php echo json_encode($total_savings) ?>',
        data: [<?php echo json_encode($total_expanses) ?>,<?php echo json_encode($total_savings) ?>,<?php echo json_encode($total_income) ?>],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
