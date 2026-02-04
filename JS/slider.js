
let games = document.querySelectorAll(".game1").length;
let game_size = document.getElementById("game1").clientWidth + 10;

let slider_container_width = document.body.clientWidth-200;

let slide_games = Math.floor(slider_container_width/(game_size));

document.getElementsByClassName("slider-container")[0].style.width = slide_games * game_size + "px";

let max_slides = Math.floor(games / slide_games);
let last_slide = games % slide_games;

let slide_index = 1;
let slide_position = 0;

let slide_width = game_size * slide_games;
let last_slide_width = game_size * last_slide;

let slide_transition = 1
let last_slide_transition = 1 / slide_games * last_slide;


document.getElementById("prevslide0").addEventListener("click", () => {
  if(slide_index>1 && max_slides >= slide_index) {
   slide_index--;
   slide_position += slide_width;
   document.getElementById("slider1").style.transition = "transform " + slide_transition + "s linear";
   document.getElementById("slider1").style.transform = "translateX(" + slide_position + "px)";
  }
  else if (max_slides < slide_index) {
   slide_index--;
   slide_position += last_slide_width;
   document.getElementById("slider1").style.transition = "transform " + last_slide_transition + "s linear";
   document.getElementById("slider1").style.transform = "translateX(" + slide_position + "px)";
   
  }
});

document.getElementById("nextslide1").addEventListener("click", () => {
  if(max_slides>slide_index) {
   slide_index++;
   slide_position -= slide_width;
   document.getElementById("slider1").style.transition = "transform " + slide_transition + "s linear";
   document.getElementById("slider1").style.transform = "translateX(" + slide_position + "px)";
  }
  else if (max_slides == slide_index) {
    slide_index++;
    slide_position -= last_slide_width;
    document.getElementById("slider1").style.transition = "transform " + last_slide_transition + "s linear";
    document.getElementById("slider1").style.transform = "translateX(" + slide_position + "px)";
  }
}
);
