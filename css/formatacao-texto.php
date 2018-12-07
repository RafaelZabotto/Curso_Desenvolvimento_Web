<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <title>Formatações de Textos</title>
        <style type="text/css">

            p{
                font-family: "Georgia";

            }

            .texto{
                /*16px é o default dos browsers*/
                font-size: 16px; /* px, %, em */
            }
            
            /*em deixa o texto proporcional a div*/
            div{
                font-size: 30px;
            }
            
            /*formatação parte 2*/
            .negrito{
                font-weight: bold; /* tem duas opções: normal, bold e valores de 0 a 900*/
            }

            .estilo{
                /*font-style: italic;*/
                font-style: oblique;
            }

            .texto-padrao{
                font: bold 40px "Palatino Linotype", "Book Antiqua", Palatino, serif;
            }

            .formatacao{
                text-decoration: underline;
                /*text-decoration: overline;*/
                /*text-decoration: line-through;*/
            }

        </style>

        
    </head>

        <body>
           
                <p class="texto">Lorem ipsum <span class="formatacao">dolor</span> sit amet, 
                    consectetur adipiscing elit</p>
                <p class="negrito">Conteúdo 1</p>
                <p>Conteúdo 2</p>
                <p class="estilo">Conteúdo 3</p>
                <p class="texto-padrao">Conteúdo 4</p>
       
       
        </body>

</html>