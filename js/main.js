/**
 * This is a less elegant implementation of Whitep4nth3r's
 * light/dark mode theme toggle published here:
 * https://whitep4nth3r.com/blog/best-light-dark-mode-theme-toggle-javascript/
 */

const themeButtonEl = document.getElementById("theme-toggle-button");
const themeLocalStorageKey = 'faw-theme';

function getCurrentThemeString() {

    const storedTheme = localStorage.getItem(themeLocalStorageKey);

    if (storedTheme !== null) return storedTheme;

    if (window.matchMedia("(prefers-color-scheme: dark)").matches) return "dark";

    return "light";

}

function updateThemeButton(otherThemeString) {

    themeButtonEl.setAttribute("aria-label", `Change to ${otherThemeString} theme`);

    themeButtonEl.innerText = `${otherThemeString} mode`;

}

function updateRootTheme(themeString) {

    document.querySelector("html").setAttribute("data-theme", themeString);

}

function getOtherThemeString(themeString) {

    return themeString === "dark" ? "light" : "dark";

}

function setTheme(newThemeString = '') {

    let themeString = getCurrentThemeString();

    if (newThemeString.length) {

        themeString = newThemeString;

        localStorage.setItem(themeLocalStorageKey, newThemeString);

    }

    updateRootTheme(themeString);

    updateThemeButton(getOtherThemeString(themeString));

}

setTheme();

themeButtonEl.addEventListener("click", (event) => {

    setTheme(getOtherThemeString(getCurrentThemeString()));

});