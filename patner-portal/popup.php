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
  <div class="preloader flex-column justify-content-center align-items-center"  > 
    <img class="" src="../img/footer-logo.png" width="120" height="120" />
    <img class="animation__shake" src="../img/loading.gif" width="120" height="120"  />


 </div>
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
  
      <!-- Notifications Dropdown Menu -->
  
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="main.html" class="brand-link mx-auto text-center" >
      <img src="../img/footer-logo.png" alt="Volo Logo" height="50px" >
   
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex brand-text ">
        <div class="row brand-text ">
          <div class="col-12 mx-auto  ">
            <div class="company-img mx-auto">
              <img src="../img/kfc.png" />
            </div>

          </div>
          <div class="col-12">
          
            <p class="comapny-title"> Gloria-Jeans Coffee Main Market Manama, Bahrain</p>
           
          </div>

          </div>
       
       
    </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="main.html" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="order-history.html" class="nav-link ">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Order's History
              
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reservations's
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reservations.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today Reservations's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reservations's History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Reservations's Review</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Do it Yourself
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Promotions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Acive Promotions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Promotions's History</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Add-ons
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Drivers
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Analytics
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

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

  <!-- Main Footer -->
  <footer class="main-footer">
  
    <strong>Copyright &copy; 2021 <a href="https://humaizshahid.com">Volo</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- ./wrapper -->

<div class="modal fade" id="decline" tabindex="-1" role="dialog" aria-labelledby="decline" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
       Are you sure you want to decline?
      
       <div class="float-right">
           <br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Confirm</button>
       </div>
      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="myModal" class="modal">
  <div class="modal-dialog  modal-dialog-centered" role="document">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="row">
        <div class="col-12">
          <button class="btn btn-default float-right" id="span" type="button" data-dismiss="modal">&times;</button>

        </div>
      </div>
      <div class="col-12">
      <label>Tables available for reservation:</label>
      <label id='tableLabel' class="reserveLabels"></label>
      <input type="number" id='tableNumber' class="form-control">

      

      <label>Maximum guests per table:</label>
      <label id="maxGuestLabel" class="reserveLabels" ></label>
      <input type="number" id="maxGuests" class="form-control">
      

      <label>Maximum stay in minutes:</label>
      <label id="maxStayLabel" class="reserveLabels"></label>
      <input type="number" id="maxStay" class="form-control">
     

      <label>Reservation interval in minutes:</label>
      
      <select id="interval" class="form-control" >
          <option value='15'>15</option>
          <option value='30'>30</option>
          <option value='60'>60</option>
      </select>
      

      <label>Minimum notice for reservations in minutes:</label>
      <label id="minNoticeLabel" class="reserveLabels"></label>
      <select id='minNotice' name='minNotice' class="form-control">
          <option value='15'>15</option>
          <option value='30'>30</option>
          <option value='45'>45</option>
          <option value='60'>60</option>
          <option value='75'>75</option>
          <option value='90'>90</option>
          <option value='120'>120</option>
          <option value='150'>150</option>
          <option value='180'>180</option>
          <option value='210'>210</option>
          <option value='240'>240</option>
          <option value='270'>270</option>
          <option value='300'>300</option>
          
      </select>
      </div>
      <div class="col-12">
        <div class="row">
         
          <div class="col-4">
            <br>
            <button type='button' class="btn btn-md btn-default" id='confirmTableBtn' onclick='updateTableNumber()' style="display: none;">Confirm</button>
          </div>
          <div class="col-8 text-right">
            <br>
            <button type='button' id='changeTableBtn' class="btn btn-md btn-info" name='edit' onclick='ShowTableField(this.name)'>Edit</button>

            <button type='button'  class="btn btn-md btn-success" data-toggle="modal" data-target="#dateContainer">Show Calendar</button>

          </div>
        </div>
      </div>



   
      

    </div>
  </div>
</div>
</div>

