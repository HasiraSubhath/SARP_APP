<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>family edit</title>
</head>
<body>
    
    <form class="form-horizontal" method="POST" action="/family/{{$family->id}}">
    
    @csrf
    @method('PUT')
    
    {{-- <input type="text" name="nic" value="{{$family->nic}}" placeholder="NIC"> --}}
    <input type="text" name="first_name"  class="form-control" placeholder="First Name" value="{{$family->first_name}}" required>
    <input type="text" name="last_name"  class="form-control" placeholder="Last Name" value="{{$family->last_name}}" required>
    <input type="text" name="phone"  class="form-control" placeholder="Phone" value="{{$family->phone}}" required>
    <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{$family->gender}}" required>
    <input type="text" name="dob" class="form-control" placeholder="Birth date" value="{{$family->dob}}" required>
    <input type="text" name="youth" class="form-control" placeholder="Youth" value="{{$family->youth}}" required>
    <input type="text" name="education_level"  class="form-control" placeholder="Education" value="{{$family->education}}" required>
    <input type="text" name="employement"  class="form-control" placeholder="Employment" value="{{$family->employment}}" required>
    <input type="text" name="nutrition_level"  class="form-control" placeholder="nutrition_level" value="{{$family->nutrition_level}}" required>
    

    <!-- Repeat for other fields -->
    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
</body>
</html>