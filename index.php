<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="functions.js" defer></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISCHI</title>
</head>
<body>
    <div class="container d-flex" id="app">
<div class="card" v-for="(disk, index) in disks" :key="index">
    <img :src="disk.poster" />
    <h3>{{ disk.title }}</h3>
    <p>{{ disk.author }}</p>
</div>

    </div>
    
</body>
</html>