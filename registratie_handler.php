<h1>Forum registratie</h1>

<?php
$email = $username = "";
$age = 0;
if (!empty($_GET["email"]) && !empty($_GET["username"]) && !empty($_GET["age"])) {
    $email = $_GET["email"];
    $username = $_GET["username"];
    $age = $_GET["age"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("Jouw username is ".$username."<br>");
        echo("Jouw email is ".$email."<br>");
        echo("Jouw leeftijd is ".$age."<br>");
        
    } else {
        echo("<h1>$email is geen geldig e-mailadres</h1>");
    }
}else {
    echo("<h1>Je hebt niet alles ingevult</h1>");
}

?>