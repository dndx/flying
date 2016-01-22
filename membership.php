<?php
    $CSS_FILE = "membership";
    $TITLE = "Membership";
    require('header.php');
?>
            <div id="joining" class="parallax" data-stellar-background-ratio="0.5">
                <h1 class="first">Joining the Flying Cyclones</h1>
                <div class="text">
                    <p>Joining the club is simple! Please follow the simple steps below to establish your membership.</p>
                    <p>
                        <ol>
                            <li>Request to join the club by clicking on this link, login with your Net-ID as necessary: 
                                <a href="https://www.stuorg.iastate.edu/site/flying/join" target="_blank">https://www.stuorg.iastate.edu/site/flying/join</a>
                            </li>
                            <li>
                                Your request will be approved by a club officer. You will usually receive your approval notice within a few hours.
                            </li>
                            <li>
                                Subscribe to the club mailing using the form below to receive notifications about club events.
                            </li>
                        </ol>
                    </p>
                    <form id="sub" action="https://mailman.iastate.edu/mailman/subscribe/flyclub" method="post">
                        <input style="width: 20em;" type="text" placeholder="Your Net-ID or Full E-Mail Address" name="email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
                <h1>Member Benefits</h1>
                <div class="text">
                    <ul>
                        <li>Discounted Ground school - Helps you get your license or just learn about flying in-depth.</li>
                        <li>Plane rental discount at Hap’s Air Service in Ames Municipal Airport.</li>
                        <li>Free local flights with club pilots once you’ve paid your dues – check Cyfly for availability.</li>
                        <li>Trips around the Midwest to museums, factories, air shows, and more.</li>
                        <li>Access to <a href="/member_resources.php">member resources</a> including a FAA-certified flight simulator.</li>
                    </ul>
                </div>
            </div>
            <div id="participating" class="parallax" data-stellar-background-ratio="0.5">
                <h1>Participating in Club Activities</h1>
                <div class="text">
                    <p>Joining the club is simple! Please follow the simple steps below to establish your membership.</p>
                    <p>
                        <ol>
                            <li>Pay club dues for the school year ($30) to Treasurer Broderick May or to a club pilot before a flight.</li>
                            <li>Fill the mandatory participation waiver. <a href="#waiver_information">Here are detailed steps on how to do it</a>.</li>
                        </ol>
                    </p>
                </div>
                <h1>Joining a Flight</h1>
                <div class="text">
                    <p>Pay attention to the club mailing list! Pilots always announce their upcoming flights using the mailing list.</p>
                    <p>
                        <ol>
                            <li>After you have joined the club, go to <a target="_blank" href="https://www.cyfly.org">Cyfly</a> and login.</li>
                            <li>If Cyfly indicates any issue about your account, please resolve them with the instruction provided.</li>
                            <div class="half">
                                <h2>If you have paid dues</h2>
                                <li>Join a flight directly on Cyfly.</li>
                            </div>
                            <div class="half">
                                <h2>If you have not paid dues</h2>
                                <li>Email the pilot requesting to join a flight and pay the pilot your dues before the flight.<sup>*</sup></li>
                                <p>* Subject to availability.</p>
                            </div>
                            <div class="clearfix"></div>
                        </ol>
                    </p>
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
