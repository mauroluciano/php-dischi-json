<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" defer>

<script src="functions.js" defer></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISCHI</title>
</head>
<body>
    <header>
    <div class="container-fluid d-flex">    
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="" class="">
</div>    
    </header>
    <div class="container d-flex  flex-wrap" id="app">
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col"  v-for="(disk, index) in disks" :key="index" >
<div class="card m-4 ">
<section class="text-center  pt-2">
<img :src="disk.poster"/>
    <h3>{{ disk.title }}</h3>
    <p>{{ disk.author }}</p>
    <p>{{ disk.year }}</p>
</section>    
    </div>
    </div>
    </div>
</div>
    
</body>
</html>