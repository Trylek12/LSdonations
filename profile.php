<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<?php define('MyConst', TRUE); ?>

<head>
	<meta charset="utf-8">
	<title>My Profile</title>
	<meta name="description" content="Life-Studios Donation Site">
	<?php include 'header.php'; ?>

    <div class="container">
    	<div class="row">
        	<div class="span12" align="center">
        		<div class="span12">
        			<h1 style="text-align:left;">Welcome, "name here"</h1>
        		</div>
        		<div class="span5">
        		<ul class="thumbnails">
					<li class="span4">
					  <a href="#" class="thumbnail zoom stacked">
						<img src="http://placehold.it/360x268" alt="">
					  </a>
					</li>
				</ul>
				<h4 style="text-align:left;">Bank Account Balance: "$"</h4>
        		</div>
        		<div class="span6" style="text-align:">
					<ul class="nav nav-tabs">
						<li class=""><a href="#home" data-toggle="tab">Recent Donations</a></li>
						<li class=""><a href="#purchases" data-toggle="tab">Recent Purchases</a></li>
						<li class=""><a href="#vehicles" data-toggle="tab">Vehicles</a></li>
						<li class=""><a href="#houses" data-toggle="tab">Houses</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="home">
							<table class="recent">
								<thead>
									<tr>
										<th width="30%">Type</th>
										<th width="55%">Description</th>
										<th width="15%">Date</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>type</td>
										<td>desc</td>
										<td>date</td>
									</tr><tr>
										<td>type</td>
										<td>desc</td>
										<td>date</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="purchases">
							<table class="recent">
								<thead>
									<tr>
										<th width="30%">Type</th>
										<th width="55%">Description</th>
										<th width="15%">Date</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>type</td>
										<td>desc</td>
										<td>date</td>
									</tr><tr>
										<td>type</td>
										<td>desc</td>
										<td>date</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="vehicles">
							<table class="recent">
								<thead>
									<tr>
										<th width="30%">Car Type</th>
										<th width="25%">Price</th>
										<th width="25%">Number Owned</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>type</td>
										<td>price</td>
										<td>numer owned</td>
									</tr><tr>
										<td>type</td>
										<td>price</td>
										<td>numer owned</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="houses">
							<table class="recent">
								<thead>
									<tr>
										<th>House</th>
										<th>Price</th>
										<th>Location</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>home</td>
										<td>price</td>
										<td>loc</td>
									</tr><tr>
										<td>home</td>
										<td>price</td>
										<td>loc</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>          
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