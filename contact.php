<?php $pageTitle='Contact' ; $pageClass='nav_contact' ; include( './templates/header.php'); ?>
<h1>Contact</h1>
<div class="content">
    
    <section class="my_contact">

        <form action="form_thank_you.html" method="post" class="contact_form">

            <label for="name">Your Name:</label>
            <br />
            <input type="text" name="name" id="name" required>
            <br />
            <label for="email">Email:</label>
            <br />
            <input type="email" id="email" name="email" required>
            <br />
            <label for="message">Your Message:</label>
            <br />
            <textarea name="comment" id="message" required></textarea>
            <br />
            <input type="submit" value="Submit">
        </form>
    </section>


</div>
<div class="clearfix"></div>
<?php include( './templates/footer.php'); ?>