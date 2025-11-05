document.getElementById("institutionForm").addEventListener("submit", function(event) {
    event.preventDefault(); 


    const name = document.getElementById("institution-name").value;
    const location = document.getElementById("institution-location").value;


    const row = document.createElement("tr");


    row.innerHTML = `
        <td>${name}</td>
        <td>${location}</td>
        <td><button class="delete-btn">Delete</button></td>
    `;


    row.querySelector(".delete-btn").addEventListener("click", function() {
        row.remove();
    });


    document.querySelector("#institutionDashboard tbody").appendChild(row);
    document.getElementById("institutionForm").reset();
});
