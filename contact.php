<?php
include "header.php";
?>

<div class="container">

	<div class="row">

		<div class="col-lg-9">
			
			<h1>Contact Us</h1>

			<p>Please send us an email and we will get back to you as soon as possible.</p>

			<form>
			  <fieldset>
			    <div class="form-group">
			      <label for="name">Your Name</label>
			      <input type="text" class="form-control" id="name" placeholder="Enter name">
			    </div>
			    <div class="form-group">
			      <label for="email">Your Email</label>
			      <input type="text" class="form-control" id="email" placeholder="example@example.com">
			    </div>
			    <div class="form-group">
			      <label for="message">Your Message</label>
			      <textarea class="form-control" rows="5"></textarea>
			    </div>
			    <button type="submit" class="btn btn-default">Submit</button>
			  </fieldset>
			</form>
				
		</div>


		<?php
			include "sidebar-contact.php";
		?>

	</div><!-- /.row -->

<?php
include "footer.php";
?>