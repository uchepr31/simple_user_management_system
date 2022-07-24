<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user page</title>
</head>
<body>
    <!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

 

@if(session()->has("success"))
<h2>{{session("success")}}</h2>
@endif


 <form  method="POST" action="/storeEditedUserDetails" style="border:1px solid #ccc"  enctype="multipart/form-data">
{{-- @method('Put') --}}
@csrf
  <div class="container">
    <h1>Update User's Account</h1>
    <p>Please fill in this form to update your account.</p>
    <hr><br><br> 
    <input type="hidden" name="id" value = "{{$users->id}}">
    <label for="user-name"><b>Name</b></label>
    <input type="text" placeholder="Enter username" name="Name" required value ="{{$users->name}}" ><br><br><br><br> 

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="Email" required value ="{{ $users->email}} "><br><br><br><br>

    <label for="psw"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="Phone" required value ="{{ $users->password}} "><br><br> 
     
    <button type="submit" class="signupbtn">Update</button>
    
  </div>
</form> 
</body>
</html>