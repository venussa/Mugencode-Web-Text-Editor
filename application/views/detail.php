
<div class="content">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama</th>
			<th colspan="5">Nilai</th>
			<th rowspan="2">Keterangan</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>Pert 1</th>
			<th>Pert 2</th>
			<th>Pert 3</th>
			<th>Pert 4</th>
			<th>Rata-rata</th>
		</tr>

		<tr>
			<?php 

				$query = $this->db_query("SELECT * FROM list_mahasiswa");

				$no = 1;

				while($value = $query->fetch()){

				$nilai = $value['n1'] + $value['n2'] + $value['n3'] + $value['n4'];
				$nilai_rata = $nilai / 4;

				$tombol = "<button class='green'>Lulus</button>";

				if($nilai_rata < 60) $tombol = "<button class='yellow'>Tidak Lulus</button>";

				?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $value['nama'] ?></td>
						<td><?php echo $value['n1'] ?></td>
						<td><?php echo $value['n2'] ?></td>
						<td><?php echo $value['n3'] ?></td>
						<td><?php echo $value['n4'] ?></td>
						<td><?php echo $nilai_rata ?></td>
						<td><?php echo $tombol ?></td>
						<td>
							<button class="blue" onclick="window.location='{homeURL}/action/edit_data?npm=<?php echo $value['npm']?>';">Edit</button>
							<button onclick="window.location='{homeURL}/action/delete?npm=<?php echo $value['npm']?>'" class="red">Hapus</button>
						</td>
					</tr>
				<?php 
				$no++;
				} ?>

			
		</tr>
	</table>
</div>