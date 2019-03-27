<script type="text/javascript">
/* <td>0001/02/2019</td>
<td>02 Mar 2019</td>
<td>PT Shines Dev Utama</td>
<td>Kain</td>
<td><p>Pengujian Pemeriksaaan dan Dimensi Sudut Kusut Kain</p>
	<p>Pengujian Tetal Benang dan Anyaman Kain</p>
	<p>Pengujian Nomor Benang</p>
	<p>Pengujian Kekuatan Tarik</p>
	<p>Pengujian Kekuatan Sobek (Elmendorf)</p>
	<p>Pengujian Kain Twist</p></td>
<td><span class="label label-success">Approved</span></td> */


 $(document).ready(function(){
	loadData();
     function loadData(){
    	$.busyLoadSetup({ animation: "slide", background: "rgba(255, 152, 0, 0.86)" });
    	
    	$("#reservation-data").busyLoad("show",{ text: "LOADING ...",
			   textPosition: "bottom"
		 });
		 
         $.ajax({
             type  : 'ajax',
             url   : 'reservation/listReservationData',
             async : false,
             dataType : 'json',
             success : function(result){
                 var html = '';
                 var i;
                 for(i=0; i<result.data.length; i++){
                 var label = '<span class="label label-success">'+result.data[i].status+'</span>'; 
          		   if(result.data[i].status == 'OPEN'){
          			   label  = '<span class="label label-danger">'+result.data[i].status+'</span>';
          	       }else if(result.data[i].status == 'PROGRESS'){
          	    	   label  = '<span class="label label-warning">'+result.data[i].status+'</span>';
          	       }
          	       var stripped = 'class="odd"'
          	       if(i % 2 == 0){
          	    	   stripped = 'class="even"'
          	       }   
          	       
                     html += '<tr '+stripped+' role=row>'+
          	       '<td class=sorting_1>'+result.data[i].no+'</td>'+
         	      '<td>'+result.data[i].date+'</td>'+
         	       '<td>'+result.data[i].comp+'</td>'+
         	       '<td>'+result.data[i].qty+'</td>'+
         	       '<td>'+result.data[i].test+'</td>'+
         	       '<td>'+label+'</td>'+
         	       '</tr>';
                 }
                 $('#tb-data').html(html);
                 $("#reservation-data").busyLoad("hide");
             }

         });
     }
	  });
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Form Reservasi
		<!-- <small>Preview</small> -->
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
			<h3 class="box-title">Form Pengujian Fisika</h3>

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
		<form method="post" id="form-reservation">
			<div class="box-body" id="box-reservation">
				<div class="row">
					<div class="col-md-6">

						<!-- Date -->
						<div class="form-group">

							<div class="row">
								<div class="col-xs-4">
									<label>Tanggal:</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right"
											id="datepicker" name="check_in_date">
									</div>
								</div>

								<div class="col-xs-4">
									<label>Jenis: </label> <select name="sample_type"
										class="form-control select2" style="width: 100%;">
										<option selected="selected">Kain</option>
										<option>Benang</option>
									</select>
								</div>

								<div class="col-xs-4">
									<label>Jumlah: </label> <input type="text" name="sample_qty"
										class="form-control" placeholder="Enter ...">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Nama Perusahaan: </label> <select name="company_name"
								class="form-control select2" style="width: 100%;">
								<option selected="selected">PT ShinesDev Indonesia</option>
								<option>PT Sejahtera Mandiri</option>
								<option>PT Rumingkang Indonesia</option>
								<option>PT Harapan Jaya Sakti</option>
								<option>PT Urban Texstil Jaya</option>
								<option>PT Kembang Wangi Jaya</option>
								<option>PT Rembaka Indonesia</option>
							</select>
						</div>
					</div>
					<!-- /.col -->

					<div class="col-md-6">
						<div class="form-group">
							<label>Jenis Pengujian: </label> <select name="test_include[]"
								class="form-control select2" multiple="multiple"
								data-placeholder="Select a State" style="width: 100%;">
								<option value="DMN">Pengujian Pemeriksaaan dan Dimensi Sudut
									Kusut Kain</option>
								<option value="TTL">Pengujian Tetal Benang dan Anyaman Kain</option>
								<option value="BNG">Pengujian Nomor Benang</option>
								<option value="TRK">Pengujian Kekuatan Tarik</option>
								<option value="SBK">Pengujian Kekuatan Sobek (Elmendorf)</option>
								<option value="TBS">Pengujian Daya Tembus Udara</option>
								<option value="TWS">Pengujian Kain Twist</option>
							</select>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.box-body -->

			<div class="callout callout-success" id="info-success"
				style="display: none;">
				<h4>Success</h4>

				<p>Data Reservasi Tersimpan</p>
			</div>

			<div class="box-footer">
				<button id="submitrsvp" value="submit" type="button"
					class="btn btn-primary pull-right">Submit</button>
			</div>
		</form>
	</div>
	<!-- /.box -->

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Pengujian Fisika</h3>
			
			<!-- /.box-header -->
			<div class="box-body">
				<table id="reservation-data" class="display" style="width:100%" >
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
					<tbody id="tb-data"></tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

