<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
   <head>
      <style>
         .nav-pills .nav-link.active{
         background-color: #6f42c1 !important;
         }
      </style>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Libra Testnet Wallet</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
      <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdn.rawgit.com/oauth-io/oauth-js/c5af4519/dist/oauth.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css">
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
      <script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="https://explorer.moveonlibra.com/qrcode.js" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/libra-sdk-mol@0.2.1/dist/moveonlibra.browser.js" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/clipboard@2.0.4/dist/clipboard.min.js" crossorigin="anonymous"></script>
      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue"></script>
      <link href="https://unpkg.com/vue-qrcode-reader@2.1.1/dist/vue-qrcode-reader.css" rel="stylesheet">
      <script src="https://unpkg.com/vue-qrcode-reader@2.1.1/dist/vue-qrcode-reader.browser.js"></script>
   </head>
   <body class="hold-transition layout-top-nav">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #6f42c1">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a href="index.php" class="nav-link" style="color:rgba(255,255,255,.75)">
                  <img src="dist/img/images.png" alt="Libra Logo" class="brand-image img-circle elevation-3" style="opacity: .7">
                  <span class="widget-user-username">Libra Wallet</span>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a id="logout" class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" style="color:rgba(255,255,255,.75)">
                  Logout
                  <i class="fa fa-sign-out fa-4" aria-hidden="true"></i>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
           <!-- Content Header (Page header) -->
           <section class="content-header">
             <div class="container-fluid">

             </div><!-- /.container-fluid -->
           </section>
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <div class="modal fade" id="createWalletBentornato">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Welcome Back!</h4>
                           </div>
                        <div class="modal-body">
                           <p>If you want continue to use this wallet, push on "Go".</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                           <button type="button" class="btn btn-primary" onclick="login2()">Go</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                     </div>
                     <!-- /.modal-dialog -->
                  </div>

                  <div class="modal fade" id="createWalletModal">
                     <div class="modal-dialog">
                        <div class="modal-content bg-default">
                           <div class="modal-header">
                              <h4 class="modal-title">Create new wallet</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span></button>
                           </div>
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#login-form" role="tab"><i class="fas fa-user mr-1"></i>
                                 Register</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#registration-form" role="tab"><i class="fas fa-user-plus mr-1"></i>
                                 Login</a>
                              </li>
                           </ul>
                           <div class="modal-body">
                              <div class="tab-content">
                                 <div id="login-form" class="active tab-pane ">
                                    <div class="card-body login-card-body">
                                       <p class="login-box-msg">If is your first time to use this libra wallet app. You need to create a wallet of yourself
                                          first:
                                       </p>
                                       <p class="login-box-msg"></p>
                                       <form action="index.php" method="post">
                                          <div class="input-group mb-3">
                                             <input id="wallet_name" type="email" class="form-control" placeholder="Wallet name">
                                             <div class="input-group-append">
                                                <div class="input-group-text">
                                                   <span class="fas fa-wallet"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="input-group mb-3">
                                             <input id="wallet_password0" type="password" class="form-control" placeholder="Password">
                                             <div class="input-group-append">
                                                <div class="input-group-text">
                                                   <span class="fas fa-lock"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-block" onclick="clickCreateWallet()">Create wallet on Libra</button>
                                             </div>
                                             <!-- /.col -->
                                          </div>
                                       </form>
                                       <div class="social-auth-links text-center mb-3">
                                          <p>- OR -</p>
                                          <div class="input-group mb-3">
                                             <input id="wallet_password1" type="password" class="form-control" placeholder="Password">
                                             <div class="input-group-append">
                                                <div class="input-group-text">
                                                   <span class="fas fa-lock"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#" class="btn btn-block btn-primary" onclick="logIn()">
                                          <i class="fab fa-facebook mr-2" ></i> Sign in using Facebook
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="registration-form" class="tab-pane fade">
                                    <div class="card-body login-card-body">
                                       <p class="login-box-msg">Enter your data:</p>
                                       <p class="login-box-msg"></p>
                                       <form action="index.php" method="post">
                                          <div class="input-group mb-3">
                                             <input id="username" type="username" class="form-control" placeholder="Mnemonic key">
                                             <div class="input-group-append">
                                                <div class="input-group-text">
                                                   <span class="fas fa-key"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="input-group mb-3">
                                             <input id="password" type="password" class="form-control" placeholder="Password">
                                             <div class="input-group-append">
                                                <div class="input-group-text">
                                                   <span class="fas fa-lock"></span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-12">
                                                <button type="submit" class="btn btn-primary btn-block" id="buttonControlData">Login</button>
                                             </div>
                                             <!-- /.col -->
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.modal-content -->
                     </div>
                     <!-- /.modal-dialog -->
                  </div>
                  <div class="row">
                     <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card card-outline" style="border-top: solid #6f42c1 !important">
                           <div class="card-body box-profile">
                              <div class="text-center">
                                 <img id="img_user" class="profile-user-img img-fluid img-circle" src="<?php if (isset($_SESSION['Image'])){echo $_SESSION['Image'];}else {echo 'dist/img/avatar5.png';}?> " alt="User profile picture">
                              </div>
                              <h3 id="wallet_name_tag" class="profile-username text-center">
                              </h3>
                              <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                 <b>Address</b>
                                 <a id="address_tag" class="float-right"> </a>
                                 <span id="address_hidden" style="display:none"></span>
                              </li>
                              <li class="list-group-item">
                                 <b>Balance</b> 
                                 <a id="balance" class="float-right"></a> <i onclick="refreshB()" class="fas fa-redo-alt"></i>
                              </li>
                              <li class="list-group-item">
                                  <b>Id utente</b> 
                                  <a id="id_tag" class="float-right"> </a>
                              </li>
                              <li class="list-group-item">
                                 <div class="card card-outline card-primary" style="border-top: solid #6f42c1 !important">
                                    <div class="card-header">
                                       <h3 class="card-title">QRCode</h3>
                                       <div class="card-tools">
                                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                          </button>
                                       </div>
                                       <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                       <div class="d-flex justify-content-center">
                                          <div id="qrcode"></div>
                                       </div>
                                    </div>
                                    <!-- /.card-body -->
                                 </div>
                              </li>
                              <li class="list-group-item">
                                 <button id="clip_button"class="btn btn-block btn-secondary" data-clipboard-target="#address_hidden">
                                    <span class="icon is-small"><i class="fas fa-copy"></i></span> <span><b>Copy to clipboard</b></span></a>
                              </li>
                              <li class="list-group-item">
                              <a id="explorer" href="https://explorer.moveonlibra.com/" class="btn btn-primary btn-block" style="border-color: #6f42c1 !important; background-color: #6f42c1 !important"><b>Show account detail</b></a>
                              </li>
                              <li class="list-group-item">
                              <div class="btn btn-block btn-primary">
                              <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A8888%2FLibraWallet%2Findex.php&layout=button&size=large&appId=185331759415034&width=100&height=28" width="100" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                              </div>
                              </li>
                           </div>
                           <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                     </div>
                     <!-- /.col -->
                     <div class="col-md-9">
                     <div class="card">
                     <div class="card-header p-2">
                     <ul class="nav nav-pills">
                     <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                     </ul>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                     <div class="tab-content">
                     <div class="active tab-pane" id="activity">
                     <div class="col-md-3">
                     <!-- /.card -->
                     </div>
                     <div class="row">
                     <div class="col-lg-3 col-6">
                     <!-- small card -->
                     <div class="small-box bg-info">
                     <div class="inner">
                     <h3>Mint</h3>
                     <h3><br></h3>
                     </div>
                     <div class="icon">
                     <i class="fas fa-dollar-sign"></i>
                     </div>
                     <a href="#" onclick="clickBuy()" class="small-box-footer">
                     Load Libra <i class="fas fa-dollar-sign"></i>
                     </a>
                     </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-3 col-6">
                     <!-- small card -->
                     <div class="small-box bg-success">
                     <div class="inner">
                     <h3>Transfer</h3>
                     <h3><br></h3>
                     </div>
                     <div class="icon">
                     <i class="fas fa-exchange-alt"></i>
                     </div>
                     <a href="#" onclick="clickTransfer()" class="small-box-footer">
                     Transfer Libra <i class="fas fa-exchange-alt"></i>
                     </a>
                     </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-3 col-6">
                     <!-- small card -->
                     <div class="small-box bg-warning" style="color:white  !important">
                     <div class="inner">
                     <h3>Backup</h3>
                     <h3><br></h3>
                     </div>
                     <div class="icon">
                     <i class="fas fa-key"></i>
                     </div>
                     <a href="#" onclick="exportWallet()" class="small-box-footer" style="color:white  !important">
                     Backup wallet <i class="fas fa-key"></i>
                     </a>
                     </div>
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-3 col-6">
                     <!-- small card -->
                     <div class="small-box bg-danger">
                     <div class="inner">
                     <h3>Send by</h3>
                     <h3>camera</h3>
                     </div>
                     <div class="icon">
                     <i class="fas fa-camera"></i>
                     </div>
                     <a href="#" onclick="startScan()" class="small-box-footer">
                     Transfer by Scan Camera <i class="fas fa-camera"></i>
                     </a>
                     </div>
                     </div>
                     <div class="modal fade" id="buyModal" tabindex="-1" role="dialog">
                     <form onsubmit="clickBuyExecution();return false;">
                     <div class="modal-dialog" role="document">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="buyModalLabel">Mint Libra</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     </div>
                     <div class="modal-body">
                     <div class="form-group row align-items-center">
                     <label for="buy_amount" class="col-sm col-form-label">The amount to mint：</label>
                     <div class="col-sm">
                     <input id="buy_amount" type="number" min="0" max="1000" step="1" class="form-control" placeholder="Number of coin">
                     </div>
                     </div>
                     </div>
                     <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Mint</button>
                     </div>
                     </div>
                     </div>
                     </form>
                     </div>
                     <div class="modal fade" id="transferModal" tabindex="-1" role="dialog">
                     <form onsubmit="clickTransferExecution();return false;">
                     <div class="modal-dialog" role="document">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="transferModalLabel">Transfer Coin</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     </div>
                     <div class="modal-body">
                     <textarea id="receiver_address" type="text" class="form-control" autofocus="true" placeholder="Receiver Address in hex64 format"></textarea>
                     <input id="transfer_amount" type="number" class="form-control" placeholder="Number of coin">
                     </div>
                     <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Transfer</button>
                     </div>
                     </div>
                     </div>
                     </form>
                     </div>
                     
                     <div class="modal fade" id="scanModal" tabindex="-1" role="dialog">
                     <div class="modal-dialog" role="document">
                     <div class="modal-content">
                     <div class="modal-body">
                     <div id="scanQrcode" style="width:300px; height:300px;">
                     <qrcode-stream @decode="onDecode"></qrcode-stream>
                     </div>
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                     </div>
                     </div>
                     </div>
                     </div>
                     <div class="modal fade" id="exportWalletInfo" tabindex="-1" role="dialog">
                     <form onsubmit="clickBuy();return false;">
                     <div class="modal-dialog" role="document">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="buyModalLabel">Info</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     </div>
                     <div class="modal-body">
                     <div class="form-group row align-items-center">
                     <label class="col-sm col-form-label">Info about the "wallet modal".</label>
                     </div>
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                     </div>
                     </div>
                     </form>
                     </div>
                     <div class="modal fade" id="startScanInfo" tabindex="-1" role="dialog">
                     <form onsubmit="clickBuy();return false;">
                     <div class="modal-dialog" role="document">
                     <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="buyModalLabel">Info</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                     </div>
                     <div class="modal-body">
                     <div class="form-group row align-items-center">
                     <label class="col-sm col-form-label">Info about the "Scan modal".</label>
                     </div>
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                     </div>
                     </div>
                     </form>
                     </div>
                     <!-- ./col -->
                     </div>
                     </div>
                     <!-- /.tab-pane -->
                     </div>
                     <!-- /.tab-content -->
                     </div>
                     <!-- /.card-body -->
                     </div>
                     <!-- /.nav-tabs-custom -->
                     </div>
                     <!-- /.col -->
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
               <b>Version</b> 3.0.2
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
         </footer>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/moment/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue"></script>
      <link href="https://unpkg.com/vue-qrcode-reader@2.1.1/dist/vue-qrcode-reader.css" rel="stylesheet">
      <script src="https://unpkg.com/vue-qrcode-reader@2.1.1/dist/vue-qrcode-reader.browser.js"></script>
      <script>
         var scan_vue;

