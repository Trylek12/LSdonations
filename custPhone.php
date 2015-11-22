<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<?php define('MyConst', TRUE); ?>

<head>
	<meta charset="utf-8">
	<title>Custom Phone Number</title>
	<meta name="description" content="Life-Studios Donation Site">
	<?php include 'header.php'; ?>

    <div class="container">
    	<div class="row">
        	<div class="span12">
        		<div class="span12">
        			<h1>Custom Phone Number - $5 One Time</h1>
        		</div>
                <form>
        		<div class="span12">
                	<h3>Name:</h3>
                	<input type="text" placeholder="Name" style="width:30%" required/>
                </div>
                <div class="span12">
                	<h3>UID:</h3>
                	<input type="number" placeholder="UID" style="width:20%" required/>
                </div>
                <div class="span12">
                	<h3>Phone Number:</h3>
                	<input type="number" placeholder="Number" style="width:20%" max="999999" required/> <!-- Can't start with 0, min/max length 6, numbers only -->
                </div>
                <div class="span12">
                <br>
                	<h5>Order Total: $5</h5>
                	<input type="submit" value="Confirm Purchase">
               	</div>
                </form>
           	</div>
        </div>
    </div>

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="span4">
					<a class="brand" title="">Life-Studios</a> | &copy; 2015
				</div>
			</div>
		</div>
	</footer>

	<!-- Javascript -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

	<?php /* include 'footer.php'; */ ?> <!-- DISREGARD UNTIL DESIGN DONE -->
	</body>
</html>