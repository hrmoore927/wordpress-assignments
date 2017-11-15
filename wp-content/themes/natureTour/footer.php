<!--    footer section-->
<footer>
    <!--       header of footer section-->
            <div class="bar">
                <p>Naturetour has 25 years experience in operating wildlife holidays.  Contact Us for friendly traval advice</p>
            </div>

    <!--        flex container including twitter, facebook, links, and contact info-->
            <div class="container">
                <div class="flex">
                    <h4>FOLLOW US ON TWITTER</h4>
                    <a href=""><img class="twitter" src="<?php echo get_bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter icon"></a>
                    <p> * 4 days ago The new website is now live. We hope you enjoy it and any feedback is welcome.</p>
                    <a href=""><img src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook"></a>
                </div>

                <div class="flex">
<!--            second flex box will have flex within that-->
                    <h4>QUICK LINKS</h4>
                    <div class="links">
                        <ul>
                            <li><a href="">Holidays by destination</a></li>
                            <li><a href="">Holidays by species</a></li>
                            <li><a href="">Holidays by tour type</a></li>
                            <li><a href="">Late availability</a></li>
                            <li><a href="">Tour leader</a></li>
                        </ul>

                        <ul>
                            <li><a href="">How to book</a></li>
                            <li><a href="">FAQs</a></li>
                            <li><a href="">Visit Us</a></li>
                            <li><a href="">Terms &amp; conditions</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>

                        <ul>
                            <li><a href="">Latest news</a></li>
                            <li><a href="">Request a brochure</a></li>
                            <li><a href="">Subscribe to newsletter</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="flex">
                    <h4>CONTACT US</h4>
                    <p><span class="bold">Tel:</span>12345 67890</p>
                    <p><span class="bold">Email:</span><a href="mailto:info@naturetour.com">info@naturetour.com</a></p>
                    <p>NatureTour, Your City,<br>
                    Your State, 123 456 7890</p>
                </div>
            </div>

    <!--        copyright section-->
            <div class="bottom">
                <p class="bold">&copy; Naturetour 2010.</p>
                <p>No portion of this website may be reproduced without the prior written consent of Naturetour. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>

<?php wp_footer(); ?>
