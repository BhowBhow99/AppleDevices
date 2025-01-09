<?php


    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server , $username , $password);

    if(!$con)
        die("Connection error" . mysqli_connect_error());
    
    //   echo "Success connecting to db";

    $Name = $_POST['Name'];
    $eml = $_POST['Email'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `fb`.'feedback' (`Name`, `Email`, `Feedback`, `DT`) VALUES ('$Name', '$eml', '$desc', 'current_timestamp()');";
    // echo $sql;

    if($con->query($sql) == true)
        echo "Sucessfully inserted";
      else
        echo "Error: $sql <br> $con->error"; 
    

    $con->close();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FeedBack</title>
    <link rel="stylesheet" type="text/css" href="css/FB.css">
    <style>
        .container{
            /* background-color: aliceblue; */
        }
    </style>
</head>
<body>
    <div class="container">

            <h1><b>FEEDBACK</b></h1>
            <p1><b>Please write your FeedBack here.</b></p1>

            <form action="indox.php" method="post">
                <input type="text" name="Name" placeholder="Name">
                <input type="text" name="Email" placeholder="Email"> 
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Your Feed Back Here"></textarea>
                <button class="btn">Submit</button>
                <button class="bttn">Reset</button>
            </form>

    </div>
    <script src="/indeex.js">
        // INSERT INTO `fb` (`SN`, `Name`, `Email`, `Feedback`, `DT`) VALUES ('4', 'Example', 'anish@yahoo.co.in', 'NOt important', 'current_timestamp()');
    </script>
</body>
</html>