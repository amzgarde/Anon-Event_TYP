<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#42a5f5">
		<title>Anon-Event</title>
		
		<!-- Including the jQuery libraries -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

	    <!-- Latest compiled and minified Bootstrap JavaScript library -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		{!! MaterializeCSS::include_css() !!}
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- This is the js for the textarea -->
		<script src="//cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>

		
		<style type="text/css">
			nav {
				background: none;
				position: relative;
				z-index: 1;
			}
			nav li a {
				color: gray;
			}

			.parallax {
				height: 95%;
			}

			#home {
				margin-top: -64px;
				padding-top: 64px;
			}

			.parallax img {
				display: inherit !important;
				-webkit-filter: grayscale(90%);
                -moz-filter: grayscale(90%);
                -o-filter: grayscale(90%);
                -ms-filter: grayscale(90%);
                filter: grayscale(90%);
			}

			#event_blank {
				height: 200px;
			}

			.caption {
				bottom:0;
			}

			.title {
				color: blue;
			}

			.ticketSelect {
				display: inherit !important;
			}

			/* Added by Jonny */
			.alert.parsley {
	            margin-top: 5px;
	            margin-bottom: 0px;
	            padding: 10px 15px 10px 15px;
	        }

	        .check .alert {
	            margin-top: 20px;
	        }

	        #browse_card {
	        	width: 35%;
	        	height: 150%;
	        }

	        #browse {
	        	max-height:200px;
	        }

	        body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
				/*background: #e8eddf !important;*/
			}

			footer {
				background: #333533 !important;
			}

			main {
				flex: 1 0 auto;
			}

			.btn {
				background: #f5cb5c !important;
				color: #242423 ;
			}

			.title {
				color: #333533 !important;
			}
			ul li a {
				color: #f5cb5c !important;
			}
			.card{
				background: #e8eddf !important;
			}

			.badges {
				border: 1px dashed black;
			}

			.ticketbox {
				border: 1px solid black;
			}

			.capitalize {
				text-transform: capitalize;
			}

		</style>

	</head>


	<body onload="printBadges();">

		<div class="container">
			@yield('content')
		</div>


		<script>

			function printBadges() {
			    window.print();
			}
		</script>

	</body>
</html>
