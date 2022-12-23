<?php

session_start();
setcookie("moon", "shines");
print_r($_SESSION);
print_r($_COOKIE);
print_r($_REQUEST);
print_r($_GET);
print_r(ini_get_all());


if (!isset($_SESSION["bananas"])){
    $_SESSION["bananas"] = 1;
    $_SESSION["recent_bunch"] = 1;
} else {
    $this_bunch = rand(1,5);
    $_SESSION["bananas"] += $this_bunch;
    $_SESSION["recent_bunch"] = $this_bunch;
}

echo "<p>You found a bunch of bananas containing ".$_SESSION["recent_bunch"]." bananas.</p>";
echo "<p>Your total is now: ".$_SESSION["bananas"]." bananas.  You lucky duck you.</p>"

?>
