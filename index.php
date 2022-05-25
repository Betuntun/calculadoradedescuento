<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de descuentos</title>
    <style>
        .cuadro{
            display:flex;
            align-items: center;
            justify-content: center;
        
            padding-top: 50px;
            flex-direction: column;
        }
        .cuadro div{
            display: flex;   
            flex-direction: column;
            padding-top: 10px;
        }
        .cuadro div span{
            color:white;
        }
    </style>
</head>
<body style="background-color: gray;">
    <div class="cuadro" >
        <div >
            <span> $ Precio: </span>
            <input type="number" id="precio" name="precio">
        </div>
        <div>
            <span>% Descuento:  </span>
            <input type="number" id="descuento" name="descuento">
        </div>
        <div>
            <span> $ Resultado: </span>
            <input type="text" id="resultado" name="resultado" disabled>
        </div>
        <div>
                  
        <button onclick="borrar()">Borrar</button>
        </div>

    </div>
    <div>

    </div>
    <script>
        var resultado = document.getElementById('resultado');
        document.getElementById('descuento').addEventListener('input', e=>{        
            var precio = document.getElementById('precio').value;
            var descuento = document.getElementById('descuento').value;
            var descuento = ((precio * descuento) / 100);
            resultado.value = precio - descuento; 
        });
        document.getElementById('precio').addEventListener('input', e=>{        
            var precio = document.getElementById('precio').value;
            var descuento = document.getElementById('descuento').value;
            var descuento = ((precio * descuento) / 100);
            resultado.value = precio - descuento; 
        });
        function borrar(){
            var precio = document.getElementById('precio').value = "";
            var descuento = document.getElementById('descuento').value = "";
            var resultado = document.getElementById('resultado').value = "";
        }

    
    </script>
</body>
</html>