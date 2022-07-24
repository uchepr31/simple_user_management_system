<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users page</title> 
</head>
<body>
    <h1 > WELCOME TO OUR SIMPLE USER MANAGEMENT SYSTEM </h1>
    <h4>Here is a list of our members </h4>

    <div id="container">
       
    <table id="attendanceTble">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                </tr>
            @endforeach
        
        </tbody>
    </table> <br><br>
    <a href="/edit"><button>Perform CRUD actions </button></a>
    </div>
    
   
</body>