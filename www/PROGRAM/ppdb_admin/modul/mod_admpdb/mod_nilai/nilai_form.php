<?
$tab = TabView('Edit Nilai Rapor','','',''); echo"$tab";
$sql = mysql_query("SELECT  a.sem_1 as bhs1, a.sem_2 as bhs2, a.sem_3 as bhs3, a.sem_4 as bhs4, a.sem_5 as bhs5, a.rata_rata as bhs,
							b.sem_1 as big1, b.sem_2 as big2, b.sem_3 as big3, b.sem_4 as big4, b.sem_5 as big5, b.rata_rata as big,
							c.sem_1 as mat1, c.sem_2 as mat2, c.sem_3 as mat3, c.sem_4 as mat4, c.sem_5 as mat5, c.rata_rata as mat,
							d.sem_1 as ipa1, d.sem_2 as ipa2, d.sem_3 as ipa3, d.sem_4 as ipa4, d.sem_5 as ipa5, d.rata_rata as ipa,
							e.sem_1 as ips1, e.sem_2 as ips2, e.sem_3 as ips3, e.sem_4 as ips4, e.sem_5 as ips5, e.rata_rata as ips,
							a.nisn as nisn
					FROM
							ppdb_bind as a, ppdb_bing as b, ppdb_mat as c, ppdb_ipa as d, ppdb_ips as e
					WHERE
							 a.nisn = '$_GET[id]' and b.nisn = '$_GET[id]' and
							 c.nisn = '$_GET[id]' and d.nisn = '$_GET[id]' and
							 e.nisn = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);

