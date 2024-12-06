const $searchInput = document.getElementById("searchInput");

const SHORTCUTS = {};

if ($searchInput) SHORTCUTS['/'] = () => $searchInput.focus();

document.addEventListener("keydown", (e) => {
    if (e.target.tagName === "INPUT" || e.target.tagName === "TEXTAREA") return;

    const SHORTCUT = e.key.toLowerCase();
    const FUNC = SHORTCUTS[SHORTCUT];
    if (!FUNC) return;

    e.preventDefault();
    FUNC();
})