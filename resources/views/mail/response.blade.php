<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<table class="table table-striped" border="2 solid">
	<thead>
	<tr>
		<th>Full name</th>

	</tr>
	</thead>
	<tbody>
	<tr>
		<td align="center">{{$name}}&nbsp;{{$lastName}}</td>
	</tr>
	</tbody>
	<thead>
	<tr>
		<th>Email</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td align="center">{{$email}}</td>
	</tr>
	</tbody>
	<thead>
	<tr>
		<th>Url</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td align="center">{{$url}}</td>
	</tr>
	</tbody>
	<thead>
	<tr>
		<th>Message</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-indent: 1.5em; max-width: 300px; display: block; word-wrap:break-word;">{{$text}}</td>
	</tr>
	</tbody>
</table>
</body>
</html>