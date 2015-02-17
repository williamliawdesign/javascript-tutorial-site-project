<?php $pageTitle='Home' ; $pageClass='nav_home' ; include( './templates/header.php'); ?>
<h1>JavaScript Tutorial</h1>
<div class="content">
    <section class="toturial">
        <h2>Example 1</h2>
        <div class="errors"></div>
        <form action="form_thank_you.html" method="post" class="form" novalidate>
            <label for="passconf" class="form_label">Confirm Password:</label>
            <br />
            <input name="passconf" id="passconf" type="password">
            <br />
            <input type="submit" value="Submit">
        </form>
        <div class="hint">
        </div>
    </section>

    <section class="toturial-2">
        <h2>Example 2</h2>
        <canvas width="310" height="350" id="myCanvas"></canvas>
        <p>Draw on this board!</p>
    </section>

    <section class="toturial">
        <h2>Example 3</h2>
        <div id="phone" class="interactive_3d">
            <img src="images/example-3/frame_1.png" alt="iphone">
        </div>

    </section>
</div>


<div class="clearfix"></div>
<?php include( './templates/footer.php'); ?>