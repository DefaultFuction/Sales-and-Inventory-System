<?php
 $db = mysqli_connect('localhost', 'admin', 'admin@123123') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'prince' ) or die(mysqli_error($db));
?>