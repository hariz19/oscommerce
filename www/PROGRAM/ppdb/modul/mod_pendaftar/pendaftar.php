<table align="center" class="pretty-table">
	<tr>
		<th scope="col">No</th>
		<th scope="col">No Peserta</th>
		<th scope="col">Nama</th>
		<th scope="col">Asal Sekolah</th>
		<th scope="col">Verifikasi</th>
	</tr>
<?
 if (empty($_GET['nama'])){
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT*FROM ppdb_adm_siswa ORDER BY no_peserta ASC LIMIT $posisi,$batas");
	 $no = $posisi+1;
	 while($items=mysql_fetch_array($res)){
		if  ($items['sts_verifikasi']==0){
			$ver = "Belum";
		}
		else{
			$ver = "Sudah";
		}
		echo "<tr>
					<td>$no</td>
					<td>$items[no_peserta]</td>
					<td>".BesarKalimat($items['nama'])."</td>
					<td>".BesarKalimat($items['asal_skl'])."</td>
					<td>$ver</td>
			 </tr>";
		$no++;
	 } 

	$jmldata = mysql_num_rows(mysql_query("SELECT*FROM ppdb_adm_siswa"));
	$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
	$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);
?>
<?
}
else{
	$page		= new Paging9;
	 $batas 	= 2;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT*FROM ppdb_adm_siswa WHERE nama LIKE '%$_GET[nama]%' ORDER BY no_peserta ASC LIMIT $posisi,$batas");
	 $no = $posisi+1;
	 while($items=mysql_fetch_array($res)){
		if  ($items['sts_verifikasi']==0){
			$ver = "Belum";
		}
		else{
			$ver = "Sudah";
		}
		echo "<tr>
					<td>$no</td>
					<td>$items[no_peserta]</td>
					<td>".BesarKalimat($items['nama'])."</td>
					<td>".BesarKalimat($items['asal_skl'])."</td>
					<td>$ver</td>
			 </tr>";
		$no++;
	 } 
	 $jmldata = mysql_num_rows(mysql_query("SELECT*FROM ppdb_adm_siswa WHERE nama LIKE '%$_GET[nama]%'"));
	 $jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
	 $linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);
}
?>
<caption><? echo "$linkhalaman";?></caption>
</table>
<br />
<form method='GET' action='<?php echo $_SERVER['PHP_SELF'];?>'>
<table width="457" border="0" align="center">
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
    </tr>
  <tr>
    <td width="29%" align="center"><b><?php CPendaftar('ppdb_adm_siswa');?></b>&nbsp;Pendaftar </td>
    <td width="39%" align="center"><b><?php SVerifikasi('ppdb_adm_siswa');?></b>&nbsp;Sudah Verifikasi</td>			    
    <td width="32%" align="center"><b><?php BVerifikasi('ppdb_adm_siswa');?></b>&nbsp;Belum Verifikasi</td>	   
  </tr>
  <tr>
    <td align="right">Nama</td>
    <input type="hidden" name="module" value="pendaftar" />
    <td align="left"><input name="nama" type="text" id="nama" size="30" /></td>
    <td><input type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>



