<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reports Uji Dimensi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../themes/default/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../themes/default/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../themes/default/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../themes/default/dist/css/AdminLTE.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- <body onload="window.print();"> !-->
 <body>
 <?php 
 foreach ($data as $row){
 ?>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> <?php echo $row->company;?>
          <small class="pull-right">Date: <?php echo $row->check_in_date;?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-bordered text-center">
          <thead>
          <tr>
            <th>NO. WO</th>
            <th>Contoh</th>
            <th>Lebar (m)</th>
            <th>Gramasi (g)</th>
            <th>Ketarangan</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td rowspan="7"><?php echo $row->wo_no;?></td>
            <td rowspan="5"><?php echo $row->sample_type;?></td>
            <td><?php echo $row->dm_width_1;?></td>
            <td><?php echo $row->dm_weight_1;?></td>
            <td rowspan="5">-</td>
          </tr>
          <tr>
          	<td><?php echo $row->dm_width_2;?></td>
            <td><?php echo $row->dm_weight_2;?></td>
          </tr>
          <tr>
          	<td><?php echo $row->dm_width_3;?></td>
            <td><?php echo $row->dm_weight_3;?></td>
          </tr>
          <tr>
          	<td><?php echo $row->dm_width_4;?></td>
            <td><?php echo $row->dm_weight_4;?></td>
          </tr>
          <tr>
          	<td><?php echo $row->dm_width_5;?></td>
            <td><?php echo $row->dm_weight_5;?></td>
          </tr>
          <tr>
            <td class="pull-right no-border">Rata-rata (m)</td>
            <td><?php echo $avg_width_m;?></td>
            <td><?php echo $avg_gram_g;?></td>
            <td class="pull-left no-border">Rata-rata (g)</td>
          </tr>
           <tr >
            <td class="pull-right no-border">Rata-rata (inch)</td>
            <td><?php echo $avg_width_inc;?></td>
            <td><?php echo $avg_gram_gm2;?></td>
            <td class="pull-left no-border">Rata-rata (g/m2)</td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td class="bg-gray"><?php echo $avg_gram_gm2;?></td>
            <td class="pull-left no-border">Rata-rata (g/m)</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<?php }?>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Feb 2019 08:25:15 GMT -->
</html>
