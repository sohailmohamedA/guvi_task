<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font /bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css.css">
    
</head>
<body>
     <div class=" row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-1g" style="background-color:white; opacity:85%;"> 
        <div class="col-md-4 text-center">
            <img src="./image/no-image.jpg" alt="user-photo" class="js-image img-fluid rounded" style="width:180px; heigth:180px; object-fit: cover;">
            <div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Click below to select an image</label>
                    <input onchange= "display_image(this.files[0])" class="form-control" type="file" id="formFile">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form method="post">
            <table class="table table-striped">
                <tr><th colspan="2">Edit Profile</th></tr>
                <tr><th><i class="bi bi-person-circle"></i> Fist name</th>
                    <td>
                        <input type="text" class="form-control" name="first name" placeholder="First name">
                    </td>
                </tr>
                <tr><th><i class="bi bi-person-square"></i> Last name</th>
                    <td> 
                        <input type="text" class="form-control" name="last name" placeholder="Last name">
                    </td>
                </tr>
                <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                    <td>
                    <select class="form-select" aria-label="Default select example">
                        <option selected value="">---Select  Gender---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                    </td>
                </tr>
                <tr><th><i class="bi bi-envelope"></i> Email</th>
                    <td>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                    </td>
                </tr>  
            </table>

            <div class="p-2">
                <button class="btn btn-primary float-end">Save</button>
                <a href="index.php">
                <label class="btn btn-secondary">Back</label>
                </a>
            </div>
            </form>
        </div>
     </div>    

 
</body>
</html>

<script>
    function display_image(file){
        var img = document.querySelector(".js-image");
        img.src = URL.createObjectURL(file);
        
    }
              

</script>