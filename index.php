<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="validation.js"></script>
</head>

<body>
    <div class="container">
        <h2>Registration</h2>
        <form id="registrationForm" action="review.php" method="post">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>

            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value="">Select Country</option>
                <option value="Egypt">Egypt</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
            </select>

            <div class="gender-container">
                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="Mr.">
                <label for="male">Male</label>

                <input type="radio" id="female" name="gender" value="Miss">
                <label for="female">Female</label>
            </div>


            <label>Your Skills:</label>
            <input type="checkbox" name="skills[]" value="PHP"> PHP
            <input type="checkbox" name="skills[]" value="MySQL"> MySQL
            <input type="checkbox" name="skills[]" value="J2SE"> J2SE
            <input type="checkbox" name="skills[]" value="PostgreSQL"> PostgreSQL

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" value="OpenSource" readonly>

            <label for="captcha">Security Code:</label>
            <div class="captcha">Sh68Sa</div>
            <input type="text" id="captcha" name="captcha" required>

            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</body>

</html>