<?php
session_start();
        unset($_SESSION['firstname_s']);
        unset($_SESSION['lastname_s']);
        unset($_SESSION['email_s']);
        unset($_SESSION['address1_s']);
        unset($_SESSION['address2_s']);
        unset($_SESSION['postcode_s']);
        unset($_SESSION['city_s']);
        unset($_SESSION['country_s']);
        unset($_SESSION['city_s']);
        unset($_SESSION['telephone_s']);
        unset($_SESSION['if_stu_s']);
        unset($_SESSION['reference_num_s']);
        include 'search_story.php';
?>