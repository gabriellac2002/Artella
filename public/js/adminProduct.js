const dropzone = document.getElementById('dropzone')
const imagesPreview = document.getElementById('imagesPreview')
const dropzoneInput = dropzone.querySelector('input')
let fileObject = {};

const fa_trash = document.querySelectorAll('.fa-trash')

fa_trash.forEach(trash => {
  trash.addEventListener('click', deleteRow)
})

const fa_eye = document.querySelectorAll('.fa-eye')

const admin_responsive = document.querySelectorAll('.actionsResponsive');
admin_responsive.forEach(element => {
  element.addEventListener('click', () => {
    


  })
})

function openViewModal(e) {
  if(e.target.parentElement.tagName != "DIV") {
    const parent = e.target.parentElement.parentElement;
    const viewName = document.getElementById('viewName');
    viewName.value = parent.querySelectorAll('td')[0].textContent
    const viewPrice = document.getElementById('viewPrice');
    viewPrice.value = parent.querySelectorAll('td')[1].textContent
    document.getElementById('ViewProductModal').click()
  }
  else {
    document.getElementById('ViewProductModal').click()
  }
}

fa_eye.forEach(fa => {
  fa.addEventListener('click', openViewModal)
})

window.addEventListener("dragover",function(e){
  e = e || event;
  e.preventDefault();
},false);
window.addEventListener("drop",function(e){
  e = e || event;
  e.preventDefault();
},false);

document.querySelectorAll('.fa-pen').forEach(element => {
  element.addEventListener('click', () => {
    if(element.parentElement.tagName != "DIV") {
      const data = element.parentElement.parentElement.querySelectorAll('td');
      document.querySelector('#editingNameInput').value = data[0].textContent;
      document.querySelector('#editingPriceInput').value = data[1].textContent;
      document.querySelector('#editingDescriptionTextArea').value = data[2].innerText;
      document.getElementById('EditingButton').click();
    }
    else {
      document.getElementById('EditingButton').click();
    }
  })
})

document.querySelector('.fa-plus').addEventListener('click', () => {
  document.getElementById('NewProductButton').click();
})

dropzoneInput.addEventListener('input', (e) => {
  const files = dropzoneInput.files;
  const dataTransfer = new DataTransfer();
  for(let i = 0; i < files.length; i++) {
    const file = files.item(i);
    if(!file.type.includes("image")) {
      continue;
    }
    const fileId = makeid(12);
    fileObject[fileId] = file;
    dataTransfer.items.add(file);
    const imgElement = document.createElement('img')
    const div = document.createElement('div')
    div.style.backgroundSize = 'contain'
    div.classList.add('imagePreviewed')
    const divMouseOver = document.createElement('div')
    divMouseOver.classList.add('divMouseOver')
    const iElem = document.createElement('i')
    iElem.classList.add('fa-solid')
    iElem.classList.add('fa-xmark')
    iElem.width = '80px';
    iElem.height = '80px';
    iElem.target = fileId
    iElem.addEventListener('click', deleteImage);
    const url = URL.createObjectURL(file);
    imagesPreview.insertAdjacentElement('beforeend', div)
    div.insertAdjacentElement('beforeend', divMouseOver);
    divMouseOver.insertAdjacentElement('beforeend', iElem)
    div.style.background = `url("${url}") no-repeat `
    div.style.backgroundSize = 'cover'
  }
})


dropzone.addEventListener('dragover', () => {
  dropzone.style.borderColor = "green";
  dropzone.style.backgroundColor = 'rgba(0,168, 0 ,0.2)'
  dropzone.querySelector('i').style.color =  'green';
  dropzone.querySelector('h5').style.color = 'green';
})

dropzone.addEventListener('dragleave', () => {
  dropzone.style.borderColor = "#ccc";
  dropzone.style.backgroundColor = 'white'
  dropzone.querySelector('i').style.color =  'black';
  dropzone.querySelector('h5').style.color = 'black';
})

