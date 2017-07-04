<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Bruno Pacerini Moreno</title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="resources/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="resources/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="resources/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="resources/css/animations.css" rel="stylesheet">

		<!-- core CSS file -->
		<link href="resources/css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="resources/css/custom.css" rel="stylesheet">

		<!-- Carrosel clientes --> 
		<link href="resources/css/slick.css" rel="stylesheet">        

	</head>

	<body class="no-trans">
	
		@include('site.partials.header')

		@include('site.sections.home')

		@include('site.sections.about')

		@include('site.sections.services')

		@include('site.sections.projects')

		@include('site.sections.clients')

		@include('site.partials.footer')

		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="resources/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="resources/plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="resources/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="resources/plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="resources/plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="resources/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="resources/js/custom.js"></script>

		<!-- Carrosel clientes --> 
		<script type="text/javascript" src="resources/js/slick.min.js"></script>


	</body>
</html>

<script>
$(document).ready(function(){
  
  $('#form_contact').submit(function( event ) {
    var parameters = {
      action: 'sendEmail',
      form: $('#form_contact').serializeArray()
    };

    $.ajax({
        type: 'POST',
        url: 'site-requests',
        data: parameters,
        dataType: 'json',
        success: function (data) {
          $('#msg_email').html(data).fadeIn('slow');
          $("#form_contact")[0].reset();
        },
        error: function (data) {
          console.log('Error:', data);
        }
    });

    event.preventDefault();
  });
});
</script>