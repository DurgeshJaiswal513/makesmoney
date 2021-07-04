<?php
    $conn=mysqli_connect("localhost","root","","makemoney");
    $sql="SELECT *FROM signup";
    $result=mysqli_query($conn,$sql);
    $nums=mysqli_num_rows($result);
    
    while($row=mysqli_fetch_array($result))
    {
      if($row['EMO_ID']==88748010610000)
      {
        echo "EMO ID :  ". $row['EMO_ID']."<br>";
        echo "Full Name :  ". $row['Full_Name']."<br>"."<br>"."<br>";
      }
      
    }
    
?>   

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Join Form</h2>

<form action="" method="POST">
  <div class="imgcontainer">
    <img src="images/pic.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="semo"><b>Sponsor EMO ID </b></label>
    <input type="text" placeholder="Enter Sponsor EMO ID " name="semo" required>

    <label for="sname"><b>Sponsor Name  </b></label>
    <input type="text" placeholder="Enter Sponsor Name" name="sname" required>

    <label for="fname"><b>Member Full Name  </b></label>
    <input type="text" placeholder="Enter Full Name" name="fname" required>

    <label for="mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobile" required>

    <label for="address1"><b>Address 1  </b></label>
    <input type="text" placeholder="Enter Village Name" name="address1" required>

    <label for="address2"><b>Address 2  </b></label>
    <input type="text" placeholder="Enter Post Name" name="address2" required>

    <label for="address3"><b>Address 3  </b></label>
    <input type="text" placeholder="Enter Landmark Name" name="address3" >

    <label for="pin"><b>Pin Code </b></label>
    <input type="text" placeholder="Enter Pin Code" name="pin" required>

    <label for="city"><b>City Name  </b></label>
    <input type="text" placeholder="Enter City Name" name="city" required>

    <label for="state"><b>State Name  </b></label>
    <input type="text" placeholder="Enter State Name" name="state" required>

    <label for="emo"><b>Member EMO ID </b></label>
    <input type="text" placeholder="Enter Member EMO ID " name="emo" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
     
    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <button type="submit">submit</button>
    
  </div>

  
</form>

</body>
</html>


<?php
    $conn=mysqli_connect("localhost","root","","makemoney");
    $semo=$_POST['semo'];
    $sname=$_POST['sname'];
    $fullname=$_POST['fname'];
    $mobilenumber=$_POST['mobile'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $address3=$_POST['address3'];
    $pin=$_POST['pin'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $emo=$_POST['emo'];
    $password=$_POST['psw'];
  
    $sql="INSERT INTO joinmember(Sponsor_EMO_ID,Sponsor_Name,Full_Name,Mobile_Number,Address1,Address2,Address3,PIN,City,State,EMO_ID,Password)values('$semo','$sname','$fullname','$mobilenumber','$address1','$address2 ','$address3','$pin','$city','$state','$emo','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {  
      ?>
      <script>

        alert("Success...");
      </script>
      <?php
    }
?>