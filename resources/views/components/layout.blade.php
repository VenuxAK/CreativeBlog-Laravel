<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap"
		rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="/css/style.css">

	<link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<title>CreativeBlog</title>
</head>

<body>

	<x-navbar />

	<main id="main">
		<section class="section">
			<div class="container">
				<div class="row no-gutters-lg">
					{{ $slot }}
					<x-sidebar />
				</div>
			</div>
		</section>
	</main>

	<x-footer />

	{{-- # JS Plugins --}}
	<script src="/plugins/jquery/jquery.min.js"></script>
	<script src="/plugins/bootstrap/bootstrap.min.js"></script>

	<!-- Main Script -->
	<script src="/js/script.js"></script>

</body>

</html>
