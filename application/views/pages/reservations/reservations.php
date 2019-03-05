	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Advanced Form Elements <small>Preview</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Advanced Elements</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Select2</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool"
						data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="remove">
						<i class="fa fa-remove"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			  <form >
			<div class="box-body">
				<div class="row">
					<div class="col-md-6">

						<!-- Date -->
						<div class="form-group">
							<label>Tanggal:</label>

							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right"
									id="datepicker">
							</div>
							<!-- /.input group -->
						</div>
						<!-- /.form group -->

						<div class="form-group">
							<label>Nama Perusahaan: </label> <select
								class="form-control select2" style="width: 100%;">
								<option selected="selected">Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<!-- /.col -->


					<div class="col-md-6">
						<div class="form-group">
							<label>Jenis Pengujian: </label> <select class="form-control select2"
								multiple="multiple" data-placeholder="Select a State"
								style="width: 100%;">
								<option>Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<label for="exampleInputFile">Bukti Gambar: </label> <input
								type="file" id="exampleInputFile">

							<p class="help-block">Example block-level help text here.</p>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary pull-right">Submit</button>
			</div>
</form>
			<!-- <div class="box-footer">
				Visit <a href="https://select2.github.io/">Select2 documentation</a>
				for more examples and information about the plugin.
			</div> -->
		</div>
		<!-- /.box -->

		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Hover Data Table</h3>

				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
						<input type="text" name="table_search"
							class="form-control pull-right" placeholder="Search">

						<div class="input-group-btn">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No. WO</th>
								<th>Tangggal</th>
								<th>Nama Perusahaan</th>
								<th>Kain/Benang</th>
								<th>Jenis Pengujian</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>4</td>
								<td>X</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>5</td>
								<td>C</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>5.5</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Trident</td>
								 <td>02 Mar 2019</td>
								<td>Win 98+</td>
								<td>6</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet Explorer 7</td>
								<td>Win XP SP2+</td>
								<td>7</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>AOL browser (AOL desktop)</td>
								<td>Win XP</td>
								<td>6</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 1.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.7</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 1.5</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 2.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 3.0</td>
								<td>Win 2k+ / OSX.3+</td>
								<td>1.9</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Camino 1.0</td>
								<td>OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Camino 1.5</td>
								<td>OSX.3+</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Netscape 7.2</td>
								<td>Win 95+ / Mac OS 8.6-9.2</td>
								<td>1.7</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Netscape Browser 8</td>
								<td>Win 98SE+</td>
								<td>1.7</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Netscape Navigator 9</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.1</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.1</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.2</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.2</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.3</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.3</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.4</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.4</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.5</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.6</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td>1.7</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td>1.8</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td>125.5</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td>312.8</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td>419.3</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td>522.1</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>OmniWeb 5.5</td>
								<td>OSX.4+</td>
								<td>420</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>iPod Touch / iPhone</td>
								<td>iPod</td>
								<td>420.1</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>S60</td>
								<td>S60</td>
								<td>413</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 7.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 7.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 8.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 9.5</td>
								<td>Win 88+ / OSX.3+</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Nokia N800</td>
								<td>N800</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Nintendo DS browser</td>
								<td>Nintendo DS</td>
								<td>8.5</td>
								<td>C/A<sup>1</sup></td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>3.1</td>
								<td>C</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>KHTML</td>
								<td>Konqureror 3.3</td>
								<td>KDE 3.3</td>
								<td>3.3</td>
								<td>A</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>3.5</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Tasman</td>
								<td>Internet Explorer 4.5</td>
								<td>Mac OS 8-9</td>
								<td>-</td>
								<td>X</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>1</td>
								<td>C</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>1</td>
								<td>C</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>NetFront 3.1</td>
								<td>Embedded devices</td>
								<td>-</td>
								<td>C</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>0001/02/2019</td>
								<td>02 Mar 2019</td>
								<td>PT Shines Dev Utama</td>
								<td>-</td>
								<td>A</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>Dillo 0.8</td>
								<td>Embedded devices</td>
								<td>-</td>
								<td>X</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>Links</td>
								<td>Text only</td>
								<td>-</td>
								<td>X</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>Lynx</td>
								<td>Text only</td>
								<td>-</td>
								<td>X</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>IE Mobile</td>
								<td>Windows Mobile 6</td>
								<td>-</td>
								<td>C</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>PSP browser</td>
								<td>PSP</td>
								<td>-</td>
								<td>C</td>
								<td><span class="label label-success">Approved</span></td>
							</tr>
							<tr>
								<td>Other browsers</td>
								<td>All others</td>
								<td>-</td>
								<td>-</td>
								<td>U</td>
								<td><span class="label label-danger">Denied</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
	
	</section>
	<!-- /.content -->