function startScan() {
    if (typeof wallet === "undefined") {
        $('#createWalletModal').modal()
        return;
    }
    $('#scanModal').modal('show')
    if (typeof scan_vue !== "undefined") {
        scan_vue.$children[0].camera = 'auto'
        return
    }
    scan_vue = new Vue({
        el: '#scanQrcode',
        methods: {
            onDecode(decodedString) {
                $('#scanModal').modal('hide')
                if (decodedString.length == 64) {
                    $("#receiver_address").val(decodedString)
                    $('#transferModal').modal()
                } else {
                    alert("Not a valid address: " + decodedString);
                }
            }
        }
    });
}

const appkey = "eyJhbGciOiJIUzUxMiJ9.eyJkYXRhIjoidHgxeHl4MXh1IiwiaWF0IjoxNTcyOTI0NzQxLCJleHAiOjE2MDQ0NjA3NDF9.2yh_gbH266nWHQ9E_fghs7vVoFHT7a1Z6Zi-NEYt7VTmzK8GPG7BzrBkJ3HATCoVFawss_tLMqqHRUtsGVkJSQ";
const client = new LibraClient("testnet", appkey);
const Million = 1000000;

var person = {
    userID: "",
    name: "",
    accessToken: "",
    picture: "",
    email: ""
};

