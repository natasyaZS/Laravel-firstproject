@extends( 'adminlte::page' )

@section( 'title', 'AdminLTE' )

@section( 'content_header' )
	<h1>Borang penilaian</h1> @stop @section('content')
	<form role="form" method="post" action="borang-penilaian">
		@csrf
		<div class="row">
			<div class="col-md-6">


				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Borang Penilaian</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">No.Kad Pengenalan</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="No.Kad Pengenalan">
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Jawatan</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jawatan">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Nama Kursus</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Kursus">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Tempoh Kursus</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tempoh Kursus">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Penganjur</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Penganjur">
						</div>


					</div>
					<!-- /.box-body -->
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6">

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">A. Meningkatkan Pengetahuan</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<!-- /.box-body -->
					<div class="box-body">
						<div class="form-group">
							<label>1.Nyatakan tahap pemahaman anda terhadap kursus yang diikuti</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

						<div class="form-group">
							<label>2.Pengetahuan yang diperolehi setelah mengikuti kursus ini</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label>3.Bolehkah anda mempraktikkan kemahiran yang diperolehi</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label>4.Kemahiran menyelesaikan masalah berkaitan dengan kursus yang diikuti </label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>

				</div>

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">B.Keberkesanan Kursus</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<!-- /.box-body -->
					<div class="box-body">
						<div class="form-group">
							<label>1.Keberkesanan kursus yang diikuti secara keseluruhan </label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>2.Tahap pemahaman selepas mengikuti kursus</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>3.Adakah jangkamasa kursus sesuai</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>4.Objektif sebenar kursus tercapai</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>5.Adakah kaedah penyampaian dan latihan sesuai</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
				</div>

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">C. Faedah Kepada Jabatan</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<!-- /.box-body -->
					<div class="box-body">
						<div class="form-group">
							<label>1.Sejauh manakah kursus ini berfaedah kepada Jabatan</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>2.Adakah tugas sekarang sesuai dengan kursus yang diikuti</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>3.Adakah kursus ini dapat meningkatkan kemahiran kepada tugas semasa</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
				</div>

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">D.Keberkesanan Penyelia Latihan </h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<!-- /.box-body -->
					<div class="box-body">
						<div class="form-group">
							<label>1.Pensyarah yang berpengalaman (Penyampaian Latihan)</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>2.Sejauh manakah perhubungan semasa berkursus di antara peserta
					<br>a.Pensyarah
					</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label>b.Peserta
					</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label>b.Penganjur / Pengurusan Institut Latihan
					</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
					<div class="box-body">
						<div class="form-group">
							<label>3.Kemudahan yang diberikan
					<br>a.Penginapan (Sekiranya berkaitan)
					</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label>b.Kemudahan Asas
					</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label>c.Nota dan alat bantuan mengajar
					</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label>d.Makan dan minum
					</label>
							<select class="form-control">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

					</div>
				</div>

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">E.Rumusan dan cadangan</h3>
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>

					</div>
				</div>

				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
	</form>
	@stop