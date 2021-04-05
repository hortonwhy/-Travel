var showingDetail = false;
var mouseX, mouseY;
var OFFSETX = 20;
var OFFSETY = -125;

  //save mousePos for creating a box later
function getMousePos(event) {
  mouseX = event.clientX; mouseY = event.clientY;
}
document.addEventListener("click", getMousePos);

function showDetail (region) {
  element = document.getElementById(region);
  name = region;
  createBox(element, name, mouseX, mouseY * 0.7)

}

function createBox (node, name) {
  console.log(node);
  console.log(event.clientX);

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
    box.innerHTML = "";
    box.innerHTML += "<h4 class='previewCenter'>"+name+"</h4";


    console.log(boxDiv);
    box.innerHTML += "<img width='125px' src="+"'prefectures/thumbnails/"+name+"/"+name+".png'"+
      " onError=\"this.src=" + "'prefectures/thumbnails/"+name.toLowerCase()+"/"+name+".png'\""+">";
    //box.innerHTML = "<strong>HEYYY!!!!!</strong> <br> <strong> you clicked on " + name + "</strong>";
    box.innerHTML += "<br>";
    box.innerHTML += "<a class='previewCenter'"+" href='"+"prefectures/"+name.toLowerCase()+".html'"+">"+"Read More"+"</a>";
    showingDetail = true; // html is added. therefore if clicked again it should delete it
  }
 }

function echo (name) {
  //document.getElementById('japan').firstChild.data = name;
  console.log(name)
}
function displayName (name) {
  document.getElementById('testP').innerHTML = name;
}

// should just be the id for the form
function validateMail() {
  var name = document.getElementById("name").value
  var alpha = /^[a-zA-Z]+$/
  if (!name.match(alpha)) {
    alert('Please enter a valid name.')
}
  //emailForm = document.getElementById(id);
  //console.log(emailForm)
}
