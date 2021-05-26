
<?php
$Nama =$_POST["Nama"];
$Alamat =$_POST["Alamat"];
$Tempat_Lahir =$_POST["Tempat_Lahir"];
$Tanggal_Lahir=$_POST["Tanggal_Lahir"];
$Jeniskel=$_POST["Jeniskel"];
$Pendidikan=$_POST["Pendidikan"];
?>
<h1>Data Registrasi</h1>
<table border="2" bgcolor="">
<tr>
    <td>Nama</td><td><?php echo $Nama;?></td>
</tr>
<tr>
    <td>Alamat</td><td><?php echo $Alamat;?></td>
</tr>
<tr>
    <td>Tempat Lahir</td><td><?php echo $Tempat_Lahir ;?></td>
</tr>
<tr>
    <td>Tanggal Lahir</td><td><?php echo $Tanggal_Lahir ;?></td>
</tr>
<tr>
    <td>Jenis Kelamin</td><td><?php echo $Jeniskel ;?></td>
</tr>
<tr>
    <td>Pendidikan</td><td><?php echo $Pendidikan ;?></td>
</tr>


</table>
<a href="../Polder/keanggotaan.php">Back To Home</a>