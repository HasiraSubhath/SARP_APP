<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tank edit</title>
</head>
<body>
    <form action="/tank_rehabilitation/{{ $tankRehabilitation->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="tank_id">Tank Id:</label>
        <input type="text" name="tank_id" id="tank_id" value="{{ $tankRehabilitation->tank_id }}">

        <label for="tank_name">Tank Name:</label>
        <input type="text" name="tank_name" id="tank_name" value="{{ $tankRehabilitation->tank_name }}">

        <label for="river_basin">River Basin:</label>
        <input type="text" name="river_basin" id="river_basin" value="{{ $tankRehabilitation->river_basin }}">

        <label for="cascade_name">Cascade Name:</label>
        <input type="text" name="cascade_name" id="cascade_name" value="{{ $tankRehabilitation->cascade_name }}">

        <label for="province">Province:</label>
        <input type="text" name="province" id="province" value="{{ $tankRehabilitation->province }}">

        <label for="district">District:</label>
        <input type="text" name="district" id="district" value="{{ $tankRehabilitation->district }}">

        <label for="ds_division">DS Division:</label>
        <input type="text" name="ds_division" id="ds_division" value="{{ $tankRehabilitation->ds_division }}">

        <label for="gn_division">GN Division:</label>
        <input type="text" name="gn_division" id="gn_division" value="{{ $tankRehabilitation->gn_division }}">

        <label for="as_centre">AS Centre:</label>
        <input type="text" name="as_centre" id="as_centre" value="{{ $tankRehabilitation->as_centre }}">

        <label for="agency">Agency:</label>
        <input type="text" name="agency" id="agency" value="{{ $tankRehabilitation->agency }}">

        <label for="no_of_family">Number of Family:</label>
        <input type="text" name="no_of_family" id="no_of_family" value="{{ $tankRehabilitation->no_of_family }}">

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude" value="{{ $tankRehabilitation->longitude }}">

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude" value="{{ $tankRehabilitation->latitude }}"> 

        <label for="progress">Progress:</label>
        <input type="text" name="progress" id="progress" value="{{ $tankRehabilitation->progress }}">

        <label for="contractor">Contractor:</label>
        <input type="text" name="contractor" id="contractor" value="{{ $tankRehabilitation->contractor }}">

        <label for="payment">Payment:</label>
        <input type="text" name="payment" id="payment" value="{{ $tankRehabilitation->payment }}">

        <label for="eot">EOT:</label>
        <input type="text" name="eot" id="eot" value="{{ $tankRehabilitation->contract_period }}">

        <label for="contract_period">Contract Period:</label>
        <input type="text" name="contract_period" id="contract_period" value="{{ $tankRehabilitation->contract_period}}">

        <label for="status">Status:</label>
        <input type="text" name="status" id="status" value="{{ $tankRehabilitation->status }}">

        <label for="remarks">Remarks:</label>
        <input type="text" name="remarks" id="remarks" value="{{ $tankRehabilitation->remarks }}">

        <button type="submit">Submit</button>
    </form>
</body>
</html>