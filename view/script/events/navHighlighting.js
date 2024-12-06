const $links = Array.from(document.querySelectorAll('header section nav ul li a'));
const CURRENT_PATH = window.location.pathname;

function activate($link) {
    $link.classList.add("active");
}

document.addEventListener("DOMContentLoaded", () => {
    if ($links.length > 0) {
        // If URL doesn't end with .php (e.g., "/"), highlight "Home"
        if (!CURRENT_PATH.endsWith(".php")) {
            activate($links[0]);
            return;
        }

        // Find the link matching the current path
        const $link = $links.find($l => CURRENT_PATH.includes($l.getAttribute("href").slice(2)));

        if ($link) activate($link);
    }
});