<html>

    <head></head>

<body>
    <p><font face='Times New Roman' size='14' color='blue'>Menghitung Luas Segitiga By Aditya Rusmana</font></p>
    <form name='hitungls3' method='post'>

<table>
    <tr>
        <td>Alas</td>
        <td>:</td>
        <td><input type='number' name='alasa' value='0' onchange='hitungluas();'></td>
    </tr>

    <tr>
        <td>Tinggi</td>
        <td>:</td>
        <td><input type='number' name='tinggia' value='0' onchange='hitungluas();'></td>
    </tr>

    <tr>
        <td>Luas</td>
        <td>:</td>
        <td> <input type='text' name='luasa' onchange='hitungluas();'></td>
    </tr>
</table>

        </form>
</body>

<script type='text/javascript'>
    function hitungluas(){
    var alas = document.forms['hitunga']['alasa'].value;
    alas = parseInt(alas);
    var tinggi = document.forms['hitunga']['tinggia'].value;
    tinggi = parseInt(tinggi);
    var luas = (alas*tinggi)/2;
    document.forms['hitunga']['luasa'].value = luas;
}
</script>

</html>