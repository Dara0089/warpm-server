<?php
    if( isset($_POST["buttonSubmit"])) {
        $username = $_POST["txtUsername"];
        $password = $_POST["txtPassword"];
        echo $username . "<br>";
        echo $password . "<br>";
    }

?>
<form action="" method="post">

    <label for="txtUsername">Username: </label><br>
    <input type="text" name="txtUsername" id="txtUsername">    <br><br>

 <label for="txtPassword">Password: </label><br>
    <input type="password" name="txtPassword" id="txtPassword">   <br><br>

 <input type="submit" name="buttonSubmit" value="Submit">
</form>