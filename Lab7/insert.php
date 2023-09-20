<?php
    include('conn.php');

    $sql = "INSERT INTO contacts (contact_name, contact_phone, contact_email, contact_address, contact_gender, contact_relationship, contact_dob) VALUES ('$_POST[name]', '$_POST[phone]', '$_POST[email]', '$_POST[address]', '$_POST[Gender]', '$_POST[relationship]', '$_POST[dob]')";


    if (!mysqli_query($con, $sql)){
        die("Error: ".mysqli_error($con));
    }else{
        echo "success";
        echo "<script>alert('1 record added!');
        window.location.href='default.php';</script>";
    }
?>