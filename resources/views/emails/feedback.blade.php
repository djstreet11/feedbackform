<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback</title>
</head>
<body>
fullName - {{$fullName}}<br/>
phone - {{$phone}}<br/>
city - {{$city}}<br/>
text:<br/>
{{$text}}
</body>
</html>
