<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<title>Edit Training</title>


</head>
<body>
    @include('dashboard.navbar')
    @csrf

    {{-- <div class="container mt-5 border rounded border-primary p-4">
        <form class="form-horizontal" method="POST" action="/training">
            
            <div class="col-md-12 text-center">
                <h2>Edit Training Programe Details </h2>
            </div>

            <div class="container mt-5">
                    <div class="row mb-4">
                        <div class="container-fluid py-3">
                            
                            <div class="row">
                                <div class="col">
                                    <div class="dropdown">
                                        <div class="form-group">
                                            <label for="provinceDropdown">Province</label> 
                                            <select class="form-control" value="{{$training->province}}" id="provinceDropdown" name="province" required>
                                                
                                            </select>
                                         
                                            </select>
                                            <input type="hidden" id="provinceName" name="province">
                                        </div>
                        
                                        <div class="col-md-4 mb-3">
                                            <label for=""> district</label>
                                            <input type="text" class="form-control" value="{{$training->district}}" id="conductorName" name="district" placeholder="Enter Conductor Name" required>
                                        </div>

                            <div class="form-group">
                                <label for="districtDropdown" >District</label>
                               
                                <select class="form-control" value="{{$training->district}}" id="districtDropdown" name="district" required>
                                    
                                </select>
                                <input type="hidden" id="districtName" name="district">
                            </div>
            
                            <div class="form-group">
                                <label for="dsDivisionDropdown"  >DS Division</label>
                                <select class="form-control" value="{{$training->ds_division}}" id="dsDivisionDropdown" name="ds_division" required>
                                    
                                </select>
                                <input type="hidden" id="dsDivisionName" name="ds_division">
                            </div>
            
                            <div class="form-group">
                                <label for="gndDropdown">GND</label>
                                <select class="form-control" value="{{$training->gn_division}}" id="gndDropdown" name="gn_division" required>
                                    
                                </select>
                                <input type="hidden" id="gndName" name="gn_division">
                            </div>
                            
                            <div class="dropdown">
                                <label for="" style="float: left" >Select ASC</label>
                                <select class="form-control" id="ascDropdown"button value="{{$training->as_center}}"  name="as_center"   required>
                                    
                                </select>
                  </div>
                </div>
                
          </div>
                
                        </div>
                    </div>
            </div>
            
        
        
                
                
                
                 
                <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="place">Place</label>
                    <input type="text" class="form-control" value="{{$training->place}}" id="place" name="place" placeholder="place" required>
                </div>
                </div>
              
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="dropdown">
                        <label for="place">Training Program Type</label>
                        <select class="btn btn-secondary dropdown-toggle btn-block" id="typeDropdown" name="program_name" required>
                          
                            <option value="Type 1" {{ $training->education == 'Type 1' ? 'selected' : '' }}>Type 1</option>
                            <option value="Type 2" {{ $training->education == 'Type 2' ? 'selected' : '' }}>Type 2</option>
                            <option value="Type 3" {{ $training->education == 'Type 3' ? 'selected' : '' }}>Type 3</option>
                        </select>
                    </div>
                </div>
            </div>
        
<div class="row">
    
    <div class="col-md-4 mb-3">
        <label for="startDate">Start Date</label>
        <input type="text" class="form-control" value="{{$training->date}}" id="startDate" name="date" placeholder="Select Start Date" required>
    </div>
</div>

                
                <div class="row">
                   
                    <div class="col-md-4 mb-3">
                        <label for="">Conductor Name</label>
                        <input type="text" class="form-control" value="{{$training->conductor_name}}" id="conductorName" name="conductor_name" placeholder="Enter Conductor Name" required>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-4 mb-3">
                        <label for="">Conductor Payment</label>
                        <input type="text" class="form-control" value="{{$training->conductor_payment}}" id="conductorPayment" name="conductor_payment" placeholder="Enter Conductor Payment" required>
                    </div>
                </div>
            </div>
            
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            
        </form>
    </div> --}}
    <div class="container-fluid">
        <div class="center-heading" style="text-align: center;">
            <h2>Edit Training Program Details</h2>
        </div>

        {{-- <form class="form-horizontal" method="POST" action="/training/{{ $training->id }}"> --}}
            <form class="form-horizontal" method="POST" action="/training">
            @csrf
            @method('PUT')
            
            <div class="container mt-5">
                <div class="row mb-4">
                    <div class="container-fluid py-3">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="beneficiaryNic">Beneficiary NIC</label>
                                    <input type="text" class="form-control" id="beneficiaryNic" value="{{ $training->beneficiary->nic }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="beneficiaryFirstName">Beneficiary First Name</label>
                                    <input type="text" class="form-control" id="beneficiaryFirstName" value="{{ $training->beneficiary->first_name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="beneficiaryLastName">Beneficiary Last Name</label>
                                    <input type="text" class="form-control" id="beneficiaryLastName" value="{{ $training->beneficiary->last_name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="beneficiaryLastName">Beneficiary Genfer</label>
                                    <input type="text" class="form-control" id="beneficiaryLastName" value="{{ $training->beneficiary->gender }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="beneficiaryLastName">Beneficiary Age</label>
                                    <input type="text" class="form-control" id="beneficiaryLastName" value="{{ $training->beneficiary->Age < 35 ? 'Youth' : 'Senior' }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="provinceDropdown">Province</label>
                                    <select class="form-control" id="provinceDropdown" name="province" required>
                                        <!-- Options will be populated by jQuery -->
                                    </select>
                                    <input type="hidden" id="provinceName" name="province" value="{{ $training->province }}">
                                </div>
                                <div class="form-group">
                                    <label for="districtDropdown">District</label>
                                    <select class="form-control" id="districtDropdown" name="district" required>
                                        <!-- Options will be populated by jQuery -->
                                    </select>
                                    <input type="hidden" id="districtName" name="district" value="{{ $training->district }}">
                                </div>
                                <div class="form-group">
                                    <label for="dsDivisionDropdown">DS Division</label>
                                    <select class="form-control" id="dsDivisionDropdown" name="ds_division" required>
                                        <!-- Options will be populated by jQuery -->
                                    </select>
                                    <input type="hidden" id="dsDivisionName" name="ds_division" value="{{ $training->ds_division }}">
                                </div>
                                <div class="form-group">
                                    <label for="gndDropdown">GND</label>
                                    <select class="form-control" id="gndDropdown" name="gn_division" required>
                                        <!-- Options will be populated by jQuery -->
                                    </select>
                                    <input type="hidden" id="gndName" name="gn_division" value="{{ $training->gn_division }}">
                                </div>
                                <div class="form-group">
                                    <label for="ascDropdown">ASC</label>
                                    <select class="form-control" id="ascDropdown" name="as_center" required>
                                        <!-- Options will be populated by jQuery -->
                                    </select>
                                    <input type="hidden" id="ascName" name="as_center" value="{{ $training->as_center }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="place">Place</label>
                        <input type="text" class="form-control" id="place" name="place" value="{{ $training->place }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="programName">Training Program Type</label>
                            <select class="form-control" id="programName" name="program_name" required>
                                <option value="Type 1" {{ $training->program_name == 'Type 1' ? 'selected' : '' }}>Type 1</option>
                                <option value="Type 2" {{ $training->program_name == 'Type 2' ? 'selected' : '' }}>Type 2</option>
                                <option value="Type 3" {{ $training->program_name == 'Type 3' ? 'selected' : '' }}>Type 3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="startDate">Start Date</label>
                        <input type="text" class="form-control" id="startDate" name="date" value="{{ $training->date }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="conductorName">Conductor Name</label>
                        <input type="text" class="form-control" id="conductorName" name="conductor_name" value="{{ $training->conductor_name }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="conductorPayment">Conductor Payment</label>
                        <input type="text" class="form-control" id="conductorPayment" name="conductor_payment" value="{{ $training->conductor_payment }}" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

      {{-- dynamicalyy get dsd gnd --}}
       
      <script> 
        $(document).ready(function() {
            // Fetch provinces
            $.ajax({
                url: '/provinces',
                type: 'GET',
                success: function(data) {
                    // Populate province dropdown
                    $.each(data, function(index, province) {
                        $('#provinceDropdown').append($('<option>', {
                            value: province.id,
                            text: province.name
                        }));
                    });
            // // Pre-select the province based on existing value
            // $('#provinceDropdown').val({{$training->province}});

            // // Trigger change event to populate districts based on pre-selected province
            // $('#provinceDropdown').change();
                }
            });
        
            // Fetch districts based on selected province
            $('#provinceDropdown').change(function() {
                var provinceId = $(this).val();
        
                // Check if a province is selected
                if (provinceId !== '') {
                    // Clear the district and DS Division dropdowns
                    $('#districtDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select District'
                    }));
                    $('#dsDivisionDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select DS Division'
                    }));
                    $('#gndDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select GND'
                    }));
        
                    // Fetch districts only if a valid province ID is selected
                    $.ajax({
                        url: '/provinces/' + provinceId + '/districts',
                        type: 'GET',
                        success: function(data) {
                            // Populate district dropdown
                            $.each(data, function(index, district) {
                                $('#districtDropdown').append($('<option>', {
                                    value: district.id,
                                    text: district.district
                                }));
                            });
    //                         $('#districtDropdown').val({{$training->district}});
    // $('#districtDropdown').change();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            // Handle error - show a message to the user or handle it as needed
                        }
                    });
                } else {
                    // Clear the district and DS Division dropdowns if no province is selected
                    $('#districtDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select District'
                    }));
                    $('#dsDivisionDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select DS Division'
                    }));
                    $('#gndDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select GND'
                    }));
                }
                // Reset hidden fields
                $('#provinceName').val('');
                $('#districtName').val('');
                $('#dsDivisionName').val('');
                $('#gndName').val('');
            });
        
            // Fetch DS Divisions based on selected district
            $('#districtDropdown').change(function() {
                var districtId = $(this).val();
        
                // Check if a district is selected
                if (districtId !== '') {
                    // Fetch DS Divisions only if a valid district ID is selected
                    $.ajax({
                        url: '/districts/' + districtId + '/ds-divisions',
                        type: 'GET',
                        success: function(data) {
                            // Clear the DS Division dropdown
                            $('#dsDivisionDropdown').empty().append($('<option>', {
                                value: '',
                                text: 'Select DS Division'
                            }));
        
                            // Populate DS Division dropdown
                            $.each(data, function(index, dsDivision) {
                                $('#dsDivisionDropdown').append($('<option>', {
                                    value: dsDivision.id,
                                    text: dsDivision.division
                                }));
                            });
    //                         $('#dsDivisionDropdown').val({{$training->ds_division}});
    // $('#dsDivisionDropdown').change();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            // Handle error - show a message to the user or handle it as needed
                        }
                    });
                } else {
                    // Clear the DS Division dropdown if no district is selected
                    $('#dsDivisionDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select DS Division'
                    }));
                }
                // Reset hidden field
                $('#dsDivisionName').val('');
            });
      
            // Fetch GNDs based on selected DS Division
            $('#dsDivisionDropdown').change(function() {
                var dsDivisionId = $(this).val();
        
                // Check if a DS Division is selected
                if (dsDivisionId !== '') {
                    // Fetch GNDs only if a valid DS Division ID is selected
                    $.ajax({
                        url: '/ds-divisions/' + dsDivisionId + '/gn-divisions',
                        type: 'GET',
                        success: function(data) {
                            console.log(data);
                            // Clear the GND dropdown
                            $('#gndDropdown').empty().append($('<option>', {
                                value: '',
                                text: 'Select GND'
                            }));
        
                            // Populate GND dropdown
                            $.each(data, function(index, gnd) {
                                $('#gndDropdown').append($('<option>', {
                                    value: gnd.id,
                                    text: gnd.gn_division
                                }));
                            });
                            // $('#gndDropdown').val({{$training->gn_division}});
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            // Handle error - show a message to the user or handle it as needed
                        }
                    });
                } else {
                    // Clear the GND dropdown if no DS Division is selected
                    $('#gndDropdown').empty().append($('<option>', {
                        value: '',
                        text: 'Select GND'
                    }));
                }
                // Reset hidden field
                $('#gndName').val('');
            });
        
            // Update hidden fields when options are selected
            $('#provinceDropdown').change(function() {
                $('#provinceName').val($(this).find('option:selected').text());
            });
        
            $('#districtDropdown').change(function() {
                $('#districtName').val($(this).find('option:selected').text());
            });
        
            $('#dsDivisionDropdown').change(function() {
                $('#dsDivisionName').val($(this).find('option:selected').text());
            });
      
            $('#gndDropdown').change(function() {
                $('#gndName').val($(this).find('option:selected').text());
            });
        });
      </script>
<script>
$(document).ready(function () {
    // Fetch ASC names from the API endpoint
    $.get('/asc', function (data) {
        // Populate the dropdown menu with ASC names
        $.each(data, function (index, asc) {
            $('#ascDropdown').append($('<option>', {
                value: asc.asc_name,
                text: asc.asc_name 
            }));
        });
    });
});
</script>
    <script>

            // Datepicker for Start Date
            $("#startDate").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        
    </script>
</body>
</html>