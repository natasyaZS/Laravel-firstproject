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
							<label for="inputnama">Nama</label>
							<input type="text" name="nama" class="form-control" id="inputnama" placeholder="Nama">
						</div>
						<div class="form-group">
							<label for="inputnoic">No.Kad Pengenalan</label>
							<input type="text" name="noic" class="form-control" id="inputnoic" placeholder="No.Kad Pengenalan">
						</div>

						<div class="form-group">
							<label for="inputjawatan">Jawatan</label>
							<input type="text" name="jawatan" class="form-control" id="inputjawatan" placeholder="Jawatan">
						</div>
						<div class="form-group">
							<label for="inputkursus">Nama Kursus</label>
							<input type="text" name="kursus" class="form-control" id="inputkursus" placeholder="Nama Kursus">
						</div>
						<div class="form-group">
							<label for="inputtempoh">Tempoh Kursus</label>
							<input type="text" name="tempoh" class="form-control" id="inputtempoh" placeholder="Tempoh Kursus">
						</div>
						<div class="form-group">
                <label>Tempoh Kursus:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tempoh" class="form-control pull-right" id="tempoh-kursus">
                </div>
                <!-- /.input group -->
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
							<select name="a1" class="form-control">
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
							<select name="a2" class="form-control">
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
							<select name="a3" class="form-control">
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
							<select name="a4" class="form-control">
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
							<select name="a5" class="form-control">
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
							<select name="a6" class="form-control">
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
							<select name="a7" class="form-control">
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
							<select name="a8" class="form-control">
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
							<select name="a9" class="form-control">
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
							<select name="a10" class="form-control">
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
							<select name="a11" class="form-control">
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
							<select name="a12" class="form-control">
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
							<select name="a13" class="form-control">
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
							<select name="a14" class="form-control">
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
							<select name="a15" class="form-control">
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
							<select name="a16" class="form-control">
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
							<select name="a17" class="form-control">
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
							<select name="a18" class="form-control">
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
							<select name="a19" class="form-control">
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
							<select name="a20" class="form-control">
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
	@section('js') 
		<script src="https://adminlte.io/themes/AdminLTE/bower_components/moment/min/moment.min.js"></script>
		
		<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		
		<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script>
			
		$('#tempoh-kursus').daterangepicker();
		</script>
	@stop