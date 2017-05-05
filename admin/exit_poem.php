<?php
session_start();
        unset($_SESSION['firstname_p']);
        unset($_SESSION['lastname_p']);
        unset($_SESSION['email_p']);
        unset($_SESSION['address1_p']);
        unset($_SESSION['address2_p']);
        unset($_SESSION['postcode_p']);
        unset($_SESSION['city_p']);
        unset($_SESSION['country_p']);
        unset($_SESSION['city_p']);
        unset($_SESSION['telephone_p']);
        unset($_SESSION['if_stu_p']);
        unset($_SESSION['reference_num_p']);
        include 'search_poem.php';
?>