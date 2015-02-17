<?php $pageTitle='Contact' ; $pageClass='nav_tutorial_1' ; include( './templates/header.php'); ?>
<h1>Tutorial 1</h1>
<div class="content">
    <section class="tutorial_3">
        <div class="errors"></div>
        <form action="form_thank_you.html" method="post" class="form" novalidate>

            <label for="passconf" class="form_label">Confirm Password:</label>
            <br />
            <input name="passconf" id="passconf" type="password">
            <br />
            <input type="submit" value="Submit">
        </form>
        <div class="hint"></div>

        <h2>Form validation using JavaScript</h2>
        <p>In this tutorial we will be creating a simple password validation field using JavaScript.</p>
        <p>Frist, include both <code class="language-markup">jQuery library</code> and load the <code class="language-markup">external file</code> before the closing body tag.</p>
        <pre><code class="language-markup"> &lt;script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"&gt;&lt;/script&gt;</code>        
<code class="language-markup"> &lt;script src="yourFile.js"&gt;&lt;/script&gt;</code></pre>

        <p>Creating a HTML form layout.</p>
        <div class="code">
            <pre> <code class="language-markup">&lt;form action="form_thank_you.html" method="post" class="form" novalidate&gt;</code>
        <code class="language-markup">&lt;input name="passconf" id="passconf" type="password"&gt;&lt;br /&gt;</code>
        <code class="language-markup">&lt;label for="passconf" class="form_label"&gt;&lt;/label&gt;&lt;br /&gt;</code>
        <code class="language-markup">&lt;input type="submit" value="Submit"&gt;</code>
 <code class="language-markup">&lt;/form&gt;</code></pre>
        </div>
        <p>Style the form layout.</p>
        <pre><code class="language-css">   label, input, form ul, textarea {
	    margin: 10px 30px; 
    }

    textarea {
        min-height: 150px; 
    }

    input, textarea {
	   width: 250px;
	   height: 36px;
	   border: 1px solid #222;
	   transition: all 0.3s ease-in-out;
    }
    
    input[type="submit"] {
	   background: #848484;
        color: #fff;
	   height: 40px;
	   width: 100px;
        border: none;
        letter-spacing: 0.1em;
	   transition: all 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
	   background-color: #535353;
    }

    input:focus, textarea:focus  {
	   border: 1px solid #3498db;
    }</code></pre>
        <p>Include the following code in your JavaScript file.</p>
        <pre><code class="language-javascript">    var $form = $('.form');
    var $errorBox 	= $('.errors');
    var $pw 		= $('#password');
    var $pwConf 	= $('#passconf');
    var $hintBox 	= $('.hint');
    var hint = 0;
    // The following pattern from:
    // Murach's JavaScript and jQuery
    // by: Zak Ruvalcaba and Mike Murach
    // pg. 299

    // Error Messages Object
    var ErrorMessages = {
        passwordNoMatch: 'Password does not match',
        passwordBlank: 'Password not filled in',
        passwordHint: 'Hint: 123',
        passwordMatch: 'Password matches'
    }
    // Hint Messages Object

    var HintMessage = {
        passwordHint: 'Hint: 123'
    }

    $form.submit(function(e){
        var isValid = true;
        var errorMessageArray = []
        var hintMessageArray = []
        var errorOutput;
        var hintOutput;
        var pwVal = $pw.val();
        var pwConfVal = $pwConf.val();
        var myPassWord = '123';

        // Validate password

        if(pwConfVal == myPassWord){
            errorMessageArray.push(ErrorMessages.passwordMatch);
            hint = -1;
            isValid = false;
        // Display error message if password field is blank

        } else if (pwConfVal === '') {
            errorMessageArray.push(ErrorMessages.passwordBlank);
            $form.velocity( 'callout.shake' );
            isValid = false;
        // Password not match   

        } else {
            errorMessageArray.push(ErrorMessages.passwordNoMatch);
            $form.velocity( 'callout.shake' );
            hint++;
            isValid = false;
        }

        // Display hint if user tried more than once

        if(hint == 1){
            hintMessageArray.push(ErrorMessages.passwordHint);
            e.preventDefault();
            hintOutput = '&lt;ul&gt;'
            console.log(hintMessageArray);
            for(i = 0; i &lt; hintMessageArray.length; i++) {
                hintOutput += '&lt;li&gt;' + hintMessageArray[i] + '&lt;/li&gt;';		
            }
            hintOutput += ' &lt;/ul&gt;';
            $hintBox.html(hintOutput);
            $hintBox.velocity( 'transition.slideUpIn' );
        // Remove hint if password is correct  
        }else if (hint > 0){
            $hintBox.velocity({ opacity: 0 }, { display: "none" });
        }

        // Display error messages: password not match, 

        // password blank, password hint, password matches

        if(isValid === false){
            e.preventDefault();
            errorOutput = '&lt;ul&gt;'
            for(i = 0; i &lt; errorMessageArray.length; i++){
                errorOutput += '&lt;li&gt;' + errorMessageArray[i] + '&lt;/li&gt;';		
            }
            errorOutput += ' &lt;/ul&gt;';
            $errorBox.html(errorOutput);
        } 
}) // end submit event handler</code></pre>


        <p>Now you can use this concept to build your form validation!<a href="tutorial_2.php"> Let's go to tutorial 2!</a>
        </p>

    </section>


</div>
<div class="clearfix"></div>
<?php include( './templates/footer.php'); ?>