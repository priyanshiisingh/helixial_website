<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Helixial">
	<!-- Page Title -->
	<title>Helixial</title>
    <!-- Favicon Icon -->
  	<link rel="icon" href="{{ asset('assets/img/client/logo/helixial_ico.png')}}">
	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

{{-- seo --}}
<meta name="description" content="{{ $seo['description']->value ?? '' }}">
<meta name="keywords" content="{{ $seo['keywords']->value ?? '' }}">
<meta property="og:description" content="{{ $seo['og:description']->value ?? '' }}">
<meta property="og:image" content="{{ $seo['og:image']->value ?? '' }}">
<meta name="twitter:title" content="{{ $seo['twitter:title']->value ?? '' }}">
<meta property="og:site_name" content="{{ $seo['og:site_name']->value ?? '' }}">
<meta property="og:locale" content="{{ $seo['og:locale']->value ?? '' }}">
<meta name="copyright" content="{{ $seo['copyright']->value ?? '' }}">

<!-- Robots -->
<meta name="robots" content="{{ $seo['robots']->value ?? '' }}">

<!-- Language -->
<meta http-equiv="content-language" content="{{ $seo['content-language']->value ?? '' }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
