
    <?php
include_once 'includes/header.php';
?>
 <div class="container">
    New user? <a href="register.php">Regiter here</a>
    <form action="includes/logininc.php" method="post">
    <input type="text" name="name" id="name" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">

    <button type="submit"  name="submit">Login</button>
    </form>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>