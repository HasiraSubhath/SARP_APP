<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tank Registration</title>
</head>
<body>
    @csrf 
    <h1>Tank Registration</h1>

    <form action="/tank_rehabilitation" method="POST">
        @csrf  
        <label for="tank_id">Tank Id:</label>
        <input type="text" name="tank_id" id="tank_id">

        <label for="tank_name">Tank Name:</label>
        <input type="text" name="tank_name" id="tank_name">

        <label for="river_basin">River Basin:</label>
        <input type="text" name="river_basin" id="river_basin">

        <label for="cascade_name">Cascade Name:</label>
        <input type="text" name="cascade_name" id="cascade_name">

        <label for="province">Province:</label>
        <input type="text" name="province" id="province">

        <label for="district">District:</label>
        <input type="text" name="district" id="district">

        <label for="ds_division">DS Division:</label>
        <input type="text" name="ds_division" id="ds_division">

        <label for="gn_division">GN Division:</label>
        <input type="text" name="gn_division" id="gn_division">

        <label for="as_centre">AS Centre:</label>
        <input type="text" name="as_centre" id="as_centre">

        <label for="agency">Agency:</label>
        <input type="text" name="agency" id="agency">

        <label for="no_of_family">Number of Family:</label>
        <input type="text" name="no_of_family" id="no_of_family">

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude">

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude">

        <label for="progress">Progress:</label>
        <input type="text" name="progress" id="progress">

        <label for="contractor">Contractor:</label>
        <input type="text" name="contractor" id="contractor">

        <label for="payment">Payment:</label>
        <input type="text" name="payment" id="payment">

        <label for="eot">EOT:</label>
        <input type="text" name="eot" id="eot">

        <label for="contract_period">Contract Period:</label>
        <input type="text" name="contract_period" id="contract_period">

        <label for="status">Status:</label>
        <input type="text" name="status" id="status">

        <label for="remarks">Remarks:</label>
        <input type="text" name="remarks" id="remarks">

        <button type="submit">Submit</button>
    </form>
</body>
</html>