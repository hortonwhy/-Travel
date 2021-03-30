var showingDetail = false;
<<<<<<< HEAD
var mouseX, mouseY;

// save mousePos for creating a box later
function getMousePos(event) {
  mouseX = event.clientX; mouseY = event.clientY;
}
document.addEventListener("click", getMousePos);
=======
var OFFSETX = 100;
var OFFSETY = 100;
>>>>>>> 8c58ca2235a43da810ac8613953e7ad884f46dfe

function showDetail (region) {
  element = document.getElementById(region);
  name = region;
  createBox(element, name, mouseX, mouseY * 0.7)

}

<<<<<<< HEAD
function createBox (node, name, xX, yY) {
=======
function createBox (event, node, name) {
  console.log(event.clientX);

>>>>>>> 8c58ca2235a43da810ac8613953e7ad884f46dfe
  if (showingDetail) {
    toDel = document.getElementById("details")
    if (toDel != null) {
      toDel.remove()
      showingDetail = false
    }
  } else {
    var mapNode = node.parentNode.parentNode;
    var boxDiv = document.createElement("div"); 
    var box = document.createElement("p");
    boxDiv.setAttribute("id", "details");
    mapNode.appendChild(boxDiv);
    boxDiv.appendChild(box);

    // set its position
    boxDiv.style.left = OFFSETX + event.clientX+"px";
    boxDiv.style.top = OFFSETY + event.clientY+"px";

    console.log(boxDiv);
    box.innerHTML = "<strong>HEYYY!!!!!</strong> <br> <strong> you clicked on " + name + "</strong>";
    showingDetail = true; // html is added. therefore if clicked again it should delete it
  }
 }


<<<<<<< HEAD
function echo (name) {
  //document.getElementById('japan').firstChild.data = name;
  console.log(name)
=======
function displayName (name) {
  document.getElementById('testP').innerHTML = name;
>>>>>>> 8c58ca2235a43da810ac8613953e7ad884f46dfe
}
