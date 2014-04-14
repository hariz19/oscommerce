<form method='GET' action=''>
<table border="0" align="center">
  <tr>
    <td align="right">Nama PDB</td>
    <td align="left">
		<input type="hidden" name="module" value="nilai" />
		<input name="nama" type="text" id="nama" size="30" />
	</td>
    <td><input name="submit" type="submit" value="Cari" class="button" /></td>
  </tr>
  <tr>
    <td colspan="3" align="left">&nbsp;</td>
  </tr>
</table>
</form>
<?
$tab = TabView('Nilai Rapor','','',''); echo"$tab";
$nama = @$_GET['nama'];

if (isset($submit) == 'Cari'){
	 $page		= new PagingNilai;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 if(isset($nama) && $nama != '') $args[] = "nama like '%%$nama%%'";
	 
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
	 
	 $res = mysql_query ("SELECT 	a.adm_id AS adm_id,
									a.nisn AS nisn, 
									a.nama AS nama,
									b.rata_rata AS bind, 
									c.rata_rata AS bing, 
									d.rata_rata AS ipa, 
									e.rata_rata AS ips, 
									f.rata_rata AS mat 
							FROM ppdb_adm_siswa AS a 
							LEFT OUTER JOIN ppdb_bind AS b on b.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_bing AS c on c.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_ipa AS d on d.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_ips AS e on e.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_mat AS f on f.nisn=a.nisn 
							$arg LIMIT $posisi,$batas");
						  
	 $jmldata = mysql_num_rows(mysql_query("SELECT  a.adm_id AS adm_id,
													a.nisn AS nisn, 
													a.nama AS nama,
													b.rata_rata AS bind, 
													c.rata_rata AS bing, 
													d.rata_rata AS ipa, 
													e.rata_rata AS ips, 
													f.rata_rata AS mat 
											FROM ppdb_adm_siswa AS a 
											LEFT OUTER JOIN ppdb_bind AS b on b.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_bing AS c on c.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_ipa AS d on d.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_ips AS e on e.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_mat AS f on f.nisn=a.nisn
											$arg"));
}
else{
	 $page		= new Paging;
	 $batas 	= 5;
	 $posisi	= $page->cariPosisi($batas);
	 $res = mysql_query ("SELECT 	a.adm_id AS adm_id,
									a.nisn AS nisn, 
									a.nama AS nama,
									b.rata_rata AS bind, 
									c.rata_rata AS bing, 
									d.rata_rata AS ipa, 
									e.rata_rata AS ips, 
									f.rata_rata AS mat 
							FROM ppdb_adm_siswa AS a 
							LEFT OUTER JOIN ppdb_bind AS b on b.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_bing AS c on c.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_ipa AS d on d.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_ips AS e on e.nisn=a.nisn 
							LEFT OUTER JOIN ppdb_mat AS f on f.nisn=a.nisn LIMIT $posisi,$batas");
	 $jmldata = mysql_num_rows(mysql_query("SELECT 	a.adm_id AS adm_id,
													a.nisn AS nisn, 
													a.nama AS nama,
													b.rata_rata AS bind, 
													c.rata_rata AS bing, 
													d.rata_rata AS ipa, 
													e.rata_rata AS ips, 
													f.rata_rata AS mat 
											FROM ppdb_adm_siswa AS a 
											LEFT OUTER JOIN ppdb_bind AS b on b.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_bing AS c on c.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_ipa AS d on d.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_ips AS e on e.nisn=a.nisn 
											LEFT OUTER JOIN ppdb_mat AS f on f.nisn=a.nisn"));
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
		  <th rowspan="2" class="tbl-headerr ">No</th>
		  <th rowspan="2" class="tbl-headerr ">NISN</th>
		  <th rowspan="2" class="tbl-headerr ">Nama</th>
		  <th colspan="5" class="tbl-header">Nilai Rata-Rata</th>
		  <th rowspan="2" class="tbl-headerr">Action</th>
		</tr>
		<tr>
		  <th class="tbl-header ">B.IND</th>
		  <th class="tbl-header ">B.ING</th>
		  <th class="tbl-header ">MAT</th>
		  <th class="tbl-header ">IPA</th>
		  <th class="tbl-header ">IPS</th>
		</tr>
	</thead>
<tbody>
<?
$i = $posisi;
while($items=mysql_fetch_array($res)){

	$adm_id	=	$items['adm_id'];
	$nisn	=	$items['nisn'];
	$nama	=	BesarKalimat($items['nama']);
	$bind	=	$items['bind'];
	$bing	=	$items['bing'];
	$ipa	=	$items['ipa'];
	$ips	=	$items['ips'];
	$mat	=	$items['mat'];
	$i++;
?>

<tr class="tbl-row tbl-row-even">
	<td class="tbl-num"><?=$i?></td>
	<td class="tbl-num"><?=$nisn?></td>
	<td class="tbl-cell"><?=$nama?></td>
	<td class="tbl-num"><?=$bind?></td>
	<td class="tbl-num"><?=$bing?></td>
	<td class="tbl-num"><?=$mat?></td>
	<td class="tbl-num"><?=$ipa?></td>
	<td class="tbl-num"><?=$ips?></td>
	<td class="tbl-controls">
		<?$edit=Edit("?module=$_GET[module]&act=edit_nilai&id=$nisn","Edit"); echo"$edit";?>
		<?$hapus=Hapus("?module=$_GET[module]&act=del&id=$nisn","$nama","Hapus"); echo"$hapus";?>	
	</td>
</tr>
<?
$jmlhalaman = $page->jumlahHalaman($jmldata,$batas);
@$linkhalaman = $page->navHalaman($_GET['halaman'],$jmlhalaman);

}
?>
</tbody>
<tr class="tbl-footer">
	<td class="tbl-nav" colspan="9">
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



