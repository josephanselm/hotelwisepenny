<?php include 'header.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
       	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.6253942671983!2d6.735678337295534!3d6.18086769103987!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043ed45044866cb%3A0x8295e6fa501e9284!2sMTN+-+Asaba!5e0!3m2!1sen!2sng!4v1420819264970" width="100%" height="300" frameborder="0" style="border:0"></iframe>	
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" method="post" action="contactprocessor.php" role="form" >
			<div class="form-group">	
			<input type="text" class="form-control" name="name" placeholder="Name" required>
			</div>
			<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="Enter email" required>
			</div>
			<div class="form-group">
			<input type="number" class="form-control" name="phone" placeholder="Phone" required>
			</div>
			<div class="form-group">
			<textarea type="email" class="form-control" name="message" placeholder="Message" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>