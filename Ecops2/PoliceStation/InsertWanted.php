<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
<?php
if (isset($_SESSION['Name'])) {
    $txtName = $_POST['txtName'];
    $txtLocation = $_POST['txtLocation'];
    $txtCrime = $_POST['txtCrime'];
    $txtDesc = $_POST['txtDesc'];
    $path1 = $_FILES["txtFile"]["name"];
    $StationName = $_SESSION['Name'];
    move_uploaded_file($_FILES["txtFile"]["tmp_name"], "../Documents/" . $_FILES["txtFile"]["name"]);
    // Establish Connection with MYSQL
    $con = mysql_connect("localhost", "root");
    // Select Database
    mysql_select_db("cms", $con);
    // Specify the query to Insert Record
    $sql = "insert into mostwanted_tbl  (Wanted_Name,Wanted_Location,Wanted_Image,Wanted_Crime,Wanted_Desc,Station_Name) values('" . $txtName . "','" . $txtLocation . "','" . $path1 . "','" . $txtCrime . "','" . $txtDesc . "','" . $StationName . "')";
    // execute query
    mysql_query($sql, $con);
    // Close The Connection
    mysql_close($con);

    echo '<script type="text/javascript">alert("Most Wanted Inserted Succesfully");window.location=\'Wanted.php\';</script>';
} else {
    header("location:../index.php");
}
?>
    </body>
</html>
