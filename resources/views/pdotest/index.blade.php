<html>
  <head><title>PHP TEST</title></head>
    <body>
      @foreach($books as $book)
          {{ $book->name }} 
          {{ $book->price }} 
          {{ $book->author }} 
	        <BR>
      @endforeach
    </body>
</html>
