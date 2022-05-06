let sidebar = document.querySelector(".sidebar");
let hiddenImg = document.querySelector("#img")
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();
});

searchBtn.addEventListener("click", ()=>{ 
  sidebar.classList.toggle("open");
  menuBtnChange(); 
});


function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   document.getElementById("img").style.display="grid";
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   document.getElementById("img").style.display="none";
  }
}