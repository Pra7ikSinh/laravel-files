@include('layouts.head')
@section('title')Form
@endsection
<form method="post" action="{{route('store')}}" enctype="multipart/form-data">
    @csrf
    First name:<input type="text" name="firstName" value="{{ old('firstName') }}"> <br>
    @error('firstName')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    Last name:<input type="text" name="lastName" value="{{ old('lastName') }}">  <br>
    @error('lastName')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    mobile number:<input type="number" name="mobileNumber" value="{{ old('mobileNumber') }}">  <br>
    @error('mobileNumber')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    email:<input type="text" name="email" value="{{ old('email') }}"> <br>
    @error('email')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    profile photo<input type="file" name="profilePhoto" value="{{ old('profilePhoto') }}"> <br>
    @error('profilePhoto')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    user name<input type="text" name="userName" value="{{ old('userName') }}"> <br>
    @error('userName')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    password: <input type="text" name="password"> <br>
    @error('password')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    Confirm Password: <input type="text" name="cpassword"> <br>
    @error('cpassword')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    Gender: <input type="radio" name="gender" value="male" {{ old('gender') ? 'checked' : '' }}> male
    <input type="radio" name="gender" value="female" {{ old('gender') ? 'checked' :'' }} > female <br>
    @error('gender')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    Languages:
    <input type="checkbox" name="languages[]" value="english"{{ in_array('english',old('languages',[])) ? 'checked' : '' }}> English
    <input type="checkbox" name="languages[]" value="hindi" {{ in_array('hindi',old('languages',[])) ? 'checked' : '' }}> Hindi
    <input type="checkbox" name="languages[]" value="gujarati" {{ in_array('gujarati',old('languages',[])) ? 'checked' : '' }}> Gujarati
    <br>
    @error('languages')
        <div class="text text-danger">{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Submit</button>
</form>
