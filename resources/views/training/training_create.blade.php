<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Training Programme Registration</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        /* Custom styles */
        body {
          background-color: #f8f9fa;
        }
    
        .container {
          margin-top: 50px;
        }
        
        .dropdown {
          margin-bottom: 20px;
          display: flex;
          flex-direction: column;
          align-items: center;
        }
    
        .dropdown-menu {
          min-width: auto;
        }
    
        .dropdown-item {
          padding: 10px;
          font-size: 16px;
        }
    
        /* Adjust button width to fit the content */
        .dropdown-toggle {
          min-width: 250px; /* Increase the width */
        }
    
        /* Center align labels */
        .dropdown-label {
          text-align: center;
          font-size:20px;
        }
        /* Adjust dropdown button text alignment */
    
    
      </style>
</head>
<body>
    @include('dashboard.navbar')
    <div class="container mt-5 border rounded border-primary p-4">
        <form class="form-horizontal" method="POST" action="/training">
            @csrf
            <div class="col-md-12 text-center">
                <h2>Training Programe Registration</h2>
            </div>

            <div class="container mt-5">
                    <div class="row mb-4">
                        <div class="container-fluid py-3">
                            
                <div class="row">
                    <div class="col">
                        <div class="dropdown">
                  <label for="province" class="form-label dropdown-label">Province</label>
                  
                  <select id="province" name="province" button class="btn btn-secondary dropdown-toggle" onchange="populateDistricts()">
                  
                    <option value="">Select Province</option>
                    <!-- Sample Province Data -->
                    <option value="North Central">North Central</option>
                    <option value="Northern">Northern</option>
                    <option value="Central">Central</option>
                    <option value="North Western">North Western</option>
                    <!-- Add more options as needed -->
                  </select>
                  </div>
                    </div>
                    
                  <div class="col">
                    <div class="dropdown">
                  <label for="district" class="form-label dropdown-labelbutton">District</label>
                  <select id="district" name="district" button class="btn btn-secondary dropdown-toggle" onchange="populateDSDs()" disabled>
                    <option value="">Select District</option>
                    <!-- Add a default option -->
                    <option value="" disabled hidden>Select District</option>
                    <!-- Sample District Data -->
                    {{-- <option value=" NorthCentral"> North Central</option> --}}
                    <option value="Vavuniya">Vavuniya</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Mathale">Mathale</option>
                    <option value="Kurunagala">Kurunagala</option>
                    <option value="Puttalam">Puttalam</option>
                    <!-- Add more options as needed -->
                  </select>
                  </div>
                </div>
                
                  <div class="col">
                    <div class="dropdown">
                  <label for="dsd" class="form-label dropdown-label">DSD</label>
                  <select id="dsd" name="ds_division" button class="btn btn-secondary dropdown-toggle" onchange="populateGNDASC()" disabled>
                    <option value="">Select DSD</option>
                  </select>
                  </div>
                </div>
                

                  <div class="col">
                    <div class="dropdown">
                  <label for="gnd" class="form-label dropdown-label">GND</label>
                  <select id="gnd" name="gn_division" button class="btn btn-secondary dropdown-toggle" disabled>
                    <option value="">Select GND</option>
                  </select>
                  </div>
                </div>
            
                  <div class="col">
                    <div class="dropdown">
                  <label for="asc"  class="form-label dropdown-label">ASC</label>
                  <select id="asc" name="as_center" button class="btn btn-secondary dropdown-toggle" disabled>
                    <option value="">Select ASC</option>
                  </select>
                  </div>
                </div>
                
          </div>
                
                        </div>
                    </div>
            </div>
            
        
        
                
                <!-- Rest of the Form Fields -->
                
                 
                <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="place">Place</label>
                    <input type="text" class="form-control" id="place" name="place" placeholder="place" required>
                </div>
                </div>
              
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="dropdown">
                        <label for="place">Training Program Type</label>
                        <select class="btn btn-secondary dropdown-toggle btn-block" id="typeDropdown" name="program_name" required>
                            <option value="">Select Training Program Type</option>
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Youth Section -->
            <div>
                <div class="row">
                    <div class="col-md-12 mb-3 text-center">
                        <h5>Participation  Gender wise</h5>
                    </div>
                </div>
                <div class="row">
                    <!-- Male Input -->
                    <div class="col-md-6 mb-3">
                        <label for="male">Male</label>
                        <input type="number" class="form-control" id="male" name="male" placeholder="Number of Male" required>
                    </div>
                    <!-- Female Input -->
                    <div class="col-md-6 mb-3">
                        <label for="female">Female</label>
                        <input type="number" class="form-control" id="female" name="female" placeholder="Number of Female" required>
                    </div>
                </div>

                <div>
                </br>
                    <div class="row">
                        <div class="col-md-12 mb-3 text-center">
                            <h5>Participation  Age wise</h5>
                        </div>
                    </div>
                <div class="row">
                    <!-- youth Input -->
                    <div class="col-md-6 mb-3">
                        <label for="youth">Youth</label>
                        <input type="number" class="form-control" id="youth" name="youth" placeholder="Number of Youth" required>
                    </div>
                    <!-- Senior Input -->
                    <div class="col-md-6 mb-3">
                        <label for="senior">Senior</label>
                        <input type="number" class="form-control" id="senior" name="senior" placeholder="Number of Senior" required>
                    </div>
                </div>
                <!-- HTML -->
