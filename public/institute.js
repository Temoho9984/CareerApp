
function searchFunction() {
    const searchInput = document.getElementById("searchInput").value.toLowerCase();
    const institutionCards = document.querySelectorAll(".institution-card");

 
    institutionCards.forEach((card) => {
        const cardTitle = card.querySelector("h3").innerText.toLowerCase();
        const cardDescription = card.querySelector("h4").innerText.toLowerCase();

        if (cardTitle.includes(searchInput) || cardDescription.includes(searchInput)) {
            card.style.display = "block"; 
        } else {
            card.style.display = "none";
        }
    });
}

document.getElementById("searchInput").addEventListener("keypress", function(event) {
    if (event.key === 'Enter') {
        searchFunction();
    }
});
