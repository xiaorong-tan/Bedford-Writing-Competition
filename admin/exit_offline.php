<?php
session_start();
        unset($_SESSION['firstname_o']);
        unset($_SESSION['lastname_o']);
        unset($_SESSION['email_o']);
        unset($_SESSION['address1_o']);
        unset($_SESSION['address2_o']);
        unset($_SESSION['postcode_o']);
        unset($_SESSION['city_o']);
        unset($_SESSION['country_o']);
        unset($_SESSION['city_o']);
        unset($_SESSION['telephone_o']);
        unset($_SESSION['if_stu_o']);
        unset($_SESSION['entry_num_o']);
        unset($_SESSION['story1_o']);
        unset($_SESSION['story2_o']);
        unset($_SESSION['story3_o']);
        unset($_SESSION['entry_fee_o']);
        unset($_SESSION['method_payment_o']);
        include 'search_offline.php';
?>