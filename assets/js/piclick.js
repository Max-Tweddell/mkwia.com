var clicking = false;

document.getElementById("pi").onmousedown = function(e) {
    clicking = true;
}

document.onmouseup = function(e) {
    clicking = false;
}

document.onkeydown = function(e) {
    if (e.shiftKey && e.ctrlKey && clicking) {
        clicking = false;
        window.location.href = "http://www.faggot.racing";
    }
}
