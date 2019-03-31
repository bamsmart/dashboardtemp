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
                url   : 'dimensi/listDetailData',
                dataType : 'json',
                success : function(result){
                    var html = '';
                    $("#dm_width_1").val(result.data[0].dm_width_1);
                    $("#dm_width_2").val(result.data[0].dm_width_2);
                    $("#dm_width_3").val(result.data[0].dm_width_3);
                    $("#dm_width_4").val(result.data[0].dm_width_4);
                    $("#dm_width_5").val(result.data[0].dm_width_5);
                    //==============================================
                    $("#dm_height_1").val(result.data[0].dm_height_1);
                    $("#dm_height_2").val(result.data[0].dm_height_2);
                    $("#dm_height_3").val(result.data[0].dm_height_3);
                    $("#dm_height_4").val(result.data[0].dm_height_4);
                    $("#dm_height_5").val(result.data[0].dm_height_5);
                    //==============================================
                    $("#dm_thick_1").val(result.data[0].dm_thick_1);
                    $("#dm_thick_2").val(result.data[0].dm_thick_2);
                    $("#dm_thick_3").val(result.data[0].dm_thick_3);
                    $("#dm_thick_4").val(result.data[0].dm_thick_4);
                    $("#dm_thick_5").val(result.data[0].dm_thick_5);
                    //==============================================
                    $("#dm_weight_1").val(result.data[0].dm_weight_1);
                    $("#dm_weight_2").val(result.data[0].dm_weight_2);
                    $("#dm_weight_3").val(result.data[0].dm_weight_3);
                    $("#dm_weight_4").val(result.data[0].dm_weight_4);
                    $("#dm_weight_5").val(result.data[0].dm_weight_5);
                    //==============================================
                    $("#ks_l_interface_1").val(result.data[0].ks_l_interface_1);
                    $("#ks_l_interface_2").val(result.data[0].ks_l_interface_2);
                    $("#ks_l_interface_3").val(result.data[0].ks_l_interface_3);
                    $("#ks_l_interface_4").val(result.data[0].ks_l_interface_4);
                    $("#ks_l_interface_5").val(result.data[0].ks_l_interface_5);
                  //==============================================
                    $("#ks_l_back_1").val(result.data[0].ks_l_back_1);
                    $("#ks_l_back_2").val(result.data[0].ks_l_back_2);
                    $("#ks_l_back_3").val(result.data[0].ks_l_back_3);
                    $("#ks_l_back_4").val(result.data[0].ks_l_back_4);
                    $("#ks_l_back_5").val(result.data[0].ks_l_back_5);
                  //==============================================
                    $("#ks_p_interface_1").val(result.data[0].ks_p_interface_1);
                    $("#ks_p_interface_2").val(result.data[0].ks_p_interface_2);
                    $("#ks_p_interface_3").val(result.data[0].ks_p_interface_3);
                    $("#ks_p_interface_4").val(result.data[0].ks_p_interface_4);
                    $("#ks_p_interface_5").val(result.data[0].ks_p_interface_5);
                  //==============================================
                    $("#ks_p_back_1").val(result.data[0].ks_p_back_1);
                    $("#ks_p_back_2").val(result.data[0].ks_p_back_2);
                    $("#ks_p_back_3").val(result.data[0].ks_p_back_3);
                    $("#ks_p_back_4").val(result.data[0].ks_p_back_4);
                    $("#ks_p_back_5").val(result.data[0].ks_p_back_5);
                }
            });
        }
});
</script>
<!-- Content Header (Page header) -->
<link
	href="themes/default/plugins/bootstrap-validator/css/bootstrapValidator.css"
	rel="stylesheet">
<link
	href="themes/default/plugins/bootstrap-validator/css/bootstrapValidator.min.css"
	rel="stylesheet">
<script
	src="themes/default/plugins/bootstrap-validator/js/bootstrapValidator.js"
	type="text/javascript"></script>
<script
	src="themes/default/plugins/bootstrap-validator/js/bootstrapValidator.min.js"
	type="text/javascript"></script>
