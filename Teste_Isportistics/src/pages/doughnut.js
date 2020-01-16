new Chart(document.getElementById("data-doughtnut"), { //criating a new chart and referencing the canvas
    type: 'doughnut', //defining the type as doughnut
    data: { //call the data 
      labels: ["Carlos", "Fernanda", "Hugo", "Eliza", "Anderson"], //array with the name labels
      datasets: [ //datas for description
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],//defining the colors
          data: [5,15,20,20,40] //defining the porcentage data
        }
      ]
    },
    options: {
      title: {
        display: true, //creating a display for title
      }
    }
});