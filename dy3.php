<?php
$id=1;
$names="Fadhir";
$con= mysqli_connect("localhost","root","","higa@rmand");
if($con)
{
    $save= mysqli_query($con,"INSERT INTO user (id,names) VALUES ('$id','$names')");
    if($save)
    {
        echo "data saved successfully";
    }
    else{
        echo mysqli_error($save);
    
    }
}

else{
        echo mysqli_error($con);
    }
    
    ?>