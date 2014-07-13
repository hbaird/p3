<!doctype html>
<html>
<head>


	<title>@yield('title','Foobooks')</title>


	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles/foobooks.css" type="text/css">


	@yield('head')


</head>


<body>

	@yield('content')


	@yield('body')


</body>