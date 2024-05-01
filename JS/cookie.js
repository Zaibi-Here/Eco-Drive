document.addEventListener("DOMContentLoaded", function() {
    var cookieBanner = document.getElementById("cookie-consent");

    // Function to set a cookie using PHP
    function setCookiePHP(name, value, hours) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "PHP/cookieset.php?name=" + encodeURIComponent(name) + "&value=" + encodeURIComponent(value) + "&hours=" + encodeURIComponent(hours), true);
        xhr.send();
    }

    // Function to erase a cookie using PHP
    function eraseCookiePHP(name) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "PHP/cookieerase.php?name=" + encodeURIComponent(name), true);
        xhr.send();
    }

    // Check if user has accepted cookies
    var cookieAccepted = getCookie("cookie_accepted");
    if (!cookieAccepted) {
        // Display the banner if cookies not accepted
        cookieBanner.style.display = "block";

        document.getElementById("accept-cookies").addEventListener("click", function() {
            setCookiePHP("cookie_accepted", "true", 24); // Set cookie for 24 hours
            // Hide the banner after accepting cookies with animation
            cookieBanner.classList.add("hide");
        });

        document.getElementById("decline-cookies").addEventListener("click", function() {
            eraseCookiePHP("cookie_accepted");
            // Hide the banner after declining cookies with animation
            cookieBanner.classList.add("hide");
        });
    }
});
