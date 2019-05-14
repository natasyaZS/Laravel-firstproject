<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Borang Penilaian Kursus Jabatan Tenaga Manusia</title>
	<style type="text/css">
		body,
		td,
		th {
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
		}
	</style>
</head>

<body>
	<table width="100%" border="0">
		<tbody>
			<tr>
				<td align="right">
					<table style="border-collapse: collapse" width="401" border="1" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td style="font-size: 10px;" width="107" align="center">BK-S08-01</td>
								<td style="font-size: 10px;" width="107" align="center">Pindaan : 6</td>
								<td style="font-size: 10px;" width="107" align="center">Tarikh 1.6.2017</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td align="right">&nbsp;</td>
			</tr>
			<tr>
				<td align="center">
					<h3>BORANG PENILAIAN KURSUS<br>
        JABATAN TENAGA MANUSIA</h3>
				</td>
			</tr>
			<tr>
				<td align="center">&nbsp;</td>
			</tr>
			<tr>
				<td style="text-align: center">(Diisi oleh pegawai dalam 1 salinan sebaik sahaja kembali daripada berkursus)</td>
			</tr>
			<tr>
				<td style="text-align: center">&nbsp;</td>
			</tr>
			<tr>
				<td style="text-align: center">
					<table width="100%" border="0" cellspacing="0" cellpadding="5">
						<tbody>
							<tr>
								<td width="6%">1.</td>
								<td width="22%" align="left">Nama</td>
								<td width="4%" align="left">:</td>
								<td width="68%" align="left" style="border-bottom: 1px solid black;">{{$nama}}</td>
							</tr>
							<tr>
								<td width="6%">2.</td>
								<td width="22%" align="left">No. Kad Pengenalan</td>
								<td width="4%" align="left">:</td>
								<td width="68%" align="left" style="border-bottom: 1px solid black;">{{$noic}}</td>
							</tr>
							<tr>
								<td width="6%">3.</td>
								<td width="22%" align="left">Jawatan</td>
								<td width="4%" align="left">:</td>
								<td width="68%" align="left" style="border-bottom: 1px solid black;">{{$jawatan}}</td>
							</tr>
							<tr>
								<td width="6%">4.</td>
								<td width="22%" align="left">Nama Kursus</td>
								<td width="4%" align="left">:</td>
								<td width="68%" align="left" style="border-bottom: 1px solid black;">{{$kursus}}</td>
							</tr>
							<tr>
								<td width="6%">5.</td>
								<td width="22%" align="left">Tempoh Kursus</td>
								<td width="4%" align="left">:</td>
								<td width="68%" align="left" style="border-bottom: 1px solid black;">{{$tempoh}}</td>	
							</tr>
							<tr>
								<td width="6%">6.</td>
								<td width="22%" align="left">Penganjur</td>
								<td width="4%" align="left">:</td>
								<td width="68%" align="left" style="border-bottom: 1px solid black;">{{$penganjur}}</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td style="text-align: center">&nbsp;</td>
			</tr>
			<tr>
				<td style="text-align: center"><span style="text-align: left">Tandakan tahap kepuasan anda mengenai kursus ini dengan menandakan petak-petak yang berkaitan mengikut skala yang telah ditetapkan di bawah.</span>
				</td>
			</tr>
			<tr>
				<td style="text-align: center">&nbsp;</td>
			</tr>
			<tr>
				<td style="text-align: center">
					<table width="100%" border="0" cellspacing="0" cellpadding="5">
						<tbody>
							<tr>
								<td width="100%" style="text-align: left">A. Meningkatkan Pengetahuan</td>
							</tr>
							<tr>
								<td style="text-align: left">&nbsp;</td>
							</tr>
							<tr>
								<td><table width="100%" border="1" cellspacing="0" cellpadding="5">
								  <tbody>
								  </tbody>
                                  <tbody>
                                    <tr>
                                      <td width="5%">Bil</td>
                                      <td width="70%">Perkara</td>
                                      <td width="5%">1</td>
                                      <td width="5%">2</td>
                                      <td width="5%">3</td>
                                      <td width="5%">4</td>
                                      <td width="5%">5</td>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                      <td style="text-align: left">Nyatakan tahap pemahaman and terhadap kursus yang diikuti</td>
                                      <td>@if($a1 == 1)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a1 == 2)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a1 == 3)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a1 == 4)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a1 == 5)<img src="images/checked.png" width="15">@endif</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td style="text-align: left">Pengetahuan yang diperolehi setelah mengikuti kursus ini</td>
                                      <td>@if($a2 == 1)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a2 == 2)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a2 == 3)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a2 == 4)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a2 == 5)<img src="images/checked.png" width="15">@endif</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td style="text-align: left">Bolehkah anda mempraktikkan kemahiran yang diperolehi</td>
                                      <td>@if($a3 == 1)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a3 == 2)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a3 == 3)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a3 == 4)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a3 == 5)<img src="images/checked.png" width="15">@endif</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td style="text-align: left">Kemahiran menyelesaikan masalah berkaitan dengan kursus yang diikuti</td>
                                      <td>@if($a4 == 1)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a4 == 2)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a4 == 3)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a4 == 4)<img src="images/checked.png" width="15">@endif</td>
                                      <td>@if($a4 == 5)<img src="images/checked.png" width="15">@endif</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" style="text-align: left">Jumlah Kecil</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="7" style="text-align: center">Jumlah Besar</td>
                                    </tr>
                                   
                                  </tbody>
                                  <tbody>
                                  </tbody>
								</table></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>

	<pagebreak>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td align="right">
						<table style="border-collapse: collapse" width="401" border="1" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td style="font-size: 10px;" width="107" align="center">BK-S08-01</td>
									<td style="font-size: 10px;" width="107" align="center">Pindaan : 6</td>
									<td style="font-size: 10px;" width="107" align="center">Tarikh 1.6.2017</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td align="right">&nbsp;</td>
				</tr>

				<tr>
					<td align="center">&nbsp;</td>
				</tr>

				<tr>
					<td style="text-align: center">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>

								<tr>
									<td colspan="4" style="text-align: left">B. Keberkesanan Kursus</td>
								</tr>
								<tr>
									<td colspan="4" style="text-align: left">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="4">
										<table width="98%" height="436" border="1" cellpadding="5" cellspacing="0" style="border: 1px solid black; border-collapse: collapse">
											<tbody>
												<tr>
													<td width="9%"><b>Bil</b>
													</td>
													<td width="66%"><b>Perkara</b>
													</td>
													<td width="5%"><b>1</b>
													</td>
													<td width="5%"><b>2</b>
													</td>
													<td width="5%"><b>3</b>
													</td>
													<td width="5%"><b>4</b>
													</td>
													<td width="5%"><b>5</b>
													</td>
												</tr>
												<tr>

													<td>1</td>
													<td style="text-align: left">Keberkesanan kursus yang diikuti secara keseluruhan</td>
													<td>@if($a5 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a5 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a5 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a5 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a5 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td>2</td>
													<td style="text-align: left">Tahap pemahaman selepas mengikuti kursus</td>
													<td>@if($a6 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a6 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a6 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a6 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a6 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td>3</td>
													<td style="text-align: left">Adakah jangkamasa kursus sesuai</td>
													<td>@if($a7 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a7 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a7 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a7 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a7 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td>4</td>
													<td style="text-align: left">Objektif sebenar kursus tercapai</td>
													<td>@if($a8 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a8 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a8 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a8 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a8 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td>5</td>
													<td style="text-align: left">Adakah kaedah penyampaian dan latihan sesuai</td>
													<td>@if($a9 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a9 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a9 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a9 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a9 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td colspan="7" style="text-align: left">Jumlah Kecil</td>
											
												</tr>
												<tr>
													<td colspan="2" style="text-align: center">Jumlah Besar</td>

													<td colspan="5">&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td colspan="4" style="text-align: left">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="4" style="text-align: left">&nbsp;</td>
								</tr>
								<tr>
									<td colspan="4" style="text-align: left">C. Faedah Kepada Jabatan</td>
								</tr>
								<tr>
									<td colspan="4" style="text-align: left">&nbsp;</td>
								</tr>

								<tr>
									<td colspan="4">
										<table width="100%" height="290" border="1" cellpadding="5" cellspacing="0" style="border: 1px solid black; border-collapse: collapse ">
											<tbody>
												<tr>
													<td width="9%"><b>Bil</b>
													</td>
													<td width="66%"><b>Perkara</b>
													</td>
													<td width="5%"><b>1</b>
													</td>
													<td width="5%"><b>2</b>
													</td>
													<td width="5%"><b>3</b>
													</td>
													<td width="5%"><b>4</b>
													</td>
													<td width="5%"><b>5</b>
													</td>
												</tr>
												<tr>

													<td>1</td>
													<td style="text-align: left">Sejauh manakah kursus ini berfaedah kepada jabatan</td>
													<td>@if($a10 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a10 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a10 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a10 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a10 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td>2</td>
													<td style="text-align: justify">Adakah tugas sekarang sesuai dengan kursus yang diikuti</td>
													<td>@if($a11 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a11 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a11 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a11 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a11 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td>3</td>
													<td style="text-align: left">Adakah kursus ini dapat meningkatkan kemahiran kepada tugas semasa</td>
													<td>@if($a12 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a12 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a12 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a12 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a12 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td colspan="7" style="text-align: left">Jumlah Kecil</td>
												</tr>
												<tr>
													<td colspan="2" style="text-align: center">Jumlah Besar</td>
													<td colspan="5">&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td colspan="4">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>

		<pagebreak>
			<table width="100%" border="0">
				<tbody>
					<tr>
						<td align="right">
							<table style="border-collapse: collapse" width="401" border="1" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td style="font-size: 10px;" width="107" align="center">BK-S08-01</td>
										<td style="font-size: 10px;" width="107" align="center">Pindaan : 6</td>
										<td style="font-size: 10px;" width="107" align="center">Tarikh 1.6.2017</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td align="right">&nbsp;</td>
					</tr>

					<tr>
						<td align="center">&nbsp;</td>
					</tr>

					<tr>
						<td style="text-align: center">
							<table width="100%" border="0" cellspacing="0" cellpadding="5">
								<tbody>
									<tr>
									<td colspan="4" style="text-align: left">D. Keberkesanan Penyelia Latihan (Training Provider)</td>
								</tr>
								<tr>
									<td colspan="4" style="text-align: left">&nbsp;</td>
								</tr>

								<tr>
									<td colspan="4">
										<table width="100%" height="290" border="1" cellpadding="5" cellspacing="0" style="border: 1px solid black; border-collapse: collapse ">
											<tbody>
												<tr>
													<td width="9%"><b>Bil</b>
													</td>
													<td width="66%"><b>Perkara</b>
													</td>
													<td width="5%"><b>1</b>
													</td>
													<td width="5%"><b>2</b>
													</td>
													<td width="5%"><b>3</b>
													</td>
													<td width="5%"><b>4</b>
													</td>
													<td width="5%"><b>5</b>
													</td>
												</tr>
												<tr>

													<td>1</td>
													<td style="text-align: left">Pensyarah yang berpengalaman (Penyampaian Latihan)</td>
													<td>@if($a10 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a10 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a10 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a10 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a10 == 5)<img src="images/checked.png" width="15">@endif</td>
												</tr>
												<tr>
													<td rowspan="4" valign="top">2</td>
												<td style="text-align: justify; border-bottom:1px solid white">Sejauh manakah perhubungan semasa berkursus diantara peserta</td>
													<td width="5%"><b>1</b>
													</td>
													<td width="5%"><b>2</b>
													</td>
													<td width="5%"><b>3</b>
													</td>
													<td width="5%"><b>4</b>
													</td>
													<td width="5%"><b>5</b>
													</td>
												</tr>
												<tr>
												 <td style="text-align: justify; border-bottom:2px solid white">a. Pensyarah</td>
													<td>@if($a14 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a14 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a14 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a14 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a14 == 5)<img src="images/checked.png" width="15">@endif</td>
											  </tr>
												<tr>
												<td style="text-align: justify; border-bottom:1px solid white">b. Peserta</td>
													<td>@if($a15 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a15 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a15 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a15 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a15 == 5)<img src="images/checked.png" width="15">@endif</td>
											  </tr>
												<tr>
												  <td style="text-align: justify">c. Penganjur / Pengurusan Institut Latihan</td>
													<td>@if($a16 == 1)<img src="images/checked.png" width="15">@endif</td>
											        <td>@if($a16 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a16 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a16 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a16 == 5)<img src="images/checked.png" width="15">@endif</td>
											  </tr>
												<tr>
													<td rowspan="5" valign="top">3</td>
													<td style="text-align: left"><span style="text-align: justify; border-bottom:2px solid white">Kemudahan yang diberikan</span></td>
													
													<td width="5%"><b>1</b>
													</td>
													<td width="5%"><b>2</b>
													</td>
													<td width="5%"><b>3</b>
													</td>
													<td width="5%"><b>4</b>
													</td>
													<td width="5%"><b>5</b>
													</td>
												</tr>
												<tr>
												<td style="text-align: justify; border-bottom:2px solid white">a. Penginapan (sekiranya berkaitan)</td>
												  <td>@if($a17 == 1)<img src="images/checked.png" width="15">@endif</td>
													 <td>@if($a17 == 2)<img src="images/checked.png" width="15">@endif</td>
													 <td>@if($a17 == 3)<img src="images/checked.png" width="15">@endif</td>
													 <td>@if($a17 == 4)<img src="images/checked.png" width="15">@endif</td>
													 <td>@if($a17 == 5)<img src="images/checked.png" width="15">@endif</td>
											  </tr>
												<tr>
												<td style="text-align: justify; border-bottom:2px solid white">b. Kemudahan asas</td>
													<td>@if($a18 == 1)<img src="images/checked.png"width="15">@endif</td>
											        <td>@if($a18 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a18 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a18 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a18 == 5)<img src="images/checked.png" width="15">@endif</td>
											  </tr>
												<tr>
												<td style="text-align: justify; border-bottom:2px solid white">c. Nota dan alat bantuan mengajar</td>
												 	<td>@if($a19 == 1)<img src="images/checked.png"width="15">@endif</td>
											        <td>@if($a19 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a19 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a19 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a19 == 5)<img src="images/checked.png" width="15">@endif</td>
											  </tr>
												<tr>
												<td style="text-align: justify">d. Makan dan minum</td>
													<td>@if($a20 == 1)<img src="images/checked.png"width="15">@endif</td>
											        <td>@if($a20 == 2)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a20 == 3)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a20 == 4)<img src="images/checked.png" width="15">@endif</td>
												    <td>@if($a20 == 5)<img src="images/checked.png" width="15">@endif</td>
											  </tr>
												<tr>
													<td colspan="7" style="text-align: left">Jumlah Kecil</td>
												</tr>
												<tr>
													<td colspan="2" style="text-align: center">Jumlah Besar</td>
													<td colspan="5">&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
				
									<tr>
										<td colspan="4" style="text-align: left">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" style="text-align: left">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" style="text-align: left">E. Rumusan dan cadangan</td>
									</tr>
									<tr>
										<td colspan="4" style="text-align: left">&nbsp;</td>
									</tr>



									<tr>
										<td colspan="4">
											<table width="98%" height="262" border="2" cellpadding="1" cellspacing="1">
												<tbody>
													<tr>
														<td>&nbsp;</td>
														<td width="99%" align="left" style="border-bottom: 1px solid black;"></td>
													</tr>
													<tr>
														<td>&nbsp;</td>
														<td width="99%" align="left" style="border-bottom: 1px solid black;"></td>
													</tr>
													<tr>
														<td>&nbsp;</td>
														<td width="99%" align="left" style="border-bottom: 1px solid black;"></td>
													</tr>
													<tr>
														<td>&nbsp;</td>
														<td width="99%" align="left" style="border-bottom: 1px solid black;"></td>
													</tr>
													<tr>
														<td>&nbsp;</td>
														<td width="99%" align="left" style="border-bottom: 1px solid black;"></td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>

</body>



</html>