@extends("layouts.layout")

@section('disable_header', true)

@section("title", "Tap & Go")

@section('content')

<form action="" class="sticketform" method="POST" enctype="multipart/form-data">
    @csrf
    <h2 class="s_title">Season Ticket Application</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {{-- <form action="{{route('application.store')}}" method="POST" enctype="multipart/form-data"> --}}

    <!-- Personal Information -->
    <button type="button" data-bs-toggle="collapse" data-bs-target="#personalInfo"
    style="background-color: #658397; color: white; width: 100%; text-align: left; 
    padding: 10px 20px; margin-bottom: 10px; font-size: 20px; border: none; cursor: pointer; "> <!--in-line CSS for sectioning design-->
    Personal Information
</button>

    <div class="collapse show" id="personalInfo">
        <label for="full_name" class="form-label">Applicant's Full Name <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <input type="text" id="full_name" name="full_name" class="form-control" required>
        
        <label for="nic" class="form-label">NIC <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <input type="text" id="nic" name="nic" required>
        
        <label for="gender" class="form-label">Gender <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <select name="gender" id="gender" class="form-control" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        
        <label for="dob" class="form-label">Date of Birth <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <input type="date" id="dob" name="date_of_birth" class="form-control" required>
    </div>

    <div class="collapse" id="contactInfo">
        <label for="address" class="form-label">Address <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <input type="text" id="address" name="address" class="form-control mb-2" placeholder="No.122/A7, indrajothi mawatha, thanthirimulla, panadura"
            required>

            <select name="district" class="form-control mb-2" required>
                <option value="" disabled selected>Select District </option>
                <option value="Ampara">Ampara</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Badulla">Badulla</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Colombo">Colombo</option>
                <option value="Galle">Galle</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Kandy">Kandy</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Mannar">Mannar</option>
                <option value="Matale">Matale</option>
                <option value="Matara">Matara</option>
                <option value="Monaragala">Monaragala</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Vavuniya">Vavuniya</option>
            </select>
        
            <select name="province" id="province" class="form-control mb-2" required>
                <option value="" disabled selected>Select Province</option>
                <option value="Central">Central</option>
                <option value="Eastern">Eastern</option>
                <option value="North Central">North Central</option>
                <option value="Northern">Northern</option>
                <option value="North Western">North Western</option>
                <option value="Sabaragamuwa">Sabaragamuwa</option>
                <option value="Southern">Southern</option>
                <option value="Uva">Uva</option>
                <option value="Western">Western</option>
            </select>
        
    
    <!-- Contact Information -->
    <button type="button" data-bs-toggle="collapse" data-bs-target="#personalInfo"
    style="background-color: #658397; color: white; width: 100%; text-align: left; 
    padding: 10px 20px; margin-bottom: 10px; font-size: 20px; border: none; cursor: pointer;">Contact Information</button> <!--in-line CSS for sectioning design-->




        <label for="personal_phone" class="form-label">Personal Contact <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <input type="tel" id="personal_phone" name="personal_contact" required>

        <label for="lan_phone" class="form-label">Home Contact (Optional)</label>
        <input type="tel" id="lan_phone" name="lan_contact">

    </div>
    
    <!-- Employment Details -->
    <button type="button" data-bs-toggle="collapse" data-bs-target="#personalInfo"
    style="background-color: #658397; color: white; width: 100%; text-align: left; 
    padding: 10px 20px; margin-bottom: 10px; font-size: 20px; border: none; cursor: pointer;">Employment Details</button> <!--in-line CSS for sectioning design-->
    <div class="collapse" id="employmentInfo">
        <label for="occupation" class="form-label">Occupation <span style="color: red;">*</span></label> <!--Red star for the required fields-->


        <input type="text" id="occupation" placeholder="Eg:Student" name="occupation" required>

        <label for="work" class="form-label">Occupation Address <span style="color: red;">*</span></label> <!--Red star for the required fields-->

        <div style="margin-top: 3px; margin-botton: 4px">
            <p style="font-size: 13px; color:gray"> &bull; If you are a Student please mention the School, Eg: Royal College, Colombo </p>
        </div> <!--Info section to specify the field and what needs to be there-->

        <input type="text" id="work" name="occupation_address" required>

        <label for="work_phone" class="form-label">Work Contact (Optional)</label>
        <input type="tel" id="work_phone" name="work_contact">
    </div>
    
    <!-- Additional Information -->
    <button type="button" data-bs-toggle="collapse" data-bs-target="#personalInfo"
    style="background-color: #658397; color: white; width: 100%; text-align: left; 
    padding: 10px 20px; margin-bottom: 10px; font-size: 20px; border: none; cursor: pointer;">Additional Information</button> <!--in-line CSS for sectioning design-->
    <div class="collapse" id="additionalInfo">

        <label for="home-station" class="form-label">Nearest Railway Station to Residence <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <input type="text" id="home-station" name="home_station" required>

        <label for="work_station" class="form-label">Nearest Railway Station to Work <span style="color: red;">*</span></label> <!--Red star for the required fields-->
        <input type="text" name="work_station" id="work_station" class="form-control" required>

        <label for="passport_photo" class="form-label">Upload Photo: <span style="color: red;">*</span></label> <!--Red star for the required fields-->

        <div style="margin-top: 3px; margin-botton: 4px">
            <p style="font-size: 13px; color:gray"> &bull; Upload a maximum of 2MB file. </p> <!--Info section to specify the field and what needs to be there-->
        </div>

        <input type="file" id="passport_photo" name="photo" accept="image/*" required>

        <label for="pdf" class="form-label">&Upload PDF (Source of Proof) <span style="color: red;">*</span></label> <!--Red star for the required fields-->

        <div style="margin-top: 3px; margin-botton: 4px">
            <p style="font-size: 13px; color:gray"> &bull; Please upload the Grama Niladhari-issued letter. </p>

        </div><!--Info section to specify the field and what needs to be there-->
        <div style="margin-top: 3px; margin-botton: 4px">
            <p style="font-size: 13px; color:gray"> &bull; Upload a maximum of 2MB file. </p> <!--Info section to specify the field and what needs to be there-->
        </div>

        <input type="file" name="source_of_proof" class="form-control" accept="application/pdf" required>


    </div>

        <!-- Sign-up Credentials -->
        <button type="button" data-bs-toggle="collapse" data-bs-target="#personalInfo"
        style="background-color: #658397; color: white; width: 100%; text-align: left; 
        padding: 10px 20px; margin-bottom: 10px; font-size: 20px; border: none; cursor: pointer;">Sign-up Credentials</button>
        <div class="collapse" id="additionalInfo">

            <div style="margin-top: 3px; margin-botton: 4px">
                <p style="font-size: 13px; color:gray">&bull; Please complete this section to gain access to the system after admin approval.</p> <!--Info section to specify the field and what needs to be there-->
            </div>

    
            <label for="email" class="form-label">Email <span style="color: red;">*</span> <!--Red star for the required fields-->
                

            </label>
            <input type="email" name="email" id="email" class="form-control" required>
            
            <label for="pass" class="form-label">Password <span style="color: red;">*</span></label> <!--Red star for the required fields-->
            <input type="password" id="password" name="password" class="form-control" required>
    
            <label for="c-pass" class="form-label">Confirm Password <span style="color: red;">*</span></label> <!--Red star for the required fields-->
            <input type="password" id="password" name="password_confirmation" class="form-control" required>
        </div>
    
    
    <button type="submit" class="s_btn mt-3">Submit</button>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

