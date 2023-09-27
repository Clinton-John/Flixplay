<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your library</title>
</head>

<body>
    <div class="left-body">
        <div class="left-body1">
            <a href="#"><img src="spotifyimages/home.png">Home</a>
            <a href="#" onclick="searchLoading()"><img src="spotifyimages/searchicon.png" onclick="searchLoading()" id="leftSearch">Search</a>
        </div>
        <div class="left-body2">
            <nav class="left-body2-nav">
                <div>
                    <a href="#"><img src="spotifyimages/libraryicon.png" onclick="change_library_width()" alt="your library flixplay"> Your Library</a>
                </div>
                <div class="user-image-container">
                    <img src="spotifyimages/addPlaylist.png" alt="">
                    <ul class="user-options">
                        <li><a href="#" id="showFormBtn">Add Playlist</a></li>
                        </li>

                    </ul>
                </div>

            </nav>
            <nav class="left-body2-nav2">
                <a href="#">Playlist</a>
                <a href="#">Artists</a>
                <a href="#">Podcast & Shows</a>
            </nav>
            <nav class="left-body2-nav3">
                <div class="search"><img src="spotifyimages/searchicon.png" alt="search"></div>
                <div class="recents">
                    <select id="recents-select">
                <option value="value1">Sort by</option>
                <option value="value2">Recents</option>
                <option value="value3">Alphabetic</option>
                <option value="value4">Recently Added</option>
                <option value="value5">Creators</option>
            </select>
                </div>
            </nav>
            <div class="playlist-recents">

                <div>
                    <a href="signup.php" id="testmeout">TEST me OUT</a>
                    <div id="signup-content"></div>

                </div>

                <div id="playlistFormContainer" style="display: none;">

                    <form id="playlistForm" action="includes/playlist.inc.php" method="post">
                        <label for="playlistName" style="color:white;">Enter Playlist Name:</label>
                        <input type="text" id="playlistNameInput" style="color:white;" name="playlistName" required>
                        <button type="submit" style="color:white;">Submit</button>
                    </form>
                </div>
                <div id="playlistResult"></div>

                <?php
                playlist_display();
                ?>

            </div>
        </div>

    </div>

    </div>
</body>

</html>