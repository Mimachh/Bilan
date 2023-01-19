import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import 'tw-elements';

import.meta.glob([
  '../public/storage/**',
])

const button = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');


button.addEventListener('click', () => {
  menu.classList.toggle('hidden');
});


// function play() {
//   var audio = document.getElementById('audio');
//   if (audio.paused) {
//       audio.play();
//       $('#play').removeClass('glyphicon-play-circle')
//       $('#play').addClass('glyphicon-pause')
//   }else{
//       audio.pause();
//       audio.currentTime = 0
//       $('#play').addClass('glyphicon-play-circle')
//       $('#play').removeClass('glyphicon-pause')
//   }
// }



const audio = new Audio("storage/music.wav");
const buttonStart = document.getElementById("buttonStart");
buttonStart.addEventListener("click", function classClicked(event) {
  if (audio.paused) {
    audio.play()
    // event.target.classList.add('animate-spin');
    
  }else{
    audio.pause();
    audio.currenTime = 0
    // if(event.target.classList.contains('animate-spin')){
    //   event.target.classList.remove('animate-spin');
    // }
  }
  });

 
 