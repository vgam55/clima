<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css">
	    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
		</script>
	    <title>Clima</title>
	</head>

	<body>
	<form action="{{url('/getPrediccion')}}" class="row g-3" method="GET">
			{{ csrf_field() }}
            {{ method_field('GET') }}
			
			<div class="mb-3">
			  <label for="ciudad" class="form-label">Ciudad</label>
			  <input type="text" class="form-control" id="ciudad" name="ciudad">
			</div>

	 		<div class="col-auto">
   			 <button type="submit" class="btn btn-secondary mb-3">Aceptar</button>
  			</div>
	</form>
		
	</body>
</html>