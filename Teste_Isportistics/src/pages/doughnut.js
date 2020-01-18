
new Chart(document.getElementById("data-doughtnut"), { //criating a new chart and referencing the canvas
    type: 'doughnut', //defining the type as doughnut
    data: { //call the data 
      labels: <?php echo json_encode($row['first_name']) ?>,//array with the name labels
      datasets: [ //datas for description
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],//defining the colors
          data: <?php echo json_encode($row['participation']) ?> //defining the porcentage data
        }
      ]
    },
    options: {
      title: {
        display: true, //creating a display for title
      }
    }
});