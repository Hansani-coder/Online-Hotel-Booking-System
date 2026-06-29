<!--IT23164826
     DISANAYAKA E.S-->
<?php
require 'config.php';

$userId=$_POST["txt1"];

$sql="DELETE FROM user WHERE UserId='$userId'";

if($con->query($sql))
{
    echo "Deleted Successfully";
}
else
{
    echo "Not successful";
}
?>