<div class="modal " id='dateContainer'>
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-body calendar-body">
      
          <div class="row">
            <div class="col-12">
              <button class="btn btn-default float-right" id="span" type="button" data-dismiss="modal" style="margin-bottom: 10px;">&times;</button>
  
            </div>

            <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
            
              <div class="eventMenu">
                <div class="eventHeader">
      
                    <h1>Day Events</h1>

                    <p>Fri 29 Jan, 2020</p>
      
      
                </div>
      
                <div class="eventSlots" id='eventSlots'>
                    <div class="slot">
                        
                        <h4>8:00 am (08:00)</h4>
                        
                        <h4>Mohamed Jaffer</h4>
                       
                        <h4>5 Guests</h4>
                      
                        <h4>+973 0000000</h4>
                       
                        <h4 >Notes: none</h4>
                       
      
                       
                       
                        <h4>Requested on:</h4>
                        <h4>02:35:10 2021-07-14</h4>
                       
                        <h4 >Status: <span class="approved">Approved</span></h4>
                       
                        
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
              <div class="calendar">
                <div class="month">
                    <i class='fas fa-angle-left prev'></i>
                    <div class="date">
                        <h1 id="dateMonth"></h1>
                        <p id="dateFullDay"></p>
                    </div>
                    <i class="fas fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days">
                </div>
            </div>

            </div>
          </div>
     
       
    
    
    
      
        </div>
        </div>
        </div>
 
</div>

<style>
    
     
       .slot > h4{
         padding: 10px;
       }
       
        .calendar-body {
           
           
            background-color: #12121f;
            color: #eee;
           
           
        }
        
       
        .calendar {
           
            background-color: #222227;
        }
        
        .month {
             padding: 5px;
             min-height: 100px;
            background-color: #167e56;
            display: flex;
            justify-content: space-between;
            align-items: center;
           
            text-align: center;
        }
        
        .month i {
            font-size: 2.5rem;
            cursor: pointer;
        }
        
       
        
        .weekdays {
            width: 100%;
            height: 4rem;
            padding: 0 0.4rem;
            display: flex;
            align-items: center;
        }
        
        .weekdays div {
            font-size: 1.5rem;
            font-weight: 400;
            letter-spacing: 0.1rem;
            width: calc(44.2rem / 7);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .weekdays {
            width: 100%;
            height: 5rem;
            padding: 0 0.4rem;
            display: flex;
            align-items: center;
        }
        
        .weekdays div {
            font-size: 1.5rem;
            font-weight: 400;
            letter-spacing: 0.1rem;
            width: calc(44.2rem / 7);
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
        
        .days {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            padding: 0.2rem;
        }
        
        .days div {
            font-size: 1.4rem;
            margin: 0.3rem;
            width: 50px;
            height: 4rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
            transition: background-color 0.2s;
        }
        
        .days div:hover:not(.today) {
            background-color: #262626;
            border: 0.2rem solid #777;
            cursor: pointer;
        }
        
        .prev-date,
        .next-date {
            opacity: 0.5;
        }
        
        .today {
            background-color: #167e56;
        }
        
        .eventMenu {
          
           
            background-color: #222227 
        }
        
        .eventHeader {
           padding: 5px;
           min-height: 100px;
            background-color: #167e56;
          
            /*justify-content: space-between;*/
            align-items: center;
         
            text-align: center;
            
        }
        
       .slot{
        padding-top: 4.5px;
       padding-bottom: 4.5px;
       }
        
       
        
       
        
        .eventSlots div:hover:not(.blocked, .noEvents) {
            background-color: #262626;
          
        }
        
        .eventSlots div {
            height: auto;
           
        }
        
        
        
        .approved {
            color: yellow;
        }
        
        .pending {
            color: red;
        }
        
        
        .done {
            color: green;
        }
        
        .reserved {
            background-color: blue;
        }
        
        .noEvents {
            display: block;
            height: 40rem;
            width: 98%;
        }
        
        .noEvents label {
            display: block;
            width: 100%;
            overflow: none;
            align-items: center;
           
          
            text-align: center;
            line-height: 30rem;
            font-size: 2rem;
            font-weight: 700;
        }
        
       
       
       
     
</style>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="partnerReserve.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
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
<a  href="#" data-toggle="modal" data-target="#trading">
  <div class="row" style="padding: 0px;margin: 0px;">
<div class="col-12 t-fixed " style="padding: 0px;margin: 0px;"> 

</div>

</div>

<div class="trading mx-auto" >
<img src="../img/footer-logo.png"/>
<img src="../img/icon.png" class="img-top" alt="Card Front">
</div>

</a>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/608cbf7862662a09efc3d748/1f61158do';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
</body>
</html>