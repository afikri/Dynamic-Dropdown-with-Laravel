<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="UTF-8">    
		<title>Dropdown</title>
	</head>
	<body>
   		@yield('content')
	
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
   		<script>
			$("#city").change(event =>{   
   				$.get(`companies/${event.target.value}`,function(res,sta){      
      				$("#company").empty();
					res.forEach(element => {
        				$("#company").append(`<option value=${element.id}>${element.company}</option>`);      
    				}); 
  				});
			});
		</script>
	</body>
</html>
