document.getElementById("campo").addEventListener("keyup", getCodigos)
function getCodigos() {
    let inputCP = document.getElementById("campo").value
    let lista = document.getElementById("lista")
    if (inputCP.length > 0) {
        let url = "assets/inc/getCodigos.php"
        let formData = new FormData()
        formData.append("campo", inputCP)
        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors"
        }).then(response => response.json())
            .then(data => {
                lista.style.display = 'block'
                lista.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        lista.style.display = 'none'
    }
}
 // Get the modal--1
 var modalere = document.getElementById("myModalere");
 // Get the button that opens the modal
 var btnere = document.getElementById("opene-modale");
 // Get the <span> element that closes the modal
 var span = document.getElementById("closeere");
 // When the user clicks on the button, open the modal
 btnere.onclick = function() {
   modalere.style.display = "block";
 }
 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
   modalere.style.display = "none";
 }
 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
   if (event.target == modalere) {
     modalere.style.display = "none";
   }
 }