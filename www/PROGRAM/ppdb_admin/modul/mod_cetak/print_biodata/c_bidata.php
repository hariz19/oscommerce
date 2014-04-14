<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">NISN</td>
    <input type="hidden" name="module" value="c_bidata" />
    <td align="left"><input name="nisn" type="text" id="nisn" size="30" /></td>
  </tr>
  <tr>
    <td align="right">Nama PDB</td>
    <td align="left">
	<input name="nama" type="text" id="nama" size="30" />
	<input name="sts" type="hidden" id="sts" value="1" /></td>
    <td><input name="submit" type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?
$tab = TabView('Cetak Biodata','','',''); echo"$tab";
$nisn = $_GET['nisn'];
$nama = $_GET['nama'];

if ($submit == "Cari"){
	 $page		= new Paging9;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 if(isset($nisn) && $nisn != '') $args[] = "nisn = '$nisn'";
	 if(isset($nama) && $nama != '') $args[] = "nm_siswa like '%%$nama%%'";
	 if(isset($sts) && $sts != '') $args[] = "sts_bio = '$sts'";
	 
		if(count($args)>1){
			$arg = " where ".$args[0];
			$i = 1;
			while ($i < count($args)){
				$arg .= " and ".$args[$i];
				$i++;
			}
		}
		elseif (count($args)==1){
			$arg = " where ".$args[0];
		}
	 
	 $res = mysql_query ("SELECT * FROM ppdb_biodata  $arg ORDER BY nisn ASC LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT * FROM ppdb_biodata  $arg"));
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT*FROM ppdb_biodata WHERE sts_bio=1 ORDER BY nisn LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT*FROM ppdb_biodata WHERE sts_bio=1"));
}
	
?>
<div id="aaa" align="center"></div>
<form action='' method="GET" name="tabel" id='tabel'>
	<span class="tbl-reset">
	<? $button = addControl("?module=$_GET[module]","Refresh","images/32/refresh.png",true);echo"$button";?>
	</span>
	<table id="theTable" align="center"  class="tbl"  >
	<thead>
		<tr>
		  <th class="tbl-header ">No</th>
		  <th class="tbl-header ">NISN</th>
		  <th class="tbl-header ">Nama</th>
		  <th class="tbl-header ">Asal Sekolah</th>
		  <th class="tbl-header ">Tempat Lahir</th>
		  <th class="tbl-header ">Tanggal Lahir</th>
		  <th class="tbl-header ">Jenis Kelamin</th>
		  <th class="tbl-headerr ">Alamat</th>
		  <th class="tbl-headerr">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$bio_id			=	$items[bio_id];
	$nama			=	BesarKalimat($items[nm_siswa]);
	$nisn			=	$items[nisn];
	$asal_skl		=	BesarKalimat($items[asl_sekolah]);
	$tmp_lahir		=	BesarKalimat($items[tmp_lahir]);
	$tgl_lahir		= 	$items[tgl_lahir];
	$jns_kelamin	= 	BesarKalimat($items[jns_kelamin]);
	$agama			= 	BesarKalimat($items[agama]);
	$alamat			= 	BesarKalimat($items[almt_siswa]);
	$i++;

?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-num"><?=$nisn?></td>
	<td class="tbl-cell"><?=$nama?></td>
	<td class="tbl-cell"><?=$asal_skl?></td>
	<td class="tbl-cell"><?=$tmp_lahir?></td>
	<td class="tbl-num"><?=$tgl_lahir?></td>
	<td class="tbl-cell"><?=$jns_kelamin?></td>
	<td class="tbl-cell"><?=$alamat?></td>
	<td class="tbl-controls">
		<?$cetak=Cetak("./cetak/f_biodata.php?id=$nisn","Cetak"); echo"$cetak";?>
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
$linkhalaman = $page->navHalaman($_GET[halaman],$jmlhalaman);

}
?>
</tbody>
<tr class="tbl-footer">
	<td class="tbl-nav" colspan="10">
		<table width="100%" class="tbl-footer">
			<tbody>
			<tr>
				<td width="33%" class="tbl-pages">
				<?=$linkhalaman?>
				</td>
			</tr>
			</tbody>
		</table>
	</td>
</tr>
</table>
</form>
</ul>
</span>
</div>



