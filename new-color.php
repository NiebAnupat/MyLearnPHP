<?php
require_once "helpers/db.php";

$sql = "INSERT INTO color (title, code) VALUES ('" . $_POST["title"] . "', '" . $_POST["code"] . "')";
$result = mysqli_query($connection, $sql);

if ($result) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>