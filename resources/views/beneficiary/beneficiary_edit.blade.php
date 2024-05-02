{{-- {{ dd($beneficiary) }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <form class="form-horizontal" method="POST" action="/beneficiary/{{$beneficiary->id}}">
        
        @csrf
        @method('PUT')
        
        <input type="text" name="nic" value="{{$beneficiary->nic}}" placeholder="NIC">
<input type="text" name="first_name" value="{{$beneficiary->first_name}}" placeholder="First Name">
<input type="text" name="last_name" value="{{$beneficiary->last_name}}" placeholder="Last Name">
<input type="text" name="address" value="{{$beneficiary->address}}" placeholder="Address">
<input type="text" name="dob" value="{{$beneficiary->dob}}" placeholder="Date Of Birth">
<input type="text" name="gender" value="{{$beneficiary->gender}}" placeholder="Gender">
<input type="text" name="age" value="{{$beneficiary->age}}" placeholder="Age">
<input type="text" name="phone" value="{{$beneficiary->phone}}" placeholder="Phone">
<input type="text" name="income" value="{{$beneficiary->income}}" placeholder="Income">
<input type="text" name="family_members_count" value="{{$beneficiary->family_members_count}}" placeholder="Family Members Count">
<input type="text" name="education" value="{{$beneficiary->education}}" placeholder="Education Level">
<input type="text" name="land_ownership" value="{{$beneficiary->land_ownership}}" placeholder="Land Ownership">

        <!-- Repeat for other fields -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</body>
</html>