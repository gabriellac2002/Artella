var searchName = document.getElementById("searchProduct");
searchName.addEventListener("keydown", function () {
  if (event.key == "Enter") search();
});

function search() {
  var box = document.getElementById("select-category");
  category = box.options[box.selectedIndex].value;

  let searchUrl ="";

  let listUrl = [];
  if (searchName.value != "")listUrl.push("search="+searchName.value);
  if (category != "none")listUrl.push("category="+category);

  listUrl.forEach(x => searchUrl+= x + "&")

  if(listUrl.length > 0 )window.location = "productsSearch?"+searchUrl; 
  else window.location = "products" ;

}
