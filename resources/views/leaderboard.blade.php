<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Result</title>
		<style type="text/css">
			h2, h4{
				margin: 5px;
			}
		</style>
	</head>
	<body>
		<div style="width:450px;margin: 0 auto;">
			<h2>{{Auth::user()->name}}</h2>
			<h4>Your Correct answer: {{$correct_mark}}</h4>
			<h4>Your Incorrect answer: {{$negative_mark}}</h4>
			<hr>
			<h4>Your Result: {{$correct_mark-$negative_mark}}</h4>
		</div>
	</body>
</html>