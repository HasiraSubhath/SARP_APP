<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tank Registration</title>

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
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
    @csrf 
    {{-- <h1>Tank Registration</h1>

    <form action="/tank_rehabilitation" method="POST">
        @csrf  
        <label for="tank_id">Tank Id:</label>
        <input type="text" name="tank_id" id="tank_id">

        <label for="tank_name">Tank Name:</label>
        <input type="text" name="tank_name" id="tank_name">

        <label for="river_basin">River Basin:</label>
        <input type="text" name="river_basin" id="river_basin">

        <label for="cascade_name">Cascade Name:</label>
        <input type="text" name="cascade_name" id="cascade_name">

        <label for="province">Province:</label>
        <input type="text" name="province" id="province">

        <label for="district">District:</label>
        <input type="text" name="district" id="district">

        <label for="ds_division">DS Division:</label>
        <input type="text" name="ds_division" id="ds_division">

        <label for="gn_division">GN Division:</label>
        <input type="text" name="gn_division" id="gn_division">

        <label for="as_centre">AS Centre:</label>
        <input type="text" name="as_centre" id="as_centre">

        <label for="agency">Agency:</label>
        <input type="text" name="agency" id="agency">

        <label for="no_of_family">Number of Family:</label>
        <input type="text" name="no_of_family" id="no_of_family">

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" id="longitude">

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" id="latitude">

        <label for="progress">Progress:</label>
        <input type="text" name="progress" id="progress">

        <label for="contractor">Contractor:</label>
        <input type="text" name="contractor" id="contractor">

        <label for="payment">Payment:</label>
        <input type="text" name="payment" id="payment">

        <label for="eot">EOT:</label>
        <input type="text" name="eot" id="eot">

        <label for="contract_period">Contract Period:</label>
        <input type="text" name="contract_period" id="contract_period">

        <label for="status">Status:</label>
        <input type="text" name="status" id="status">

        <label for="remarks">Remarks:</label>
        <input type="text" name="remarks" id="remarks">

        <button type="submit">Submit</button>
    </form> --}}

    <!-- neeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeewwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
    <div class="container mt-6 border rounded border-primary p-4">
    <h2 class="text-center mb-4">Tank Details</h2>
    <form action="/tank_rehabilitation" method="POST">
        @csrf  
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
  <select id="asc" name="as_centre" button class="btn btn-secondary dropdown-toggle" disabled>
    <option value="">Select ASC</option>
  </select>
  </div>
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

</div>  
    
