function setActiveStyleSheet(title) {
    document.getElementById("stylesheet").setAttribute("href", "/assets/css/" + title + ".css");
    localStorage.stylesheet = title;
}
window.onload = function () {
    if (typeof localStorage.stylesheet != "undefined") {
        var title = localStorage.stylesheet;
        setActiveStyleSheet(title)
    }
}
