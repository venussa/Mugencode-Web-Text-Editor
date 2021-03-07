<?php

$data = $this->db_query("SELECT * FROM list_mahasiswa WHERE npm='".$this->get('npm')."'");
$data = $data->fetch();

?>

<div class="content">
		
	<div class="box-login">
			
		<div class="header">
			EDIT DATA : <?php echo strtoupper($data["nama"])?>
		</div>
		<div class="body">
			<form method="POST" action="{homeURL}/action/proccess_edit">

				<p style="font-size: 14px;margin-top: 20px;">Nama Lengkap</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="nama" placeholder="Masukkan nama ..." value="<?php echo $data["nama"]?>">

				<input type="text" name="npm" value="<?php echo $data["npm"]?>" style="display: none;">

				<p style="font-size: 14px;margin-top: 20px;">Nilai 1</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="n1" placeholder="Nilai ..." value="<?php echo $data["n1"]?>">

				<p style="font-size: 14px;margin-top: 20px;">Nilai 2</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="n2" placeholder="Nilai ..." value="<?php echo $data["n2"]?>">

				<p style="font-size: 14px;margin-top: 20px;">Nilai 3</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="n3" placeholder="Nilai ..." value="<?php echo $data["n3"]?>">

				<p style="font-size: 14px;margin-top: 20px;">Nilai 4</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="n4" placeholder="Nilai ..." value="<?php echo $data["n4"]?>">

				<div style="margin-top: 20px;text-align: center;">
				<button type="button" onclick="window.location='{homeURL}/action/detail'" style="background: #992323;color:#fff;border:1px #992323 solid;border-radius: 3px;padding:5px;font-size: 15px;" >Batal</button>
				<button style="background: #09f;color:#fff;border:1px #09f solid;border-radius: 3px;padding:5px;font-size: 15px;" >Simpan Data</button>
				</div>

			</form>
		</div>

	</div>

</div>
