document.addEventListener("DOMContentLoaded", () => {
    const pages = document.querySelectorAll(".page1, .page2, .page3");
    const nextButtons = document.querySelectorAll(".next");
    const backButtons = document.querySelectorAll(".back");
    let currentPage = 0;

    function showPage(index) {
        pages.forEach((page, i) => {
            page.style.display = i === index ? "block" : "none";
        });
    }

    nextButtons.forEach((button) => {
        button.addEventListener("click", () => {
            if (currentPage < pages.length - 1) {
                currentPage++;
                showPage(currentPage);
            }
        });
    });

    backButtons.forEach((button) => {
        button.addEventListener("click", () => {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });
    });

    showPage(currentPage);
});

document.addEventListener("DOMContentLoaded", () => {
    const pages = document.querySelectorAll(
        ".page1_stepper, .page2_stepper, .page3_stepper"
    );
    const nextButtons = document.querySelectorAll(".next");
    const backButtons = document.querySelectorAll(".back");
    let currentPage = 0;

    function showPage(index) {
        pages.forEach((page, i) => {
            page.style.display = i === index ? "block" : "none";
        });
    }

    nextButtons.forEach((button) => {
        button.addEventListener("click", () => {
            if (currentPage < pages.length - 1) {
                currentPage++;
                showPage(currentPage);
            }
        });
    });

    backButtons.forEach((button) => {
        button.addEventListener("click", () => {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });
    });

    showPage(currentPage);
});

document.addEventListener("DOMContentLoaded", function () {
    const physicalSelect = document.getElementById("physical-activity");
    const physicalInput = document.getElementById("physical-activity-input");

    new Choices(physicalSelect, {
        removeItemButton: true,
        placeholderValue: "Enter details (leave empty if none)",
        position: "bottom",
        shouldSort: false,
    });

    function checkForOther(selectElement, inputElement) {
        const selectedValues = Array.from(selectElement.selectedOptions).map(
            (option) => option.value
        );
        if (selectedValues.includes("other")) {
            inputElement.style.display = "block";
        } else {
            inputElement.style.display = "none";
        }
    }

    physicalSelect.addEventListener("change", function () {
        checkForOther(physicalSelect, physicalInput);
    });

    checkForOther(physicalSelect, physicalInput);
});

document.addEventListener("DOMContentLoaded", function () {
    const healthHistorySelect = document.getElementById("health-history");
    const symptomsSelect = document.getElementById("symptoms");
    const healthHistoryInput = document.getElementById("health-history-input");
    const symptomsInput = document.getElementById("symptoms-input");

    new Choices(healthHistorySelect, {
        removeItemButton: true,
        placeholderValue: "Describe your health history (leave empty if none)",
        position: "bottom",
        shouldSort: false,
    });

    new Choices(symptomsSelect, {
        removeItemButton: true,
        placeholderValue: "Enter any symptoms (leave empty if none)",
        position: "bottom",
        shouldSort: false,
    });

    function checkForOther(selectElement, inputElement) {
        const selectedValues = Array.from(selectElement.selectedOptions).map(
            (option) => option.value
        );
        if (selectedValues.includes("other")) {
            inputElement.style.display = "block";
        } else {
            inputElement.style.display = "none";
        }
    }

    healthHistorySelect.addEventListener("change", function () {
        checkForOther(healthHistorySelect, healthHistoryInput);
    });

    symptomsSelect.addEventListener("change", function () {
        checkForOther(symptomsSelect, symptomsInput);
    });

    checkForOther(healthHistorySelect, healthHistoryInput);
    checkForOther(symptomsSelect, symptomsInput);
});
