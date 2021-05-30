
const btn = document.querySelector(".btn-toggle");

const theme = document.querySelector("#theme-link");

btn.addEventListener("click", function() {

    if (theme.getAttribute("href") == "profile_css_light.css") {

        theme.href = "profile_css_dark.css";

    } else {

        theme.href = "profile_css_light.css";
    }
});