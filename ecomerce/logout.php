<?php
session_start();
session_destroy();

        ?>
        <script>
            alert("Logout Successfully......");
            location.replace("../login.php");
        </script>
        <?php

?>