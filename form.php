<?php

include("connecion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operatiins</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

<form action="#" method="post">

        <div class="title">
    Registration Form
            
    </div>
        <div class="form">
            <div class="input_field">
                <label >Fist Name</label>
                <input type="text " class="input" name="fname">
            </div>
            <div class="input_field">
                <label >Last Name</label>
                <input type="text " class="input" name="lname">
            </div>
            <div class="input_field">
                <label >Password</label>
                <input type="password" class="input" name="password">
            </div>
            <div class="input_field">
                <label >Confirm  Password</label>
                <input type="password" class="input" name="conpassword">
            </div>
            <div class="input_field">
                <label >Email Address</label>
                <input type="text " class="input"  name="email">
            </div>
            <div class="input_field">
                <label>Gender</label>
          
            <div class="custom_select">
            <select name="gender">
            <option  value="not Select">Select</option>
            <option value="Male">Male</option>
            <option  value="FeMale">Female</option>
           </select>
            </div>
           
            </div>
          
            <div class="input_field">
                <label >Phone Number</label>
                <input type="text " class="input" name="phone">
            </div>


     <div class="input_field " >
     <label style="margin-right:100px;">Caste</label>
     <input type="radio" name="caste"value="Gender"require><label style="margin-left: 5px;">
        Gender</label>
    <input type="radio"name="caste" value="OBC"require><label style="margin-left: 5px;">
        OBC</label>
    <input type="radio"name="caste"value="SC" require><label style="margin-left: 5px;">
        SC</label>
    <input type="radio"name="caste"value="ST" require><label style="margin-left: 5px;">
        ST</label>
    </div>
            <div class="input_field">
                <label >Address</label>
                <textarea name="address">
                </textarea> 
            </div>
         
            <div class="input_field terms">
                <label for="" class="check"></label>
                <input type="checkbox" name="" id="">
                <span class="checkmark"></span>
                <P>Agree to terms and conditions</P>
                       
            </div>

            <div class="input_field">
            <input type="submit" value="Register" class="btn" name="register">
            </div>
            
        </div>
        </form>
        </div>
    
</body>
</html>

<?php

if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $caste=$_POST['caste'];
    $address=$_POST['address'];
    include("connecion.php");

    $sql = "INSERT INTO `form` (`fname`, `lname`, `passwoer`, `cpassword`, `gender`, `email`, `pphone`, `caste`, `address`) VALUES ('$fname', '$lname', '$password', '$conpassword', '$gender', '$email', '$phone', '$caste', '$address')";
    
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // $conn->close();
    





    // $query ="INSERT INTO 'form' (`fname`, `lname`,'password', `cpassword`, `gender`, `email`, `pphone`, `caste`, `address`)VALUES ('$fname', '$lname', '$password', '$conpassword', '$email', '$phone', '$gender','$caste' ,'$address')";

    // $data = mysqli_query($conn,$query);

    // if ($data) {
        # code...
        // echo "data inserted into database";

    // }
// else{
    // echo "failed";
// }
}

?>