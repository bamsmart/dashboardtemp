<script type="text/javascript">
$(document).ready(function(){
loadDataX();
        function loadDataX(){
            var  id = '<?php if(isset($_GET["ID"])){ echo $_GET["ID"].'';}else{ "";}?>';
            $.ajax({
                type: "POST",
                data: { 
               	    id: id,
               	  },
                url   : 'tetal/listDetailData',
                dataType : 'json',
                success : function(result){
                    var html = '';
                    $("#tl_ls_1").val(result.data[0].tl_ls_1);
                    $("#tl_ls_2").val(result.data[0].tl_ls_2);
                    $("#tl_ls_3").val(result.data[0].tl_ls_3);
                    $("#tl_ls_4").val(result.data[0].tl_ls_4);
                    $("#tl_ls_5").val(result.data[0].tl_ls_5);
                    //==============================================
                    $("#tl_pk_1").val(result.data[0].tl_pk_1);
                    $("#tl_pk_2").val(result.data[0].tl_pk_2);
                    $("#tl_pk_3").val(result.data[0].tl_pk_3);
                    $("#tl_pk_4").val(result.data[0].tl_pk_4);
                    $("#tl_pk_5").val(result.data[0].tl_pk_5);
                    //==============================================
                    $("#ay_mk_1").val(result.data[0].ay_mk_1);
                    $("#ay_mk_2").val(result.data[0].ay_mk_2);
                    //==============================================
                }
            });
        }
});
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Data Pemeriksaaan Tetal Benang Dan Anyaman Kain
		<!-- <small>Preview</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><a href="?"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="?page=tetal">Form</a></li>
		<li class="active">Detail Tetal</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="box box-default">
		
		<form method="post" id="form-tetal">
		<input type="hidden" name="wo_no" value="<?php if(isset($_GET["ID"])){ echo $_GET["ID"].'';}else{ "";}?>">
			<div class="box-body">

				<!-- title row -->
				<div class="row">
					<div class="col-xs-12">
						<h2 class="page-header">
							NO. WO: <?php if(isset($_GET["ID"])){ echo $_GET["ID"].'';}else{ "";}?><small
								class="pull-right">Date: <?php if(isset($_GET["ID"])){ echo $_GET["ID"].'';}else{ "";}?></small>
						</h2>
					</div>
					<!-- /.col -->
				</div>
				<div class="row">
					<div class="col-xs-12">
						<table class="table">
							<tr>
								<th width="150px">
								<div class="box box-default collapsed-box box-solid"
										style="margin-bottom: 0px; margin-top: 0px; padding: 0px 0px 0px 0px;">
										<div class="box-header"
											style="margin-bottom: 0px; margin-top: 0px;">
											<h1 class="box-title">Tetal</h1>
										</div>
									</div>
								
								</th>
								<th><div class="box-header">(1)</div></th>
								<th><div class="box-header">(2)</div></th>
								<th><div class="box-header">(3)</div></th>
								<th><div class="box-header">(4)</div></th>
								<th><div class="box-header">(5)</div></th>
								<th><div class="box-header">x&#x0304</div></th>
							</tr>
							<tr>
								<th width="150px"><div class="box-header">Tetal Lusi</div></th>
								<th><input type="text" class="form-control" name="tl_ls_1" id="tl_ls_1"
									placeholder="tl(1)"></th>
								<th><input type="text" class="form-control" name="tl_ls_2" id="tl_ls_2"
									placeholder="tl(2)"></th>
								<th><input type="text" class="form-control" name="tl_ls_3" id="tl_ls_3"
									placeholder="tl(3)"></th>
								<th><input type="text" class="form-control" name="tl_ls_4" id="tl_ls_4"
									placeholder="tl(4)"></th>
								<th><input type="text" class="form-control" name="tl_ls_5" id="tl_ls_5"
									placeholder="tl(5)"></th>
								<th><input type="text" class="form-control" placeholder="x&#x0304"
									disabled></th>
							</tr>
							<tr>
								<th width="150px"><div class="box-header">Tetal Pakaian</div></th>
								<th><input type="text" class="form-control" name="tl_pk_1" id="tl_pk_1"
									placeholder="tp-1"></th>
								<th><input type="text" class="form-control" name="tl_pk_2" id="tl_pk_2"
									placeholder="tp-2"></th>
								<th><input type="text" class="form-control" name="tl_pk_3" id="tl_pk_3"
									placeholder="tp-3"></th>
								<th><input type="text" class="form-control" name="tl_pk_4" id="tl_pk_4"
									placeholder="tp-4"></th>
								<th><input type="text" class="form-control" name="tl_pk_5" id="tl_pk_5"
									placeholder="tp-5"></th>
								<th><input type="text" class="form-control" placeholder="x&#x0304"
									disabled></th>
							</tr>
							</tr>
						</table>
					</div>
					
					<div class="col-xs-12">
						<table class="table">
							<tr>
								<th width="150px">
								<div class="box box-default collapsed-box box-solid"
										style="margin-bottom: 0px; margin-top: 0px; padding: 0px 0px 0px 0px;">
										<div class="box-header"
											style="margin-bottom: 0px; margin-top: 0px;">
											<h1 class="box-title">Anyaman</h1>
										</div>
									</div>
								</th>
								<th><div class="box-header"></div></th>
							</tr>
							<tr>
								<th width="130px"><div class="box-header">Muka 1</div></th>
								<th>
								<div class="col-xs-2" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;">
								<input type="text" class="form-control" placeholder=".col-m-1" name="ay_mk_1" id="ay_mk_1">
								</div>
								</th>
							</tr>
							<tr>
								<th width="130px"><div class="box-header">Muka 2</div></th>
								<th>
								 <div class="col-xs-2" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;">
								<input type="text" class="form-control"
									placeholder=".col-m-2" name="ay_mk_2" id="ay_mk_2">
									</div>
									</th>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
			<!-- /.box-body -->

			<div class="callout callout-success" id="info-success-tetal"
				style="display:none;">
				<h4>Success</h4>
				<p>Data Tetal & Anyaman Tersimpan</p>
			</div>
			
			<div class="box-footer">
				<button type="button" id="submittetal" class="btn btn-primary pull-right">Submit</button>
			</div>
		</form>
	</div>
	<!-- /.box -->
