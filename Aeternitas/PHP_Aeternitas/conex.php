<?php
function Conectarse()
    {
        if(! ($link = mysqli_connect("localhost", "gallegos", "mysql", "aeternitas")))
        {
            echo "Error conectando a la base de datos.";
            exit();
        }
        return $link;

    }

?>

