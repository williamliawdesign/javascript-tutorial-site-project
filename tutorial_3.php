<?php $pageTitle='Tutorial 3' ; $pageClass='nav_tutorial_3' ; include( './templates/header.php'); ?>
<h1>Tutorial 3</h1>
<div class="content">
    <section class="tutorial_3">
        <div id="phone" class="interactive_3d_tutorial">
            <img src="images/example-3/frame_1.png" alt="iphone">
        </div>
    </section>
    <section class="tutorial_3">
        <h2>Interactive 3D object</h2>

        <p>In this tutorial we will be creating a 3D interactive object using images and one simple JavaScript plugin</p>
        <p>This plugin can support modern browsers such as Chrome, Firefox, and Safari on both desktop and smartphones. You can simply include the latest <code class="language-markup">jQuery library</code> together with <code class="language-markup">jquery.interactive_3d.js</code> into your <code class="language-markup">&lt;head&gt;</code> section. In your <code class="language-markup">&lt;body&gt;</code> section add the following markups</p>
        <div class="code">
            <pre>
            <code class="language-markup">&lt;body&gt;</code>
                ...
                <code class="language-markup">&lt;div id="phone"&gt;</code>
                    <code class="language-markup">&lt;img src="images/frame_1.png"&gt;</code>
                <code class="language-markup">&lt;/div&gt;</code>
                ...
            <code class="language-markup">&lt;/body&gt;</code>
        </pre>
        </div>
        <p>Now call the function inside your <code class="language-markup">&lt;script&gt;</code>section or your <code class="language-markup">javascript file</code>
        </p>
        <pre><code class="language-javascript">
            $(document).ready( function() {
                $("#phone").interactive_3d({
	               frames: 38 // The total number of images to be used as frames. The default value is 10 frames.
                   
	           });
	         });
    </code></pre>
        <p>Now you can try this amazing 3D interactive! <a href="contact.php"> Got feedback please contact me!</a>
        </p>


    </section>
</div>
<div class="clearfix"></div>
<?php include( './templates/footer.php'); ?>