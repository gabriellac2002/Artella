const memory = navigator.deviceMemory

if(memory <= 2) {
  document.querySelector('.animationComponent').autoplay = false;
  document.querySelector('.animationComponent').paused = true;
}

const faEye = document.querySelector('.fa-eye')

let passwordVisible = false;

faEye.addEventListener('click', () => {
  if(passwordVisible) {
    faEye.style.color = 'grey';
    document.getElementById('password').type = "password";
  }
  else {
    faEye.style.color = 'black';
    document.getElementById('password').type = "text";
  }
  passwordVisible = !passwordVisible
})