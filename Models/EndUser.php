<?php

require_once '../../NewsstandProject/Models/User.php';
class EndUser extends User {
    public $joinDate; 
    public $savedContents;
    public $ratings;
    public $subscriptions;
}
?>