<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="modal fade" id="editFamilyModal" tabindex="-1" role="dialog" aria-labelledby="editFamilyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFamilyModalLabel">Edit Family Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editFamilyForm" method="POST" action="#">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <!-- Your form fields for editing -->
                        <!-- Example: -->
                        <input type="text" name="first_name" id="edit_first_name" class="form-control" placeholder="First Name" required>
                        <input type="text" name="last_name" id="edit_last_name" class="form-control" placeholder="Last Name" required>
                        <input type="text" name="phone" id="edit_phone" class="form-control" placeholder="" required>
                        <input type="text" name="gender" id="edit_gender" class="form-control" placeholder="" required>
                        <input type="text" name="dob" id="edit_dob" class="form-control" placeholder="" required>
                        <input type="text" name="youth" id="edit_youth" class="form-control" placeholder="" required>
                        <input type="text" name="education_level" id="edit_"education_level class="form-control" placeholder="" required>
                        <input type="text" name="employement" id="edit_employement" class="form-control" placeholder="" required>
                        <input type="text" name="nutrition_level" id="edit_nutrition_level" class="form-control" placeholder="" required>
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Youth</th>
                <th>Education</th>
                <th>Employment</th>
                <th>Nutrition Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($families as $family)
            <tr>
                <td>{{ $family->first_name }}</td>
                <td>{{ $family->last_name }}</td>
                <td>{{ $family->phone }}</td>
                <td>{{ $family->gender }}</td>
                <td>{{ $family->dob }}</td>
                <td>{{ $family->youth }}</td>
                <td>{{ $family->education }}</td>
                <td>{{ $family->employment }}</td>
                <td>{{ $family->nutrition_level }}</td>
                <td>
                    {{-- <button class="btn btn-primary edit-family-btn" data-toggle="modal" data-target="#editFamilyModal" data-family-id="{{ $family->id }}">Edit</button> --}}
                    {{-- <a href="/family/{{ $family->id }}/edit">Edit</a>
                    <form action="/family/{{ $family->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button> --}}
                        <a href='family/{{$family->id}}/edit'>Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // JavaScript to handle edit button click and populate form fields
        $(document).ready(function() {
            $('.edit-family-btn').click(function() {
                // Get family ID from data attribute
                var familyId = $(this).data('family-id');
                // Ajax call to fetch family details
                $.ajax({
                    url: '/family/' + familyId + '/edit',
                    method: 'GET',
                    success: function(response) {
                        // Populate form fields with fetched data
                        $('#edit_first_name').val(response.first_name);
                        $('#edit_last_name').val(response.last_name);
                        $('#edit_phone').val(response.phone);
                        $('#edit_gender').val(response.genfer);
                        $('#edit_dob').val(response.dob);
                        $('#edit_youth').val(response.youth);
                        $('#edit_education').val(response.education);
                        $('#edit_employment').val(response.employment);
                        $('#edit_nutrition_level').val(response.nutrition_level);
                        
                        // Populate other fields similarly
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                    }
                });
            });
        });
    </script>
</body>
</html>