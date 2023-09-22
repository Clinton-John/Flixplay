document.addEventListener('DOMContentLoaded', function() {
    const hoverImage = document.querySelector('.hover-image');

    hoverImage.addEventListener('click', function() {
        // Replace with your desired function to be executed when image is clicked
        alert('Function to create a new playlist will be executed.');
    });
});

// the setion is incharge of creating the new playlist on the javascript section

function addPlaylist() {
    const testColor = document.querySelector("#testingsection");
    testColor.style.color = "red";
}