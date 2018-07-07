<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" href="./favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="<?=base_url()?>/assets/css/admin4b.min.css" rel="stylesheet">


    <title>Admin Web Tracking</title>
  </head>
  <body>
    <div class="app">
        <div class="app-body">
          <div class="app-sidebar sidebar-slide-left">
            <div class="text-right">
              <button type="button" class="btn btn-sidebar" data-dismiss="sidebar">
              <span class="x">
              </span>
              </button>
            </div>
          <div class="sidebar-header">
          <img src="http://www.clker.com/cliparts/B/R/Y/m/P/e/blank-profile-hi.png" class="user-photo">
          <p class="username">
            <?php  echo $GetAllUser[0]['username'] ?>
          </p>
        </div>
        <ul id="sidebar-nav" class="sidebar-nav" data-children=".sidebar-nav-group">
          <li class="sidebar-nav-btn">
                      <a href="gaji" class="btn btn-block btn-outline-light">
                        Detail Barang
                      </a>
                    </li>
                    <li class="sidebar">
                      <a href="/perusahaan/pesanan" class="sidebar-nav-link">
                        <i class="icon-screen-tablet"></i>

                        Pesanan <span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Driver Menerima">4</span> <span class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="Driver Menolak"><?=$GetNotifTolak?></span>
                      </a>
                    </li>
                    <li class="sidebar">
                      <a href="/driver/status" class="sidebar-nav-link">
                        <i class="icon-pencil"></i>
                        Driver
                      </a>
                    </li>
                    <li class="sidebar">
                      <a href="/perusahaan/riwayat" class="sidebar-nav-link">
                        <i class="icon-pencil"></i>
                        Riwayat
                      </a>
                    </li>


                  </ul>
                  <div class="sidebar-footer">
                    <a href="#" data-toggle="tooltip" title="Support">
                      <i class="fa fa-comment"></i>
                    </a>
                    <a href="?p=menu setting/setting" data-toggle="tooltip" title="Settings">
                      <i class="fa fa-cog"></i>
                    </a>
                    <a href="/user/logout/" data-toggle="tooltip" title="Logout" class="active" onClick=" logout()">
                      <i class="fa fa-power-off"></i>
                    </a>
                  </div>
                </div>


                      <div class="app-content">
                        <nav class="navbar navbar-expand navbar-light bg-white">
                          <button type="button" class="btn btn-sidebar" data-toggle="sidebar">
                            <i class="fa fa-bars"></i>
                          </button>
                          <div class="navbar-brand" id="main">Hello
                            <?php echo $GetAllUser[0]['username']; ?>
                          </div>

                        </nav>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">Home
                            <li class="breadcrumb-item active" aria-current="page">
                            </li>
                          </ol>
                        </nav>
