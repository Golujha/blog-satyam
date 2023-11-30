 <h3>welcome</h3>
<?php
session_start();
    if(isset($_SESSION['user_data'])){
        echo $_SESSION['user_data']['1'];
        unset($_SESSION['error']);
    }

?>