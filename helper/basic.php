<?php

function bash_path(string $file): string
{
    $file = ltrim($file, '/');
    return realpath(__DIR__ . '/../' . $file);
}

function bootstrap(): void
{
    header("Content-Type:text/html; charset=utf-8");
    error_reporting(E_ALL);
    ini_set('html_errors', 'On');
    ini_set('display_errors', 'On');

    // html_header();
}


function html_header(): void
{
    echo <<<EOD
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/main.css" rel="stylesheet">
</head>
<body>

EOD;
}
