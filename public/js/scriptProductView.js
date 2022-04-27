const pics = document.querySelectorAll('.selectPic a');
const picsButton = [ ... pics];
let picId = 1;

picsButton.forEach((itemPic) => {
    itemPic.addEventListener('click', (event) => {
    event.preventDefault();
    picId = itemPic.dataset.id;
    slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.showPic img:first-child').clientWidth;
    document.querySelector('.showPic').style.transform = `translateX(${- (picId - 1) * displayWidth}px)`;
}