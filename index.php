<?php include("connect.php");
	//if(isset($_POST['search'])){
	//	$hotels = array('address' => 'Houston');
	//	$hotel = $db->hotels->find($hotels);

	//	foreach ($hotel as $doc) {
	//		var_dump($doc);
	//	}
		//$query = $db.hotels.find($searchq);
//}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="style.css">
<div class="search-background">
            <img src="city2.jpg">
        </div>
            <div class="well-searchbox">
                <form action="index.php" method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label"><h2><font face="courier">Sweet Dreams</font></h2>Hotel Search</font></label>
                        <div class="col-md-8">
                            <input id="city" type="text" class="form-control" placeholder="Search City">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Select star ratings</label>
                        <div class="col-md-8">
                            <select id="hotelClass" class="form-control" placeholder="Stars">
                                <option value="0">All</option>
                                <option value="1">1 Star</option>
                                <option value="2">2 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="5">5 Stars</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-offset-4 col-sm-5">
                        <button id="search" type="submit" class="btn btn-success">Search
                        </button>

                    </div>
                </form>
            </div>
          <div id="output"><table id="results" class="table"></table></div>
</body>
</html>		
		
