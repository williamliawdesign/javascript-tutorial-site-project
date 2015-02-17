<?php $pageTitle='Tutorial 2' ; $pageClass='nav_tutorial_2' ; include( './templates/header.php'); ?>
<h1>Tutorial 2</h1>
<div class="content">
    <section class="tutorial_2">
        <canvas width="660" height="350" id="myCanvas"></canvas>
    </section>
    <section class="tutorial_3">
        <h2>Drawing board with random drawing color line</h2>

        <p>In this tutorial we will be creating a drawing board with random drawing color line when drawing a line.</p>
        <p>Frist, include both the <code class="language-markup">paper.js</code> and <code class="language-markup">jQuery library</code> and load the <code class="language-markup">external file</code> before the closing body tag.</p>
        <div class="code">
            <pre><code class="language-markup"> &lt;script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"&gt;&lt;/script&gt;</code>
<code class="language-markup"> &lt;script src="paper-full.min.js"&gt;&lt;/script&gt;</code>        
<code class="language-markup"> &lt;script src="yourFile.js"&gt;&lt;/script&gt;</code></pre>
        </div>
        <p>Now include the drawing board inside your <code class="language-markup">&lt;body&gt;</code>tag with the given ID.</p>
        <pre><code class="language-markup"> &lt;canvas id="myCanvas"&gt;&lt;/canvas&gt;</code></pre>

        <p>We'll start by making a simple mouse tool that creates a new path when you click in the drawing board and then adds points to it. </p>

        <pre><code class="language-javascript">  paper.install(window);
  // Keep global references to both tools, so the HTML links below can access them.
  var tool1;
  var myCanvas = $('#myCanvas');
  window.onload = function() {
    paper.setup('myCanvas');
    var path;
    function onMouseDown(event) {
        // Create a new path and give it a stroke color:
	       
        path = new Path();           
        path.strokeColor = 'black';
        // Add a point to the path where you clicked:
           
        path.add(event.point);
    }</code></pre>

        <p>When you press the mouse button it creates a new path and it changes the <code class="language-markup">path.strokeColor</code> of the path. Now we will create another function that add points to the path at the position of the mouse when you move and drag the mouse.</p>

        <pre><code class="language-javascript">    tool1 = new Tool();
    tool1.onMouseDown = onMouseDown;
    tool1.onMouseDrag = function(event) {
        path.add(event.point);
    }</code></pre>

        <p>Now add the random color when mouse is clicked by replacing <code class="language-markup">path.strokeColor = 'black';</code> to the following code</p>

        <pre><code class="language-javascript">    function onMouseDown(event) {
        // Create a new path and give it a random stroke color:
        path = new Path();           
        path.strokeColor = { hue: Math.random() * 360, saturation: 1, brightness: 1};
        // Add a point to the path where you clicked:
           
        path.add(event.point);
    }</code></pre>

        <p>Now you try this drawing board yourself! <a href="tutorial_3.php"> Let's go to tutorial 3!</a>
        </p>

    </section>
</div>
<div class="clearfix"></div>
<?php include( './templates/footer.php'); ?>