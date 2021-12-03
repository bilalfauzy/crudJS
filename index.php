<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Javascript</title>
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <h1>DATA BUKU</h1>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <th>
            <td>NO</td>
            <td>JUDUL BUKU</td>
            <td>PENGARANG</td>
            <td>TAHUN TERBIT</td>
        </th>
        <tr>
            <td>aku</td>
            <td>aasuu</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <script type="text/javascript">
        $.ajax({
            type : "GET",
            data : "",
            url  : "ambilData.php",
            success : function (result) {
                
            }


        })
    </script>
</body>
</html>