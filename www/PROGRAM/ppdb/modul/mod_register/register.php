<?
include "config/koneksi.php";

$nisn = $_GET['id'];

$sql = mysql_query("select*from ppdb_adm_siswa where nisn='$nisn'")or die(mysql_error());
$row=mysql_fetch_array($sql);

?>

<table width="80%" border="0" align="center">
  <tr>
    <td width="5%"><img src="images/warn.png" width="16" height="16" /></td>
    <td colspan="5"><span class="style1">Catat no peserta dan password dibawah ini, untuk melanjutkan klik</span> <a href="?module=login">Login </a></td>
  </tr>
  <tr>
    <td><img src="images/warn.png" width="16" height="16" /></td>
    <td colspan="5"><span class="style1">Daftar sekali saja. Untuk mengubah/ edit data masuk lewat login dengan no peserta dan password dibawah ini </span></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>Nama</td>
    <td width="11%">&nbsp;</td>
    <td width="1%">:</td>
    <td width="81%"><?= $row['nama']?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">No. Peserta </td>
    <td>:</td>
    <td><?= $row['no_peserta']?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Password:</td>
    <td>:</td>
    <td><?= $row['pass_view']?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="images/right_16.png" width="16" height="16" /></td>
    <td colspan="5">Silahkan login dan melengkapi persyaratan selanjutnya </td>
  </tr>
  <tr>
    <td><img src="images/right_16.png" width="16" height="16" /></td>
    <td colspan="5">Jangan lupa mencatat nomor peserta dan password </td>
  </tr>
</table>
