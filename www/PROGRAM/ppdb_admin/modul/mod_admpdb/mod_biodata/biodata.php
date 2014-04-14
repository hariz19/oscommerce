<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">NISN</td>
    <input type="hidden" name="module" value="biodata" />
    <td align="left"><input name="nisn" type="text" id="nisn" size="30" /></td>
  </tr>
  <tr>
    <td align="right">Nama PDB</td>
    <td align="left"><input name="nama" type="text" id="nama" size="30" /></td>
    <td><input name="submit" type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?
$tab = TabView('Biodata','','',''); echo"$tab";
$nisn = @$_GET['nisn'];
$nama = @$_GET['nama'];
$arg  = @$_GET['arg'];
if (isset($submit) == 'Cari'){
	 $page		= new Paging9;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 if(isset($nisn) && $nisn != '') $args[] = "a.nisn = '$nisn'";
	 if(isset($nama) && $nama != '') $args[] = "a.nama like '%%$nama%%'";
	 
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
	 
	 $res = mysql_query ("select a.adm_id as adm_id, 
						  a.nisn as nisn, 
						  a.no_peserta as no_peserta, 
						  a.nama as nama, 
						  a.asal_skl as asal_skl, 
						  a.sts_verifikasi as sts_verifikasi, 
						  a.sts_seleksi as sts_seleksi,
						  b.sts_bio as sts_bio
						  from ppdb_adm_siswa as a 
						  left outer join ppdb_biodata as b on a.nisn=b.nisn 
						  $arg ORDER BY a.nisn ASC LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows(mysql_query("select a.adm_id as adm_id,
											a.nisn as nisn, 
											a.no_peserta as no_peserta, 
											a.nama as nama, 
											a.asal_skl as asal_skl, 
											a.sts_verifikasi as sts_verifikasi, 
											a.sts_seleksi as sts_seleksi,
											b.sts_bio as sts_bio
											from ppdb_adm_siswa as a 
											left outer join ppdb_biodata as b on a.nisn=b.nisn $arg"));
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT*FROM ppdb_adm_siswa as a, ppdb_biodata as b where a.nisn=b.nisn ORDER BY a.nisn ASC LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT*FROM ppdb_adm_siswa as a, ppdb_biodata as b where a.nisn=b.nisn "));
}

?>

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
		  <th class="tbl-header ">Status Biodata</th>
		  <th class="tbl-header ">Verifikasi</th>
		  <th class="tbl-header ">Seleksi</th>
		  <th class="tbl-header">Action</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$adm_id		=	$items['adm_id'];
	$no_peserta	=	$items['no_peserta'];
	$nama		=	BesarKalimat($items['nama']);
	$nisn		=	$items['nisn'];
	$asal_skl	=	BesarKalimat($items['asal_skl']);
	$verif		=	$items['sts_verifikasi'];
	$sel		=	$items['sts_seleksi'];
	$status		= 	$items['sts_bio'];
	$i++;

	if  ($items['sts_verifikasi']==0){if  ($status == 0){$ver = "<font color=red>Belum</font>";}
	else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Belum</a>";}}
	else{$ver = "<a href='?module=biodata&act=v_edit&v=$verif&id=$adm_id'>Sudah</a>";}

	if  ($items['sts_seleksi']==0){if  ($verif == 0){$sel = "<font color=red>Tidak Lulus</font>";}
	else{$sel = "<a href='?module=biodata&act=s_edit&s=$sel&id=$adm_id'>Tidak Lulus</a>";}}
	else{$sel = "<a href='?module=biodata&act=s_edit&s=$sel&id=$adm_id'>Lulus</a>";}
	
	if  ($status == 0){$sts = "<font color=red>Belum Lengkap</font>";}else{$sts = "Sudah Lengkap";}
?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-num"><?=$nisn?></td>
	<td class="tbl-cell"><?=$nama?></td>
	<td class="tbl-cell"><?=$asal_skl?></td>
	<td class="tbl-cell"><?=$sts?></td>
	<td class="tbl-cell"><?=$ver?></td>
	<td class="tbl-cell"><?=$sel?></td>
	<td class="tbl-controls">
		<?$edit=Edit("?module=$_GET[module]&act=edit_bio&id=$nisn","Edit"); echo"$edit";?>
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$nisn","$nama","Hapus"); echo"$hapus";?>	
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);

}
?>
</tbody>
<tr class="tbl-footer">
	<td class="tbl-nav" colspan="8">
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
</div>



