
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
    <header>
        <h1>Student Portal</h1>
        <nav>
            <ul>
                <li><a href="#student-login">Login</a></li>
                <li><a href="#student-register">Register</a></li>
                <li><a href="#apply">Apply</a></li>
                <li><a href="#view-admissions">View Admissions</a></li>
                <li><a href="#profile">Profile</a></li>
            </ul>
        </nav>
    </header>


    <section id="student-login">
        <h2>Login</h2>
        <form action="student_login.php" method="post">
            <label for="student-email">Email:</label>
            <input type="email" id="student-email" name="email" required>
            <label for="student-password">Password:</label>
            <input type="password" id="student-password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </section>


    <section id="student-register">
        <h2>Register (Email Verification)</h2>
        <form action="student_register.php" method="post">
            <label for="register-email">Email:</label>
            <input type="email" id="register-email" name="email" required>
            <label for="register-password">Password:</label>
            <input type="password" id="register-password" name="password" required>
            <button type="submit">Register</button>
        </form>
    </section>

    <section id="apply">
        <h2>Apply for Courses</h2>
        <form action="apply.php" method="post">
            <label for="institute-id">Institute ID:</label>
            <input type="number" id="institute-id" name="institute_id" required>
            <label for="course-id-1">Course ID 1:</label>
            <input type="number" id="course-id-1" name="course_id_1" required>
            <label for="course-id-2">Course ID 2 (optional):</label>
            <input type="number" id="course-id-2" name="course_id_2">
            <button type="submit">Apply</button>
        </form>
    </section>


    <section id="view-admissions">
        <h2>View Admissions</h2>
        <form action="view_admissions.php" method="get">
            <button type="submit">View Admissions</button>
        </form>
    </section>


    <section id="profile">
        <h2>Student Profile</h2>
        <form action="update_profile.php" method="post">
            <label for="student-name">Name:</label>
            <input type="text" id="student-name" name="student_name" required>
            <label for="student-email">Email:</label>
            <input type="email" id="student-email" name="student_email" required>
            <button type="submit">Update Profile</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024-Student-Portal</p>
    </footer>
</body>
</html>
