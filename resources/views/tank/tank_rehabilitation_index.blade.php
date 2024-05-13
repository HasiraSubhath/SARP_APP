<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tank details</title>
 <!-- Add jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <!-- Add Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 {{-- <link rel="stylesheet" href="{{ asset('assets/css/pagination.css')}} "> --}}
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>
<body>
  @include('dashboard.navbar')
</br>
 @csrf
 <div class="container-fluid">
  <div class="center-heading" style="text-align: center;">
      <h1>Tank Rehabilitation Details</h1>
  </div>
  <div >
    <a href="{{route('downloadtank.csv')}}" class="btn btn-primary" >Generate CSV Report</a>
    <a href="{{route('tank_rehabilitation.create')}}" class="btn btn-primary" >Add</a>
  </div>
</form>
<div class="row table-container">
  <div class="col">
      <table  class="table table-bordered ">
</div>
<thead class="thead-light">
  <tr>
    <th>Tank Id</th>
    <th>Tank Name</th>
    <th>River Basin</th>
    <th>Cascade Name</th>
    <th>Province</th>
    <th>District</th>
    <th>DS Division</th>
    <th>GN Division</th>
    <th>AS Centre</th>
    <th>Agency</th>
    <th>No. of Family</th>
    <th>Longitude</th>
    <th>Latitude</th>
    <th>Progress</th>
    <th>Contractor</th>
    <th>Payment</th>
    <th>EOT</th>
    <th>Contract Period</th>
    <th>Status</th>
    <th>Remarks</th>
    <th>Action</th>
  </tr>
  @foreach ($tankRehabilitations as $tankRehabilitation)
  <tr>
    <td>{{ $tankRehabilitation->tank_id }}</td>
    <td>{{ $tankRehabilitation->tank_name }}</td>
    <td>{{ $tankRehabilitation->river_basin }}</td>
    <td>{{ $tankRehabilitation->cascade_name }}</td>
    <td>{{ $tankRehabilitation->province }}</td>
    <td>{{ $tankRehabilitation->district }}</td>
    <td>{{ $tankRehabilitation->ds_division }}</td>
    <td>{{ $tankRehabilitation->gn_division }}</td>
    <td>{{ $tankRehabilitation->as_centre }}</td>
    <td>{{ $tankRehabilitation->agency }}</td>
    <td>{{ $tankRehabilitation->no_of_family }}</td>
    <td>{{ $tankRehabilitation->longitude }}</td>
    <td>{{ $tankRehabilitation->latitude }}</td>
    <td>{{ $tankRehabilitation->progress }}</td>
    <td>{{ $tankRehabilitation->contractor }}</td>
    <td>{{ $tankRehabilitation->payment }}</td>
    <td>{{ $tankRehabilitation->eot }}</td>
    <td>{{ $tankRehabilitation->contract_period }}</td>
    <td>{{ $tankRehabilitation->status }}</td>
    <td>{{ $tankRehabilitation->remarks }}</td>
    <td>
      <a href="/tank_rehabilitation/{{ $tankRehabilitation->id }}/edit" class="btn btn-primary">Edit</a>
      <form action="/tank_rehabilitation/{{ $tankRehabilitation->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</a>
    </form>
  </tr>
  @endforeach
</table>
</body>
</html>
