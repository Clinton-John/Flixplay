   let PlayManager = {

       overallManager: function(songpath, currentImage) {
           this.songPlayer(songpath);
           this.playingManager();
           this.setBackground(currentImage);
       },

       songPlayer: function(songpath) {

       },
       setBackground: function(currentImage) {
           let getBoxContent = document.querySelector("#box-content");

           let getPlayingBackground = document.querySelector(".playing-image");
           let getPlayingDescription = document.querySelector(".playing-description");
           getPlayingDescription.textContent = getBoxContent.textContent; // using the boxContent to change the feature
           //    using template literals concatenations to set the background image
           getPlayingBackground.style.cssText = `background-image: url(${currentImage});`;
       },
       playingManager: function() {
           // the section is incharge of managing the current playing song and setting the lyrics display on the screen
       }
   }