document.addEventListener("DOMContentLoaded", function() {
//form element by its ID
    const form = document.getElementById("registerForm");

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;


        console.log("Name:", name);
        console.log("Email:", email);
        console.log("Password:", password);


        window.location.href = "apply.php";
    });
});
