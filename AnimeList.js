function getList() {
  array = [
    // Example 2d array, each element has a name and a link
    ["Erased", "link"],
    ["Your Name", "link2"],
    ["Erased", "link"],
    ["Your Name", "link2"],
    ["Erased", "link"],
    ["Your Name", "link2"],
    ["Erased", "link"],
    ["Your Name", "link2"],
  ]

  renderList(array)
}

function renderList(arr) {
  table = document.getElementById("animeList");
  count = 4;
  for (i=0; i < arr.length / count; i++) {
    row = document.createElement("tr");
    for (j = 0; j < count; j++) {
    td = document.createElement("td");
      link = document.createElement("a");
      link.setAttribute("href",arr[i+j][1]);
      link.innerHTML = arr[i+j][0];
      td.appendChild(link);
      if (arr[i+j] != null) {
      row.appendChild(td);
      }
    }
    row.appendChild(td);
    table.appendChild(row);
  }
  console.log(table);
}


getList()
