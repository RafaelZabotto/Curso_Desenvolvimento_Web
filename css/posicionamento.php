<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
    
        <title>Posicionamento</title>
        <style type="text/css" >
        
            body{
                background: #61bd8c;
            }

            #conteudo-principal{
                background: #FFFFFF;
                padding: 10px;
                width: 600px;
                height: 2500px;
                margin: 30px auto;
                margin-top: 120px;
                /*position: relative;*/

            }

            .caixa{
                background: #1e6f44;
                width: 100px;
                height: 100px;
                color: #FFFFFF;
            }

            #relativo{

                position:relative;
                left:-30px;
                top: 0;
                width: 660px;
            }

            #absolute{
                position: absolute;
                bottom: 0;
                right: 30px;
            }

            #fixed{

                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                background: #000;
            }

        </style>

    </head>

        <body>

            <div id="conteudo-principal">
            
                <h1>Posicionamento</h1>

                <h4>Relative</h4>
                <div id="relativo" class="caixa">Relative</div>

                <h4>Absolute</h4>
                <div id="absolute" class="caixa">Absolute</div>

                <h4>Fixed</h4>
                <div id="fixed" class="caixa">Fixed</div>


            </div>
            
        </body>

</html>