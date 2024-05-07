<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beneficiary Details</title>
</head>
<body>

    <h1>Beneficiary Details</h1>

    <h2>ID: {{$beneficiary->id}}</h2>
    <h2>First Name: {{$beneficiary->first_name}}</h2>
    <h2>Last Name: {{$beneficiary->last_name}}</h2>
    <h2>Phone: {{$beneficiary->phone}}</h2>
    <!-- Display other beneficiary details here -->

    <h2>Family Members:</h2>
    <ul>
        @foreach($beneficiary->family as $familyMember)
            <li>{{$familyMember->first_name}} {{$familyMember->last_name}}</li>
            <li>{{$familyMember->phone}}</li>
           <h2>ID: {{$familyMember->id}}</h2>
            <h2>First Name: {{$familyMember->first_name}}</h2>
            <h2>Last Name: {{$familyMember->last_name}}</h2>
            <h2>Phone: {{$familyMember->phone}}</h2>


            <!-- Display other family member details as needed -->
        @endforeach
    </ul>

    <a href ="{{ route('beneficiary.edit', $beneficiary->id) }}">Edit</a>
    <a href ="{{ route('beneficiary.index') }}">Back</a>
    
</body>
</html>
