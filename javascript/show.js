document.addEventListener("DOMContentLoaded", function() {
    const showFormBtn = document.getElementById("showFormBtn");
    const playlistFormContainer = document.getElementById("playlistFormContainer");
    const playlistForm = document.getElementById("playlistForm");
    const playlistResult = document.getElementById("playlistResult");

    showFormBtn.addEventListener("click", function() {
        playlistFormContainer.style.display = "block";
        showFormBtn.style.display = "none";
    });

    /*
    playlistForm.addEventListener("submit", function(e) {
        e.preventDefault();
        const playlistName = document.getElementById("playlistName").value;
        playlistResult.innerHTML = `Playlist Name: ${playlistName}`;
        playlistFormContainer.style.display = "none";
        showFormBtn.style.display = "block";
        // You can send the playlist name to your server here for further processing.
    });
    */
});