<?php
require_once '../config/connection.php';
require_once '../config/escapeString.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">

    <!-- title of site -->
    <title>Aslamiyah</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="template_user/assets/logo/asla.png" />

    <!--font-awesome.min.css-->
    <!-- <link rel="stylesheet" href="template_user/assets/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <!--flat icon css-->
    <link rel="stylesheet" href="template_user/assets/css/flaticon.css">

    <!--animate.css-->
    <link rel="stylesheet" href="template_user/assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="template_user/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template_user/assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="template_user/assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="template_user/assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="template_user/assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="template_user/assets/css/responsive.css">

    <style>
        /* Untuk potong 5 baris + titik-titik */
        .text-multiline-ellipsis {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.5em;
            max-height: calc(1.5em * 5);
            /* 5 baris */
        }

        /* Tombol "Lihat Selengkapnya" dengan animasi halus */
        .btn-see-more {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-see-more:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>