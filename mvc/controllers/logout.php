<?php
    class logout extends Controller{
        public function default(){
            if(isset($_SESSION['user'])){
                unset($_SESSION['user']);
                header("Location:http://{$GLOBALS['HOST']}/baitap3/login");
            }
        }
    }
?>