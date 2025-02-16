<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
    $skills = isset($_POST['skills']) ? implode(', ', $_POST['skills']) : "None";
    $department = htmlspecialchars($_POST['department']);
    $captcha = htmlspecialchars($_POST['captcha']);

    if ($captcha !== "Sh68Sa") {
        die("Invalid CAPTCHA!");
    }

    header("Location: done.php?first_name=$first_name&last_name=$last_name&gender=$gender&address=$address&skills=$skills&department=$department");
}
?>
