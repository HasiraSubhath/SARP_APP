<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Beneficiary Detailsssssssss
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIC</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">gender</th>
                <th scope="col">Age</th>
                <th scope="col">phone</th>
                <th scope="col">Income</th>
                <th scope="col">Family Members</th>
                <th scope="col">Education level</th>
                <th scope="col">Land Ownership</th>
                <th scope="col">Actions</th> 

            </tr>
        </thead>
        <tbody>
            @foreach ($beneficiaries as $beneficiary)
            <tr>

                <td>{{$beneficiary->nic}}</td>
                <td>{{$beneficiary->first_name}}</td>
                <td>{{$beneficiary->last_name}}</td>
                <td>{{$beneficiary->address}}</td>
                <td>{{$beneficiary->dob}}</td>
                <td>{{$beneficiary->gender}}</td>
                <td>{{$beneficiary->age}}</td>
                <td>{{$beneficiary->phone}}</td>
                <td>{{$beneficiary->income}}</td>
                <td>{{$beneficiary->family_members_count}}</td>
                <td>{{$beneficiary->education}}</td>
                <td>{{$beneficiary->land_ownership}}</td>
                <td>
                    <a href="{{ route('family/create', ['beneficiaryId' => $beneficiary->id]) }}" class="btn btn-primary">Add Family Member</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>