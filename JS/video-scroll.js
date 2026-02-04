// Video scroll control
let scrollTimeout;
const bgVideo = document.getElementById('background');

// Add initial pause
document.addEventListener('DOMContentLoaded', function() {
    bgVideo.pause();
});

window.addEventListener('scroll', function() {
    // Start video when scrolling starts
    bgVideo.play();
    
    // Clear the previous timeout
    clearTimeout(scrollTimeout);
    
    // Set new timeout to pause video after scrolling stops
    scrollTimeout = setTimeout(function() {
        bgVideo.pause();
    }, 0); // Adjust this value to change how long after scrolling stops before the video pauses
});