<div class="container">

  <div class="row">
    <div class="col">
        
      <div class="dropdown">
        <label for="tank">Select Tank Name</label>
        <select class="form-control btn btn-secondary" id="education" name="tank_name" data-bs-toggle="dropdown" aria-expanded="false" required>
            <option value="">Select Tank Name</option>
            <option value="Manankattiya">Manankattiya</option>
            <option value="Kuda Halmilla Wewa">Kuda Halmilla Wewa</option>
            <option value="Nika wewa">Nika wewa</option>
            <option value="Moragassegama wewa">Moragassegama</option>
            <option value="Randenigama Wewa">Randenigama Wewa</option>
            <option value="Karambankulama Wewa">Karambankulama Wewa</option>
        </select>
    </div>
    </div>

    

    <div class="col">
     
       
      <div class="dropdown">
        <label for="tank">Tank Progress</label>
        <select class="form-control btn btn-secondary"  name="progress" data-bs-toggle="dropdown" aria-expanded="false" required>
            <option value="">Tank Progress</option>
            <option value="0%">0%</option>
            <option value="20%">20%</option>
            <option value="40%">40%</option>
            <option value="60%">60%</option>
            <option value="80%">80%</option>
            <option value="100%">100%</option>
            
        </select>
    </div>
    </div>
    <div class="col">
     
      <div class="dropdown">
        <label for="tank">Tank Status</label>
        <select class="form-control btn btn-secondary"  name="status" data-bs-toggle="dropdown" aria-expanded="false" required>
            <option value="">Tank Status</option>
            <option value="Identified">Identified</option>
            <option value="Started">Started</option>
            <option value="On Going">On Going</option>
            <option value="Finished">Finished</option>
            
        </select>
    </div>
    </div>
    <div class="col">
     
      <div class="dropdown">
        <label for="tank">Implmenting Agency</label>
        <select class="form-control btn btn-secondary"  name="agency" data-bs-toggle="dropdown" aria-expanded="false" required>
            <option value="">Implmenting Agency</option>
            <option value="Central(ID)">Central(ID)</option>
            <option value="DAD">DAD</option>
            <option value="PID">PID</option>
            <option value="ID">ID</option>
            <option value="DI">DI</option>
        </select>
  </div>
    </div>
    <div class="col">
     
        <div class="dropdown">
            <label for="tank">Cascade Name</label>
            <select class="form-control btn btn-secondary"  name="cascade_name" data-bs-toggle="dropdown" aria-expanded="false" required>
                <option value="">Cascade Name</option>
                <option value="Dumminnegama">Dumminnegama</option>
                <option value="Kardan Kulam">Kardan Kulam</option>
                <option value="Lidawewa">Lidawewa</option>
                <option value="Sangilikanadarawa">Sangilikanadarawa</option>
                <option value="Boo Oya">Boo Oya</option>
                <option value="Pahala Moragollagama wewa">Pahala Moragollagama wewa</option>
            </select>
      </div>

      
    </div>
  </div>


    
        <div class="mb-3">
            <label for="paymentNameInput" class="form-label">Tank Id</label>
            <input type="text" class="form-control" name="tank_id" id="tank_id" required>
          </div>
          <div class="mb-3">
            <label for="paymentNameInput" class="form-label">River basin</label>
            <input type="text" class="form-control" name="river_basin" id="river_basin" required>
          </div>

  <h2 class="text-center mt-5">Contract Information</h2>
  <div class="mb-3">
    <label for="" class="form-label">Contracter Name</label>
    <input type="text" class="form-control" id="" name="contractor" required>
  </div>
  <div class="mb-3">
    <label for="accountNumberInput" class="form-label">Payment</label>
    <input type="text" class="form-control" id="payment" name="payment" required>
  </div>
  <div class="mb-3">
    <label for="eotInput" class="form-label">EOT</label>
    <input type="text" class="form-control" id="" name="eot" required>
  </div>
  <div class="mb-3">
    <label for="bondDetailsInput" class="form-label">Bond Details</label>
    <input type="text" class="form-control" id="" name="" required>
  </div>
  <div class="mb-3">
    <label for="constructionPeriodInput" class="form-label">Construction Period (Months)</label>
    <input type="text" class="form-control" id="" name="contract_period" required>
  </div>
  <div class="mb-3">
    <label for="constructionPeriodInput" class="form-label">Number Of Family Members</label>
    <input type="text" class="form-control" id="" name="no_of_family" required>
  </div>
  <div class="mb-3">
    <label for="latitudeInput" class="form-label">Latitude</label>
    <input type="text" class="form-control" id="" name="latitude" required>
  </div>
  <div class="mb-3">
    <label for="longitudeInput" class="form-label">Longitude</label>
    <input type="text" class="form-control" id="" name="longitude" required>
  </div>
  <div class="mb-3">
    <label for="longitudeInput" class="form-label">Remarks</label>
    <input type="text" class="form-control" id="" name="remarks" required>
  </div>
  
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

  
</div>
</div>

<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Function to handle dropdown item selection
  document.querySelectorAll('.dropdown-menu a.dropdown-item').forEach(item => {
    item.addEventListener('click', event => {
      const dropdownMenu = event.target.closest('.dropdown-menu');
      const button = dropdownMenu.previousElementSibling;
      button.textContent = event.target.textContent;
    });
  });

  function filterDropdown(inputId, dropdownId) {
    var input, filter, ul, li, a, i;
    input = document.getElementById(inputId);
    filter = input.value.toUpperCase();
    ul = document.getElementById(dropdownId);
    li = ul.getElementsByTagName("a");
    for (i = 0; i < li.length; i++) {
      if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }
</script>

</body>
</html>