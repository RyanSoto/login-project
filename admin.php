<?php


    include_once 'header.php';

    if (!isset($_SESSION["useruid"]))
    {
        header("location:login.php");
        exit();
    } else 

    if  ($_SESSION["usertype"] == "user") {
        header("location: login.php?error=notadmin");
        exit();
    }

?>

            <section class="index-into">
                <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<p>Howdy admin user " . $_SESSION["useruid"] ."</p>";

                        }
                ?>
                <h1>Welcome to the admin page</h1>
                <p>Time to take care of business!</p>
            </section>
        
<?php
    include_once 'footer.php';
?>