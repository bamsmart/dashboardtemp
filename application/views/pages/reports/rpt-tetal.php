<script type="text/javascript">
$(document).ready(function(){
	loadData();
	
     function loadData(){
    	$.busyLoadSetup({ animation: "slide", background: "rgba(255, 152, 0, 0.86)" });
    	
    	$("#tbl-tetal").busyLoad("show",{ text: "LOADING ...",
			   textPosition: "bottom"
		 });
		 
         $.ajax({
        	 type  : 'POST',
             url   : 'tetal/listBudleData',
             async : false,
			 contentType: "application/json; charset=utf-8",
             dataType : 'json',
             success : function(result){
                 var html = '';
                 var i;
                 for(i=0; i<result.data.length; i++){
                 var badge = '<span class="badge bg-'+result.data[i].color+'">'+result.data[i].progress+'</span>'; 

                 var progress = '<div class="progress progress-xs">'+
					'<div class="progress-bar progress-bar-danger"'+
						'style="width: '+result.data[i].progress+'%"></div>'+
				'</div>';

                 var stripped = 'class="odd"'
            	       if(i % 2 == 0){
            	    	   stripped = 'class="even"'
            	       } 
      	       
                 html += '<tr '+stripped+' role=row>'+
          	       '<td class=sorting_1>'+result.data[i].no+'</td>'+
         	      '<td>'+result.data[i].date+'</td>'+
         	       '<td>'+result.data[i].type+'</td>'+
         	       '<td>'+progress+'</td>'+
         	       '<td>'+badge+'</td>'+
         	       '<td><a href="reports/printTetal?id='+result.data[i].no+'" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a></td>'+
         	       '</tr>';
                 }
                 $('#row-tetal-data').html(html);
                 $("#tbl-tetal-report").busyLoad("hide");
             }

         });
     }

     $('#tbl-tetal-report').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : true,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : true
	    });
	    
	  });
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Laporan Pengujian Tetal & Anyaman Kain
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Reports</a></li>
		<li class="active">Tetal</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
                                <div class="box-body table-responsive">
                                    <table id="tbl-tetal-report" class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No. WO</th>
                                                <th>Tanggal</th>
                                                <th>Contoh</th>
                                                <th>Progress</th>
                                                <th>Nilai</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="row-tetal-data"></tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
		</div>
	</div>
</section>
<!-- /.content -->
 <script type="text/javascript">
$(document).ready(function() {
	/* $('#tbl-tetal-report').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : true,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : true
	    }); */
	  });
</script>       