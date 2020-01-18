<?php 
    include_once '../php/connection.php';//connection with database
    $sql = "SELECT * FROM usuario";//select data
    $results = mysqli_query($conn, $sql);
    //creating arrays
    $json=[];
    $json2=[];
    $json3=[];
    $json4=[];
    if(mysqli_num_rows($results)>0){//verify if have information in database
        while ($row=mysqli_fetch_assoc($results)){//transform the variable in array
            extract($row); //extracting array
            //inserting data in arrays
            $json[] = (int)$id_usuario;
            $json2[] = $first_name;
            $json3[] = $last_name;
            $json4[] = (float)$participation;
            //creating the table
            echo "<tr>";
            echo "<td class='number'>";
            echo $id_usuario;
            echo "</td>";
            echo "<td>";
            echo $first_name;
            echo "</td>";
            echo "<td>";
            echo $last_name;
            echo "</td>";
            echo "<td class='percentage'>";
            echo $participation;
            echo "%";
            echo "</td>";
            echo "</tr>";
        }
    }
?>