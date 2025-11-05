<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance Platform</title>
    <link rel="stylesheet" href="institute.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
  
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Career Guidance Platform</h1>
            </div>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#institutions">Institutions</a>
                
                
                <div class="dropdown">
                    <button class="dropbtn">Admin Actions 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="add_faculty.html">Add Faculty</a>
                        <a href="add_courses.html">Add Courses</a>
                        <a href="view_applications.html">View Applications</a>
                        <a href="publish_admissions.html">Publish Admissions</a>
                        <a href="profile.html">Profile (View, Update)</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Get Your Perfect Course</h1>
            <p>Launch your career with the top institutions and courses in Lesotho</p>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search for institutions or courses...">
                <button type="button" onclick="searchFunction()">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </section>


    <section class="institutions" id="institutions">
        <h2>Institutions Of Higher Learning In Lesotho</h2>
        <div class="institution-cards">
        
            <div class="institution-card">
                <img src="img1.png" alt="Limkokwing University">
                <h3>Limkokwing University</h3>
                <h4> <i>"Innovation Beyond Borders.Design the Future.Creativity Unleashed."</i></h4>
                <div class="faculty-list">
                    <h4>Faculties:</h4>
                    <ul>
                        <li>Faculty of Information & Communication Technology
                            <ul class="courses">
                                <li>BSc Software Engineering</li>
                                <li>BSc Multimedia</li>
                                <li>BSc Information Technology</li>
                            </ul>
                        </li>
                        <li>Faculty of Business & Management
                            <ul class="courses">
                                <li>Business Administration</li>
                                <li>Finance & Banking</li>
                                <li>Marketing</li>
                            </ul>
                        </li>
                        <li>Faculty of Design & Innovation
                            <ul class="courses">
                                <li>Fashion Design</li>
                                <li>Interior Design</li>
                                <li>Graphic Design</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="view-more" onclick="location.href='limkokwing.html'">View Details</button>
            </div>


            <div class="institution-card">
                <img src="img 2.png" alt="Botho University">
                <h3>Botho University</h3>
                <h4><i>"Building Leaders, Shaping Nations."</i></h4>
                <div class="faculty-list">
                    <h4>Faculties:</h4>
                    <ul>
                        <li>Faculty of Computing
                            <ul class="courses">
                                <li>Computer Science</li>
                                <li>Network Security</li>
                                <li>Data Science</li>
                            </ul>
                        </li>
                        <li>Faculty of Business
                            <ul class="courses">
                                <li>Accounting</li>
                                <li>Business Management</li>
                                <li>Human Resources</li>
                            </ul>
                        </li>
                        <li>Faculty of Health
                            <ul class="courses">
                                <li>Health Information Management</li>
                                <li>Public Health</li>
                                <li>Healthcare Administration</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="view-more" onclick="location.href='botho.html'">View Details</button>
            </div>


            <div class="institution-card">
                <img src="img3.jpg" alt="Lerotholi Polytechnic">
                <h3>Lerotholi Polytechnic</h3>
                <h4><i>"Cultivating Excellence, Harvesting Success." </i></h4>
                <div class="faculty-list">
                    <h4>Faculties:</h4>
                    <ul>
                        <li>Faculty of Engineering
                            <ul class="courses">
                                <li>Civil Engineering</li>
                                <li>Electrical Engineering</li>
                                <li>Mechanical Engineering</li>
                            </ul>
                        </li>
                        <li>Faculty of Technology
                            <ul class="courses">
                                <li>Construction Technology</li>
                                <li>Automotive Technology</li>
                                <li>Electronics Technology</li>
                            </ul>
                        </li>
                        <li>Faculty of Commercial Studies
                            <ul class="courses">
                                <li>Business Studies</li>
                                <li>Office Administration</li>
                                <li>Marketing Management</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="view-more" onclick="location.href='lerotholi.html'">View Details</button>
            </div>


            <div class="institution-card">
                <img src="img4.png" alt="National University of Lesotho">
                <h3>National University of Lesotho</h3>
                <h4><i>"Nurturing Nature, Nurturing Minds."</i></h4>
                <div class="faculty-list">
                    <h4>Faculties:</h4>
                    <ul>
                        <li>Faculty of Agriculture and Food Science
                            <ul class="courses">
                                <li>Agricultural Economics</li>
                                <li>Crop Science</li>
                                <li>Animal Science</li>
                            </ul>
                        </li>
                        <li>Faculty of Natural Resources Management
                            <ul class="courses">
                                <li>Forestry</li>
                                <li>Range Management</li>
                                <li>Soil Science</li>
                            </ul>
                        </li>
                        <li>Faculty of Agricultural Engineering and Technology
                            <ul class="courses">
                                <li>Agricultural Engineering</li>
                                <li>Food Technology</li>
                                <li>Rural Development</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="view-more" onclick="location.href='lesotho_agricultural.html'">View Details</button>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: admin@careerguidance.co.ls</p>
                <p>Phone: +266 2232 2525</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#institutions">Institutions</a>
                <a href="about.html">About Us</a>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Career Guidance Platform. All rights reserved.</p>
        </div>
    </footer>

    <script src="institute.js"></script>
</body>
</html>
