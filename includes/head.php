<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml" />
  <meta name="HandheldFriendly" content="True" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
  <meta property="og:title" content="Hacking the opportunity gap" />
  <meta property="og:site_name" content="Boston Coding Camp"/>
  <meta property="og:url" content="http://bostoncodingcamp.com" />
  <meta property="og:image" content="/img/micah_grovehall.jpg" />

  <meta property="og:description" content="Boston Coding Camp is an alternative Spring Break, during which young people learn to code." />
  <link rel="shortcut icon" href="/img/favicon.png" />
  <link rel="stylesheet" href="/css/main.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

  <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

  <title><?php
  $uri = "{$_SERVER['REQUEST_URI']}";
  $uri_clean = ucwords(basename($uri));
  $pagetitle = "body_" . basename($uri);
  if ($uri_clean == NULL){ echo "Boston Coding Camp";}
  else { echo $uri_clean . " | Boston Coding Camp"; }

?></title>

</head>

<body class="<?php echo $pagetitle; ?>">
<style>
#nav li a.<?php echo $uri_clean; ?> {}
</style>
