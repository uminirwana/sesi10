<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
    <DIV>
        NIM 
        <input type="text" id="txNIM" name="NIM">
    </DIV>
    <DIV>
        NAMA
        <input type="text" id="txNAMA" name="NAMA">
    </DIV>
    <DIV>
        jenis kelamin
        <input type="radio" id="txJKEL" name="JKEL" value="laki-laki">laki-laki 
         <input type="radio" id="txJKEL" name="JKEL" value="perempuan">perempuan 
    </DIV>
    
    <div>
        jurusan
        <select name="JURUSAN" id="txJUR">
            <option value="MTI">MTI</option>
            <option value="SK">SK</option>
            <option value="TI-PAR">TI-PAR</option>
            <option value="DKV">DKV</option>
            <option value="TEKNIK">TEKNIK</option>
            <option value="ARSITEKTUR">ARSITEKTUR</option>
    </select>
     </div>
      <div>
      Hobi
      <input type="checkbox" name="hobi_1">mengambar
        <input type="checkbox" name="hobi_2">mendengar music
        <input type="checkbox" name="hobi_3">menyanyi
         <input type="checkbox" name="hobi_4">tidur
    

    </div>
    

    <div>
        <button type="submit">Kirim Data</button>
    </div>


    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            let nim= F.namedItem("NIM").value;
            let nama= F.namedItem("NAMA").value;
            let jkel= F.namedItem("JKEL").value;
            let jur= F.namedItem("JURUSAN").value;
            let h1= F.namedItem("hobi_1").checked;


            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JKEL: "+jkel);
            console.log("JURUSAN: "+jur);
            console.log("Hobi mengambar: "+h1);
            return false;
        }
    </script>
    
</body>
</html>