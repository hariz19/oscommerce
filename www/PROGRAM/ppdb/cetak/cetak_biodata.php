<?
session_start();
include "../config/koneksi.php";
include "../config/functions_all.php";

$sql = mysql_query("SELECT * FROM  ppdb_biodata WHERE nisn = '$_SESSION[nisn]'")or die(mysql_error());
$res=mysql_fetch_array($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style13 {font-size: 12px}
.style14 {font-size: 10px}
.style23 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style24 {font-size: 10}
-->
</style>
</head>

<body><table width="73%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="11"></td>
  </tr>
  <tr>
    <td colspan="11" align="center"><span class="style23">DATA CALON PESERTA DIDIK </span></td>
  </tr>
  <tr>
    <td colspan="11" align="center"><hr /> </td>
  </tr>
  <tr>
    <td colspan="10"><span class="style13">A. KETERANGAN PRIBADI SISWA </span></td>
    <td width="13%">&nbsp;</td>
  </tr>
  <tr>
    <td width="13%"><span class="style14">Nomor Induk Siswa Nasional </span></td>
    <td width="1%">:</td>
    <td colspan="7"><span class="style14"><?=$res['nisn']?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Nama Calon Peserta Didik</span> </td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['nm_siswa'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Tempat, Tangga Lahir </span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['tmp_lahir'])?>,&nbsp;<?=tgl_indo($res['tgl_lahir'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Jenis Kelamin </span></td>
    <td>:</td>
    <td><span class="style14"><?=BesarKalimat($res['jns_kelamin'])?>,</span></td>
    <td align="right" class="style14"><span class="style24">Anak Ke </span></td>
    <td class="style14"><span class="style24">:</span></td>
    <td class="style14"><span class="style24">
      <?=$res['ank_ke']?>
    </span></td>
    <td align="right" class="style14"><span class="style24">dari</span></td>
    <td class="style14"><span class="style24">:</span></td>
    <td class="style14"><span class="style24">
      <?=$res['jml_saudara']?>
    Saudara</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Status</span></td>
    <td>:</td>
    <td colspan="7"><span class="style14"><?=BesarKalimat($res['sts_siswa'])?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><span class="style13">B. KETERANGAN TEMPAT TINGGAL SISWA </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Alamat Peserta Didik </span></td>
    <td>:</td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['almt_siswa'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Selama bersekolah tinggal dengan </span></td>
    <td>:</td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['tmpt_siswa'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Ke Sekolah menggunakan </span></td>
    <td>:</td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['kendaraan'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10"><span class="style13">C. KETERANGAN JASMANI</span> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Berat Badan </span></td>
    <td><span class="style14">:</span></td>
    <td width="7%"><span class="style14">
      <?=$res['brt_badan']?>
    </span></td>
    <td width="7%" align="right"><span class="style14">Tinggi Badan </span></td>
    <td width="1%"><span class="style14">:</span></td>
    <td width="2%"><span class="style14">
      <?=$res['tgi_badan']?>
    </span></td>
    <td width="6%" align="right"><span class="style14">Golongan Darah </span></td>
    <td width="1%"><span class="style14">:</span></td>
    <td colspan="2"><span class="style14">
      <?=BesarKalimat($res['gol_darah'])?>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11"><span class="style13">D. KETERANGAN TENTANG PENDIDIKAN SEBELUMNYA</span> </td>
  </tr>
  <tr>
    <td><span class="style14">Nama Sekolah Asal </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['asl_sekolah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Alamat Sekolah </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['almt_sekolah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Kelas di SMP </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['asl_kls_smp'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11"><span class="style13">E. KETERANGAN TENTANG ORANG TUA</span> </td>
  </tr>
  <tr>
    <td><span class="style14">Nama Ayah </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['nm_ayah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Nama Ibu </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['nm_ibu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Alamat Orang Tua </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['almt_ortu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Pekerjaan Ayah </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['kerja_ayah'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Pekerjaan Ibu </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['kerja_ibu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Penghasilan Orang Tua </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=FormatRupiah($res['hasil_ortu'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">Tanggungan Biaya </span></td>
    <td><span class="style14">:</span></td>
    <td colspan="7"><span class="style14">
      <?=BesarKalimat($res['tgung_biaya'])?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">Bandung,</td>
  </tr>
  <tr>
    <td class="style14">Mengetahui</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">&nbsp;</td>
  </tr>
  <tr>
    <td class="style14">Orang Tua Siswa, </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" class="style14">Siswa,</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="7">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style14">
      <?=BesarKalimat($res['nm_ayah'])?>
    </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="16%" align="center"><span class="style14">
      <?=BesarKalimat($res['nm_siswa'])?><hr />
    </span></td>
    <td width="22%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><span class="style14">
      <?=$res['nisn']?>
    </span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
