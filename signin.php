

<?php
    $conn=mysqli_connect("localhost","root","","makemoney");
    $fullname=$_POST['fname'];
    $mobilenumber=$_POST['mobile'];
    $Email=$_POST['email'];
    $password=$_POST['psw'];
    $repeatpassword=$_POST['psw-repeat'];
    $EMO=$_POST['emo'];
    $gender=$_POST['r'];
    

    $sql="INSERT INTO signup(Full_Name,Mobile_Number,Email,Password,Repeat_Password,EMO_ID,Gender)values('$fullname','$mobilenumber','$Email','$password ','$repeatpassword','$EMO','$gender')";
    $result=mysqli_query($conn,$sql);
    if($result)
    { 
      ?>
      <script>

        alert("Registered Sucessfully...");
      </script>
      <?php
    }
?>