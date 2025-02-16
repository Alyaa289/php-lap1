<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
    $skills = isset($_POST['skills']) ? implode(' - ', $_POST['skills']) : "None"; // فصل الـ Skills بـ " - "
    $department = htmlspecialchars($_POST['department']);
    $captcha = htmlspecialchars($_POST['captcha']);

    if ($captcha !== "Sh68Sa") {
        die("Invalid CAPTCHA!");
    }

    $data = "$first_name|$last_name|$gender|$address|$skills|$department\n";

    $file = fopen("data.txt", "a");
    if ($file === false) {
        die("Failed to open file!");
    }
    fwrite($file, $data);
    fclose($file);

    header("Location: done.php");
    exit();
}
?>
