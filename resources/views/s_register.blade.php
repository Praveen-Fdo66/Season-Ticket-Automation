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
           
        @csrf


    <label for="name" class="form-label">Applicant's Full Name:</label>
    <input type="text" id="full_name" name="full_name" class="form-control" required>

    <label for="nic" class="form-label" >National Identity Card / Departmental Identity Card:</label>
    <input type="text" id="nic" name="nic" required>

    <label for="gender" class="form-label">Gender</label>
    <select name="gender" id="gender" class="form-control" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    <label for="dob" class="form-label" >Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control" required>

    <label for="address" class="form-label">Address</label>
    <input type="text" name="no" class="form-control mb-2" placeholder="No.122/A7, indrajothi mawatha, thanthirimulla, panadura"
        required>

    <select name="district" class="form-control mb-2" required>
        <option value="" disabled selected>Select District</option>
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


    <label for="personal_phone" class="form-label">Personal Contact:</label>
    <input type="tel" id="phone" name="personal_contact" required>

    <label for="lan_phone" class="form-label">Home Contact (Optional):</label>
    <input type="tel" id="phone" name="lan_contact" >

    <label for="occupation" class="form-label">Occupation:</label>
    <input type="text" id="designation" name="occupation" required>


    <label for="work" class="form-label"> Occupation Address:</label>
    <input type="text" id="work" name="work" required>

    <label for="work_phone" class="form-label">Work Contact (Optional):</label>
    <input type="tel" id="phone" name="work_contact" >


    <label for="n-home" class="form-label"> Nearest Railway Station to the Applicant's Permanent Residence:</label>
    <input type="text" id="home-station" name="home_station" required>

    <label for="n-work" class="form-label">Nearest Railway Station to the Applicant's Work place:</label>
    <input type="text" name="work_station" id="work_station" class="form-control" required>



    <label for="passport_photo" class="form-label">Upload Photo:</label>
    <input type="file" id="passport_photo" name="photo" accept="image/*" required>

    <label for="pdf" class="form-label">Upload PDF (Source of Proof)</label>
    <input type="file" name="source_of_proof" class="form-control" accept="application/pdf" required>


    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" required>

    <label for="pass" class="form-label">Password</label>
    <input type="password" id="password" name="password" id="password" class="form-control" required>

    <label for="c-pass" class="form-label">Confirm Password</label>
    <input type="password" id="password" name="password_confirmation" class="form-control" required>



    <button type="submit" class="s_btn">Submit</button>
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