<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}
