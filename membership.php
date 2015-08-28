<?php
    $CSS_FILE = "membership";
    $TITLE = "Membership";
    require('header.php');
?>
            <div id="membership" class="parallax" data-stellar-background-ratio="0.5">
                <h1 class="first">Membership</h1>
                <div class="text">
                    If you'd like to join the club, go to the <a href="https://www.stuorg.iastate.edu/site/flying/join" target="_blank">Offical Student Organization Database</a>.
                    Login with your Net-ID as necessary.
                    <br>
                    <br>
                    You can also join by contact one of our officers or stop by a meeting. Membership is open to any member of the ISU community. Dues are $30 for all members and are good for the whole school year.<br><br>
                    Announcements about club meetings and activities are sent out through the club's mailing list. Subscribing to the mailing list is a great way to make sure you know what's going on with our club.
                    <form id="sub" action="https://mailman.iastate.edu/mailman/subscribe/flyclub" method="post">
                        <input style="width: 20em;" type="text" placeholder="Your Net-ID or Full E-Mail Address" name="email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div id="waiver_information" class="parallax" data-stellar-background-ratio="0.5">
                <h1>Waiver Information</h1>
                <div class="text">
                    Since our club is designated by the university as a sports club, all members must complete an online liability waiver and medical information form prior to participation in any club events.<br><br>
                    To fill out the waiver, go to the <a href="https://www.stuorg.iastate.edu" target="_blank">Official Student Organization Database</a>, click on "Profile". You will be asked to log in with your ISU Net-ID. There should be a list of the clubs you are part of. On the Flying Cyclones line, click on the link 'Still Needed' on the right and fill out the form. (If you don't see Flying Cyclones listed, you need to contact the club to get added to the member
                    list)<br>
                    <img alt="Waiver Screenshot" src="/images/waiver.png" width="100%">
                </div>
            </div>
<?php require('footer.php'); ?>
