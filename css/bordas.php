<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <title>Bordas</title>
        <style type="text/css">

            
            #a{border: 20px red solid;}    
            #b{border: 20px blue dotted}
            #c{border: 20px green dashed; }   
            #d{border: 20px orange double;}
            #e{border: 20px purple groove;}
            #f{border: 20px yellow ridge;}
            #g{border: 20px gray inset;}
            #h{border: 20px red outset;}
            
            
            #i{
                /*A sequencia de color segue o sentido horário*/
                border-color: red green yellow blue;
                border-width: 10px 8px 6px 3px;
                border-style: solid;
            }

            #j{

                /*Se colocar 2 parametros para o width, ele irá usar o primeiro para as bordas superiores e inferiores e o outro para as laterais*/
                border-color: red green yellow blue;
                border-width: 10px 8px;
                border-style: solid;
            }

            #k{
                /*O border style tmb pode ser setado para cada tipo de borda*/
                border-color: red green yellow blue;
                border-width: 10px 8px 6px 3px;
                border-style: solid dotted dashed solid;
            }
            
            

        </style>

        
    </head>

        <body>

            <div id="a">Borda Solid</div><br>
            <div id="b">Borda Dotted</div><br>
            <div id="c">Borda Dashed</div><br>
            <div id="d">Borda Double</div><br>
            <div id="e">Borda Groove</div><br>
            <div id="f">Borda Ridge</div><br>
            <div id="g">Borda Inset</div><br>
            <div id="h">Borda Outset</div><br>

            <hr>

            <h1>Manipulando Bordas</h1>

            <div id="i">Conteúdo</div><br>
            <div id="j">Conteúdo</div><br>
            <div id="k">Conteúdo</div><br>
            
        </body>

</html>