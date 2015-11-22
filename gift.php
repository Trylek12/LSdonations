<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<?php define('MyConst', TRUE); ?>

<head>
	<meta charset="utf-8">
	<title>Gift Points</title>
	<meta name="description" content="Life-Studios Donation Site">
	<?php include 'header.php'; ?>

	<!-- Points Post Office -->
    <div class="container">
    <h1 class="span12">Gift Points</h1>
    	<div class="row">
        	<div class="span12" align="left">
                <!--# of Points Box-->
                <form>
                <div class="span12">
                	<input type="number" min="0" style="width: 9%;" placeholder="Points"/>
                </div>
                <br><br>
                <!--Donation To-->
                <div class="span12">
                	<input type="text" placeholder="Who gets the points?"/>
                </div>
                <!--Donation Message-->
                <div class="span12">
                	<input type="text" style="width: 75%;" placeholder="Donation Message"/>
                </div>
                <div class="span12">
                	<input type="submit">
               	</div>
               </form>
           	</div>    
        </div>
    </div>
      <br><br><br>
      
	<?php include 'footer.php'; ?>

	<!-- Javascript -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>

	</body>
</html>