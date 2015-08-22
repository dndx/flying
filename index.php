<?php
    $CSS_FILE = "home";
    $TITLE = "Home";
    require('header.php');
?>
            <div id="hero">
                <div id="youtube">
                    <iframe id="hero_video" frameborder="0" height="100%" width="100%" 
                            src="https://www.youtube.com/embed/WgYCy1cl_Xo?start=15&amp;controls=0&amp;showinfo=0&amp;autohide=1&amp;loop=1&amp;enablejsapi=1&amp;origin=http://192.168.199.171&amp;wmode=transparent">
                    </iframe>
                    <button id="mute">Mute</button>
                </div>
                <div class="text">
                    <h1>A Flying Adventure</h1>
                    <h2>Iowa State Flying Cyclones</h2>
                    <a target="_blank" class="join" href="https://www.stuorg.iastate.edu/site/flying/join"><button>Join Us Today</button></a>
                    <div class="fb-like" data-href="https://www.facebook.com/FlyingCyclones" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="who_we_are" class="parallax" data-stellar-background-ratio="0.5">
                <h1>Who We Are</h1>
                <div class="text">
                    The Iowa State University Flying Cyclones is a student-run organization open to any member of the ISU community with an interest in aviation. You don't need to have any experience to join. In fact, we encourage non-pilots to join! It's a great opportunity to learn more about aviation!
                    <br><br>
                    The club has meetings about once every two weeks during the fall and spring semesters. We typically discuss upcoming trip plans, talk about the latest flying news, and share stories of what recent flying activities our members have been involved with. We also try to schedule speakers to discuss flying related topics.
                    <br><br>
                    In addition to our club meetings, we have many activities scheduled throughout the year. These have included recreational flights, classes for aspiring pilots, participation in intercollegiate air meets, and trips to various locations around the midwest. If you're interested in learning more, please join us at our next meeting or <a href="/#contact_us">email us</a>.
                </div>
            </div>
            <div id="learn_to_fly" class="parallax" data-stellar-background-ratio="0.5">
                <h1>Learn to Fly</h1>
                <div class="text">
                    If you are interested in obtaining a pilot's licence or getting a higher rating, you can contact the local FBO for more information. You can also stop by a club meeting and one of our club members will be happy to explain the process of becoming a pilot and answer any questions you have. Our club runs a ground school for people interested in becoming pilots, typically in the Fall semester.
                </div>
            </div>
            <div id="contact_us" class="parallax" data-stellar-background-ratio="0.5">
                <h1>Contact Us</h1>
                <div class="text">
                    <h3>Club Mailing Lists</h3>
                    <table>
                        <tr>
                            <td>General Questions</td>
                            <td><a href="mailto:flying@iastate.edu">flying@iastate.edu</a></td>
                        </tr>
                        <tr>
                            <td>Executives</td>
                            <td><a href="mailto:flyclubexec@iastate.edu">flyclubexec@iastate.edu</a></td>
                        </tr>
                        <tr>
                            <td>Rental and Events Authorization</td>
                            <td><a href="mailto:flyclubrental@iastate.edu">flyclubrental@iastate.edu</a></td>
                        </tr>
                        <tr>
                            <td>Pilots</td>
                            <td><a href="mailto:pilots@iastate.edu">pilots@iastate.edu</a></td>
                        </tr>
                    </table>
                    <h3><a href="https://www.stuorg.iastate.edu/site/flying/officers" target="_blank">Current Officer List</a></h3>
                </div>
            </div>
    <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
          player = new YT.Player('hero_video', {
            videoId: 'WgYCy1cl_Xo',
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
        }

        function onPlayerReady(event) {
          event.target.playVideo();
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.ENDED) {
                event.target.seekTo(30);
            }
        }
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php require('footer.php'); ?>
