let isQuering = false;

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

let page = 2;

async function getProducts() {
  if(isQuering == false) {
    isQuering = true;
    let url = "";
    if(document.location.href.includes("search") || document.location.href.includes("category")) {
      const temp = document.location.href.split('?')[1];
      const tempParams = temp.split('&')
      const urlParams = tempParams[0] + tempParams[1];
      url = "http://localhost:8080/products/search?" + urlParams +  "&page=" + page;
    }
    else {
      url = "http://localhost:8080/products/search" + "?page=" + page;
    }
    console.log(url);
    const res = await fetch(url);
    const json = await res.json();
    isQuering = true;
    return json;
  }
  return null;
}

function getImageLink(image) {
  return image ? "../../../public/assets/products/" + image : "https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80";
}

window.addEventListener('scroll', async () => {
  const {
    scrollTop,
    scrollHeight,
    clientHeight
  } = document.documentElement;

  if (scrollTop + clientHeight >= scrollHeight - 5) {
    const data = await getProducts();
    if(!(data == null)) {
      console.log(data);
      data.forEach(element => {
        console.log(element?.product?.name);
        const html = `
        <a class="col-md-6 col-sm-12 col-lg-4 align-items-center justify-content-center" style="text-decoration: none; color: black" href="product-view?id=${element?.product?.id}">
            <div class="card cardWidth">
              <img class="card-img-top" src='${getImageLink(element?.images[0]?.url)}' alt="Card image cap" style="max-width:600px;height:240px;">
              <div class="card-body">

                <h5 class="card-title">${element?.product?.name}</h5>
                <div style="display: flex; flex-direction: row; margin-bottom: 10px; margin-top: 5px;">
                  <i class="fa-solid fa-star starChecked"></i>
                  <i class="fa-solid fa-star starChecked"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <div style="display: flex; flex-direction: column;">
                  <span class="oldPrice">R$ ${element?.product?.price * 1.2}</span>
                  <span style="margin-bottom: 4px; margin-top: 0px" class="card-text">R$ ${element?.product?.price}</span>
                  <span class="secondPrice">ou 5x de R$ ${element?.product?.price * 1.05 / 5}</span>
                  <span class="category">
                    ${element?.category?.name}
                  </span>
                </div>

              </div>
            </div>
          </a>
        `
        //https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80
        document.getElementById("allProducts").insertAdjacentHTML(`beforeend`, html)
        
      })
      page++;
    }
    else {
      console.log("Nulo")
    }

  }
})
