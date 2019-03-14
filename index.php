<?php
/**
 * Created by PhpStorm.
 * User: dekma
 * Date: 06.03.2019
 * Time: 23:06
 */

?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Youtube video download</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/floating-labels.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Youtube video download</h1>
        <p>Please, insert your link here:</p>
    </div>

    <div class="alert alert-warning d-none js__alert" role="alert">
        Youtube URL is wrong =(
    </div>

    <div class="form-label-group">
        <input type="text" name="url" class="form-control" placeholder="Youtube url" required autofocus>
        <label for="inputEmail">Youtube url</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block js__download" type="button">
        <img src="/images/ajax-loader.gif" alt="Loading" class="d-none js__loading">
        Download
    </button>

    <div class="card mt-4 js__report d-none">
        <div class="card-body">
            <h5 class="card-title">Video is ready</h5>
            <p class="card-text">We prepared a link for you. Follow the link below and then <strong>press Ctrl+S</strong> to download the file.</p>
            <a href="" class="btn btn-primary">Download file link</a>
        </div>
    </div>
    
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="/js/app.js"></script>

</body>
</html>

