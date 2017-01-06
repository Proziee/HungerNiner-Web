// Modal File
//Get the modal
var modal = document.getElementById("addModal");

//get the span element that closes the modal
var span = document.getElementsByClassName("close")[0];

function addingButton() {
    document.getElementById("addModal").style.display = "block";
}

// When the user clicks on the X, close the modal
function closingModal() {
    document.getElementById("addModal").style.display = "none";
}

//When the user clicks anywhere outside the modal, close it
window.onclick = function (event) {
    if (event.target == document.getElementById("addModal")) {
        document.getElementById("addModal").style.display = "none";
    }
};