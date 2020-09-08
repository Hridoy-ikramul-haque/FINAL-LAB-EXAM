!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>

<h1>Details Page </h1>
<a href="{{route('Home')}}">Home</a> 
<a href="{{route('edit',$user['id'])}}">Edit User</a> 
<a href="{{route('delete',$user['id'])}}">Delete User</a>

<table>
    <tr>
        <td>ID</td>
        <td>: {{$user['id']}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>: {{$user['name']}}</td>
    </tr>
    <tr>
        <td>ID</td>
        <td>: {{$user['username']}}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>: {{$user['password']}}</td>
    </tr>
    <tr>
        <td>Company</td>
        <td>: {{$user['company']}}</td>
    </tr>
    <tr>
        <td>Contact</td>
        <td>: {{$user['contact']}}</td>
    </tr>
</table>

</body>
</html>