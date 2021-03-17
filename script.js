var showingDetail = false;
var OFFSETX = 100;
var OFFSETY = 100;

function showDetail (region) {
  createBox(region, region.x *1.2, region.y * 1.2)
}

function createBox (event, node, name) {
  console.log(event.clientX);

  if (showingDetail) {
    toDel = document.getElementById("details")
    if (toDel != null) {
      toDel.remove()
      showingDetail = false
    }
  } else {
    var mapNode = node.parentNode;
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


function displayName (name) {
  document.getElementById('testP').innerHTML = name;
}
