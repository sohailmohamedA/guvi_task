<?php

if(!empty($_POST['data_type'])){
    $info['data_type']=$_POST['data_type'];
    $info['errors']=[];
    $info['success']= false;
    if($_POST['data_type']=="signup"){

        //validate firstname
        if(empty($_POST['first_name'])){
            $info['errors']['first_name']= "A first name is required";
        }
        else if(!preg_match("/^[\p{L}]+$/",$_POST['first_name'])){
           
            $info['errors']['first_name']="First name can't have any special character or spaces or numbers"

        }

        //validate lastname
        if(empty($_POST['last_name'])){
            $info['errors']['last_name']= "A last name is required";
        }
        else if(!preg_match("/^[\p{L}]+$/",$_POST['last_name'])){
           
            $info['errors']['last_name']="Last name can't have any special character or spaces or numbers"

        } 

        //validate email
        if(empty($_POST['email'])){
            $info['errors']['email']= "An email is required";
        }
        else if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
           
            $info['errors']['email']="Email is not valid"

        }
           
         //validate gender
         $genders = ['Male,Female,Others'];
         if(empty($_POST['gender'])){
            $info['errors']['gender']= "A gender is required";
        }
        else if(!in_array($_POST['gender'],$genders)){
           
            $info['errors']['gender']="Gender is not valid"

        }

        //validate password
        if(empty($_POST['password'])){
            $info['errors']['password']= "A password is required";
        }
        else if($_POST['password']!=$_POST['Re_password']){
           
            $info['errors']['password']="Password dont match";

        }
        else if(strlen($_POST['password'])<6){
           
            $info['errors']['password']="Password must contain atleast 6 characters";

        }

        


        if(empty($info['errors'])){

            $info['success'] = true;

        }

        }
        
      
    

    echo json_encode($_POST);

}

 