
    <?php
        include_once 'includes/header.php';
?>
<div>
    <form method="POST" action="includes/registerinc.php" >
    Already a member? <a href="login.php"> Login here</a>
    <input type="text" name="name" id="name" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="password">
    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm password">
    <button type="submit" name="submit" id="submit">Register</button>
    </form>
    <p id="error" class="errors"> 
    </p>
</div>
<script src="register.js">
</script>


<?php
include_once 'includes/footer.php';
?>