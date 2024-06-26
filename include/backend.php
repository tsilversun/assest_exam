<?php
include('database.php');
include('query.php');
class backend
{
    public function doLogin($email,$password)
    {
        return $this->login($email,$password);
    }
    public function doRegister($name,$email,$password,$cpassword)
    {
        return $this->register($name,$email,$password,$cpassword);
    }
    public function doAddUser($name,$company,$phone,$email)
    {
        return $this->addUser($name,$company,$phone,$email);
    }
    public function DoUpdateUser($id,$name,$company,$phone,$email){
        return $this->updateUser($id,$name,$company,$phone,$email);
    }
    public function DoDeleteUser($id){
        return $this->deleteUser($id);
    }
    public function getUser(){
        return $this->displayUser();
    }

    private function displayUser(){
        try{
            $con = new database();
            if($con->getStatus()){
                $db = new query();
                $stmt = $con->getCon()->prepare($db->DoDisplay());
                $stmt->execute();
                $result = $stmt->fetchAll();
                $con->closeConnection();
                return json_encode($result);
            } else {
                return "NotConnectedToDatabase";
            }
        } catch (PDOException $th) {
            return $th;
        }
    }
    private function updateUser($id,$name,$company,$phone,$email){
        try{
            $con = new database();
            if($con->getStatus()){
                $db = new query();
                $stmt = $con->getCon()->prepare($db->DoUpdateUser());
                $stmt->execute(array($id,$name,$company,$phone,$email));
                $result = $stmt->fetch();
                if(!$result){
                    $con->closeConnection();
                    return "200";
                }else{
                    $con->closeConnection();
                    return "404";
                }
            }else{
                return "403";
            }
        }catch(PDOException $th){
            return "501";
        }
    }
    private function deleteUser($id){
        try{
            $con = new database();
            if($con->getStatus()){
                $db = new query();
                $stmt = $con->getCon()->prepare($db->DodeleteUser());
                $stmt->execute(array($id));
                $result = $stmt->fetch();
                if(!$result){
                    $con->closeConnection();
                    return "200";
                }else{
                    $con->closeConnection();
                    return "404";
                }
            }else{
                return "403";
            }
        }catch(PDOException $th){
            return "501";
        }
    }

    private function login($email,$password)
    {
        try{
            $con = new database();
            if($con->getStatus()) {
                $db = new query();
                $password = md5($password);
                $stmt = $con->getCon()->prepare($db->Dologin());
                $stmt->execute(array($email,$password));
                $result = $stmt->fetch();
                if($result){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['login'] = 'Success';
                    $con->closeConnection();
                    return '200';
                }else{
                    $con->closeConnection();
                    return "404";
                }
            }else{
                return "403";
            }
        }catch (PDOException $th){
            return "501";
        }
    }

    private function register($name,$email,$password,$cpassword)
    {
        try{
            $con = new database();
            if($con->getStatus()){
                $db = new query();
                $stmt = $con->getCon()->prepare($db->Doregister());
                $stmt->execute(array($name,$email,md5($password),md5($cpassword)));
                $result = $stmt->fetch();
                if(!$result){
                    $con->closeConnection();
                    return "200";
                }else{
                    $con->closeConnection();
                    return "404";
                }
            }else{
                return "403";
            }
        }catch (PDOException $th){
            return "501";
        }
    }

    private function addUser($name,$company,$phone,$email){
        try{
            $con = new database();
            if($con->getStatus()){
                $db = new query();
                $stmt = $con->getCon()->prepare($db->DoAddUser());
                $stmt->execute(array($name,$company,$phone,$email));
                $result = $stmt->fetch();
                if(!$result){
                    $con->closeConnection();
                    return "200";
                }else{
                    $con->closeConnection();
                    return "404";
                }
            }else{
                return "403";
            }
        }catch(PDOException $th){
            return "501";
        }
    }


}