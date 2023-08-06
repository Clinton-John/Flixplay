let LibraryManager = {

    overallManager: function() {
        this.displaySongs();
        this.toggleLastSection();
    },
    toggleLastSection: function() {
        let getSongNumber = document.querySelector("#song-number");
        let getPlayingIcon = document.querySelector(".playing-icon");

        let getPlaylistName = document.querySelector(".playlist-name");
        let getLastSection = document.querySelector(".last-section");
        let getRightBody = document.querySelector(".right-body");

        getPlaylistName.style.color = "green";
        getLastSection.style.width = "25%";
        getLastSection.style.visibility = "visible";
        getLastSection.style.marginLeft = "10px";
        getRightBody.style.width = "50%";
        getPlayingIcon.style.visibility = "visible";


    },
    displaySongs: function() {

    }
}