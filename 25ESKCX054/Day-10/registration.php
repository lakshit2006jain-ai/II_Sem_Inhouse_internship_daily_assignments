<?php

include ("header.php");
include ("checkRegistrationError.php");
?>

<div class="container mt-5" style="max-width: 400px;">


<form action="checkRegistrationError.php" method="post">
    <h3 class="mb-3">Register</h3>

    <input type="text" class="form-control mb-3" placeholder="Name" name="name">
    <input type="email" class="form-control mb-3" placeholder="Email" name="email">
    <input type="password" class="form-control mb-3" placeholder="Password" name="password">
    <input type="password" class="form-control mb-3" placeholder="Confirm Password" name="confirmPassword">

    <button class="btn btn-primary w-100">Register</button>
</form>
</div>


<?php
include ("footer.php"); 
?>
