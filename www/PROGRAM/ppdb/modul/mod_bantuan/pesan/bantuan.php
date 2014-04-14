<h2>Form Kirim Pesan</h2>
<div id="info" align="center"></div>
<form action="#" method="POST" name="bantuan" id="bantuan">
	<table width="100%" border="0" align="center">
	  <tr>
		<td width="173"><label>Nama</label></td>
		<td width="5">:</td>
		<td width="515" colspan="2"><input name="nama" type="text" id="nama" size="30" /></td>
	  </tr>
	  <tr>
		<td>Email</td>
		<td>:</td>
		<td colspan="2"><input name="email" type="text" id="email" size="30" /></td>
	  </tr>
	  <tr>		
	    <td>Subjek</td>
        <td>:</td>
	    <td colspan="2"><input name="subjek" type="text" id="subjek" size="30"></td>
	  </tr>
	  <tr>
		<td valign="top">Pesan</td>
		<td valign="top">:</td>
		<td colspan="2">
		<textarea name="pesan" id="pesan" style="width: 400px; height: 100px;"></textarea>		
		</td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
	    <td>&nbsp;</td>
	    <td><img src='captcha.php'></td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(Masukkan 6 kode diatas)</td>
        <td>&nbsp;</td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input name="kode" type="text" id="kode" size="10" /></td>
        <td>&nbsp;</td>
	  </tr>
	  <tr>
	    <td colspan="4"><input name="submit" id="submit" class="button" type="submit" value="Kirim" />
          <input name="Reset" type="reset" class="button" value="Batal" /></td>
      </tr>
	</table>
</form>
