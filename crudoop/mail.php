<?php
            include 'dbclass.php';
            $db = new DB();
            $users = $db->getRows('users',array('order_by'=>'id DESC','where'=>array("birthday"=>date("Y-m-d"))));
            if(!empty($users)){ $count = 0; foreach($users as $user){
                 $count++;
               mail($user['email'],"Birthday Wish","Wish you happy returns of the day from XYZ Company");
            }
        }
            
            ?>