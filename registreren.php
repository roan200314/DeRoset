<?php
require "database.php";
?>
<form action="registrerenCheck.php" method="post">

    </div>

    <div class="container">
        <label for="First name"><b>First name</b></label>
        <input type="text" placeholder="First name" name="firstname" required>
        
        <label for="Last name"><b>Last name</b></label>
        <input type="text" placeholder="Last name" name="lastname" required>
        
        <label for="email"><b>email</b></label>
        <input type="text" placeholder="Enter E-mail" name="email" required>

        <label for="Password"><b>password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="Birthdate"><b>Birthdate</b></label>
        <input type="date" placeholder="Birthdate" name="birthdate" required>

        <label for="Phonenumber"><b>phonenumber</b></label>
        <input type="phonenumber" placeholder="Enter phonenumber" name="phonenumber" required>

        <label for="Address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" required>
        
        <label for="Zipcode"><b>Zipcode</b></label>
        <input type="text" placeholder="Enter Zipcode" name="zipcode" required>

        <label for="City"><b>city</b></label>
        <input type="text" placeholder="Enter city" name="city" required>

        <button type="submit">Register</button>
    </div>