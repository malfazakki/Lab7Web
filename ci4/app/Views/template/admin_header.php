<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>
    <?= $title; ?>
  </title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div class="container">
    <header>
      <h1 class="judul">Admin Portal Berita</h1>
    </header>


    <nav>
      <a href="<?= base_url('/'); ?>" class="active">Dashboard</a>
      <a href="<?= base_url('/artikel'); ?>">Artikel</a>
      <a href="<?= base_url('/artikel/add'); ?>">Tambah Artikel</a>
    </nav>
    <section id="wrapper">
      <section id="main">