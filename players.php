<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<?php define('MyConst', TRUE); ?>

<head>
	<meta charset="utf-8">
	<title>Life-Studios Player Control</title>
	<meta name="description" content="Life-Studios Donation Site">
	<?php include 'header.php'; ?>

    <div class="container">
    <h1 class="span12">Control Users</h1>
    	<div class="row">
        	<div class="span12">
        		<div class="span12">
        			<form>
                    	<h3>Username:</h3>
                    		<input type="text">
                        <h3>Number of Points:</h3>
                        	<input type="number" min="0" style="width:20%">
                        <br>
                        <input type="submit" value="Add Points"> <input type="submit" value="Remove Points">
                    </form>
        		</div>
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