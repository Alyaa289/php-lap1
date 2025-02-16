<?php
echo "<h2>Stored Data</h2>";

if (file_exists("data.txt") && filesize("data.txt") > 0) {
    echo "<table border='1'>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Gender</th><th>Address</th><th>Skills</th><th>Department</th></tr>";

    $file = fopen("data.txt", "r");
    while (($line = fgets($file)) !== false) {
        $fields = explode("|", trim($line)); // تقسيم البيانات بناءً على `|`

        echo "<tr>";
        foreach ($fields as $field) {
            echo "<td>$field</td>";
        }
        echo "</tr>";
    }
    fclose($file);

    echo "</table>";
} else {
    echo "<p>No data available.</p>";
}
?>
