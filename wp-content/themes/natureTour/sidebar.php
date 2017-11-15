<!--       sidebar with list of holidays and signup form-->
<aside>
    <ul>
        <li>SPECIES</li>
        <li>Birds</li>
        <li>Mammals</li>
        <li>Butterflies</li>
        <li>Dragonflies</li>
        <li>Wild Flowers</li>
    </ul>

    <h3>NEWSLETTER SIGNUP</h3>
    <p>New tours, special offers, extra departures and latest news</p>
    <form>
        <input type="text" placeholder="Enter Email ...">
        <input type="text" placeholder="Enter Name ...">
        <input type="submit" value="SIGN UP">
    </form>

    <div class="archives">
        <h3>POST ARCHIVES</h3>
        <ul>
            <?php 
//        display post archives link by month
            wp_get_archives('type=monthly'); ?>
        </ul>
    </div>

    <div class="widget">
        <?php 
//        widget to display posts link by category
        dynamic_sidebar( 'home_right_1' ); ?>
    </div>

</aside>
