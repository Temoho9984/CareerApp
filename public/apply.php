<?php

$subjects = ['English', 'Maths', 'Sesotho', 'Geography', 'Physical Science'];
$grades = ['English' => 50, 'Maths' => 50, 'Sesotho' => 50, 'Geography' => 50, 'Physical Science' => 50]; 
$selectedResults = [];
$errorMessage = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subjectResults = $_POST['subject'] ?? [];
    $gradeResults = $_POST['grade'] ?? [];


    if (count($subjectResults) >= 3) {
        foreach ($subjectResults as $index => $subject) {
            $grade = $gradeResults[$index] ?? '';
            if (in_array($subject, $subjects) && $grade >= 50 && $grade <= 100) {
                $selectedResults[] = ['subject' => $subject, 'grade' => $grade];
            }
        }
    } else {
        $errorMessage = "You must select at least 3 subjects.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
    <link rel="stylesheet" href="apply.css">
    <script>
        function updateFacultyAndCourses() {
            var university = document.getElementById("institution").value;
            var facultySelect = document.getElementById("faculty");
            var courseSelect = document.getElementById("course");

            facultySelect.innerHTML = "<option value=''>Select Faculty</option>";
            courseSelect.innerHTML = "<option value=''>Select Course</option>";

            var faculties = [];
            var courses = [];

            if (university === "Limkokwing University") {
                faculties = [
                    "Faculty of Information & Communication Technology",
                    "Faculty of Business & Management",
                    "Faculty of Design & Innovation"
                ];
                courses = {
                    "Faculty of Information & Communication Technology": [
                        "BSc Software Engineering", "BSc Multimedia", "BSc Information Technology"
                    ],
                    "Faculty of Business & Management": [
                        "Business Administration", "Finance & Banking", "Marketing"
                    ],
                    "Faculty of Design & Innovation": [
                        "Fashion Design", "Interior Design", "Graphic Design"
                    ]
                };
            } else if (university === "Botho University") {
                faculties = [
                    "Faculty of Computing",
                    "Faculty of Business",
                    "Faculty of Health"
                ];
                courses = {
                    "Faculty of Computing": [
                        "Computer Science", "Network Security", "Data Science"
                    ],
                    "Faculty of Business": [
                        "Accounting", "Business Management", "Human Resources"
                    ],
                    "Faculty of Health": [
                        "Health Information Management", "Public Health", "Healthcare Administration"
                    ]
                };
            } else if (university === "Lerotholi Polytechnic") {
                faculties = [
                    "Faculty of Engineering",
                    "Faculty of Technology",
                    "Faculty of Commercial Studies"
                ];
                courses = {
                    "Faculty of Engineering": [
                        "Civil Engineering", "Electrical Engineering", "Mechanical Engineering"
                    ],
                    "Faculty of Technology": [
                        "Construction Technology", "Automotive Technology", "Electronics Technology"
                    ],
                    "Faculty of Commercial Studies": [
                        "Business Studies", "Office Administration", "Marketing Management"
                    ]
                };
            } else if (university === "National University of Lesotho") {
                faculties = [
                    "Faculty of Agriculture and Food Science",
                    "Faculty of Natural Resources Management",
                    "Faculty of Agricultural Engineering and Technology"
                ];
                courses = {
                    "Faculty of Agriculture and Food Science": [
                        "Agricultural Economics", "Crop Science", "Animal Science"
                    ],
                    "Faculty of Natural Resources Management": [
                        "Forestry", "Range Management", "Soil Science"
                    ],
                    "Faculty of Agricultural Engineering and Technology": [
                        "Agricultural Engineering", "Food Technology", "Rural Development"
                    ]
                };
            }


            faculties.forEach(function(faculty) {
                var option = document.createElement("option");
                option.value = faculty;
                option.text = faculty;
                facultySelect.appendChild(option);
            });


            facultySelect.addEventListener("change", function() {
                var selectedFaculty = facultySelect.value;
                courseSelect.innerHTML = "<option value=''>Select Course</option>"; 
                if (selectedFaculty && courses[selectedFaculty]) {
                    courses[selectedFaculty].forEach(function(course) {
                        var option = document.createElement("option");
                        option.value = course;
                        option.text = course;
                        courseSelect.appendChild(option);
                    });
                }
            });
        }
    </script>
</head>
<body>

    <div class="navbar">
        <a href="apply.php">Apply</a>
        <a href="view_admission.php">View Admissions</a>
        <a href="profile.php">Profile</a>
    </div>


    <div class="content">
        <h2>Apply for Courses</h2>


        <div class="dashboard">
            <h3>Your Selected Institution and Courses</h3>
            <p><strong>Institution:</strong> 
                <span id="dashboardSelectedInstitution">None</span> 
                <button id="dashboardEditInstitutionBtn" style="display: none;">Edit</button>
                <button id="dashboardDeleteInstitutionBtn" style="display: none;">Delete</button>
            </p>
            <p><strong>Courses:</strong></p>
            <ul id="dashboardSelectedCoursesList">
                <li>No courses selected</li>
            </ul>
        </div>


        <div class="results-entry">
            <h3>Enter Your Results</h3>
            <?php if ($errorMessage): ?>
                <div class="error-message" style="color: red;">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <form method="POST" action="apply.php">
                <label for="subject">Subject:</label>
                <select id="subject" name="subject[]" required>
                    <option value="">Select Subject</option>
                    <option value="English">English</option>
                    <option value="Maths">Maths</option>
                    <option value="Sesotho">Sesotho</option>
                    <option value="Geography">Geography</option>
                    <option value="Physical Science">Physical Science</option>
                </select>

                <label for="grade">Grade:</label>
                <input type="number" id="grade" name="grade[]" placeholder="Enter grade (50-100)" min="50" max="100" required>

                <button type="button" id="addResultButton">Add Result</button>
            </form>


            <ul id="addedResultsList">
                <?php
                    if (!empty($selectedResults)) {
                        foreach ($selectedResults as $result) {
                            echo "<li>{$result['subject']}: {$result['grade']}</li>";
                        }
                    } else {
                        echo "<li>No results added yet.</li>";
                    }
                ?>
            </ul>
        </div>


        <div class="course-selection">
            <h3>Select Institution, Faculty, and Courses</h3>
            <form id="courseForm">
                <label for="institution">Institution:</label>
                <select id="institution" name="institution" required onchange="updateFacultyAndCourses()">
                    <option value="">Select Institution</option>
                    <option value="Limkokwing University">Limkokwing University</option>
                    <option value="Botho University">Botho University</option>
                    <option value="Lerotholi Polytechnic">Lerotholi Polytechnic</option>
                    <option value="National University of Lesotho">National University of Lesotho</option>
                </select>

                <label for="faculty">Faculty:</label>
                <select id="faculty" name="faculty" required>
                    <option value="">Select Faculty</option>
                </select>

                <label for="course">Course:</label>
                <select id="course" name="course" required>
                    <option value="">Select Course</option>
                </select>

                <button type="button" id="addCourseButton">Add Course</button>
            </form>
        </div>

    </div>
    <script src="apply.js"></script>
</body>
</html>
