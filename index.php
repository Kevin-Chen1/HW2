<?php require_once("header.php"); ?>
    <h1>Hello, world!</h1>

<?php
function HelloFunction(){
    echo "peepee poopoo";
}
// Calling function
HelloFunction();
?>

    <form action="Handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    
    <a class="btn btn-primary" href="page2.html" role="button">Page 2</a>
    <?php require_once("footer.php"); ?>
