<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
"Search"
<form method="POST" action="{!! route('search.search') !!}" accept-charset="UTF-8">
	<input name="_token" type="hidden" value="{!! csrf_token() !!}">
	<input placeholder="search by keyword" name="keyword" type="text">
	<input type="submit" value="search">
</form>
</body>
</html>
