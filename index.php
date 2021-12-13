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
    <h1>DATA BUKU PERPUSTAKAAN</h1>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <!-- th untuk menginisiasi judul kolom tiap tabel,
        tbody untuk menginisiasi isi tabel menggantikan tr,
        thead dan tbody untuk membedakan tiap section pada tabel,
        -->
        <thead>
            <th>NO</th> 
            <th>JUDUL BUKU</th>
            <th>PENGARANG</th>
            <th>TAHUN TERBIT</th>
        </thead>
        <tbody id="barisData">    
        </tbody>
    </table>

    <!-- ajax merupakan seni untuk bertukar data dan update bagian web dengan server tanpa mereload semua page.
    
    -->

    <script type="text/javascript">
        $.ajax({
            type : "GET",
            data : "",
            url  : "ambilData.php",
            success : function (result) {
                var objResult = JSON.parse(result);
                var nomor = 1;

                $.each(objResult, function(key, val){
                    var barisBaru = $("<tr>");
                    barisBaru.html("<td>"+nomor+"</td><td>"+val.judul_buku+"</td><td>"+val.penulis+"</td><td>"+val.tahun_terbit+"</td>");

                    var dataHandler = $("#barisData");
                    dataHandler.append(barisBaru);
                    nomor++;
                })
            }
        })
    </script>
</body>
</html>  