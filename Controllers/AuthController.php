<?php
require_once '../../NewsstandProject/Controllers/Database.php';
require_once '../../NewsstandProject/Models/EndUser.php';

class AuthController
{
    protected $db;

    public function login(EndUser $user)
    {
        $this->db = new Database();

        if ($this->db->openConnection()) {

            $query = "select * from users where email=\"$user->email\" and password=\"$user->password\" ";
            $result = $this->db->select($query);

            if ($result===false) {
                echo "Database error occurred.";
                return false;
            } else {
                if (count($result) == 0) {
                    session_start();
                    $_SESSION["error_mes"]="wrong cradintials";
                    return false;
                } else {
                    //print_r($result);
                    session_start();
                    $user->userID=$result[0]["user_id"];
                    $user->firstName=$result[0]["first_name"];
                    $user->lastName=$result[0]["last_name"];
                    $_SESSION['role_id']=$result[0]["role_id"];
                    $_SESSION['user']=$user;
                    return true;
                }
            }
        } else {
            echo "Database connection failed.";
            return false;
        }
    }

    public function signup(EndUser $user)
    {
        $role_id_enduser = 2;

        $this->db = new Database();

        if ($this->db->openConnection()) {
            $query="INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`,`role_id`) VALUES (NULL, '$user->firstName', '$user->lastName', '$user->email', '$user->password','$role_id_enduser')";
            $result = $this->db->insert($query);

            if($result)
            {
                session_start();
                $user->userID=$result;
                $_SESSION['user']=$user;
                return true;
            }
            else 
            {
                $_SESSION['error_mes']="some thing went wrong";
                return false;
            }

            
        }
    }


    public function confirm_password(EndUser $user,$confirm_password)
    {
        if($user->password==$confirm_password)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function emailExist(EndUser $user)
    {
        $this->db = new Database();
        $this->db->openConnection();
        $query="select email from users where email='$user->email'";
        $result = $this->db->select($query);
        if (count($result)>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}