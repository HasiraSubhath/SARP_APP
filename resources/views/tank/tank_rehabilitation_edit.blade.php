<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tank edit</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom styles */
        body {
          background-color: #f8f9fa;
        }
    
        .container {
          margin-top: 50px;
        }
        
        .dropdown {
          margin-bottom: 20px;
          display: flex;
          flex-direction: column;
          align-items: center;
        }
    
        .dropdown-menu {
          min-width: auto;
        }
    
        .dropdown-item {
          padding: 10px;
          font-size: 16px;
        }
    
        /* Adjust button width to fit the content */
        .dropdown-toggle {
          min-width: 250px; /* Increase the width */
        }
    
        /* Center align labels */
        .dropdown-label {
          text-align: center;
          font-size:20px;
        }
        /* Adjust dropdown button text alignment */
    
    
      </style>
</head>
<body>
    <div class="container mt-6 border rounded border-primary p-4">
        <h2 class="text-center mb-4">Tank Details Edit</h2>
    <form action="/tank_rehabilitation/{{ $tankRehabilitation->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col">
                <div class="dropdown">
       
        
    

        <label for="tank_name">Tank Name:</label>
        <input type="text" name="tank_name" id="tank_name" value="{{ $tankRehabilitation->tank_name }}">
    </div>

</div>
<div class="col">
   
     
  <div class="dropdown">
        <label for="river_basin">River Basin:</label>
        <input type="text" name="river_basin" id="river_basin" value="{{ $tankRehabilitation->river_basin }}">
    </div>

</div>
<div class="col">
   
     
  <div class="dropdown">
        <label for="cascade_name">Cascade Name:</label>
        <input type="text" name="cascade_name" id="cascade_name" value="{{ $tankRehabilitation->cascade_name }}">
    </div>

</div>
<div class="col">
   
     
  <div class="dropdown">
        <label for="province">Province:</label>
        <input type="text" name="province" id="province" value="{{ $tankRehabilitation->province }}">
    </div>

</div>
<div class="col">
   
     
  <div class="dropdown">
        <label for="district">District:</label>
        <input type="text" name="district" id="district" value="{{ $tankRehabilitation->district }}">
    </div>

</div>
        </div>
   
    <div class="container">
        <div class="row">
            <div class="col">
  <div class="dropdown">
        <label for="ds_division">DS Division:</label>
        <input type="text" name="ds_division" id="ds_division" value="{{ $tankRehabilitation->ds_division }}">
    </div>

</div>
<div class="col">
   
     
  <div class="dropdown">
        <label for="gn_division">GN Division:</label>
        <input type="text" name="gn_division" id="gn_division" value="{{ $tankRehabilitation->gn_division }}">
    </div>

</div>
<div class="col">
   
     
  <div class="dropdown">
        <label for="as_centre">AS Centre:</label>
        <input type="text" name="as_centre" id="as_centre" value="{{ $tankRehabilitation->as_centre }}">
    </div>

</div>
</div>

<div class="col">
   
     
  <div class="dropdown">
        <label for="agency">Agency:</label>
        <input type="text" name="agency" id="agency" value="{{ $tankRehabilitation->agency }}">
    </div>
</div>
    </div>
    <div class="mb-3">
    <label for="tank_id">Tank Id:</label>
        <input type="text" name="tank_id" id="tank_id" value="{{ $tankRehabilitation->tank_id }}">
    </div>
    <div class="mb-3">
        <label for="no_of_family">Number of Family:</label>
        <input type="text" name="no_of_family" id="no_of_family" value="{{ $tankRehabilitation->no_of_family }}">
    </div>

    <div class="mb-3">
        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude" value="{{ $tankRehabilitation->longitude }}">
    </div>

    <div class="mb-3">
        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude" value="{{ $tankRehabilitation->latitude }}"> 
    </div>

    <div class="mb-3">
        <label for="progress">Progress:</label>
        <input type="text" name="progress" id="progress" value="{{ $tankRehabilitation->progress }}">
    </div>

    <div class="mb-3">
        <label for="contractor">Contractor:</label>
        <input type="text" name="contractor" id="contractor" value="{{ $tankRehabilitation->contractor }}">
    </div>

    <div class="mb-3">
        <label for="payment">Payment:</label>
        <input type="text" name="payment" id="payment" value="{{ $tankRehabilitation->payment }}">
    </div>

    <div class="mb-3">
        <label for="eot">EOT:</label>
        <input type="text" name="eot" id="eot" value="{{ $tankRehabilitation->contract_period }}">
    </div>

    <div class="mb-3">
        <label for="contract_period">Contract Period:</label>
        <input type="text" name="contract_period" id="contract_period" value="{{ $tankRehabilitation->contract_period}}">
    </div>

    <div class="mb-3">
        <label for="status">Status:</label>
        <input type="text" name="status" id="status" value="{{ $tankRehabilitation->status }}">
    </div>

    <div class="mb-3">
        <label for="remarks">Remarks:</label>
        <input type="text" name="remarks" id="remarks" value="{{ $tankRehabilitation->remarks }}">
    </div>

        <button type="submit">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>