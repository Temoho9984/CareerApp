<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="studentRegistration.css">
</head>
<body>
    <div class="form-container">
        <h2>Student Registration</h2>
        <form id="registerForm">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit"><a href="apply.php"></a>Register</button>
        </form>
        <p>Already have an account? <a href="index.html">Login here</a></p>
    </div>
    <script src="studentRegistration.js"></script>
</body>
</html>
