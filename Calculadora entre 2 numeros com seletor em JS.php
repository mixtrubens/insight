<html>
<head>
      <title>Calculadora: Soma entre dois números usando JS</title>
     </head>
<body>
    <br>
    <input type="number" id="myinput1">
    <input type="number" id="myinput2">
    <button type="button" onclick="somar(myinput1, myinput2)">Somar</button>
    <br>
    <p id="demo">Soma entre os valores colocados aqui</p>
      <script>
        function somar(a, b) {
            var inputvalue1 = parseInt(a.value),//define o valor da variavel 'a' em int
                inputvalue2 = parseInt(b.value),//define o valor da variavel 'b'em int
                result = inputvalue1 + inputvalue2;
            document.getElementById('demo').innerHTML = result; //pega o elemento pelo id do objto
        }
    </script>


     
</body>

</html>