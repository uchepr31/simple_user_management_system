<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit page</title>
</head>
<body>
    @if(session()->has("success"))
<h2>{{session("success")}}</h2>
@endif
    <h1> CARRY OUT EDIT AND DELETE ACTIONS HERE</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                {{-- <th>DATE CREATED</th>
                <th>LAST DATE UPDATED</th> --}}
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)  
        <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>

                <td>
                    <a href="/updateUser/{{$user->id}}"><button>edit</button></a>
                    <a href="/delete/{{$user->id}}"><button>delete</button></a>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>