<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shakesperian Insult Generator</title>
<style "text/css">
html, body, #tbl_wrap {
	height: 100%;
	width: 100%;
	padding: 0;
	margin: 0;
}
html {
    -webkit-text-size-adjust: none
}
#td_wrap {
	vertical-align: middle;
	text-align: center;
}
#insults {
	-webkit-text-size-adjust: true
    overflow: scroll;
    height: 30px; 
    top: 0; 
    left: 0; 
    width: 100%; 
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, 
minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body ontouchmove="blockMove()">
<div class="container">
<br>
<div class="jumbo2">
<div class="jumbotron" id="jumbotron">
  <h2>Shakespearian Insult Generator</h2>
  <p id="counter">used 0 times.</p>
  <p><a class="btn btn-primary btn-lg" href="#" id="generateButton" role="button">Generate</a></p>
</div> 
</div>
<div id="insults">
</div>
</div>
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> 
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="insult-generator.js"></script>
</html>