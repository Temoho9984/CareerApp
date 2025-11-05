document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function(event) {
            event.preventDefault();

            const role = document.getElementById("role").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            if (!role || !email || !password) {
                alert("Please fill in all fields.");
                return;
            }

            if (role === "admin") {
                window.location.href = "admin.php"; 
            } else if (role === "student") {
                window.location.href = "student.php"; 
            } else if (role === "institute") {
                window.location.href = "institute.php"; 
            } else {
                alert("Please select a valid role.");
            }
        });
    } else {
        console.error("Login form not found");
    }
});
