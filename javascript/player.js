   let PlayManager = {

       overallManager: function(songpath, currentImage, description) {
           this.songPlayer(songpath);
           this.playingManager();
           this.setBackground(currentImage, description);
       },

       songPlayer: function(songpath) {

           let pauseImage = document.querySelector("#pause");
           let audio = null;

           audio = new Audio(songpath);
           audio.play();


           //    let isPlaying = false;
           //    if (isPlaying) {
           //        audio.pause();
           //    } else {
           //        audio.play();
           //    }
           pauseImage.addEventListener('click', () => {
               let isPlaying = true;
               if (isPlaying) {
                   audio.pause();
               } else {
                   audio.play();
               }
               //    this.songPlayer(songpath);
           });
       },
       setBackground: function(currentImage, description) {
           let getBoxContent = document.querySelector("#box-content");

           let getPlayingBackground = document.querySelector(".playing-image");
           let getPlayingDescription = document.querySelector(".playing-description");
           getPlayingDescription.textContent = description;
           //    getPlayingDescription.textContent = getBoxContent.textContent; // using the boxContent to change the feature
           //    using template literals concatenations to set the background image
           getPlayingBackground.style.cssText = `background-image: url(${currentImage});`;
       },
       playingManager: function() {
           // the section is incharge of managing the current playing song and setting the lyrics display on the screen
       }
   }