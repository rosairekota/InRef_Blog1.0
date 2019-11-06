<?php

    function deconnexion(){
      unset($_SESSION['admin']);
      session_write_close();
    }

 ?>
