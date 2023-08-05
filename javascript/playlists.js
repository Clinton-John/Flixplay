let LibraryManager = {

    overallManager: function() {
        this.displaySongs();
        this.toggleLastSection();
    },
    toggleLastSection: function() {
        let getPlaylistName = document.querySelector(".playlist-name");
        let getLastSection = document.querySelector(".last-section");
        let getRightBody = document.querySelector(".right-body");

        getLastSection.style.width = "20%";
        getRightBody.style.width = "50%";
        getPlaylistName.style.color = "red";

    },
    displaySongs: function() {

    }
}