let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function () {
    nextImage();
}, 5000)

function nextImage() {
    count++;
    if (count > 4) {
        count = 1;
    }

    document.getElementById("radio" + count).checked = true;
}

var modal = document.getElementById("popup");
var btn = document.getElementById("open-popup");
var span = document.getElementById("closeModalBtn");
btn.onclick = function () { modal.style.display = "flex"; }
span.onclick = function () { modal.style.display = "none"; }
window.onclick = function (event) { if (event.target == modal) { modal.style.display = "none"; } }