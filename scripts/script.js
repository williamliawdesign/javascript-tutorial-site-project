// click "Run" to replay

var $body = $('body');
var $html = $('html');
var $wrap = $('.wrap');
var $nav = $('nav');
var $section = $('section');
/*
var $form = $('.form');
var $pw = $('#password');
var reallPw = "123";
var ErrorMessages = {
	passwordBlank: 'Password not filled in',
	passwordNoMatch: 'Passwords do not match'
}*/
//
var loading = [
	//Load body width from 0% to 100%. //
    { elements: $body, properties: { width: '20%' } },
    { elements: $body, properties: { width: '50%' } },
    { elements: $body, properties: { width: '100%' } },
	//Load the body height to 100%//
    { elements: $body, properties: { height: '100%' } }, 
    { elements: $html, properties: {  background: '#fff' }, options: { 
      complete: function () { 
        $wrap.velocity( 'transition.slideUpIn' );
		$nav.velocity( 'transition.slideDownBigIn' ); 
        $section.velocity( 'transition.slideLeftIn', { stagger: 250 });  
      }
    }
  }
]; 

//pass loading sequence array into $.Velocity.RunSequence() it will consecutively fire each call within the sequence.
$.Velocity.RunSequence(loading);



//Example 1

var $form		= $('.form');
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
		hintOutput = '<ul>'
		console.log(hintMessageArray);
		for(i = 0; i < hintMessageArray.length; i++){
			hintOutput += '<li>' + hintMessageArray[i] + '</li>';		
		}
		hintOutput += ' </ul>';
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
		errorOutput = '<ul>'
		for(i = 0; i < errorMessageArray.length; i++){
			errorOutput += '<li>' + errorMessageArray[i] + '</li>';		
		}
		errorOutput += ' </ul>';
		$errorBox.html(errorOutput);
	} 
}) // end submit event handler


//Example 2
    paper.install(window);
	// Keep global references to both tools, so the HTML
	// links below can access them.
	var tool1;
    var myCanvas = $('#myCanvas');
	window.onload = function() {
		paper.setup('myCanvas');

		// Create two drawing tools.
		// tool1 will draw straight lines,
		// Both share the mouseDown event:
		var path;
        function onMouseDown(event) {
            // Create a new path and give it a random stroke color:
	       path = new Path();
	       path.strokeColor = { 
               hue: Math.random() * 360, 
               saturation: 1, 
               brightness: 1};

	       // Add a segment to the path where you clicked:
	       path.add(event.point);
        }
        
        
        
        
        // Create a tool1 will draw lines when mouse drag
		tool1 = new Tool();
		tool1.onMouseDown = onMouseDown;
		tool1.onMouseDrag = function(event) {
            path.add(event.point);
		}
        
        
	}
    
    
    //Example 3
    
    $(document).ready( function() {
	    $("#phone").interactive_3d({
	      frames: 38
	    });
	  });