document.addEventListener("DOMContentLoaded", function () {
    console.log("Page loaded");
    showAlert("success-alert"); // Untuk alert sukses
    showAlert("error-alert"); // Untuk alert error
});

function showAlert(alertId) {
    console.log("Trying to show alert: " + alertId); // Debugging line
    let alert = document.getElementById(alertId);
    if (alert) {
        console.log("Found alert element:", alert); // Debugging line
        alert.classList.remove("opacity-0");
        alert.classList.add("opacity-100");
        setTimeout(function () {
            alert.classList.remove("opacity-100");
            alert.classList.add("opacity-0");
            setTimeout(function () {
                alert.style.display = "none";
            }, 1000);
        }, 5000);
    } else {
        console.log("Alert element not found"); // Debugging line
    }
}
