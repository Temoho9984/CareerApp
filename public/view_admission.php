<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Admissions</title>
    <link rel="stylesheet" href="view_admission.css">
</head>
<body>

    <div class="navbar">
        <a href="apply.html">Apply</a>
        <a href="view_admissions.html">View Admissions</a>
        <a href="profile.html">Profile</a>
    </div>
    <div class="content">
        <h2>Admissions Dashboard</h2>
        <div class="dashboard">
            <div class="dashboard-item">
                <h3>Number of Students</h3>
                <p id="studentCount">0</p>
            </div>
            <div class="dashboard-item">
                <h3>Total Courses Applied For</h3>
                <p id="courseCount">0</p>
            </div>
            <div class="dashboard-item">
                <h3>Total Institutions Chosen</h3>
                <p id="institutionCount">0</p>
            </div>
        </div>

        <div class="applied-section">
            <h3>Applied Courses</h3>
            <ul id="appliedCourses"></ul>
            
            <h3>Applied Institutions</h3>
            <ul id="appliedInstitutions"></ul> 
        </div>
    </div>
    <script src="view_admission.js"></script>
</body>
</html>