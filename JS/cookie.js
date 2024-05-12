document.getElementById("cookie-consent").style.display = (getCookie("cookie_accepted") ? "none" : "block");
document.getElementById("accept-cookies").addEventListener("click", () => {setCookiePHP("cookie_accepted", "true", 24); document.getElementById("cookie-consent").classList.add("hide");});
