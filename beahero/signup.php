<?php
if (isset($_POST['signup']))
{
    
    $rfn = $_POST['rfn'];
    
    $remail = $_POST['remail'];
    $rpass = $_POST['rpass'];
    $rrpass = $_POST['rrpass'];

    $con = mysqli_connect("localhost", "root", " ", "beahero");
    $sql = "INSERT INTO signup SET 
            
            rfn='$rfn', 
            remail='$remail',
            rpass='$rpass',
            rrpass='$rrpass'";
    
    if (mysqli_query($con, $sql)) {
    //   echo '<script> alert ("Loged In");  </script>';
    
    } 
    else {
        echo '<script> alert("Error: " . $sql . "<br>" . mysqli_error($con)); </script>';
    }
    
    $last_id = $con->insert_id;
    
    
    
    header('Location: login.html');

    


    mysqli_close($con);
}
?>