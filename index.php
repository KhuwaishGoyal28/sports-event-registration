<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Event Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Sports Event Registration</h1>
        <form id="registrationForm" action="submit.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" pattern="[0-9]{10}" required>

            <label for="sport">Select Sport:</label>
            <select id="sport" name="sport" required>
                <option value="">--Select a Sport--</option>
                <option value="Football">Football</option>
                <option value="Basketball">Basketball</option>
                <option value="Cricket">Cricket</option>
                <option value="Tennis">Tennis</option>
                <option value="Badminton">Badminton</option>
            </select>

            <label for="agree">
                <input type="checkbox" id="agree" name="agree" required>
                I agree to the terms and conditions
            </label>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
