<?php
require "includes/cabecalho.php";
?>
    
    <div class="slider"> <!-- grupo personalizado (tamanho, posição etc) -->
        
        <div class="exemplo"> <!-- não mexe, porque é necessário pro slick -->
            <figure>
                <img src="imagens/danielbrain-geee1ca2f2_640.png" alt="">
                <figcaption><b>Ilustração:</b>  Homem preso Dentro da Caixa</figcaption>
            </figure>
        
            <figure>
                <img src="imagens/danieldementia-gecedb5a45_640.jpg" alt="">
                <figcaption><b>Ilustração:</b> de Pessoa com anomalias no cerebro</figcaption>
            </figure>
        
            <figure>
                <img src="imagens/danielmental-health-ge824b2be3_640.jpg" alt="">
                <figcaption><b>Ilustração:</b> uma mão segurando pote com remédios caidos</figcaption>
            </figure>
            
            
        </div>
    </div>

   

    <div id="container">


        <h1>Ansiedade</h1>


        <h2>Uma em cada três pessoas tem um transtorno mental, como depressão, ansiedade e doença de Alzheimer</h2>

        
        <p>Ansiedade é uma resposta emocional normal que todos nós experimentamos em situações estressantes ou
            desafiadoras. É uma sensação de apreensão, inquietação e preocupação em relação ao futuro ou a eventos
            incertos. No entanto, quando a ansiedade é intensa, persistente e interfere nas atividades diárias, pode ser
            um transtorno de ansiedade.</p>
        <p>Os transtornos de ansiedade são condições psicológicas que envolvem sentimentos de medo e apreensão
            excessivos. Existem vários tipos de transtornos de ansiedade, incluindo transtorno de ansiedade
            generalizada, transtorno obsessivo-compulsivo, transtorno de pânico, transtorno de estresse pós-traumático e
            fobia social.</p>
        <p>Os sintomas físicos da ansiedade incluem palpitações, sudorese, tremores, tensão muscular, fadiga e insônia.
            Os sintomas psicológicos incluem preocupação excessiva, medo, irritabilidade e dificuldade em se concentrar.
            O tratamento da ansiedade pode incluir terapia cognitivo-comportamental, medicação e técnicas de
            relaxamento, como exercícios de respiração profunda e meditação.</p>

        <h3 class="centralizar">Tipos de Ansiedade</h3>


        <p>Existem vários tipos de transtornos de ansiedade, cada um com suas próprias características e sintomas. Os
            principais tipos de ansiedade são:</p>

            <figure><img src="imagens/danielpexels-anna-shvets-4226221.jpg" width="300px"></figure>

        <ul>
            <li><b>Transtorno de ansiedade generalizada (TAG):</b> caracterizado por ansiedade e preocupação excessivas
                sobre várias coisas, mesmo que não haja uma razão específica para isso. Os sintomas incluem tensão
                muscular, fadiga, irritabilidade e dificuldade em concentrar-se.</li>

            <li><b>Transtorno de pânico:</b> caracterizado por ataques de pânico inesperados e recorrentes, que podem
                incluir sintomas como sudorese, palpitações, tremores e sensação de sufocamento.</li>

            <li><b>Transtorno obsessivo-compulsivo (TOC):</b> caracterizado por obsessões recorrentes e pensamentos
                indesejados que levam a comportamentos repetitivos e rituais compulsivos, como lavar as mãos
                repetidamente ou verificar as coisas várias vezes.</li>
            <li><b>Transtorno de estresse pós-traumático (TEPT):</b> ocorre após um evento traumático, como um acidente
                de carro ou experiência de guerra. Os sintomas podem incluir flashbacks, pesadelos e ansiedade extrema
                em resposta a gatilhos relacionados ao trauma.</li>
            <li><b>Fobia social:</b> caracterizado por um medo excessivo de situações sociais e de ser julgado ou
                avaliado negativamente pelos outros. Os sintomas incluem rubor facial, sudorese, tremores e dificuldade
                em falar.</li>

            <li><b>Transtorno de ansiedade de separação:</b> caracterizado por um medo extremo de se separar de uma
                pessoa específica, como um membro da família ou um animal de estimação. Os sintomas incluem ansiedade e
                medo intenso quando se afasta da pessoa ou do animal.</li>
        </ul>
        <p>Cada tipo de transtorno de ansiedade é único e pode ser tratado com terapia, medicação ou uma combinação dos
            dois. É importante consultar um profissional de saúde mental para obter um diagnóstico adequado e um plano
            de tratamento personalizado.</p>

        <h2>Saiba mais sobre Ansiedade visitando os sites:</h2>

        <ul>
            
            <li><a href="https://www.minhavida.com.br/saude/temas/ansiedade" target="_blank">Minha Vida</a></li>
            <li><a href="https://drauziovarella.uol.com.br/doencas-e-sintomas/ansiedade/" target="_blank">Drauzio
                    Varella</a></li>
            <li><a href="https://www.ipqhc.org.br/ansiedade/" target="_blank">Instituto de Psiquiatria do Hospital das
                    Clínicas de São Paulo</a></li>
            <li><a href="https://www.apa.org/topics/anxiety/" target="_blank">APA - American Psychological
                    Association</a></li>


        </ul>









    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/ansiedade.js"></script>
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