</section>
<!-- /.content -->
<script type="text/javascript">
    $(document).ready(function() {
        
        $('#submittetal').on('click', function() {
            $.busyLoadSetup({
                animation: "slide",
                background: "rgba(255, 152, 0, 0.86)"
            });
            $("#form-tetal").busyLoad("show");

            $.ajax({
                url: "tetal/submitTetalData",
                type: "POST",
                dataType: 'json',
                data: $('#form-tetal').serialize(),
                cache: false,
                timeout: 5000,
                success: function(dataResult) {
                    $("#form-tetal").busyLoad("hide");

                    $('#info-success-tetal').show();
                    setTimeout(function(){$('#info-success-tetal').fadeOut();}, 1000);
                    
                    $("#submittetal").removeAttr("disabled");
                    $('#fupForm').find('input:text').val('');
                },
                fail: function(xhr, textStatus, errorThrown) {
                    alert('request failed');
                    $("#form-tetal").busyLoad("hide");
                }
            });
        });


        //submit sudut
        $('#submitsudut').on('click', function() {
            $.busyLoadSetup({
                animation: "slide",
                background: "rgba(255, 152, 0, 0.86)"
            });
            $("#form-sudut").busyLoad("show");

            $.ajax({
                url: "dimensi/submitSudutData",
                type: "POST",
                dataType: 'json',
                data: $('#form-sudut').serialize(),
                cache: false,
                timeout: 5000,
                success: function(dataResult) {
                    $("#form-sudut").busyLoad("hide");

                    $('#info-success-sudut').show();
                    setTimeout(function(){$('#info-success-sudut').fadeOut();}, 1000);
                    $("#submitsudut").removeAttr("disabled");
                    $('#fupForm').find('input:text').val('');
                },
                fail: function(xhr, textStatus, errorThrown) {
                    alert('request failed');
                    $("#form-sudut").busyLoad("hide");
                }
            });
        });
    });
</script>