<?php
/**
 * Plugin Name: Frases aleatorias
 * Plugin URI: https://carmensiles.com
 * Description: Inserta una frase aleatoria
 * Version: 1.0.0
 * Author: Carmen Siles
 * Author URI: https://carmensiles.com
 * License: GPL2
 */
add_action('wp_footer', function(){?>

<script>


        let frases = [
            'soy otaku',
            'soy gamer',
            'me gusta programar',
            'soy frikaza',
            'toco la guitarra',
            'me gusta el rock',
            'no se pero las peliculas de animales me hacen llorar',
            'tengo una gata',
        ];
        function numeroAleatorio(min, max) {
            return Math.round(Math.random() * (max - min) + min);
        }
     var lon=frases.length-1;

        alert(frases[numeroAleatorio(0,lon)])

        document.write(frases[numeroAleatorio(0,lon)])


    </script>

<?php }  ,9999); ?>



