<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if (!isset($_SESSION)) {
    session_start();
    if (!isset($_SESSION['Name'])) {
        header("location:../index.php");
    }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
<?php
$Id = $_GET['TipId'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost", "root");
// Select Database
mysql_select_db("cms", $con);
// Specify the query to Insert Record
$sql = "delete from Tips_Tbl where Tips_Id='" . $Id . "'";
// execute query
mysql_query($sql, $con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("Safety Tips Deleted Succesfully");window.location=\'Tips.php\';</script>';
?>
    </body>
</html>
