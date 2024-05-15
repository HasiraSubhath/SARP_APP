<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.sidebar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        text-align: center;
        color: green;
    }
 
    h2 {
        text-align: center;
        font-family: "Verdana", sans-serif;
        font-size: 40px;
    }
    .grid-container {
  display: grid;
  grid-template-columns: 33% 33% 33%;
}
</style>
</head>
<body>
    
    
    @include('dashboard.navbar')
    <h1>Dashboard</h1>

    <p>Male Count: {{ $maleCount }}</p>
    <p>Female Count: {{ $femaleCount }}</p>
    <p>Youth Count: {{ $youthCount }}</p>
    <p>Adult Count: {{ $middleAgeCount }}</p>
    <div class="grid-container">
        

    <div>
        <h2>Beneficiaries By Gender Wise </h2>
        <div id="donut-chart"></div>
        <div id="myChart" style="width:100%;max-width:600px"></div>
    </div>
    <div>
        <h2>Beneficiaries By Age </h2>
        <div id="donut-chart2"></div>
        <div id="myChart2" style="width:100%;max-width:700px"></div>
    </div> 
    

</div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
   {{-- PIE CHART TEST --}}
<script src=
"https://d3js.org/d3.v4.min.js"></script>
<script src=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
<link rel="stylesheet"
      href=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" />
<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
      type="text/css" />
 
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>
 
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js">
</script>

<script>
  
    let chart = bb.generate({
        data: {
            columns: [
                ["Male", {{ $maleCount }}],
                ["Female", {{ $femaleCount }}],
            ],
            type: "pie",
            onclick: function (d, i) {
                console.log("onclick", d, i);
            },
            onover: function (d, i) {
                console.log("onover", d, i);
            },
            onout: function (d, i) {
                console.log("onout", d, i);
            },
        },
        donut: {
            title: "Beneficiaries by Gender",
        },
        bindto: "#donut-chart",
    });

</script>
<script>
    let chart2 = bb.generate({
        data: {
            columns: [
                ["Youth", {{ $youthCount }}],
                ["Middle Age", {{ $middleAgeCount }}],
            ],
            type: "pie",
            onclick: function (d, i) {
                console.log("onclick", d, i);
            },
            onover: function (d, i) {
                console.log("onover", d, i);
            },
            onout: function (d, i) {
                console.log("onout", d, i);
            },
        },
        donut: {
            title: "Beneficiaries by Age",
        },
        
        bindto: "#donut-chart2",
    });
</script>

</body>
</html>