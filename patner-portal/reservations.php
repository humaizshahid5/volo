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
            <h1 class="m-0">Reservations</h1>
          </div><!-- /.col -->
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Reservations</li>
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
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Reservations Request</p>
              </div>
              <div class="icon">
                <i class="fas fa-paper-plane"></i>
              </div>
              <a href="#requests" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Today's Reservations</p>
              </div>
              <div class="icon">
                <i class="fas fa-history"></i>
              </div>
              <a href="#today" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Upcoming Reservations</p>
              </div>
              <div class="icon">
                <i class="fas fa-clock"></i>
               
              </div>
              <a href="#upcoming" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
     
          <!-- ./col -->
        </div>
    

        <div class="row">

          <div class="col-lg-12">
           
            <div class="card" id="requests">
              <div class="card-header">
                <h3 class="card-title">Reservation requests </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12" style="overflow: scroll;">
                    <table id="reservations_request" class="table table-bordered  table-responsive" >
                      <thead>
                      <tr>
                        <th>Reservation Date</th>
                        <th>Reservation Day	</th>
                        <th>Reservation Time</th>
                        <th>Guest Name</th>
                        <th>Guests</th>     
                        <th>Phone</th>
                        <th>Notes</th>
                        <th>Requested On</th>
                        <th>Action</th>
                          
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>2021-07-14	</td>
                        <td>Wednesday</td>
                        <td>8:00 am (08:00)</td>
                        <td>Mohamed Jaffer</td>
                        <td>5</td>
                        <td>+973 0000000	</td>
                        <td>None</td>
                        <td>2021-07-14 02:35:10	</td>
                        <td><button class="btn btn-md btn-block btn-info"> Approve </button><button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#decline">Decline</button></td>
                       


                      
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
           
            <div class="card" id="today">
              <div class="card-header">
                <h3 class="card-title">Today's Reservation</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12" >
                    <table id="reservations_request" class="table table-bordered table-responsive" >
                      <thead>
                      <tr>
                        <th>Reservation Date</th>
                        <th>Reservation Day	</th>
                        <th>Reservation Time</th>
                        <th>Guest Name</th>
                        <th>Guests</th>     
                        <th>Phone</th>
                        <th>Notes</th>
                        <th>Requested On</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>2021-07-14	</td>
                        <td>Wednesday</td>
                        <td>8:00 am (08:00)</td>
                        <td>Mohamed Jaffer</td>
                        <td>5</td>
                        <td>+973 0000000	</td>
                        <td>None</td>
                        <td>2021-07-14 02:35:10	</td>
                        <td>Upcoming</td>

                        <td><button class="btn btn-md btn-block btn-info"> Done </button><button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#decline">Cancel</button></td>
                       


                      
                      </tr>
                      <tr>
                        <td>2021-07-14	</td>
                        <td>Wednesday</td>
                        <td>8:00 am (08:00)</td>
                        <td>Mohamed Jaffer</td>
                        <td>5</td>
                        <td>+973 0000000	</td>
                        <td>None</td>
                        <td>2021-07-14 02:35:10	</td>
                        <td>Upcoming</td>
                        <td><button class="btn btn-md btn-block btn-info"> Done </button><button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#decline">Cancel</button></td>
                       


                      
                      </tr>
                      <tr>
                        <td>2021-07-14	</td>
                        <td>Wednesday</td>
                        <td>8:00 am (08:00)</td>
                        <td>Mohamed Jaffer</td>
                        <td>5</td>
                        <td>+973 0000000	</td>
                        <td>None</td>
                        <td>2021-07-14 02:35:10	</td>
                        <td>Upcoming</td>
                        <td><button class="btn btn-md btn-block btn-info"> Done </button><button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#decline">Cancel</button></td>
                       


                      
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
           
            <div class="card" id="upcoming">
              <div class="card-header">
                <h3 class="card-title">Upcoming Reservation </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12" >
                    <table id="upcoming_reservation" class="table table-bordered table-responsive" >
                      <thead>
                      <tr>
                        <th>Reservation Date</th>
                        <th>Reservation Day	</th>
                        <th>Reservation Time</th>
                        <th>Guest Name</th>
                        <th>Guests</th>     
                        <th>Phone</th>
                        <th>Notes</th>
                        <th>Requested On</th>
                        <th>Status</th>
                        <th>Action</th>
                          
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>2021-07-14	</td>
                        <td>Wednesday</td>
                        <td>8:00 am (08:00)</td>
                        <td>Mohamed Jaffer</td>
                        <td>5</td>
                        <td>+973 0000000	</td>
                        <td>None</td>
                        <td>2021-07-14 02:35:10	</td>
                        <td>Upcoming</td>
                        <td><button class="btn btn-md btn-block btn-info"> Done </button><button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#decline">Cancel</button></td>
                       


                      
                      </tr>
                      <tr>
                        <td>2021-07-14	</td>
                        <td>Wednesday</td>
                        <td>8:00 am (08:00)</td>
                        <td>Mohamed Jaffer</td>
                        <td>5</td>
                        <td>+973 0000000	</td>
                        <td>None</td>
                        <td>2021-07-14 02:35:10	</td>
                        <td>Upcoming</td>
                        <td><button class="btn btn-md btn-block btn-info"> Done </button><button class="btn btn-md btn-block btn-danger" data-toggle="modal" data-target="#decline">Cancel</button></td>
                       


                      
                      </tr>
    
                      </tbody>
                     
                    </table>
                    <button class="btn btn-md btn-default" data-toggle="modal" data-target="#myModal">Settings</button>

                  </div>
                </div>

           
          
              </div>
              <!-- /.card-body -->
            </div>

           
          </div>
         
        </div>
   
      </div><!-- /.container-fluid -->
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
  <!-- /.control-sidebar -->

 <?php include "popup.php"; ?>
 <?php include "footer.php"; ?>
<script>
  $(function () {
    $("#reservations_request").DataTable({
      "lengthChange": true, "pageLength": 50, "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],  "autoWidth": true,
      "buttons": ["copy",  "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#reservations_request_wrapper .col-md-6:eq(0)');
    $("#today_reservation").DataTable({ 
      "responsive": true, "lengthChange": true, "pageLength": 50, "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ], "autoWidth": false,
      "buttons": ["copy",  "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#today_reservation_wrapper .col-md-6:eq(0)');
    $("#upcoming_reservation").DataTable({
      "responsive": true, "lengthChange": true, "pageLength": 50, "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],  "autoWidth": false,
      "buttons": ["copy",  "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#upcoming_reservation_wrapper .col-md-6:eq(0)');
     
    
  });
  
</script>
<script src="partnerReserve.js"></script>

</body>
</html>
