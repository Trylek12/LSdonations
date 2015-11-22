<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<?php define('MyConst', TRUE); ?>

<head>
	<meta charset="utf-8">
	<title>Group Car Texture</title>
	<meta name="description" content="Life-Studios Donation Site">
	<?php include 'header.php'; ?>

    <div class="container">
    	<div class="row">
        	<div class="span12">
        		<div class="span12">
        			<h1>Car Texture - $25/month</h1>
        		</div>
                <form>
        		<div class="span12">
                	<h3>Group Name:</h3>
                	<input type="text" placeholder="Group Name" style="width:30%" required/>
                </div>
                <div class="span12">
                	<h3>Extra Information:</h3>
                	<input type="text" placeholder="Want to give us more info?" style="width:30%"/>
                </div>
                <div class="span12">
                	<h3>Car Texture Upload: (ignore if being made)</h3>
                	<input type="file" accept="image/jpeg"> <!-- Pictures saved in /img/uploads -->
                </div>
                <div class="span12">
                <br>
                	<h5>Order Total: $25</h5>
                	<input type="submit" value="Confirm Purchase">
               	</div>
                </form>
           	</div>
        </div>
    </div>

	<?php include 'footer.php'; ?>

	<!-- Javascript -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

	</body>
</html>