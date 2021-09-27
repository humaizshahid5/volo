<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Patner Portal | Volo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/main.css">

</head>
<body class="hold-transition sidebar-mini">
  
<div class="wrapper">
<?php include "header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Order's Request</p>
              </div>
              <div class="icon">
                <i class="fas fa-paper-plane"></i>
              </div>
              <a href="#requests" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Pending Order's</p>
              </div>
              <div class="icon">
                <i class="fas fa-history"></i>
              </div>
              <a href="#pending" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Prepared Order's</p>
              </div>
              <div class="icon">
                <i class="fas fa-concierge-bell"></i>
               
              </div>
              <a href="#ready" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>65</h3>

                <p>Completed Order's</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
              <a href="#complete" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body" >
                <div class="row">
                  
                  <div class="col-md-4 col-sm-6 col-12">
                    <a href="#" data-toggle="modal" data-target="#active">
                    <div class="info-box bg-gradient-info">
                      <span class="info-box-icon"><i class="far fa-clock"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Active Order</span>
                        <span class="info-box-number">10</span>
        
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                          70% Increase from last hour
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                  </a>
                    <!-- /.info-box -->
                  </div>

                  <!-- /.col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <a href="#" data-toggle="modal" data-target="#today">
                    <div class="info-box bg-gradient-success">
                      <span class="info-box-icon"><i class="fas fa-calendar-alt"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Today's Order</span>
                        <span class="info-box-number">1,410</span>
        
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                          70% Increase from last day
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    </a>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <a href="#" data-toggle="modal" data-target="#cancelled">
                    <div class="info-box bg-gradient-danger">
                      <span class="info-box-icon"><i class="fas fa-times"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Cancled Order</span>
                        <span class="info-box-number">410</span>
        
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                          70% Increase in 30 Days
                        </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    </a>
                    <!-- /.info-box -->
                  </div>
                  
                </div>
           
              </div>
            </div>
          </div>
          </div>

        <div class="row">

          <div class="col-lg-12">
           
            <div class="card" id="requests">
              <div class="card-header">
                <h3 class="card-title">Order's Request</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12" style="overflow: scroll;">
                    <table id="example1" class="table table-bordered  table-responsive" >
                      <thead>
                      <tr>
                        <th class="info-heading"></th>
                        <th>Order ID</th>
                        <th>Placed On</th>
                        <th>Pickup Time</th>
                        <th>Order Type</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Payment</th>
                        <th>Total</th>
                       
                      </tr>
                      </thead>
                      <tbody>

                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
    
                      </tbody>
                     
                    </table>

                  </div>
                </div>

           
          
              </div>
              <!-- /.card-body -->
            </div>

           
          </div>
         
        </div>
        <!-- /.row -->
        <div class="row">

          <div class="col-lg-12">
           
            <div class="card" id="pending">
              <div class="card-header">
                <h3 class="card-title">Pending Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12" style="overflow: scroll;">
                    <table id="example2" class="table table-bordered  table-responsive" >
                      <thead>
                      <tr>
                        <th class="info-heading"></th>
                        <th>Order ID</th>
                        <th>Placed On</th>
                        <th>Pickup Time</th>
                        <th>Order Type</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Payment</th>
                        <th>Total</th>
                       
                      </tr>
                      </thead>
                      <tbody>

                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
                      <tr>
                        <td class="more-info"><button class="btn btn-md btn-default btn-more" data-toggle="modal" data-target="#orderdetail">+</button></td>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>                     
                        <td>Cash</td>                 
                        <td>BD 5.400	</td>               
                      </tr>
    
                      </tbody>
                     
                    </table>

                  </div>
                </div>

           
          
              </div>
              <!-- /.card-body -->
            </div>

           
          </div>
         
        </div>
        <div class="row">

          <div class="col-lg-12">
           
            <div class="card" id="ready">
              <div class="card-header">
                <h3 class="card-title">Order ready for delivery and pickup</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12" style="overflow: scroll;">
                    <table id="example3" class="table table-bordered  table-responsive" >
                      <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Placed On</th>
                        <th>Pickup Time</th>
                        <th>Order Type</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Customer address</th>
                        <th>Cutlery</th>
                        <th>Payment</th>
                        <th>Prepaid</th>
                        <th>Subtotal</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Order</th>
                        <th>Action</th>  
                     

                        
                      </tr>
                      </thead>
                      <tbody>
                    
    
                      </tbody>
                     
                    </table>

                  </div>
                </div>

           
          
              </div>
              <!-- /.card-body -->
            </div>

           
          </div>
         
        </div>
        <!-- /.row -->
        <div class="row">

          <div class="col-lg-12">
           
            <div class="card" id="complete">
              <div class="card-header">
                <h3 class="card-title">Complete Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12" style="overflow: scroll;">
                    <table id="example4" class="table table-bordered  table-responsive" >
                      <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Placed On</th>
                        <th>Pickup Time</th>
                        <th>Order Type</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Customer address</th>
                        <th>Cutlery</th>
                        <th>Payment</th>
                        <th>Prepaid</th>
                        <th>Subtotal</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Order</th>
                          
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>21BE0B82</td>
                        <td>23:33 11 July 2021</td>
                        <td>ASAP</td>
                        <td>Delivery</td>
                        <td>Mohamed Jaffer	</td>
                        <td>+973 0000000	</td>
                        <td>Office: 415 Floor: 4 Building: 9182 Road: 456 Area: Saar Notes: Please do not ring the bell	</td>
                        <td>NO</td>
                        <td>Cash</td>
                        <td>NO</td>
                        <td>BD 5.400	</td>
                        <td>BD 0.000	</td>
                        <td>BD 0.000	</td>
                        <td><button class="btn btn-md btn-block btn-success" data-toggle="modal" data-target="#orderdetail">View Order</button></td>
                        
                       


                      
                      </tr>
    
                      </tbody>
                     
                    </table>

                  </div>
                </div>

           
          
              </div>
              <!-- /.card-body -->
            </div>

           
          </div>
         
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </div>
 

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" > 
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <?php include "popup.php"; ?>

  <!-- Main Footer -->
 <?php include "footer.php"; ?>
<!-- ./wrapper -->


<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
     "lengthChange": true, "pageLength": 50, "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],  "autoWidth": true,
      "buttons": ["copy",  "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example2").DataTable({ 
      "responsive": true, "lengthChange": true, "pageLength": 50, "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ], "autoWidth": false,
      "buttons": ["copy",  "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    $("#example3").DataTable({
      "responsive": true, "lengthChange": true, "pageLength": 50, "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],  "autoWidth": false,
      "buttons": ["copy",  "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    $("#example4").DataTable({
       "responsive": true, "lengthChange": true, "pageLength": 20, "lengthMenu": [ [5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "All"] ], "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
    
  });
  
</script>

</body>
</html>
