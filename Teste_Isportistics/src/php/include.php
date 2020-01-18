<?php
$mysqli = new mysqli('localhost', 'root', '', 'db_isportistics') or die(mysqli_error($mysqli)); //conection with database

if(isset($_POST['save'])){ //if button save is submit the post method is executed
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $participation = $_POST['participation'];

    $mysqli->query("INSERT INTO usuario (first_name, last_name, participation) VALUES('$firstName', '$lastName', '$participation')") or
        die($mysqli->error);

        header("location: ../pages/index.php");//for every time the page reload the user is directed for index
}
?>