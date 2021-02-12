<?php
        require_once 'includes/header.php';
        require_once 'includes/footer.php';
?>

<div>
        <h1>Register</h1>
        <p>Already have an account? <a href="login.php">Login!</a> </p>

        <form action="includes/register-inc.php" method="post">

        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirmPassword" placeholder="confirm password">
        <button type="submit" name="submit">REGISTER</button>

        </form>

</div>




