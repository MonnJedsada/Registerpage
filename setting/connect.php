<?php

    $connect =mysqli_connect('localhost','root','','DBregister');
    if(mysqli_connect_error($connect)){
        echo 'Failed Connect';
    }


?>