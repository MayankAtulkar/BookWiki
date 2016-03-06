<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page1</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

	<table border = 1px padding = 5px>
	<tr><th>Author</th><th>Title</th><th>Date</th></tr>
    @foreach($data as $person)
	
	<tr>
	<td> <a href="{{ URL::route('profile', ['id' => $person['guid']]) }}">{{ $person['author'] }}</a> </td>
    <td>  <a href="{{ URL::route('profile', ['id' => $person['guid']]) }}">{{ $person['title'] }}</a>  </td>
	<td>  <a href="{{ URL::route('profile', ['id' => $person['guid']]) }}">{{ $person['date'] }}</a>  </td>
	</tr>
	
    @endforeach
	</table>
  </body>
</html>
