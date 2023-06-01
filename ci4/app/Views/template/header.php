<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
  <!-- <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;
      color: black;
    }

    body {
      font-family: "Poppins", sans-serif;
      margin-top: 8vh;
      box-sizing: border-box;
    }

    #container {
      width: 90%;
      /* box-shadow: 0px 0px 28px -6px rgba(0, 0, 0, 0.75); */
      margin: 0 auto;
      height: 100vh;
    }
  </style> -->
</head>

<body>

  <div id="container">
    <header>
      <h1 class="judul">Layout Sederhana</h1>
    </header>
    <nav>
      <a href="<?= base_url('/'); ?>" class="active">Home</a>
      <a href="<?= base_url('/artikel'); ?>">Artikel</a>
      <a href="<?= base_url('/about'); ?>">About</a>
      <a href="<?= base_url('/contact'); ?>">Kontak</a>
    </nav>
    <section id="wrapper">
      <section id="main">