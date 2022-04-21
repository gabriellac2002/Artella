const memory = navigator.deviceMemory

if(memory <= 2) {
  document.querySelector('.animationComponent').autoplay = false;
  document.querySelector('.animationComponent').paused = true;
}

const password = document.querySelector('#password');
const message = document.querySelector('.message');

password.addEventListener('keyup', function (e) {
  if (e.getModifierState('CapsLock')) {
      message.textContent = 'Caps lock ativado';
  } else {
      message.textContent = '';
  }
});