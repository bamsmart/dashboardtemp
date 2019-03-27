
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Form Pengujian Dimensi & Sudut
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Forms</a></li>
		<li class="active">Advanced Elements</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"></h3>

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
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>No. WO</th>
							<th>Tanggal Masuk</th>
							<th>Nama Perusahaan</th>
							<th>Progress</th>
							<th>Label</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>183</td>
							<td>11-7-2014</td>
							<td>PT Bumi Artha</td>
							<td><div class="progress progress-xs">
									<div class="progress-bar progress-bar-yellow"
										style="width: 70%"></div>
								</div></td>
							<td><span class="badge bg-yellow">70%</span></td>
							<td><div class="btn-group">
									<button type="button" class="btn btn-warning">Action</button>
									<button type="button" class="btn btn-warning dropdown-toggle"
										data-toggle="dropdown">
										<span class="caret"></span> <span class="sr-only">Toggle
											Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo "?page=".$_GET['page']."&action"?>">Action</a></li>
										<li><a href="<?php echo "?page=".$_GET['page']."&reject"?>">Reject</a></li>
									</ul>
								</div></td>
						</tr>
						<tr>
							<td>183</td>
							<td>11-7-2014</td>
							<td>PT Bumi Artha</td>
							<td>
								<div class="progress progress-xs">
									<div class="progress-bar progress-bar-danger"
										style="width: 55%"></div>
								</div>
							</td>
							<td><span class="badge bg-red">55%</span></td>
							<td>
								<div class="btn-group">
									<button type="button" class="btn btn-warning">Action</button>
									<button type="button" class="btn btn-warning dropdown-toggle"
										data-toggle="dropdown">
										<span class="caret"></span> <span class="sr-only">Toggle
											Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="&action">Action</a></li>
										<li><a href="&reject">Reject</a></li>
									</ul>
								</div>
							</td>
						</tr>
						<tr>
							<td>183</td>
							<td>11-7-2014</td>
							<td>PT Bumi Artha</td>
							<td><div class="progress progress-xs progress-striped active">
									<div class="progress-bar progress-bar-success"
										style="width: 90%"></div>
								</div></td>
							<td><span class="badge bg-green">90%</span></td>
							<td><div class="btn-group">
									<button type="button" class="btn btn-warning">Action</button>
									<button type="button" class="btn btn-warning dropdown-toggle"
										data-toggle="dropdown">
										<span class="caret"></span> <span class="sr-only">Toggle
											Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="&action">Action</a></li>
										<li><a href="&reject">Reject</a></li>
									</ul>
								</div></td>
						</tr>
						<td>183</td>
						<td>11-7-2014</td>
						<td>PT Bumi Artha</td>
						<td><div class="progress progress-xs progress-striped active">
								<div class="progress-bar progress-bar-success"
									style="width: 90%"></div>
							</div></td>
						<td><span class="badge bg-green">90%</span></td>
						<td><div class="btn-group">
								<button type="button" class="btn btn-warning">Action</button>
								<button type="button" class="btn btn-warning dropdown-toggle"
									data-toggle="dropdown">
									<span class="caret"></span> <span class="sr-only">Toggle
										Dropdown</span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="&action">Action</a></li>
										<li><a href="&reject">Reject</a></li>
								</ul>
							</div></td>
						</tr>
					</table>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-right">
						<li><a href="#">&laquo;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>
			</div>
			<!-- /.box -->
		</div>
	</div>

</section>
<!-- /.content -->