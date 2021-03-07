<div class="content">
		
	<div class="box-login">
			
		<div class="header">
			TAMBAH DATA
		</div>
		<div class="body">
			<form method="POST" action="{homeURL}/action/proccess_add">

				<p style="font-size: 14px;margin-top: 20px;">Nama Lengkap</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="nama" placeholder="Masukkan nama ..." >

				<p style="font-size: 14px;margin-top: 20px;">NPM</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="n1" placeholder="NPM" >

				<p style="font-size: 14px;margin-top: 20px;">KELAS</p>
				<input style="padding:10px;border:1px #ddd solid;border-radius: 5px;width:95%;" type="text" name="n2" placeholder="KELAS" >

				<div style="margin-top: 20px;text-align: center;">
				<button type="button" onclick="window.location='{homeURL}/action/detail'" style="background: #992323;color:#fff;border:1px #992323 solid;border-radius: 3px;padding:5px;font-size: 15px;" >Batal</button>
				<button style="background: #09f;color:#fff;border:1px #09f solid;border-radius: 3px;padding:5px;font-size: 15px;" >Simpan Data</button>
				</div>

			</form>
		</div>

	</div>

</div>
