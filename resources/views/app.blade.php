<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    <script src="{{ mix('/js/manifest.js') }}" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/raleway-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>

    <title>CBEBirr</title>
    @inertiaHead
  </head>
  <body>
    @inertia 
  </body>

  <script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</html>