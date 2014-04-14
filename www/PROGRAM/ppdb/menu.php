<?
	include 'config/koneksi.php';
	$SES = @$_SESSION['no_peserta'];
	$LOG_QUERY= mysql_query("select * from ppdb_adm_siswa where no_peserta='$SES'")or die (mysql_error());
	$LOG_STATUS=mysql_fetch_array($LOG_QUERY);
	$LOG = $LOG_STATUS['status'];
	IF ($LOG){
		$main = mysql_query("SELECT * FROM ppdb_menu WHERE aktif='Y'AND status_in=1 ORDER BY main_id");
	}
	ELSE{
		$main = mysql_query("SELECT * FROM ppdb_menu WHERE aktif='Y' AND status_out=1");
	}
		  while($r=mysql_fetch_array($main)){
			 echo "<li><a href='$r[link]'><span>$r[menu]</span></a>";
			 $sub=mysql_query("SELECT * FROM ppdb_submenu, ppdb_menu  
							 WHERE ppdb_submenu.main_id=ppdb_menu.main_id 
							 AND ppdb_submenu.main_id=$r[main_id]");
			 $jml=mysql_num_rows($sub);
			if ($jml > 0){
			  echo "<div><ul>";
				while($w=mysql_fetch_array($sub)){
				echo "<li><a href='$w[link_sub]&id=$w[sub_id]'><span>$w[nama_sub]</span></a></li>";
				}           
				echo "</ul></div>
					</li>";
					
			}
			else{
			  echo "</li>";
			}
		  }      
  ?>