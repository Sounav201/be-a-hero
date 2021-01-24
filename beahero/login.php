<?php
if (isset($_POST['login']))
{
    
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];
    

    $con = mysqli_connect("localhost", "root", " ", "beahero");
    $sql = "INSERT INTO login SET 
            
            uid='$uid', 
            pass='$pass'";
    
    if (mysqli_query($con, $sql)) {
      echo '<script> alert ("Loged In");  </script>';
    
    } 
    else {
        echo '<script> alert("Error: " . $sql . "<br>" . mysqli_error($con)); </script>';
    }
    
    $last_id = $con->insert_id;
    
    
    
    header('Location: maps.html');

    


    mysqli_close($con);
}
?>