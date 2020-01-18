<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/Chart.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../pages/Chart.js"></script>
    <title>Teste Front-End</title>
</head>
<body>
    <div class="form-top">
        <form action="../php/include.php" method="POST" class="container-inputs"><!-- form for submit with regex for filter the data -->
            <input 
            type="text" 
            class="form-control" 
            id="input-firstName" 
            placeholder="First Name"
            pattern="[A-Za-z]{2,255}"
            required
            title="Para este campo são permitidas apenas letras e acentos"
            name="firstName">

            <input 
            type="text" 
            class="form-control" 
            id="input-lastName" 
            placeholder="Last Name"
            pattern="[A-Za-z]{2,255}"
            required
            title="Para este campo são permitidas apenas letras e acentos" 
            name="lastName">

            <input 
            type="text"
            class="form-control" 
            id="input-participation" 
            placeholder="Participation" 
            pattern="[0-9.\d]{0,255}"
            required
            title="Para este campo são permitidos apenas números positivos"
            name="participation">

            <button 
            type="submit" 
            class="btn btn-outline-light" 
            id="button-send" 
            name="save">SEND</button>
        </form>
        <?php require_once '../php/include.php'; ?>
    </div>
    <div class="container-title">
        <h2 class="title">DATA</h2>
        <h4 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
    </div>
    <div class="content-dashboard">
        <div class="left-table">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Participation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once '../php/select.php'; ?><!-- "get" php connection -->
                </tbody>
            </table>
        </div>
        <div class="right-pie">
            <div class="card-doughnut">
                <canvas id="data-doughtnut" width="900" height="500"></canvas><!-- canvas with doughnut graphic -->
            </div>
        </div>
    </div>
    <script>
        new Chart(document.getElementById("data-doughtnut"), { //criating a new chart and referencing the canvas
        type: 'doughnut', //defining the type as doughnut
        data: { //call the data 
        labels: <?php echo json_encode($json2) ?>,//array with the name labels
        datasets: [ //datas for description
            {
            label: "Population (millions)",
            backgroundColor: [
          '#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
		  '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
		  '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
		  '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
		  '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
		  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
		  '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
		  '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
		  '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
		  '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'],//defining the colors
            data: <?php echo json_encode($json4) ?> //defining the porcentage data
            }
        ]
        },
        options: {
        title: {
            display: true, //creating a display for title
        }
        }
    });
    </script>
</body>
</html>