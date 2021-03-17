var showingDetail = false;

function showDetail (region) {
  createBox(region, region.x *1.2, region.y * 1.2)
}

function createBox (node, xX, yY) {
  if (showingDetail) {
    toDel = document.getElementById("details")
    if (toDel != null) {
      toDel.remove()
      showingDetail = false;
    }
  } else {
    var mapNode = node.parentNode;
    var boxDiv = document.createElement("div"); 
    var box = document.createElement("p");
    boxDiv.setAttribute("id", "details");
    mapNode.appendChild(boxDiv);
    boxDiv.appendChild(box);

    // set its position
    boxDiv.style.left = xX+"px";
    boxDiv.style.top = yY+"px";

    console.log(boxDiv);
    box.innerHTML = "<strong>HEYYY!!!!!</strong> <br> <strong> you clicked on " + node.name + "</strong>";
    showingDetail = true; // html is added. therefore if clicked again it should delete it
  }
 }


function echo (name) {
  //document.getElementById('japan').firstChild.data = name;
  console.log(name)
}
