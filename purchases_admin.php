<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<?php define('MyConst', TRUE); ?>

<head>
	<meta charset="utf-8">
	<title>Life-Studios Purchase History</title>
	<meta name="description" content="Life-Studios Donation Site">
	<?php include 'header.php'; ?>

	<div class="container">
	<h1 class="span12">Purchase History</h1>
    	<div class="row">
        	<div class="span12">
                <table class="recent">
					<thead>
						<tr>
							<th width="10%">Item</th>
                            <th width="10%">Type</th>
                            <th width="20%">Extra Info</th>
							<th width="10%">Name</th>
                            <th width="10%">UID</th>
							<th width="5%">Points</th>
							<th width="5%">Date</th>
                            <th width="10%">View File</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Item</td>
							<td>Type</td>
							<td>Extra Info</td>
							<td>Name</td>
                            <td>UID</td>
							<td>Points</td>
							<td>Date</td>
							<td><a href="index.php"><input type="button" value="View File"></a></td> <!-- Direct link to picture they uploaded -->
						</tr>
						<tr>
							<td>Item</td>
							<td>Type</td>
							<td>Extra Info</td>
							<td>Name</td>
                            <td>UID</td>
							<td>Points</td>
							<td>Date</td>
							<td><a href="index.php"><input type="button" value="View File"></a></td> <!-- Direct link to picture they uploaded -->
						</tr>
						<tr>
							<td>Item</td>
							<td>Type</td>
							<td>Extra Info</td>
							<td>Name</td>
                            <td>UID</td>
							<td>Points</td>
							<td>Date</td>
							<td><a href="index.php"><input type="button" value="View File"></a></td> <!-- Direct link to picture they uploaded -->
						</tr>
					</tbody>
				</table>
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