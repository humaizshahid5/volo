<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Patner Portal | Volo</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
      <!-- DataTables -->
      <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
      <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
      <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css" />
      <link rel="stylesheet" href="dist/css/main.css" />
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
                        <h1 class="m-0">Order's History</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card" id="complete">
                           <div class="card-header">
                              <h3 class="card-title">Filter</h3>
                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>From</label>
                                       <input type="date" class="form-control" name="from" />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>From</label>
                                       <input type="date" class="form-control" name="from" />
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <button class="btn btn-block btn-default">
                                    Search
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <!-- /.card-header -->
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-3 col-sm-6 col-12">
                                    <a href="#" data-toggle="modal" data-target="#total">
                                       <div class="info-box bg-gradient-info">
                                          <span class="info-box-icon"><i class="fas fa-shopping-bag"></i></span>
                                          <div class="info-box-content">
                                             <span class="info-box-text">Total orders</span>
                                             <span class="info-box-number">1,200</span>
                                          </div>
                                          <!-- /.info-box-content -->
                                       </div>
                                    </a>
                                    <!-- /.info-box -->
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-md-3 col-sm-6 col-12">
                                    <a href="#" data-toggle="modal" data-target="#cancelled">
                                       <div class="info-box bg-gradient-danger">
                                          <span class="info-box-icon"><i class="fas fa-times"></i></span>
                                          <div class="info-box-content">
                                             <span class="info-box-text">Cancelled Orders</span>
                                             <span class="info-box-number">410</span>
                                          </div>
                                          <!-- /.info-box-content -->
                                       </div>
                                    </a>
                                    <!-- /.info-box -->
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-md-3 col-sm-6 col-12">
                                    <a href="#" data-toggle="modal" data-target="#pickup">
                                       <div class="info-box bg-gradient-warning">
                                          <span class="info-box-icon"><i class="fas fa-car"></i></span>
                                          <div class="info-box-content">
                                             <span class="info-box-text">Pickup Order</span>
                                             <span class="info-box-number">410</span>
                                          </div>
                                          <!-- /.info-box-content -->
                                       </div>
                                    </a>
                                    <!-- /.info-box -->
                                 </div>
                                 <div class="col-md-3 col-sm-6 col-12">
                                    <a href="#" data-toggle="modal" data-target="#delivered">
                                       <div class="info-box bg-gradient-success">
                                          <span class="info-box-icon"><i class="fas fa-motorcycle"></i></span>
                                          <div class="info-box-content">
                                             <span class="info-box-text">Delivered Order</span>
                                             <span class="info-box-number">410</span>
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
                  <!-- /.row -->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card" id="complete">
                           <div class="card-header">
                              <h3 class="card-title">Order's</h3>
                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-12" style="overflow: scroll;">
                                    <table id="example1" class="table table-bordered table-responsive">
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
                                             <td>Mohamed Jaffer</td>
                                             <td>+973 0000000</td>
                                             <td>Office: 415 Floor: 4 Building: 9182 Road: 456 Area: Saar Notes: Please do not ring the bell</td>
                                             <td>NO</td>
                                             <td>Cash</td>
                                             <td>NO</td>
                                             <td>BD 5.400</td>
                                             <td>BD 0.000</td>
                                             <td>BD 0.000</td>
                                             <td><button class="btn btn-md btn-block btn-success" data-toggle="modal" data-target="#orderdetail">View Order</button></td>
                                          </tr>
                                          <tr>
                                            <td>21BE0B82</td>
                                            <td>23:33 11 July 2021</td>
                                            <td>ASAP</td>
                                            <td>Delivery</td>
                                            <td>Mohamed Jaffer</td>
                                            <td>+973 0000000</td>
                                            <td>Office: 415 Floor: 4 Building: 9182 Road: 456 Area: Saar Notes: Please do not ring the bell</td>
                                            <td>NO</td>
                                            <td>Cash</td>
                                            <td>NO</td>
                                            <td>BD 5.400</td>
                                            <td>BD 0.000</td>
                                            <td>BD 0.000</td>
                                            <td><button class="btn btn-md btn-block btn-success" data-toggle="modal" data-target="#orderdetail">View Order</button></td>
                                         </tr>
                                         <tr>
                                          <td>21BE0B82</td>
                                          <td>23:33 11 July 2021</td>
                                          <td>ASAP</td>
                                          <td>Delivery</td>
                                          <td>Mohamed Jaffer</td>
                                          <td>+973 0000000</td>
                                          <td>Office: 415 Floor: 4 Building: 9182 Road: 456 Area: Saar Notes: Please do not ring the bell</td>
                                          <td>NO</td>
                                          <td>Cash</td>
                                          <td>NO</td>
                                          <td>BD 5.400</td>
                                          <td>BD 0.000</td>
                                          <td>BD 0.000</td>
                                          <td><button class="btn btn-md btn-block btn-success" data-toggle="modal" data-target="#orderdetail">View Order</button></td>
                                       </tr>
                                       <tr>
                                        <td>21BE0B82</td>
                                        <td>23:33 11 July 2021</td>
                                        <td>ASAP</td>
                                        <td>Delivery</td>
                                        <td>Mohamed Jaffer</td>
                                        <td>+973 0000000</td>
                                        <td>Office: 415 Floor: 4 Building: 9182 Road: 456 Area: Saar Notes: Please do not ring the bell</td>
                                        <td>NO</td>
                                        <td>Cash</td>
                                        <td>NO</td>
                                        <td>BD 5.400</td>
                                        <td>BD 0.000</td>
                                        <td>BD 0.000</td>
                                        <td><button class="btn btn-md btn-block btn-success" data-toggle="modal" data-target="#orderdetail">View Order</button></td>
                                     </tr>
                                     <tr>
                                      <td>21BE0B82</td>
                                      <td>23:33 11 July 2021</td>
                                      <td>ASAP</td>
                                      <td>Delivery</td>
                                      <td>Mohamed Jaffer</td>
                                      <td>+973 0000000</td>
                                      <td>Office: 415 Floor: 4 Building: 9182 Road: 456 Area: Saar Notes: Please do not ring the bell</td>
                                      <td>NO</td>
                                      <td>Cash</td>
                                      <td>NO</td>
                                      <td>BD 5.400</td>
                                      <td>BD 0.000</td>
                                      <td>BD 0.000</td>
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
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
               <h5>Title</h5>
               <p>Sidebar content</p>
            </div>
         </aside>
         <?php include "popup.php"; ?>

<!-- Main Footer -->
<?php include "footer.php"; ?>
      <script>
         $(function () {
             $("#example1")
                 .DataTable({
                     responsive: true,
                     lengthChange: true,
                     pageLength: 50,
                     lengthMenu: [
                         [5, 10, 25, 50, -1],
                         [5, 10, 25, 50, "All"],
                     ],
                     autoWidth: true,
                     buttons: ["copy", "excel", "pdf", "print", "colvis"],
                 })
                 .buttons()
                 .container()
                 .appendTo("#example1_wrapper .col-md-6:eq(0)");
         });
      </script>
    
   
   </body>
</html>