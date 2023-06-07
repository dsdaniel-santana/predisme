<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<link rel="stylesheet" href="slick/slick.css">
<link rel="stylesheet" href="slick/slick-theme.css">

<style>
    .slider {
        background-color: yellow;
        text-align: center;
        border: solid 1px red;
        width: 640px;
        margin: auto;
    }

        figure { margin: 0;}
</style>
</head>

<body>
    <h1>Slider usando Slick</h1>
    <hr>

    <div class="slider"> <!-- grupo personalizado (tamanho, posição etc) -->
        
        <div class="exemplo"> <!-- não mexe, porque é necessário pro slick -->
            <figure>
                <img src="imagens/danielbrain-geee1ca2f2_640.png" alt="">
                <figcaption>Legenda 1</figcaption>
            </figure>
        
            <figure>
                <img src="imagens/danieldementia-gecedb5a45_640.jpg" alt="">
                <figcaption>Legenda 2</figcaption>
            </figure>
        
            <figure>
                <img src="imagens/danielmental-g0517eaf3f_640.png" alt="">
                <figcaption>Legenda 3</figcaption>
            </figure>    
        </div>
    </div>


    <p>Legenda total pra todos eles</p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="slick/slick.min.js"></script>

<script>
$(document).ready(function(){
    $('.exemplo').slick({
        autoplay: true,
        autoplaySpeed: 2000
    });
});
</script>
</body>

</html>