'use strict';

//-------------------------------------------------------------------------------------------------
// Dark Mode Setting, Toggling, and Propagation
//-------------------------------------------------------------------------------------------------
//Run this as soon as the window completely loads to set the theme
window.onload = (event) => {
    setThemeTogglerStatus();
}

//Set the user dark mode preference for the toggler and the theme
function setThemeTogglerStatus() {
    if (localStorage.getItem("darkMode") === "enabled") {
        document.body.classList.add("darkMode");
        checkToggler();
    } else {
        document.body.classList.remove("darkMode");
        uncheckToggler();
    }
    setTheme();
    document.getElementById("darkmode-container").hidden = false;
}

//Helper function that sets dark mode on the toggler
function checkToggler() {
    document.getElementById("darkmode-toggle").checked = true;
}

//Helper function that sets light mode on the toggler
function uncheckToggler() {
    document.getElementById("darkmode-toggle").checked = false;

}

//Event listener for the light/dark mode toggling button
document.getElementById('darkmode-toggle').addEventListener('change', (event) => {
    document.body.classList.toggle("darkMode");

    if (event.currentTarget.checked) {
        // document.body.classList.add("darkMode");
        enableDarkMode();
    } else {
        // document.body.classList.remove("darkMode");
        disableDarkMode();
    }
});


//-------------------------------------------------------------------------------------------------
// Contact Form Validation
//-------------------------------------------------------------------------------------------------
//Contact Form Validation on Change
if (document.getElementById("contact-page")) {
    document.getElementById("name").addEventListener("change", function () {
        validateFullName("name");
    })
    document.getElementById("email").addEventListener("change", function () {
        validateEmail("email");
    })
    document.getElementById("message").addEventListener("change", function () {
        validateMessage("message");
    })
}

//Contact Form Validation on Submit
function validateContactForm() {
    const validationResult =
        validateFullName("name")
        && validateEmail("email")
        && validateMessage("message");
    if (!validationResult) {
        event.preventDefault();
    }
}


