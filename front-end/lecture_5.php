<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lecture_5.css">
    <title>Html</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            border: 1px solid black;
            width: 25px;
            height: 25px;

        }


        td {
            border: 1px solid black;
            width: 25px;
            height: 25px;

        }

        tr {
            border: 1px solid black;
            width: 25px;
            height: 25px;

        }
    </style>
</head>
<body>
<h1>Table</h1>

<table>
    <caption>Table work</caption>
    <thead>
    <tr>
        <th>#</th>
        <th colspan="2"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
    </tr>
    <tr>
        <td>1</td>
        <td rowspan="2">2</td>

    </tr>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
    </tr>
    </tbody>
</table>


</body>
</html>