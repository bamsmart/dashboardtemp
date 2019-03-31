<script type="text/javascript">
$(document).ready(function(){
	loadData();
	
     function loadData(){
    	$.busyLoadSetup({ animation: "slide", background: "rgba(255, 152, 0, 0.86)" });
    	
    	$("#tbl-tetal").busyLoad("show",{ text: "LOADING ...",
			   textPosition: "bottom"
		 });
		 
         $.ajax({
             type: "POST",
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
         	       '<td><div class="btn-group">'+
         	      '<button type="button" class="btn btn-warning">Action</button>'+
         	     '<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">'+
         	         '<span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> '+
         	     '</button>'+
         	     '<ul class="dropdown-menu" role="menu">'+
         	         '<li><a href="?page=tetal&action&ID='+result.data[i].no+'">Action</a></li>'+
         	         '<li><a href="?page=tetal&reject">Reject</a></li>'+
         	     '</ul>'+
         	 '</div></td>'+
         	       '</tr>';
                 }
                 $('#data-tetal').html(html);
                 $("#tbl-tetal").busyLoad("hide");
             }

         });
     }
	  });
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Form Pengujian Tetal & Anyaman Kain
	</h1>
	<ol class="breadcrumb">
		<li><a href="?"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="?page=tetal">Forms</a></li>
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
					<table class="table table-hover" id="tbl-tetal">
						<tr>
							<th>No. WO</th>
							<th>Tanggal Masuk</th>
							<th>Nama Perusahaan</th>
							<th>Progress</th>
							<th>Label</th>
							<th>Action</th>
						</tr>
						<tbody id="data-tetal"></tbody>
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