<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
                <td>
                    {{-- <a href="{{ route('beneficiary/edit', ['id' => $beneficiary->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('beneficiary/delete', ['id' => $beneficiary->id]) }}" class="btn btn-danger">Delete</a> --}}
                    <a href="" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="{{ route('beneficiary/create') }}" class="btn btn-primary">Add Beneficiary</a> --}}
</body>
</html>