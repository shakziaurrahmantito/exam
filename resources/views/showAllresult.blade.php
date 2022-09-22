<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>All Result</title>
	</head>
	<body>
		<table style="width: 100%;text-align: center;" border="1" cellpadding="0" cellspacing="0">
			<tr>
				<td>Position</td>
				<td>Name</td>
				<td>Department ID</td>
				<td>Result</td>
			</tr>
			@php
				$i = 1;
			@endphp
			@foreach($final as $data)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$data->user->name}}</td>
					<td>{{$data->user->departmentId}}</td>
					<td>{{$data->answer}}</td>
				</tr>
			@endforeach

		</table>
	</body>
</html>