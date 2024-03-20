<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link di vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios per chiamate apy -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link style css -->
    <link rel="stylesheet" href="style.css">
    <!-- collegamento fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    
<div id="app">
    <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        
            <i  class="fa-brands fa-spotify"></i>

        </div>
    </nav>
    <div id="contenitore" class="container my-5">
        <div class=" row justify-content-around  flex-wrap gap-4 ">
            
        
        
        
            <div class="col-3 p-0 border rounded-2 " id="cards" v-for="(disco,index) in dischi_lista" @click="handleClick(disco)">
                <img  class="p-3 img-fluid   w-100 " :src="disco.poster" alt=""> 
            </div>
        </div>
    </div>
    <div id="Immagine_Grande" class="col " v-if="selectedDisc">
        <div class="row justify-content-center  align-items-center text-center">
            <img :src="selectedDisc.poster" alt="">
            <span id="Nome_canzone">{{selectedDisc.title}}</span>
            <span id="autore">{{selectedDisc.author}}</span>
            <span id="anno">{{selectedDisc.year}}</span>
        </div>
    </div>
    


   
</div>



<!-- link js -->
<script src="./code.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>