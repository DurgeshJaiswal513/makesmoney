

<?php
    $conn=mysqli_connect("localhost","root","","makemoney");
    $fullname=$_POST['fname'];
    $mobilenumber=$_POST['mobile'];
    $Email=$_POST['email'];
    $Country=$_POST['country'];
    $Subject=$_POST['subject'];

    $sql="INSERT INTO query(Full_Name,Mobile_Number,Email,Country,Subject)values('$fullname','$mobilenumber','$Email','$Country ','$Subject')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {  
      ?>
      <script>
      alert("Send Sucessfully..");
      </script>
      <?php
    }
?>