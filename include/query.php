<?php
class query
{
    public function Dologin(){
        return "SELECT*FROM `user_table` WHERE `email `= ? AND `password` = ?";
    }

    public function Doregister(){
        return "INSERT INTO `user_table` (`name`,`email`,`password`,`cpassword`,`status`,`created_at`) VAlUES(?,?,?,?,1,now())";
    }

    public function DoAddUser(){
        return "INSERT INTO `users` (`name`,`company`,`phone`,`email`) VALUES (?,?,?,?)";
    }
    public function DoUpdateUser(){
        return "UPDATE `users` SET `name` = ?,`company` = ?,`phone` =?,`email`= ?";
    }
    public function DodeleteUser(){
        return "DELETE FROM `users` WHERE `id` = ?";
    }
    public function DoDisplay(){
        return "SELECT*FROM `users` WHERE `id` = ?";
    }
}