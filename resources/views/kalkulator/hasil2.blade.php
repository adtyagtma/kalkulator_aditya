<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 20px solid black;
          margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
             border: none;
            outline: solid black;
            border-radius: 10px;
            background-color: white;
            width: 30%;
            padding:10px 10px;
            box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
        }

        td{
            width: 20px;
            padding: 15px;
        }
       
        tr{
            width: 20px;
            padding: 15px;
        }
        input[type="button"] {
            width: 80%;
            padding: 20px 4px;
            background-color: grey;
            color: black;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-bottom: 10px;
            font-size: large;
            font-weight: bold;
        
        }
        input[type="text"]{
            width: 25%;
            padding: 10px 10px;
            font-size: large;
        
        }

    </style>
</head>
<body>
    <center>
      <h1>kalkulator</h1>
      <form name="form1" action="" method="post">
        <input type="text" name="txt1" id=""><br>
    </center><br>
        <table border=2>
            <tr>
                <td><input type="button" value="1" onClick="form1.txt1.value+='1'"></td>
                <td><input type="button" value="2" onClick="form1.txt1.value+='2'"></td>
                <td><input type="button" value="3" onClick="form1.txt1.value+='3'"></td>
                <td><input type="button" value="+" onClick="form1.txt1.value+='+'"></td>
            </tr>
             <tr>
                <td><input type="button" value="4" onClick="form1.txt1.value+='5'"></td>
                <td><input type="button" value="5" onClick="form1.txt1.value+='6'"></td>
                <td><input type="button" value="6" onClick="form1.txt1.value+='7'"></td>
                <td><input type="button" value="-" onClick="form1.txt1.value+='-'"></td>
             </tr>
       <tr>
                 <td><input type="button" value="7" onClick="form1.txt1.value+='7'"></td>
                <td><input type="button" value="8" onClick="form1.txt1.value+='8'"></td>
                <td><input type="button" value="9" onClick="form1.txt1.value+='9'"></td>
                <td><input type="button" value="x" onClick="form1.txt1.value+='*'"></td>
             </tr>
             <tr>
             <td><input type="button" value="0" onClick="form1.txt1.value+='0'"></td>
                <td><input type="button" value="/" onClick="form1.txt1.value+='/'"></td>
                <td><input type="button" value="c" onClick="form1.txt1.value=''" class="operator"></td>
                <td><input type="button" value="=" onClick="form1.txt1.value=eval(form1.txt1.value)"></td>
   
      </form>
</body>
</html>