<section class="content-header">
	<h1>
		Pengujian Pemeriksaaan dan Dimensi Sudut Kusut Kain
		<!-- <small>Preview</small> -->
	</h1>
	<ol class="breadcrumb">
		<li><a href="?"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="?page=dimensi">Forms</a></li>
		<li class="active">Dimensi & Sudut</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="box box-default">

		<div class="box-body">

			<div class="panel panel-default">
				<div class="panel-heading">Dimensi - <?php if(isset($_GET['ID'])){ echo $_GET['ID'];}else{ echo "";}?></div>
				<div class="panel-body">

					<form id="form-dimension" method="post"
						data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
						data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
						data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">

						<input type="hidden" name="wo_no" value="<?php if(isset($_GET['ID'])){ echo $_GET['ID'];}else{ echo "";}?>">

	
						<div class="row">
							<div class="col-md-12">
								<label>Lebar (m):</label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_width_1" id="dm_width_1"
												placeholder="l(1)"
												data-bv-integer-message="The value is not an integer">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_width_2" id="dm_width_2"
												placeholder="l(2)" type="number"
												data-bv-integer-message="The value is not an integer">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_width_3" id="dm_width_3"
												placeholder="l(3)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_width_4" id="dm_width_4"
												placeholder="l(4)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_width_5" id="dm_width_5"
												placeholder="l(5)">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label>Panjang (m): </label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_height_1" id="dm_height_1"
												placeholder="h(1)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_height_2"  id="dm_height_2"
												placeholder="h(2)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_height_3"  id="dm_height_3"
												placeholder="h(3)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_height_4"  id="dm_height_4"
												placeholder="h(4)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_height_5"  id="dm_height_5"
												placeholder="h(5)">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label>Tebal (mm): </label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_thick_1" id="dm_thick_1"
												placeholder="t(1)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_thick_2" id="dm_thick_2"
												placeholder="t(2)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_thick_3" id="dm_thick_3"
												placeholder="t(3)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_thick_4" id="dm_thick_4"
												placeholder="t(4)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_thick_5" id="dm_thick_5"
												placeholder="t(5)">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label>Berat 100 cm2 (g): </label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_weight_1" id="dm_weight_1"
												placeholder="w(1)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_weight_2" id="dm_weight_2"
												placeholder="w(2)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_weight_3" id="dm_weight_3"
												placeholder="w(3)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_weight_4" id="dm_weight_4"
												placeholder="w(4)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="dm_weight_5" id="dm_weight_5"
												placeholder="w(5)">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="callout callout-success" id="info-success-dimensi"
				style="display:none;">
				<h4>Success</h4>
				<p>Data Dimensi Tersimpan</p>
			</div>
			
							<button type="button" class="btn btn-primary pull-right"
								id="submitdimension">Submit</button>
						
						
					</form>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">Sudut - <?php if(isset($_GET['ID'])){ echo $_GET['ID'];}else{ echo "";}?></div>
				<div class="panel-body">
					<form id="form-sudut" method="post">
						<input type="hidden" name="wo_no" value="<?php if(isset($_GET['ID'])){ echo $_GET['ID'];}else{ echo "";}?>">
						<div class="row">
							<div class="col-md-12">
								<label>Lusi (Antar Muka):</label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_l_interface_1" placeholder="l-am-(1)" id="ks_l_interface_1">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_l_interface_2" placeholder="l-am-(2)" id="ks_l_interface_2">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_l_interface_3" placeholder="l-am-(3)" id="ks_l_interface_3">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_l_interface_4" placeholder="l-am-(4)" id="ks_l_interface_4">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_l_interface_5" placeholder="l-am-(5)"  id="ks_l_interface_5">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label>Lusi (Antar Belakang): </label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_l_back_1" id="ks_l_back_1"
												placeholder="l-ab-(1)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_l_back_2" id="ks_l_back_2"
												placeholder="l-ab-(2)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_l_back_3" id="ks_l_back_3"
												placeholder="l-ab-(3)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_l_back_4" id="ks_l_back_4"
												placeholder="l-ab-(4)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_l_back_5" id="ks_l_back_5"
												placeholder="l-ab-(5)">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label>Pakan (Antar Muka): </label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_p_interface_1" placeholder="p-am-(1)" id="ks_p_interface_1">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_p_interface_2" placeholder="p-am-(2)"  id="ks_p_interface_2">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_p_interface_3" placeholder="p-am-(3)"  id="ks_p_interface_3">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_p_interface_4" placeholder="p-am-(4)"  id="ks_p_interface_4">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control"
												name="ks_p_interface_5" placeholder="p-am-(5)" id="ks_p_interface_5">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label>Pakan (Antar Belakang): </label>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_p_back_1" id="ks_p_back_1"
												placeholder="p-ab-(1)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_p_back_2" id="ks_p_back_2"
												placeholder="p-ab-(2)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_p_back_3" id="ks_p_back_3"
												placeholder="p-ab-(3)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_p_back_4" id="ks_p_back_4"
												placeholder="p-ab-(4)">
										</div>

										<div class="col-xs-2">
											<input type="text" class="form-control" name="ks_p_back_5" id="ks_p_back_5"
												placeholder="p-ab-(5)">
										</div>

										<div class="col-xs-2 pull-right">
											<input type="text" class="form-control"
												placeholder="x&#x0304" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="callout callout-success" id="info-success-sudut"
				style="display:none;">
				<h4>Success</h4>
				<p>Data Sudut Tersimpan</p>
			</div>
			
			
							<button type="button" class="btn btn-primary pull-right"
								id="submitsudut">Submit</button>
					
					</form>
				</div>
			</div>
		</div>
		</div>
