<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font /bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css.css">
    
</head>
<body>

    
     <div class="col-md-3 border rounded mx-auto p-2 shadow" style="background-color:white; opacity:85%;">
     <form method="post" onsubmit="myaction.collect_data(event,'signup')">   
        <h2 class="text-center">Signup</h2>
        <div class="input-group mt-3">
            <span class="input-group-text" id="basic-addon1"><b><i class="bi bi-person-circle"></i></b></span>
            <input type="text" class="form-control" placeholder="First name..." name="first_name" required>
        </div>
        <div><small class="js-error js-error-first_name text-danger "></small></div>

        <div class="input-group mt-3">
            <span class="input-group-text" id="basic-addon1"><b><i class="bi bi-person-square"></b></i></span>
            <input type="text" class="form-control" placeholder="Last name..." name="last_name"required >
        </div>
        <div><small class="js-error js-error-last_name text-danger "></small></div>
       
        <div class="input-group mt-3">
            <span class="input-group-text" id="basic-addon1"><b><i class="bi bi-gender-ambiguous "></b></i></span>
                <select class="form-select" name="gender"required>
                    <option selected value="">---Select  Gender---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
        </div>
        <div><small class="js-error js-error-gender text-danger "></small></div>
       
        <div class="input-group mt-3">
            <span class="input-group-text" id="basic-addon1"><b><i class="bi bi-envelope"></i></b></span>
            <input type="text" class="form-control" placeholder="Enter Email..." name="email"required >
        </div>
        <div><small class="js-error js-error-email text-danger "></small></div>
       
        <div class="input-group mt-3">
           <span class="input-group-text" id="basic-addon1"><b><i class="bi bi-key"></i></b></span>
           <input type="text" class="form-control" placeholder="Password..." name="password" required>
        </div>
        <div><small class="js-error js-error-password text-danger "></small></div>
       
        <div class="input-group mt-3">
           <span class="input-group-text" id="basic-addon1"><b><i class="bi bi-key"></i></b></span>
           <input type="text" class="form-control" placeholder="Re_Password..." name="Re_password" required>
        </div>
        <div class="progress mt-3 d-none">
            <div class="progress-bar" style="width: 50%">Working..50%</div>
        </div>
        <div>
            <button class="btn btn-primary float-end mt-3">Signup</button>
              
        </div>
        </form>
        <a href="login.php">
                <button class="btn btn-secondary mt-3">Back</button>
            </a>  
     </div>
    
</body>
</html>


<script>

    var myaction= 
    {
        collect_data: function(e, data_type){
        e.preventDefault();
        e.stopPropagation();
        var inputs = document.querySelectorAll("form input,form select");
        let myform = new FormData();
        myform.append('data_type',data_type);

        for (var i=0;i<inputs.length; i++){
            myform.append(inputs[i].name, inputs[i].value);
        }
        myaction.send_data(myform);
    },
    
    send_data: function(form){
        var ajax = new XMLHttpRequest();

        document.querySelector(".progress").classList.remove("d-none");

        //reset the pro bar
        document.querySelector(".progress-bar").style.width = "0%";
        document.querySelector(".progress-bar").innerHTML ="Working... 0%";
            
        ajax.addEventListener('readystatechange',function(){

            if(ajax.readyState==4){
               if(ajax.status==200){
               
               myaction.handle_result(ajax.responseText);
               }
               else{
                console.log(ajax);
                alert("An error occurred");
                }
            }
        });
 
        ajax.upload.addEventListener('progress',function(e){
            let percent = Math.round((e.loaded/e.total)*100);
            document.querySelector(".progress-bar").style.width = percent + "%";
            document.querySelector(".progress-bar").innerHTML ="Working..." + percent +"%";
            
        });
        ajax.open('post','ajax.php',true);
        ajax.send(form);
    },

       handle_result: function(result){
        console.log(result);
        var obj = JSON.parse(result);
        if(obj.success){
            alert("Profile created successfully");
            window.location.href = 'login.php';
        }
        else{
            //show error
            let error_inputs = document.querySelectorAll(".js-error");
            //empty all errors
            for(var i=0;i<error_inputs.length;i++){
                error_inputs[i].innerHTML = "";
            }

            //display errors
            for(key in obj.errors){
                document.querySelector(".js-error-"+key).innerHTML = obj.errors[key];
            }

        }

       }

};
    
</script>