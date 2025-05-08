<?php

class UserController
{
    public $db;
    private function initializeDB()
    {
        if ($this->db == null) {
            $this->db = new Database;
            return $this->db->openConnection();
        }
        return true;
    }
    public function rateSystem(EndUser $user,  $rate)
    {
        if ($this->initializeDB()) {
            if ($this->hasRate($user)) {
                $query = "update ratings set rating_date= now(), rating=" . $rate->stars . ", opinion='" . $rate->opinion . "' where user_id=" . $user->userID;
                return $this->db->update($query);
            }
            else{
            $query = "insert into ratings (rating_id, rating	,rating_date	,opinion	,user_id) values 
                    (Null, " . $rate->stars . ", Now(),'".$rate->opinion."', " . $user->userID . ")";
            return $this->db->insert($query);
        }
    }
    }
    public function hasRate($user)
    {
        if ($this->initializeDB()) {
            $query = "select * from ratings where user_id=" . $user->userID;
            $result= $this->db->select($query);
            if (count($result) > 0)
            {
                return true;
            }
            return false;
        }
    }
    public function isReported($content , $user)
    {
        if ($this->initializeDB()) {
            $query = "select * from reports where content_id=" . $content->contentID . " and user_id=" . $user->userID;
            if (count($this->db->select($query)) > 0)
                return true;
        }
        return false;
    }

public function reportContent($content, $user, $reason)
{
    if ($this->initializeDB()) {
        if (!$this->isReported($content, $user)) {
            $query = "insert into reports (report_id, report_date, reason, user_id, content_id) values 
                    (Null, Now(), '$reason', " . $user->userID . ", " . $content->contentID . ")";
            return $this->db->insert($query);
        }
    }
}
    public function getRate($user)
    {
        if ($this->initializeDB()) {
            $query = "select * from ratings where user_id=" . $user->userID;
            $result= $this->db->select($query);
            $rating= new Rating;
            $rating->stars= $result[0]["rating"];
            $rating->opinion= $result[0]["opinion"];
            return $rating;
           
        }
    }

    public function switchSavedContent($content, $user, $place)
    {
        if ($this->initializeDB()) {
            if ($this->isSavedContent($content, $user, $place)) {
                $query = "delete from saved_contents where content_id=" . $content->contentID .
                    " and user_id =" . $user->userID . " and place=" . "'$place'";
                return $this->db->delete($query);
            } else {
                $query = "insert into saved_contents (date, user_id, content_id, place) 
    values (Now(), " . $user->userID . ", " . $content->contentID . ", " . "'$place'" . ")";
                return $this->db->insert($query);
            }
        }
    }
    public function isSavedContent($content, $user, $place)
    {
        if ($this->initializeDB()) {
            $query = "select * from saved_contents
where content_id= " . $content->contentID .
                " and user_id=" . $user->userID .
                " and place =" . "'$place'";
            if (count($this->db->select($query)) == 1)
                return true;
        }
        return false;
    }
    public function switchReact($content, $user, $type)
    {
        if ($this->initializeDB()) {
            $oldReact = $this->isReacted($content, $user);
            if ($oldReact != false) {
                $query = "delete from reacts where content_id=" . $content->contentID .
                    " and user_id =" . $user->userID;
                $this->db->delete($query);
            } 
            if ($oldReact != $type) {
                $query = "insert into reacts (react_type, user_id, content_id) 
    values (" . $type . ", " . $user->userID . ", " . $content->contentID . ")";
                return $this->db->insert($query);
            }
        }
        return true;
    }

    public function isReacted($content, $user, $type = Null)
    {
        if ($this->initializeDB()) {
            $query = "select react_type from reacts
where content_id= " . $content->contentID .
                " and user_id=" . $user->userID;
            if ($type != null)
                $query = $query . " and react_type =" . $type;

            $res = $this->db->select($query);
            if (count($res) == 1)
                return $res[0]["react_type"];
        }
        return false;
    }


    public function updateUser(EndUser $user,$newPassword)
    {
    
        if ($this->initializeDB()) {
            if($this->checkPassword($user))
            {
                $query = "update users set first_name='" . $user->firstName . "', last_name=' " . $user->lastName . "', email='" . $user->email . "'";
                if($newPassword != null)
                {
                    $query = $query . ", password='" . $newPassword . "'";
                }
                if($user->profilePicture != null)
                {
                    $query = $query . ", profile_photo= '" . $user->profilePicture . "'";
                }
                $query = $query . " where user_id=" . $user->userID;
                return $this->db->update($query);            }

        }

    }
    public function checkPassword($user)
    {
        if ($this->initializeDB()) {
            if($user->password == null || $user->password == "")
            {
                return FALSE;
            }
            else{
            $query = "select * from users where user_id=" . $user->userID . " and password= '" . $user->password . "'";
            if (count($this->db->select($query)) == 1)
                return true;
        }
    }
        return false;
    }
    
}