</section>
<!-- /.content -->
<script type="text/javascript">
    $(document).ready(function() {
		//Validator
        $('#form-dimension').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and can\'t be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                country: {
                    validators: {
                        notEmpty: {
                            message: 'The country is required and can\'t be empty'
                        }
                    }
                },
                acceptTerms: {
                    validators: {
                        notEmpty: {
                            message: 'You have to accept the terms and policies'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                website: {
                    validators: {
                        uri: {
                            allowLocal: true,
                            message: 'The input is not a valid URL'
                        }
                    }
                },
                phoneNumberUS: {
                    validators: {
                        phone: {
                            message: 'The input is not a valid US phone number'
                        }
                    }
                },
                phoneNumberUK: {
                	validators: {
                		phone: {
                			message: 'The input is not a valid UK phone number',
                			country: 'GB'
                		}
                	}
                },
                color: {
                    validators: {
                        hexColor: {
                            message: 'The input is not a valid hex color'
                        }
                    }
                },
                zipCode: {
                    validators: {
                        zipCode: {
                            country: 'US',
                            message: 'The input is not a valid US zip code'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        },
                        identical: {
                            field: 'confirmPassword',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                confirmPassword: {
                    validators: {
                        notEmpty: {
                            message: 'The confirm password is required and can\'t be empty'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
                ages: {
                    validators: {
                        lessThan: {
                            value: 100,
                            inclusive: true,
                            message: 'The ages has to be less than 100'
                        },
                        greaterThan: {
                            value: 10,
                            inclusive: false,
                            message: 'The ages has to be greater than or equals to 10'
                        }
                    }
                }
            }
        }); 


        $('#submitdimension').on('click', function() {
            $.busyLoadSetup({
                animation: "slide",
                background: "rgba(255, 152, 0, 0.86)"
            });
            $("#form-dimension").busyLoad("show");

            $.ajax({
                url: "dimensi/submitDimensionData",
                type: "POST",
                dataType: 'json',
                data: $('#form-dimension').serialize(),
                cache: false,
                timeout: 5000,
                success: function(dataResult) {
                    $("#form-dimension").busyLoad("hide");

                    $('#info-success-dimensi').show();
                    setTimeout(function(){$('#info-success-dimensi').fadeOut();}, 1000);
                    
                    $("#submitdimension").removeAttr("disabled");
                    $('#fupForm').find('input:text').val('');
                },
                fail: function(xhr, textStatus, errorThrown) {
                    alert('request failed');
                    $("#form-dimension").busyLoad("hide");
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