?>
<div id="info" align="center"></div>
<form action="" method="post" id="rapor">
<input name="nisn" type="hidden"  value="<?= $row['nisn']?>" />
<table width="560" height="242" border="0" align="center">
  <tr>
    <td width="234" rowspan="2" align="center" valign="middle" bgcolor="#00CC33"><strong>Mata Pelajaran </strong></td>
    <td colspan="5" bgcolor="#00CC33"><div align="center"><strong>Nilai Rapor Semester</strong></div></td>
    <td colspan="2" rowspan="2" align="center" valign="middle" bgcolor="#00CC33"><strong>Rata-Rata</strong></td>
  </tr>
  <tr>
    <td width="40" bgcolor="#00CC33"><div align="center" ><strong>1</strong></div></td>
    <td width="40" bgcolor="#00CC33"><div align="center" ><strong>2</strong></div></td>
    <td width="40" bgcolor="#00CC33"><div align="center" ><strong>3</strong></div></td>
    <td width="40" bgcolor="#00CC33"><div align="center" ><strong>4</strong></div></td>
    <td width="40" bgcolor="#00CC33"><div align="center"><strong>5</strong></div></td>
  </tr>
  <tr>
    <td><strong>Bahasa Indonesia</strong></td>
	<td><input name="bhs" type="text" id="bhs" value="<?= $row['bhs1']?>" size="3" maxlength="3"/></td>
  	<td><input name="bhs1" type="text" id="bhs1" value="<?= $row['bhs2']?>" size="3" maxlength="3"/></td>
	<td><input name="bhs2" type="text" id="bhs2" value="<?= $row['bhs3']?>" size="3" maxlength="3"/></td>
	<td><input name="bhs3" type="text" id="bhs3" value="<?= $row['bhs4']?>" size="3" maxlength="3"/></td>
	<td><input name="bhs4" type="text" id="bhs4" value="<?= $row['bhs4']?>" size="3" maxlength="3"/></td>
	<td width="1" align="right">&nbsp;</td>
    <td width="87" align="center"><input name="totalBhs" type="text" id="totalBhs" value="<?= $row['bhs']?>" size="3" readonly="true"/></td>
  </tr>
  <tr>
    <td><strong>Bahasa Inggris</strong> </td>
	<td><input name="big" type="text" id="big" value="<?= $row['big1']?>" size="3" maxlength="3"/></td>
  	<td><input name="big1" type="text" id="big1" value="<?= $row['big2']?>" size="3" maxlength="3"/></td>
	<td><input name="big2" type="text" id="big2" value="<?= $row['big3']?>" size="3" maxlength="3"/></td>
	<td><input name="big3" type="text" id="big3" value="<?= $row['big4']?>" size="3" maxlength="3"/></td>
	<td><input name="big4" type="text" id="big4" value="<?= $row['big5']?>" size="3" maxlength="3"/></td>
	<td width="1" align="right">&nbsp;</td>
    <td width="87" align="center"><input name="totalbig" type="text" id="totalbig" value="<?= $row['big']?>" size="3" readonly="true"/></td>
  </tr>
  <tr>
    <td><strong>Matematika</strong></td>
	<td><input name="mat" type="text" id="mat" value="<?= $row['mat1']?>" size="3" maxlength="3"/></td>
  	<td><input name="mat1" type="text" id="mat1" value="<?= $row['mat2']?>" size="3" maxlength="3"/></td>
	<td><input name="mat2" type="text" id="mat2" value="<?= $row['mat3']?>" size="3" maxlength="3"/></td>
	<td><input name="mat3" type="text" id="mat3" value="<?= $row['mat4']?>" size="3" maxlength="3"/></td>
	<td><input name="mat4" type="text" id="mat4" value="<?= $row['mat5']?>" size="3" maxlength="3"/></td>
	<td width="1" align="right">&nbsp;</td>
    <td width="87" align="center"><input name="totalmat" type="text" id="totalmat" value="<?= $row['mat']?>" size="3" readonly="true"/></td>
  </tr>
  <tr>
    <td><strong>Ilmu Pengetahuan Alam (IPA)</strong></td>
	<td><input name="ipa" type="text" id="ipa" value="<?= $row['ipa1']?>" size="3" maxlength="3"/></td>
  	<td><input name="ipa1" type="text" id="ipa1" value="<?= $row['ipa2']?>" size="3" maxlength="3"/></td>
	<td><input name="ipa2" type="text" id="ipa2" value="<?= $row['ipa3']?>" size="3" maxlength="3"/></td>
	<td><input name="ipa3" type="text" id="ipa3" value="<?= $row['ipa4']?>" size="3" maxlength="3"/></td>
	<td><input name="ipa4" type="text" id="ipa4" value="<?= $row['ipa5']?>" size="3" maxlength="3"/></td>
	<td width="1" align="right">&nbsp;</td>
    <td width="87" align="center"><input name="totalipa" type="text" id="totalipa" value="<?= $row['ipa']?>" size="3" readonly="true"/></td>
  </tr>
  <tr>
    <td><strong>Ilmu Pengetahuan Sosial (IPS)</strong></td>
	<td><input name="ips" type="text" id="ips" value="<?= $row['ips1']?>" size="3" maxlength="3"/></td>
  	<td><input name="ips1" type="text" id="ips1" value="<?= $row['ips2']?>" size="3" maxlength="3"/></td>
	<td><input name="ips2" type="text" id="ips2" value="<?= $row['ips3']?>" size="3" maxlength="3"/></td>
	<td><input name="ips3" type="text" id="ips3" value="<?= $row['ips4']?>" size="3" maxlength="3"/></td>
	<td><input name="ips4" type="text" id="ips4" value="<?= $row['ips5']?>" size="3" maxlength="3"/></td>
	<td width="1" align="right">&nbsp;</td>
    <td width="87" align="center"><input name="totalips" type="text" id="totalips" value="<?= $row['ips']?>" size="3" readonly="true"/></td>
  </tr>
  <tr>
  	<tr></tr>
    <td colspan="8" align="left">&nbsp;</td>
	</tr><tr>
	  <td colspan="8" align="left"><input name="submit" id="submit" type="submit" class="button" value="SIMPAN" />
	  <input class="button" type="button" value="BATAL" onclick="history.go(-1)"/></td>
    </tr>
	<tr>
	  <td colspan="8" align="left">&nbsp;</td>
    </tr>
</table>
</form>
</div>
