<!DOCTYPE html>
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->

<?php define('MyConst', TRUE); ?>

<head>
	<meta charset="utf-8">
	<title>Life-Studios Edit Packages</title>
	<meta name="description" content="Life-Studios Donation Site">
	<?php include 'header.php'; ?>

	<div class="container">
	<h1 class="span12">Edit Packages</h1>
    	<div class="row">
        	<div class="span12" align="left">
            <!-- COLOR OF  PACKAGE IS RANDOM-->
            <form>
                <table class="recent">
					<thead>
						<tr>
							<th width="20%">Title</th>
							<th width="8%">Price</th>
							<th width="5%">Popular</th>
							<th width="10%">Package Color</th>
							<th width="15%">Package Details/YES</th>
							<th width="15%">Package Details/NO</th>
							<th width="5%">Order</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" value="#points" style="width:90%"></td>
							<td><input type="text" value="$99.99" style="width:80%"></td>
							<td><input type="number" min="0" max="1" value="0" title="0 = Not Popular, 1 = Popular" style="width:80%"></td> <!-- 0=Not Popular, 1=Popular -->
							<td>
                            	<select style="width:100%">
                            		<option value="blue">Blue</option>
                            		<option value="green">Green</option>
                            		<option value="orange">Orange</option>
                            		<option value="brown">Brown</option>
                            	</select>
                            </td>
							<td><input type="text" value="YAY" style="width:90%"></td>
							<td><input type="text" value="NAY" style="width:90%"></td>
							<td><input type="number" min="0" max="8" style="width:85%" value="0"></td> <!-- Change max to what ever number of packages there are -->
						</tr>
						<tr>
							<td><input type="text" value="#points" style="width:90%"></td>
							<td><input type="text" value="$99.99" style="width:80%"></td>
							<td><input type="number" min="0" max="1" value="0" title="0 = Not Popular, 1 = Popular" style="width:80%"></td> <!-- 0=Not Popular, 1=Popular -->
							<td>
                            	<select style="width:100%">
                            		<option value="blue">Blue</option>
                            		<option value="green">Green</option>
                            		<option value="orange">Orange</option>
                            		<option value="brown">Brown</option>
                            	</select>
                            </td>
							<td><input type="text" value="YAY" style="width:90%"></td>
							<td><input type="text" value="NAY" style="width:90%"></td>
							<td><input type="number" min="0" max="8" style="width:85%" value="0"></td> <!-- Change max to what ever number of packages there are -->
						</tr>
						<tr>
							<td><input type="text" value="#points" style="width:90%"></td>
							<td><input type="text" value="$99.99" style="width:80%"></td>
							<td><input type="number" min="0" max="1" value="0" title="0 = Not Popular, 1 = Popular" style="width:80%"></td> <!-- 0=Not Popular, 1=Popular -->
							<td>
                            	<select style="width:100%">
                            		<option value="blue">Blue</option>
                            		<option value="green">Green</option>
                            		<option value="orange">Orange</option>
                            		<option value="brown">Brown</option>
                            	</select>
                            </td>
							<td><input type="text" value="YAY" style="width:90%"></td>
							<td><input type="text" value="NAY" style="width:90%"></td>
							<td><input type="number" min="0" max="8" style="width:85%" value="0"></td> <!-- Change max to what ever number of packages there are -->
						</tr>
                        <!-- Add Package -->
                        <tr>
							<td><input type="text" value="" style="width:90%"></td> <!-- If blank package not added -->
							<td><input type="text" value="$" style="width:80%"></td>
							<td><input type="number" min="0" max="1" value="0" title="0 = Not Popular, 1 = Popular" style="width:80%"></td> <!-- 0=Not Popular, 1=Popular -->
							<td>
                            	<select style="width:100%">
                            		<option value="blue">Blue</option>
                            		<option value="green">Green</option>
                            		<option value="orange">Orange</option>
                            		<option value="brown">Brown</option>
                            	</select>
                            </td>
							<td><input type="text" value="YAY" style="width:90%"></td>
							<td><input type="text" value="NAY" style="width:90%"></td>
							<td><input type="number" min="0" max="8" value="2" style="width:85%"></td> <!-- Next avaliable number -->
						</tr>
					</tbody>
				</table>
                <br>
                <input type="submit" value="Save Changes" >
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