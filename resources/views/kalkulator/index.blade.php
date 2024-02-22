<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AWOKAWOKAWOK</title>
    <style>
         body {
            margin: 0;
            background-color: none;
            background-image: linear-gradient(to left, yellow, cyan);
        }
        table {
            border none: 1px solid black;
            margin-left: auto;
            margin-right: auto; 
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            background-color: skyblue;
            outline: 2px solid black;
        }
        td {
            width: 100px;
            padding:20px;
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: green;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            font-weight:bold;
            font-size : large;
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 20px;
            background-color: red;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            font-size : large;
        }
        input[type="number"]{
            border: none;
            text-align;
        }
    </style>
</head>
<body>
<h1><center>KALKULATOR MANYALA ABANGKUH</center></h1>
    <center>
    <form action=" {{ route('proses.store') }} " method="post">
        @csrf
    <table border=1 width=400 height=300>
        <tr>
            <td colspan=2> Angka Pertama : <input type="number" name="a" id=""></td>
            
            <td colspan=2 rowspan=2><input type="reset" value="reset" name="op"></td>
            
        </tr>
        <tr>
            <td colspan=2>Angka Kedua : <input type="number" name="b" id=""></td>
            
        </tr>
        <tr>
            <td colspan=4>Hasil : </td>
            
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"></td>
        </tr>
        <tr>
            <td colspan=4>
                <center>Nama :Aditia Gautama
                <br>
                Kelas: XII PPLG 2</center>
            </td>
            
        </tr>
      
</center>
<br>
</body>
</html>