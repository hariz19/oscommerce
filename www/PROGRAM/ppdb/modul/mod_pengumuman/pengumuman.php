<form method='GET' action='<?php echo $_SERVER['PHP_SELF'];?>'>
<table width="400" border="0" align="center">
  <tr>
    <td width="45%" align="left">Nama Siswa </td><input type=hidden name=module value=pengumuman>
    <td width="39%" align="left"><input name="nama" type="text" id="nama" size="30" /></td>
    <td width="22%"><input type="submit" value="Cari" class="button" /></td>
  </tr>
</table>
</form>
<br />
<table align="center" class="pretty-table">
	<tr>
		<th scope="col">No</th>
		<th scope="col">No Peserta</th>
		<th scope="col">Nama</th>
		<th scope="col">NISN</th>
		<th scope="col">Asal Sekolah</th>
		<th scope="col">Status</th>
	</tr>
<?
 if (empty($_GET['nama'])){
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT*FROM ppdb_adm_siswa WHERE sts_seleksi = '1' ORDER BY no_peserta ASC LIMIT $posisi,$batas");
	 $no = $posisi+1;
	 while($items=mysql_fetch_array($res)){
		if  ($items['sts_seleksi']==0){
		$sel = "Tidak Lulus";
		}
		else{
			$sel = "Lulus";
		}
		echo "<tr>
					<td>$no</td>
					<td>$items[no_peserta]</td>
					<td>".BesarKalimat($items['nama'])."</td>
					<td>$items[nisn]</td>
					<td>".BesarKalimat($items['asal_skl'])."</td>
					<td>$sel</td>
			 </tr>";
		$no++;
	 } 

	$jmldata = mysql_num_rows(mysql_query("SELECT*FROM ppdb_adm_siswa WHERE sts_seleksi = '1'"));
	$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
	$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);
?>
<?
}
else{
	 $page		= new Paging9;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT*FROM ppdb_adm_siswa WHERE nama LIKE '%$_GET[nama]%'  AND sts_seleksi = '1'ORDER BY no_peserta ASC LIMIT $posisi,$batas");
	 $no = $posisi+1;
	 while($items=mysql_fetch_array($res)){
		if  ($items['sts_seleksi']==0){
			$sel = "Tidak Lulus";
		}
		else{
			$sel = "Lulus";
		}
     echo "<tr>
					<td>$no</td>
					<td>$items[no_peserta]</td>
					<td>".BesarKalimat($items['nama'])."</td>
					<td>$items[nisn]</td>
					<td>".BesarKalimat($items['asal_skl'])."</td>
					<td>$sel</td>
			 </tr>";
		$no++;
	 } 
	 $jmldata = mysql_num_rows(mysql_query("SELECT*FROM ppdb_adm_siswa WHERE nama LIKE '%$_GET[nama]%' AND sts_seleksi = '1'"));
	 $jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
	 $linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);
}
?>
<caption><? echo "$linkhalaman";?></caption>
</table>