//login Facebook
async function logIn() {
    FB.login(function(response) {
        console.log(response);
        if (response.status == "connected") {
            person.userID = response.authResponse.userID;
            person.accessToken = response.authResponse.accessToken;

            FB.api('/me?fields=id,name,email,picture.type(large)', function(userData) {
                person.name = userData.name;
                console.log(person.name);
                person.email = userData.email;
                person.picture = userData.picture.data.url;
                $.ajax({
                    url: "index.php",
                    method: "POST",
                    data: person,
                    dataType: 'text',
                    success: function(serverResponse) {
                        console.log(person);
                        //if (serverResponse == "success")
                        //window.location = "index.php";
                    }
                });
                clickCreateWallet();
            });

        }

    }, {
        scope: 'public_profile, email'
    })

}

window.fbAsyncInit = function() {
    FB.init({
        appId: '185331759415034',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v6.0'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//funzione che serve per aggiornare il balance dopo le operazioni
function get_tx_balance(tx) {
    var amount = tx.raw_txn.payload.Script.args[1].U64 / Million;
    if (localStorage.getItem('login')) {
        if (tx.raw_txn.sender === account[0].address) {
            return -amount
        } else {
            return amount
        }
    } else {
        if (tx.raw_txn.sender === account.address) {
            return -amount
        } else {
            return amount
        }
    }
    
}

function getBalance() {
    return parseFloat($('#balance').html());
}

//aggiorniamo balance dopo che ha fatto registrazione
async function refreshBalance() {
    //registrazione
    $('#balance').html("<div class='fa fa-refresh fa-spin' alt='waiting...'>")
    ret = await client.addressAPI.getAccountBalance(account.address);
    $('#balance').html(ret.balance / Million)
}

//aggiorniamo balance dopo che ha fatto il login
async function refreshBalanceLogin() {
    //login
    $('#balance').html("<div class='fa fa-refresh fa-spin' alt='waiting...'>")
    ret = await client.addressAPI.getAccountBalance(account[0].address);
    $('#balance').html(ret.balance / Million)
}

function refreshB() {
    if (localStorage.getItem('login')) {
        refreshBalanceLogin();
    } else {
        refreshBalance();
    }
}


async function exec_api(tx_func, is_tx = true) {
    try {
        tx = await tx_func();
        if (is_tx) {
            if (tx.success) {
                $('#balance').html(getBalance() + get_tx_balance(tx))
            } else {
                alert("Transaction Error: " + tx.transaction_info.major_status + ". Sorry, you haven't any Libra coin to execute transaction.")
            }
        }
        //alert("Execution Successful.");
    } catch (error) {
        console.log(error);
        alert("Execution Failed!", "danger")
    }
}

function clickBuy() {
    $('#buyModal').modal();
}

//function mint
async function clickBuyExecution() {
    var address = "<?php if (isset($_SESSION['Address'])){echo $_SESSION['Address'];}else {echo "Address is not defined.";}?>";

    if (typeof wallet === "undefined") {
        $('#createWalletModal').modal()
        return;
    }
    if (localStorage.getItem('login')) {
        var buy_amount = parseInt($("#buy_amount").val())
        $('#buyModal').modal('hide');
        await exec_api(async () => {
            console.log("buy_amount:" + buy_amount);
            address = account[0].address;
            return await client.transactionAPI.mint(address, buy_amount * Million);
        });
    } else {
        var buy_amount = parseInt($("#buy_amount").val())
        $('#buyModal').modal('hide');
        await exec_api(async () => {
            console.log("buy_amount:" + buy_amount);
            address = account.address;
            return await client.transactionAPI.mint(address, buy_amount * Million);
        });
    }
}

function clickTransfer() {
    $('#transferModal').modal();
}

//function transfer
async function clickTransferExecution(receiver, micro_libra) {
    if (typeof wallet === "undefined") {
        $('#createWalletModal').modal()
        return;
    }
    if (localStorage.getItem('login')) {
        var transfer_amount = parseInt($("#transfer_amount").val())
        $('#transferModal').modal('hide');
        await exec_api(async () => {
            return await client.transactionAPI.p2pTransfer(wallet, account[0].address,
                $("#receiver_address").val(), transfer_amount * Million);
        });
    } else {
        var transfer_amount = parseInt($("#transfer_amount").val())
        $('#transferModal').modal('hide');
        await exec_api(async () => {
            return await client.transactionAPI.p2pTransfer(wallet, account.address,
                $("#receiver_address").val(), transfer_amount * Million);
        });
    }
}

async function init_wallet_and_account() {
    if (!localStorage.getItem('wallet')) {
        if (localStorage.getItem('login')) {
            $('#createWalletBentornato').modal()

        } else {
            $('#createWalletModal').modal()
        }
    } else {

        if (localStorage.getItem('login')) {
            //sono nella LOGIN
            wallet = JSON.parse(localStorage.getItem('wallet'))
            console.log(wallet)
            account = JSON.parse(localStorage.getItem('account'))
            console.log(account)
            image = JSON.parse(localStorage.getItem('image'))
            id = JSON.parse(localStorage.getItem(''))
            show_wallet_login()
            refreshBalanceLogin()

        } else {
            //sono nella registrazione
            wallet = JSON.parse(localStorage.getItem('wallet'))
            console.log(wallet)
            account = JSON.parse(localStorage.getItem('account'))
            console.log(account)
            image = JSON.parse(localStorage.getItem('image'))
            id = JSON.parse(localStorage.getItem(''))
            show_wallet_registration()
            refreshBalance()
        }

    }
}

async function clickCreateWallet() {

    $('#createWalletModal').modal('hide');
    var name;
    var image;
    if (person.name === "") {
        name = $("#wallet_name").val();
        password = $("#wallet_password0").val();
        image = 'dist/img/avatar5.png';
    } else {
        name = person.name;
        image = person.picture;
        password = $("#wallet_password1").val();
    }


    $('#wallet_name_tag').html(name);
    document.getElementById('img_user').src = image;
    localStorage.setItem('image', JSON.stringify(image))
    await exec_api(async () => {
        wallet = await client.walletAPI.createWallet(name)
        console.log(wallet)
        localStorage.setItem('wallet', JSON.stringify(wallet))
        account = await client.walletAPI.createWalletAccount(wallet)
        console.log(account)
        localStorage.setItem('account', JSON.stringify(account))
        mnemonick = await client.walletAPI.backupWallet(wallet)
        console.log('mnemonick :' + mnemonick)
        localStorage.setItem('image', JSON.stringify(image))
        id = account.wallet_id
        console.log('id :' + account.wallet_id)
        localStorage.setItem('id', JSON.stringify(id))
    }, false);
    show_wallet_registration()
    $('#balance').html(0)

    //registro
    $.ajax({
        type: "post",
        url: "server.php",
        dataType: "text",
        contentType: "application/json; charset=utf-8",
        data: {
            Request: "registration",
            MnemonicKey: mnemonick,
            Password: password,
            Name: name,
            Address: account.address,
            Image: image,
            Id: id
        },
        traditional: true,
        success: function(data) {
            if (data === "true") {
                //alert('success, registration completed successfully!');
                setTimeout(function() {
                    window.location.href = document.referrer;
                }, 100);
            } else {
                alert('error, access denied!');
            }
        },
        error: function() {
            alert('error, access denied!');
        }
    });
}


$('#createWalletModal').on('shown.bs.modal', function() {
    $('#wallet_name').trigger('focus')
})
$('#transferModal').on('shown.bs.modal', function() {
    $('#receiver_address').trigger('focus')
})
$('#buyModal').on('shown.bs.modal', function() {
    $('#buy_amount').trigger('focus')
})

//mostriamo i dettagli del wallet in base ai dati salvati nel local storage
function show_wallet_registration() {

    $('#wallet_name_tag').html(wallet.name)
    $('#address_tag').html(account.address.slice(0, 8) + "..." + account.address.slice(56, 64))
    $('#id_tag').html(account.wallet_id)
    $('#address_hidden').html(account.address)
    var qrcode = new QRCode("qrcode", {
        text: account.address,
        width: 180,
        height: 180,
    });
    var url = $('#explorer').attr("href") + "accounts/" + account.address
    $('#explorer').attr("href", url);
}

//mostriamo i dettagli del wallet in base ai dati salvati nel local storage
function show_wallet_login() {
    $('#wallet_name_tag').html(wallet.name)
    $('#address_tag').html(account[0].address.slice(0, 8) + "..." + account[0].address.slice(56, 64))
    $('#id_tag').html(account[0].wallet_id)
    $('#address_hidden').html(account[0].address)
    var qrcode = new QRCode("qrcode", {
        text: account[0].address,
        width: 180,
        height: 180,
    });
    var url = $('#explorer').attr("href") + "accounts/" + account[0].address
    $('#explorer').attr("href", url);
}

//download Chiave Mnemonica
async function exportWallet() {
    if (typeof wallet === "undefined") {
        $('#createWalletModal').modal()
        return;
    }
    await exec_api(async () => {
        content = await client.walletAPI.backupWallet(wallet)
    }, false);
    var link = document.createElement('a')
    mimeType = 'text/plain'
    link.setAttribute('download', wallet.name + ".mnemonic")
    link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + encodeURIComponent(content))
    link.click()
}

//mostriamo funzione per accedere al wallet dopo l'operazione di login
async function login2() {
    $('#createWalletBentornato').modal('hide');

    var id2 = "<?php if (isset($_SESSION['Id'])) {echo $_SESSION['Id'];}else {echo '';}?>";
    await exec_api(async () => {
        var ew = parseInt(id2);
        wallet = await client.walletAPI.getWallet(ew)
        localStorage.setItem('wallet', JSON.stringify(wallet))
        account = await client.walletAPI.getWalletAccounts(wallet)
        localStorage.setItem('account', JSON.stringify(account))
        show_wallet_login();
        refreshBalanceLogin()
    }, false);

}

$(document).ready(function() {
    init_wallet_and_account();

    $("#buttonControlData").on("click", function() { //la funzione si attiva cliccando sul bottone
        init_wallet_and_account();

        var user = $("#username").val();
        var pass = $("#password").val();


        $.ajax({
            type: "post",
            url: "server.php",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: {
                Request: "login",
                MnemonicKey: user,
                Password: pass
            },
            traditional: true,
            success: function(data) {

                if (data) {
                    //alert('login completed successfully!');

                    console.log(data);
                    var address = "<?php if (isset($_SESSION['Address'])) {echo $_SESSION['Address'];} else {echo '';}?>";
                    var username = "<?php if (isset($_SESSION['MnemonicKey'])) {echo $_SESSION['MnemonicKey'];}else {echo '';}?>";
                    var name = "<?php if (isset($_SESSION['Name'])) {echo $_SESSION['Name'];}else {echo '';}?>";
                    var id = "<?php if (isset($_SESSION['Id'])) {echo $_SESSION['Id'];}else {echo '';}?>";

                    localStorage.setItem('login', JSON.stringify("true"))

                    setTimeout(function() {
                        window.location.reload();
                    }, 900);

                }
                if (!data) {
                    alert('error, Access denied!');
                }
            },
            error: function() {
                alert('error, Access denied!');

            }
        });

    });


    $("#logout").on("click", function() { //la funzione si attiva cliccando sul link logout
        localStorage.clear();
        $.ajax({
            type: "post",
            url: "server.php",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: {
                Request: "logout"
            },
            traditional: true,
            success: function() {

                window.location.reload(); //ricaricare la pagina
                //  window.history.go(0);

            }
        });
    });



    var clipboard = new ClipboardJS('#clip_button', {
        text: function(trigger) {
            return $("#address_hidden").html();
        }
    });

    function hidden_clip_hint() {
        $('#clip_button').tooltip('dispose');
        $('#clip_button').attr('title', "Copy Address");
    }
    clipboard.on('success', function(e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        $('#clip_button').attr('title', "Address copied!");
        $('#clip_button').tooltip('show');
        e.clearSelection();
        setTimeout(hidden_clip_hint, 1000);
    });
    $('#scanModal').on('hidden.bs.modal', function(e) {
        try {
            scan_vue.$children[0].camera = 'off'
        } catch (e) {}
    })
});

      </script>
   </body>
</html>
