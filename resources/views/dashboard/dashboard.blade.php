<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body>
    <h1>Dashboard</h1>

    <!-- Table to display data -->
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>30</td>
                <td>Male</td>
                <!-- Add more table cells with data as needed -->
            </tr>
            <!-- Add more table rows with data as needed -->
        </tbody>
    </table>

    <!-- Div to insert charts -->
    {{-- <div id="chartContainer"> --}}
        <!-- Charts will be dynamically inserted here -->
       
    </div>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
    var xValues = ["Italy", "France","spain"];
    var yValues = [55,65,55];
    var barColors = ["red", "green","blue"];
    
    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "World Wine Production 2018"
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
        }]
    }
      }
    });
    </script>
    
   
</body>
</html>