<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font /bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css.css">
    
</head>
<body>
     <div class=" row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-1g" style="background-color:white; opacity:85%;"> 
        <div class="col-md-4 text-center">
            <img src="./image/user-1.jpg" alt="user-1" class="img-fluid rounded" style="width:180px; heigth:180px; object-fit: cover;">
            <div>
                <a href="profile-edit.php">
                    <button class=" btn btn-sm m-1 mx-auto btn-primary">Edit</button>
                </a>
                <a href="profile-delete.php">
                    <button class="btn btn-sm m-1 btn-warning text-white tx-auto">Delete</button>
                </a>
                <a href="login.php">
                    <button class=" btn btn-sm m-1 mx-auto btn-primary">Logout</button>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <tr><th colspan="2">User Details:</th></tr>
                <tr><th><i class="bi bi-person-circle"></i> Fist name</th><td>Sohail</td></tr>
                <tr><th><i class="bi bi-person-square"></i> Last name</th><td>Mohamed</td></tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th><td>Male</td></tr>
                <tr><th><i class="bi bi-envelope"></i> Email</th><td>sohailmohamed@gmail.com</td></tr>
            </table>
        </div>
     </div>    

 
</body>
</html>