dropzone.addEventListener('click', () => {
  const dropzone_input = dropzone.querySelector('input')
  dropzone_input.click();
})

dropzone.addEventListener('drop', (e) => {
  const dropzone_input = dropzone.querySelector('input')
  e.preventDefault()
  e.stopPropagation()
  dropzone.style.borderColor = "#ccc";
  dropzone.style.backgroundColor = 'white'
  dropzone.querySelector('i').style.color =  'black';
  dropzone.querySelector('h5').style.color = 'black';
  const files = e.dataTransfer.files;
  const dataTransfer = new DataTransfer();
  const baseHtml = `
    <div class="imagePreviewed">
      <i class="fa-solid fa-xmark"></i>
    </div>
  `
  for(let i = 0; i < files.length; i++) {
    const file = files.item(i);
    if(!file.type.includes("image")) {
      continue;
    }
    const fileId = makeid(12);
    fileObject[fileId] = file;
    dataTransfer.items.add(file);
    const div = document.createElement('div')
    div.style.backgroundSize = 'contain'
    div.classList.add('imagePreviewed')
    const divMouseOver = document.createElement('div')
    divMouseOver.classList.add('divMouseOver')
    const iElem = document.createElement('i')
    iElem.classList.add('fa-solid')
    iElem.classList.add('fa-xmark')
    iElem.width = '80px';
    iElem.height = '80px';
    iElem.target = fileId
    iElem.addEventListener('click', deleteImage);
    const url = URL.createObjectURL(file);
    imagesPreview.insertAdjacentElement('beforeend', div)
    div.insertAdjacentElement('beforeend', divMouseOver);
    divMouseOver.insertAdjacentElement('beforeend', iElem)
    div.style.background = `url("${url}") no-repeat `
    div.style.backgroundSize = 'cover'
  }
  dropzone_input.files = dataTransfer.files;
  console.log(fileObject)
})

function makeid(length) {
  let result           = '';
  let characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let charactersLength = characters.length;
  for ( let i = 0; i < length; i++ ) {
    result += characters.charAt(Math.floor(Math.random() * 
    charactersLength));
  }
 return result;
}

function deleteImage(e) {
  const parent = e.target.parentElement.parentElement;
  parent.remove();
  delete fileObject[e.target.target]
  const keys = Object.keys(fileObject);
  const dataTransfer = new DataTransfer();
  keys.forEach(key => {
    dataTransfer.items.add(fileObject[key])
  })
  dropzoneInput.files = dataTransfer.files;
}

function deleteRow(e) {

  if(e.target.parentElement.tagName != 'DIV') {
    e.target.parentElement.parentElement.remove();
  }
}

function clearPreviewedImages() {
  document.querySelectorAll('.imagePreviewed').forEach(image => {
    image.remove();
  })
  const keys = Object.keys(fileObject);
  dropzoneInput.files = new DataTransfer().files;
  keys.forEach(key => {
    delete fileObject[key];
  })
  console.log(dropzoneInput)
  console.log(fileObject)
}

document.querySelector('#addModalClose1Button').addEventListener('click', () => {
  clearPreviewedImages();
})

document.querySelector('#addModalClose2Button').addEventListener('click', () => {
  clearPreviewedImages();
})

document.querySelectorAll('.btn-close').forEach(element => {
  element.classList.add('btn-close-white')
})


/* Query para adicionar dados nos campo responsivos*/
document.querySelectorAll('.fa-ellipsis').forEach(element => {
  
  element.addEventListener('click', () => {
    const data = element.parentElement.parentElement.querySelectorAll('td');
      document.querySelector('#editingNameInput').value = data[0].textContent;
      document.querySelector('#editingPriceInput').value = data[1].textContent;
      document.querySelector('#editingDescriptionTextArea').value = data[2].innerText;
      document.querySelector('#viewName').value = data[0].textContent;
      document.querySelector('#viewPrice').value = data[1].textContent;
      document.querySelector('#viewDescription').value = data[2].innerText;

      
      document.getElementById('ActionsModal').click();
    
  })
})


