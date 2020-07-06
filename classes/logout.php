<?php

/**
 * Description of logout
 *
 * @author Maung pc
 */
class Logout {
   
    public function admin_logout(){
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
        header('Location: index.php');
    }
    
    
}
