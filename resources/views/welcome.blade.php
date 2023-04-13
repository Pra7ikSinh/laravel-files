<form method="post" action="{{route('store')}}" enctype="multipart/form-data">
    @csrf
    First name:<input type="text" name="firstName"> <br><br>
    Last name:<input type="text" name="lastName"> <br><br>
    mobile number:<input type="number" name="mobileNumber"> <br><br>
    email:<input type="email" name="email"> <br><br>
    profile photo<input type="file" name="profilePhoto"> <br><br>
    user name<input type="text" name="userName"> <br><br>
    password: <input type="text" name="password"> <br><br>
    Confirm Password: <input type="text" name="cpassword"> <br><br>
    Gender: <input type="radio" name="gender" value="male"> male
    <input type="radio" name="gender" value="female"> female <br><br>
    Languages: <input type="checkbox" name="languages[]" value="eng"> English
    <input type="checkbox" name="languages[]" value="hindi"> Hindi <input type="checkbox" name="languages[]" value="gujarati"> Gujarati <br><br>
    <button type="submit">Submit</button>
</form>