</section>
<!-- /.content -->
<script type="text/javascript"> 
function loadData(){
	/* 
	$.busyLoadSetup({ animation: "slide", background: "rgba(242, 241, 239, 1)" });
		$("#reservation-data").busyLoad("show",
				 { text: "LOADING ...",
				   textPosition: "bottom"
				 }); */
		 
     $.ajax({
         type  : 'ajax',
         url   : 'reservation/listReservationData',
         async : false,
         dataType : 'json',
         success : function(result){
             var html = '';
             var i;
             for(i=0; i<result.data.length; i++){
             var label = '<span class="label label-success">'+result.data[i].status+'</span>'; 
      		   if(result.data.status == 'OPEN'){
      			   label  = '<span class="label label-danger">'+result.data[i].status+'</span>';
      	       }else if(result.data.status == 'PROGRESS'){
      	    	   label  = '<span class="label label-warning">'+result.data[i].status+'</span>';
      	       }
      	       var stripped = 'class="odd"'
      	       if(i % 2 == 0){
      	    	   stripped = 'class="even"'
      	       }   
      	       
                 html += '<tr '+stripped+' role=row>'+
      	       '<td class=sorting_1>'+result.data[i].no+'</td>'+
     	      '<td>'+result.data[i].date+'</td>'+
     	       '<td>'+result.data[i].comp+'</td>'+
     	       '<td>'+result.data[i].qty+'</td>'+
     	       '<td>'+result.data[i].test+'</td>'+
     	       '<td>'+label+'</td>'+
     	       '</tr>';
             }
             $('#tb-data').html(html);
             $("#reservation-data").busyLoad("hide");
         }

     });
 }
	$(document).ready(function() {
		
	$('#reservation-data').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : true,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : true
	    })
	    
	$('#submitrsvp').on('click', function() {
		$("#submitrsvp").attr("disabled", "disabled");
		
		//$.busyLoadSetup({ animation: "slide", background: "rgba(255, 152, 0, 0.86)" });
		//$("#info-success").busyLoad("show");
		
			$.ajax({
				url: "reservation/submitRSVP",
				type: "POST",
				dataType: 'json',
				data: $('#form-reservation').serialize(),
				cache: false,
				 timeout: 5000,
				success: function(dataResult){
						//$("#info-success").busyLoad("hide");
						
						$('#info-success').show();
						//$('#info-success').fadeOut();
						setTimeout(function(){$('#info-success').fadeOut();}, 1000);
						
						$("#submitrsvp").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
					loadData();
				},
				fail: function(xhr, textStatus, errorThrown){
				       alert('request failed');
				       $("#box-reservation").busyLoad("hide");
				    }
			});
	});
});
</script>