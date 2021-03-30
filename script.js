var showingDetail = false;
var mouseX, mouseY;

// save mousePos for creating a box later
function getMousePos(event) {
  mouseX = event.clientX; mouseY = event.clientY;
}
document.addEventListener("click", getMousePos);

function showDetail (region) {
  element = document.getElementById(region);
  name = region;
  createBox(element, name, mouseX, mouseY * 0.7)

}

function createBox (node, name, xX, yY) {
  if (showingDetail) {
    toDel = document.getElementById("details")
    if (toDel != null) {
      toDel.remove()
      showingDetail = false;
    }
  } else {
    var mapNode = node.parentNode.parentNode;
    var boxDiv = document.createElement("div"); 
    var box = document.createElement("p");
    boxDiv.setAttribute("id", "details");
    mapNode.appendChild(boxDiv);
    boxDiv.appendChild(box);

    // set its position
    boxDiv.style.left = xX+"px";
    boxDiv.style.top = yY+"px";

    console.log(boxDiv);
    box.innerHTML = "<strong>HEYYY!!!!!</strong> <br> <strong> you clicked on " + name + "</strong>";
    showingDetail = true; // html is added. therefore if clicked again it should delete it
  }
 }


function echo (name) {
  //document.getElementById('japan').firstChild.data = name;
  console.log(name)
}
