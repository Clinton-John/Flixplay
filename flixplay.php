<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_model.inc.php";
require_once "includes/signup_view.inc.php";

require_once "includes/login_view.inc.php";
require_once "includes/extras_view.inc.php";
require_once "includes/playlist_view.inc.php";



?>


    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flixplay</title>
        <link rel="shortcut icon" href="spotifyimages/playlogo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/desktopStyle.css">
        <link rel="stylesheet" href="css/user_section.css">
        <link rel="stylesheet" href="css/account_profile.css">
        <link rel="stylesheet" href="css/flixplay.css">
        <link rel="stylesheet" href="css/hovertext.css">
        <link rel="stylesheet" href="css/phpfiles_styles.css">

                           <!-- the javascript file loading using the defer -->
        <script defer src="javascript/main.js"></script>
        <script defer src="javascript/player.js"></script>
        <script defer src="javascript/playlists.js"></script>
        <script defer src="javascript/dynamicLoading.js"></script>
        <script defer src="javascript/ajaxloading.js"></script>
        <script defer src="javascript/show.js"></script>
    </head>

    <body>
        <div class="spotify-body">
            <div class="start-body">
                <div class="left-body">
                    <div class="left-body1">
                        <a href="#"><img src="spotifyimages/home.png">Home</a>
                        <a href="#" onclick="searchLoading()" ><img src="spotifyimages/searchicon.png" onclick="searchLoading()" id="leftSearch"  >Search</a>
                    </div>
                    <div class="left-body2">
                        <nav class="left-body2-nav">
                            <div>
                                <a href="#"><img src="spotifyimages/libraryicon.png" onclick="change_library_width()" alt="your library flixplay"> Your Library</a>
                            </div>
                            <div class="user-image-container">
                                <img src="spotifyimages/addPlaylist.png" alt="" >
                                <ul class="user-options">
                                        <li><a href="#"  id="showFormBtn">Add Playlist</a></li>
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
                              
                        <div >
                          <a href="signup.php" id="testmeout">TEST me OUT</a> 
                             <div id="signup-content"></div>

                    </div>

                        <div id="playlistFormContainer" style="display: none;">
                             
                        <form id="playlistForm"  action="includes/playlist.inc.php" method="post">
                              <label for="playlistName" style="color:white;" >Enter Playlist Name:</label>
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
                <!-- the footer section of the phone version -->
                <div class="phone-footer">
                    <nav class="nav-down">
                        <a href="flixplay.html"><img src="spotifyimages/home.png">Home</a>
                        <a href="#"><img src="spotifyimages/searchicon.png">Search</a>
                        <a href="library.html"><img src="spotifyimages/libraryicon.png">Your Library</a>
                        <a href="#" onclick="spotifyPremium()"><img src="spotifyimages/playlogo.png">Premium</a>

                    </nav>

                   
                </div>
                <div class="right-body">
                    <div class="content-right-body">
                        <nav class="nav-top">
                            <div class="welcome"></div>
                            <div class="nav-container">
                                <!-- <a href="signup.php" id="login_button">Login/Signup</a> -->
                                <a href="signup.php" id="login_button">

                                    <?php login_display() ?>
                                </a>
                                <a href="#"> <img src="spotifyimages/notificationicon.png" alt=""></a>
                                <div class="user-image-container">
                                    <img src="spotifyimages/whiteprofile.png" alt="Hover Image">
                                    <ul class="user-options">
                                        <li onclick="profileLoading()"><a href="#" >Profile</a></li>
                                        <li><a href="#" >Settings</a></li>
                                        <li><a href="#" onclick="">Upgrade to Premium</a></li>
                                        <li><a href="#" onclick="">Account</a></li>
                                        <li>
                                            <a href="#" onclick="">
                                                <form action="includes/logout.inc.php" method="post">

                                                    <?php 
                                logout_display();
                                ?>
                                                </form>

                                            </a>
                                        </li>

                                        <!-- <li><a href="#" onclick="">Log out</a></li> -->
                                    </ul>
                                </div>
                                <!-- <div>
                            <a href="#"> <img src="spotifyimages/whiteprofile.png" alt="" onclick="toggleNav()"></a>

                        </div> -->
                            </div>
                        </nav>
                        <div class="recent-section">
                            <div class="recent-container" id="recent-contaner1" >
                                <a href="#"><img src="spotifyimages/first20.jpg" onclick="PlayManager.overallManager('flixplaysongs/Lil_Darkside.mp3', 'spotifyimages/first20.jpg', 'Darknet Diaries' )" alt="">
                                    <p>Darknet Diaries</p>
                            </div>
                            <div class="recent-container">
                                <a href="#"><img src="spotifyimages/first12.jpg" onclick="PlayManager.overallManager('flixplaysongs/Lil_Darkside.mp3', 'spotifyimages/first12.jpg','48 Hours')">
                                    <p>48 Hours</p>
                            </div>
                            <div class="recent-container">
                                <a href="#"><img src="spotifyimages/first13.jpg" alt="" onclick="PlayManager.overallManager('flixplaysongs/Lil_Darkside.mp3', 'spotifyimages/first20.jpg', 'Afrikan Sauce' )">
                                    <p>Afrikan Sauce</p>
                            </div>
                            <div class="recent-container">
                                <a href="#"><img src="spotifyimages/first12.jpg" alt="">
                                    <p>Daily mix 5</p>
                            </div>
                            <div class="recent-container">
                                <a href="#"><img src="spotifyimages/first13.jpg" alt="">
                                    <p>Liked Songs</p>
                            </div>
                            <div class="recent-container">
                                <a href="#"><img src="spotifyimages/first20.jpg" alt="">
                                    <p>Sam Fischer</p>
                            </div>
                        </div>
                        <nav class="intro-page">
                            <div>Your shows</div>
                            <div id="show-all">Show all</div>
                        </nav>
                        <div class="image-container">
                            <div class="container">
                                <div class="avatar-image"></div>
                                <div class="avatar-about-image">
                                    <a href="#">Darknet Diaries</a>
                                    <p>Jack Rhysider</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="avatar-image"></div>
                                <div class="avatar-about-image">
                                    <a href="#">48 Hours</a>
                                    <p>CBS</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image"></div>
                                <div class="avatar-about-image"><a href="#">Hacker mind</a>
                                    <p>Robert Vamosi</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image"></div>
                                <div class="avatar-about-image"><a href="#">Compiler </a>
                                    <p>Redhat</p>
                                </div>

                            </div>

                        </div>
                        <div class="picked-for-you">
                            <nav class="intro-page">
                                <div>Picked For You</div>
                                <div id="show-all">Show all</div>
                            </nav>
                            <div class="image-container">
                                <div class="container">
                                    <div class="avatar-image"></div>
                                    <div class="avatar-about-image">
                                        <a href="#">Darknet Diaries</a>
                                        <p>Jack Rhysider</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <nav class="intro-page">
                            <div>Recently played</div>
                            <div id="show-all">Show all</div>
                        </nav>
                        <div class="image-container">
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image">
                                    <a href="#">Darknet Diaries</a>
                                    <p>Jack Rhysider</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="avatar-image"></div>
                                <div class="avatar-about-image">
                                    <a href="#">48 Hours</a>
                                    <p>CBS</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Daily mix 5</a>
                                    <p></p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                        </div>
                        <nav class="intro-page">
                            <div>Daily mix</div>
                            <div id="show-all">Show all</div>
                        </nav>
                        <div class="image-container">
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image">
                                    <a href="#">Darknet Diaries</a>
                                    <p>Jack Rhysider</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="avatar-image"></div>
                                <div class="avatar-about-image">
                                    <a href="#">48 Hours</a>
                                    <p>CBS</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Daily mix 5</a>
                                    <p></p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image1"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                        </div>
                        <nav class="intro-page">
                            <div>Your favorite Artists</div>
                            <div id="show-all">Show all</div>
                        </nav>
                        <div class="image-container">
                            <div class="container">
                                <div class="avatar-image" id="image2"></div>
                                <div class="avatar-about-image">
                                    <a href="#">Darknet Diaries</a>
                                    <p>Jack Rhysider</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image2"></div>
                                <div class="avatar-about-image">
                                    <a href="#">48 Hours</a>
                                    <p>CBS</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image2"></div>
                                <div class="avatar-about-image"><a href="#">Daily mix 5</a>
                                    <p></p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image2"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image2"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image2"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                            <div class="container">
                                <div class="avatar-image" id="image2"></div>
                                <div class="avatar-about-image"><a href="#">Serial Killers</a>
                                    <p>Flixplay studios</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="footer">
                            <div class="footer1">
                                <ul>
                                    <li><span>Company</span></li>
                                    <li><a href="#">About </a></li>
                                    <li>
                                        <a href="">Jobs</a>
                                    </li>


                                    <li>
                                        <a href="">For the record</a></li>
                                    <li>
                                        <a href="">Support</a></li>
                                </ul>
                            </div>
                            <div class="footer2">
                                <ul>
                                    <li><span>Communities</span></li>
                                    <li><a href="#">For Artists </a></li>
                                    <li>
                                        <a href="#">Developers</a></li>
                                    <li>
                                        <a href="#">Advertising</a></li>
                                    <li>
                                        <a href="#">Investors</a></li>
                                    <li>
                                        <a href="#">Vendors</a></li>
                                    <li>
                                        <a href="#">Spotify for works</a></li>
                                </ul>
                            </div>
                            <div class="footer3">
                                <div class="media" id="instagram"></div>
                                <div class="media" id="twitter"></div>
                                <div class="media" id="facebook"></div>

                            </div>
                        </div>
                        <div class="line"></div>
                        <nav class="footer-nav">
                            <div class="footer-nav1">
                                <a href="#">Privacy Policy</a>
                                <a href="#">Cookies</a>
                                <a href="#">Accessibility</a>
                                <a href="#">About ads</a>
                            </div>
                            <div class="footer-nav2">
                                <div class="copyright"></div>
                                <p>2023 Flixplay</p>
                            </div>
                        </nav>
                    </footer>

                </div>
                <div class="last-section">
                    <div class="starting-part">
                        <nav class="top-last-section">
                            <div id="back-image"></div>
                            <!-- <img src="spotifyimages/backarrow" id="back-arrow" alt="back"> -->
                        </nav>
                        <form action="#" id="playlist-search">
                            <input type="text" name="search-liked" placeholder="Find in liked songs" id="search-liked">
                            <button type="submit" id="search-button">Search</button>
                        </form>
                        <div class="playlist-description"> Liked Songs</div>
                        <nav class="playlist-nav-bar">
                            <div class="sort-playlist"><img src="spotifyimages/download.png" alt="" id="download-playlist"></div>
                            <div class="play-shuffle">
                                <img src="spotifyimages/shuffle.png" alt="">
                                <img src="spotifyimages/play-button-arrowhead.png" alt="">
                            </div>
                        </nav>
                    </div>
                    <div class="songs-part">
                        <div class="song-container">
                            <div class="song-image"></div>
                            <div class="song-description">
                                <p id="song-name"></p>
                                <p id="artist-name"></p>
                            </div>
                            <div class="song-like-options">
                                <img src="spotifyimages/likebutton.png" alt="click ">
                                <img src="spotifyimages/options.png" alt=" options ">
                            </div>
                        </div>

                        <div class="song-container">
                            <div class="song-image"></div>
                            <div class="song-description">
                                <p id="song-name"></p>
                                <p id="artist-name"></p>
                            </div>
                            <div class="song-like-options">
                                <img src="spotifyimages/likebutton.png" alt="click ">
                                <img src="spotifyimages/options.png" alt=" options ">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- the following section shows the currently playing song and the options that it presents -->
            <div class="desktop-footer">
                <div class="desktop-footer1">
                    <div class="playing-image"></div>
                    <div class="playing-description"> </div>
                </div>
                <div class="desktop-footer2">
                    <div class="controllers">
                        <a href="#"><img src="spotifyimages/shuffle.png" alt="shuffle"></a>
                        <a href="#"><img src="spotifyimages/previous.png" alt="previous"></a>
                        <a href="#"><img src="spotifyimages/pause.png" alt="pause/play" id="pause" onclick="pauseManage()"></a>
                        <a href="#"><img src="spotifyimages/next-button.png" alt="next"></a>
                        <a href="#"><img src="spotifyimages/loop.png" alt="repeat"></a>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-container"></div>
                    </div>

                </div>
                <div class="desktop-footer3">
                    <a href="#"><img src="spotifyimages/paper.png" alt="queue"></a>
                    <a href="#"><img src="spotifyimages/devices.png" alt="connect to a device"></a>
                    <a href="#"><img src="spotifyimages/volume.png" alt="mute"></a>
                </div>
            </div>
        </div>

        <!-- the following section shows the sections not included in the html body but when toggled -->
        <div class="dynamic-profile">
            <div class="dynamic-section1">
                <nav class=" dynamic-nav-top">
                    <div class="dynamic1">
                        <div class="dynamic-back-image" onclick="returnRightBody()"></div>
                        <div class="dynamic-next-image"></div>
                    </div>
                    <div class="dynamic2">
                        <div class="dynamic-explore-premium">Explore Premium</div>
                        <div class="dynamic-profile-image"></div>
                    </div>
                </nav>
                <div class="sect2-dynamic-section1">
                    <div class="users-image-avatar">
                    </div>
                    <div class="dynamic-user-descripton">
                        <a href="#">profile</a>
                        <p id="dynamic-username">
                            <?php 
                                display_users_username();
                               ?>
                        </p>
                        <p> <?php  playlist_display_numbers() ?> </p>
                    </div>
                </div>
            </div>
        </div>

        <div class= "search-page">
  <h1> hello this is the search section that we are about to exeprience in a few moment</h1>
        </div>


        </div>

    </body>



    </html>