<div class="row">
    <!-- Start Date Input -->
    <div class="col-md-4 mb-3">
        <label for="startDate">Start Date</label>
        <input type="text" class="form-control" id="startDate" name="date" placeholder="Select Start Date" required>
    </div>
</div>

                <!-- Place Input -->
                <div class="row">
                    <!-- Cost Input -->
                    <div class="col-md-4 mb-3">
                        <label for="">Conductor Name</label>
                        <input type="text" class="form-control" id="conductorName" name="conductor_name" placeholder="Enter Conductor Name" required>
                    </div>
                </div>
                <div class="row">
                    <!-- Cost Input -->
                    <div class="col-md-4 mb-3">
                        <label for="">Conductor Payment</label>
                        <input type="text" class="form-control" id="conductorPayment" name="conductor_payment" placeholder="Enter Conductor Payment" required>
                    </div>
                </div>
            </div>
            
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            
        </form>
    </div>
    <script>
        function populateDistricts() {
          var provinceSelect = document.getElementById("province");
          var districtSelect = document.getElementById("district");
          districtSelect.innerHTML = ""; // Clear previous options
          var selectedProvince = provinceSelect.value;
          if (selectedProvince !== "") {
            // Sample Data: Districts based on Province
            var districts = {
              "North Central": ["Select District","Anuradhapura"],
              "Northern": ["Select District","Vavuniya", "Mannar"],
              "Central": ["Select District","Mathale"],
              "North Western": ["Select District","Kurunagala", "Puttalam"]
              // Add more districts as needed
            };
            districts[selectedProvince].forEach(function(district) {
              var option = document.createElement("option");
              option.value = district;
              option.textContent = district;
              districtSelect.appendChild(option);
            });
            districtSelect.disabled = false; // Enable district dropdown
          } else {
            districtSelect.disabled = true; // Disable district dropdown if no province selected
          }
          // Reset downstream dropdowns
          document.getElementById("dsd").innerHTML = "<option value=''>Select DSD</option>";
          document.getElementById("gnd").innerHTML = "<option value=''>Select GND</option>";
          document.getElementById("asc").innerHTML = "<option value=''>Select ASC</option>";
          document.getElementById("dsd").disabled = true;
          document.getElementById("gnd").disabled = true;
          document.getElementById("asc").disabled = true;
        }
      
        function populateDSDs() {
          var districtSelect = document.getElementById("district");
          var dsdSelect = document.getElementById("dsd");
          dsdSelect.innerHTML = ""; // Clear previous options
          var selectedDistrict = districtSelect.value;
          if (selectedDistrict !== "") {
            // Sample Data: DSDs based on District
            var dsds = {
              "Anuradhapura": ["Select DSD","Galenbidunuwewa", "Ma.Nu.Pa", "Mahavilachchiya", "Medawachchiya", "Mihintale", "N.P.C", "Na.Nu.Pa", "Palugaswewa", "Rambewa", "Thirappane"],
              "Vavuniya": ["Select DSD","Vengalacheddikulam", "Vavuniya", "Vavuniya South"],
              "Mannar": ["Select DSD","Musali","Nanattan","Manthai West","Mannar Town"],
              "Mathale": ["Select DSD","Yatawatta"],
              "Kurunagala": ["Select DSD","Giribawa","Polpithigama","Galgamuwa","Ehetuwewa","Kobeigane","Ambanpola"],
              "Puttalam": ["Select DSD","Wanathavilluwa","Pallama","Anamaduwa","Nawagaththegama"]
              // Add more DSDs as needed
            };
            if (dsds[selectedDistrict]) {
              dsds[selectedDistrict].forEach(function(dsd) {
                var option = document.createElement("option");
                option.value = dsd;
                option.textContent = dsd;
                dsdSelect.appendChild(option);
              });
              dsdSelect.disabled = false; // Enable DSD dropdown
            } else {
              dsdSelect.disabled = true; // Disable DSD dropdown if no DSDs found for the district
            }
          } else {
            dsdSelect.disabled = true; // Disable DSD dropdown if no district selected
          }
          // Reset downstream dropdowns
          document.getElementById("gnd").innerHTML = "<option value=''>Select GND</option>";
          document.getElementById("asc").innerHTML = "<option value=''>Select ASC</option>";
          document.getElementById("gnd").innerHTML = "<option value=''>Select gnd</option>";
          document.getElementById("asc").disabled = true;
        }
      
        function populateGNDASC() {
          var dsdSelect = document.getElementById("dsd");
          var gndSelect = document.getElementById("gnd");
          var ascSelect = document.getElementById("asc");
          gndSelect.innerHTML = ""; // Clear previous options
          ascSelect.innerHTML = ""; // Clear previous options
          var selectedDSD = dsdSelect.value;
          if (selectedDSD !== "") {
            // Sample Data: GNDs and ASCs based on DSD
            var gnds = {
              "Galenbidunuwewa": ["Select GND","Manankattiya"],
              "Ma.Nu.Pa": ["Select GND","Maha Ehetuwewa"],
              "Mahavilachchiya": ["Select GND"," 369-Sadamaleliya"],
              "Medawachchiya": ["Select GND","Lindawewa", "Karambankulama", "Madawachchiya East","Sangilikanadarawa","Puleliya","Prabodhagama","Kidawarankulama","Poonewa","Maha Kumbukgollewa","Kadawath Rambewa","Kidagalegama",],
              "Mihintale": ["Select GND","Katukeliyawa", "Seeppukulama"],
              "N.P.C": ["Select GND","Galpottegama"],
              "Na.Nu.Pa": ["Select GND","Kawarakkulama"],
              "Palugaswewa": ["Select GND","Horiwila"],
              "Rambewa": ["Select GND","Kallanachiya", "Kapiriggama", "Pihimbiyagollewa"],
              "Thirappane": ["Select GND","Labunoruwa"],
              "Vengalacheddikulam": ["Select GND","Kanthasaminager", "Sooduventhapulavu", "Kannadi"],
              "Vavuniya": ["Select GND","Asikulam"],
              "Vavuniya South": ["Select GND","Kalukunnammaduwa", "Allagalla"],
              "Musali": ["Select GND","Veppankulam", "S.P Potkerni", "Puthuveli", "Maruthamadu", "Poonochchi", "P.P Potkerni", "Kondachchi","Arippu west","Koolankulam","Akathimurippu"],
              "Nanattan": ["Select GND","Sirukkandal", "Ilahadipiddy", "Vanchiyankulam", "Isamalaithalvu", "Valkkaipettankandal", "Parikarikandal", "Razoolputhuveli", "Ilanthaimoddai"],
              "Manthai West": ["Select GND","Minnukkan", "Pappamoddai"],
              "Mannar Town": ["Select GND","Puthukkamam", "Periyanavatkulam"],
              "Yatawatta": ["Select GND","Udagama West", "Aluthwatta", "Mathalapitiya", "Mathalapitiya South", "Raththinda"],
              "Giribawa": ["Select GND","Sangappalaya", "Wannikudawewa", "Gampola", "Aliyawetunawewa"],
              "Polpithigama": ["Select GND","Galgiriyawa", "IhalaThimbiriyawa", "Kambuwatawana", "Kubukkadawala", "Moragollagama", "Nikawewa", "Niyandawanaya", "Serugasyaya"],
              "Galgamuwa": ["Select GND","Nahettikulama", "Madadombe"],
              "Ehetuwewa": ["Select GND","Thimbiriyawa", "Hunugallewa", "Ethinimole", "Galapitadigana", "Ihala Embogama", "Kaduruwewa", "Eriyawa", "Ratnadivulwewa", "Hiddewa"],
              "Kobeigane": ["Select GND","Mawathagama"],
              "Ambanpola": ["Select GND","Bakmeewewa"],
              "Wanathavilluwa": ["Select GND","Mailankulama"],
              "Pallama": ["Select GND","Wathupola"],
              "Anamaduwa": ["Select GND","Alankulama", "Kottukachchiya", "Colony 1"],
              "Nawagaththegama": ["Select GND","Mahameddewa", "Rambakanayagama", "Miyellewa","Amunuwewa"]
              // Add more GNDs as needed
            };
            var ascs = {
        "Galenbidunuwewa": ["Select ASC","Galenbidunuwewa"],
        "Ma.Nu.Pa": ["Select ASC","Elayapaththuwa"],
        "Mahavilachchiya": ["Select ASC","Punewa"],
        "Medawachchiya": ["Select ASC","Medawachchiya", "Poonewa", "Punewa","Athakada"],
        "Mihintale": ["Select ASC","Mihinthale"],
        "N.P.C": ["Select ASC","Gambirigaswewa"],
        "Na.Nu.Pa": ["Select ASC","Anuradhapura"],
        "Palugaswewa": ["Select ASC","Palugaswewa"],
        "Rambewa": ["Select ASC","Kallanchiya"],
        "Thirappane": ["Select ASC","Thirappane"],
        "Vengalacheddikulam": ["Select ASC","Cheddikulam", "Kurukkalputhukulam"],
        "Vavuniya": ["Select ASC","Kovilkulam"],
        "Vavuniya South": ["Select ASC","Madukanda"],
        "Musali": ["Select ASC","potkerni", "Silawathurai", "P.P.Potkeny"],
        "Nanattan": ["Select ASC","Murunkan", "Nanattan", "Uyilankulam"],
        "Manthai West": ["Select ASC","Manthai"],
        "Mannar Town": ["Select ASC","Manthai", "Uyilankulam"],
        "Yatawatta": ["Select ASC","Yatawatta", "Walawela"],
        "Giribawa": ["Select ASC","Thambuththa"],
        "Polpithigama": ["Select ASC","Rambe", "Moragollagama"],
        "Galgamuwa": ["Select ASC","Galgamuwa", "Maha Nanneriya"],
        "Ehetuwewa": ["Select ASC","Ehatuwewa"],
        "Kobeigane": ["Select ASC","Kobeigane"],
        "Ambanpola": ["Select ASC","Ambanpola"],
        "Wanathavilluwa": ["Select ASC","Wanathawilluwa"],
        "Pallama": ["Select ASC","Serukele"],
        "Anamaduwa": ["Select ASC","Anamaduwa"],
        "Nawagaththegama": ["Select ASC","Nawagaththegama"]
        // Add more ASCs as needed
            };
            gnds[selectedDSD].forEach(function(gnd) {
              var option = document.createElement("option");
              option.value = gnd;
              option.textContent = gnd;
              gndSelect.appendChild(option);
            });
            ascs[selectedDSD].forEach(function(asc) {
              var option = document.createElement("option");
              option.value = asc;
              option.textContent = asc;
              ascSelect.appendChild(option);
            });
            gndSelect.disabled = false; // Enable GND dropdown
            ascSelect.disabled = false; // Enable ASC dropdown
          } else {
            gndSelect.disabled = true; // Disable GND dropdown if no DSD selected
            ascSelect.disabled = true; // Disable ASC dropdown if no DSD selected
          }
        }
      </script>
    <script>

            // Datepicker for Start Date
            $("#startDate").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        
    </script>
</body>
</html>
