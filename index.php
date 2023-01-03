
<?php
	// error_reporting(E_ALL^ (E_NOTICE | E_WARNING));
    //KONEKSI DB
    include "koneksi.php";
	
    //Mulai Sesion
    session_start();
    if ($_SESSION["ses_level"]){
		$level =$_SESSION['ses_level'];
        $sql = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$user'");
		// $sql = $koneksi->query("SELECT * FROM  WHERE nip='$user'");
        $sesi = mysqli_fetch_assoc($sql);

      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_nip = $_SESSION["ses_username"];
      $data_level = $_SESSION["ses_level"];
	

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Tamu</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Navigation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>MASTER DATA</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
            
                        <a class="collapse-item" href="buttons.html"><b> Data Pegawai</b></a>
                        <a class="collapse-item" href="cards.html"><b> Data Pegawai</b></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pengajuan Kunjungan </span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Report
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
         

            <!-- Nav Item - Tables -->
          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                         
                        </li>

                        <!-- Nav Item - Alerts -->
                      

                        <!-- Nav Item - Messages -->
                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

              

            </div>
            <!-- End of Main Content -->

            <div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			
			<section class="content">
				<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
		  
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              case 'admin':
                  include "home/admin.php";
                  break;
              case 'pegawai':
                  include "home/pegawai.php";
                  break;
              
        
              //Pengguna
              case 'MyApp/data_pengguna':
                  include "admin/pengguna/data_pengguna.php";
                  break;
              case 'MyApp/add_pengguna':
                  include "admin/pengguna/add_pengguna.php";
                  break;
              case 'MyApp/edit_pengguna':
                  include "admin/pengguna/edit_pengguna.php";
                  break;
              case 'MyApp/del_pengguna':
                  include "admin/pengguna/del_pengguna.php";
				  break;
              case 'MyApp/profil':
                  include "admin/profil/data_profil.php";
				  break;
              case 'MyApp/edit_profil':
                  include "admin/profil/edit_profile.php";
				  break;

              //pegawai
              case 'MyApp/data_pegawai':
                  include "admin/pegawai/data_pegawai.php";
                  break;
              case 'MyApp/add_pegawai':
                  include "admin/pegawai/add_pegawai.php";
                  break;
              case 'edit_pegawai':
                  include "admin/pegawai/edit_pegawai.php";
                  break;
              case 'MyApp/del_pegawai':
                  include "admin/pegawai/del_pegawai.php";
                  break;

              //arsip inaktif
           
			// case 'download':
            //       include "admin/arsipi/download.php";
			// 	  break;

				  //arsip Aktif
				

				//peminjaman
				case 'add_peminjaman':
					include "admin/transaksi/peminjaman/add_peminjaman.php";
					break;
				case 'peminjaman':
					include "admin/transaksi/peminjaman/data_peminjaman.php";
					break;
				case 'validasi':
					include "admin/transaksi/peminjaman/validasi_pinjam.php";
					break;
				case 'kembali':
					include "admin/transaksi/peminjaman/kembali.php";
					break;
				case 'del_peminjaman':
					include "admin/transaksi/peminjaman/del_peminjaman.php";
					break;
				case 'cetakbapinjam':
					include "admin/laporan/ba_peminjaman1.php";
					break;

				// mutasi 
				case 'data_mutasi':
					include "admin/mutasi/data_mutasi.php";
					break;
				case 'add_mutasi':
					include "admin/mutasi/add_mutasi.php";
					break;
				case 'del_mutasi':
					include "admin/mutasi/del_mutasi.php";
					break;
				case 'detail_mutasi':
					include "admin/mutasi/detail_arsip.php";
					break;
				case 'edit_mutasi':
					include "admin/mutasi/edit_mutasi.php";
					break;
				case 'validasi_mut':
					include "admin/mutasi/validasi_mut.php";
					break;
				case 'cetakbamutasi':
					include "admin/laporan/ba_mutasi.php";
					break;


				//data retensi
				case 'data_retensi':
					include "admin/retensi/data_retensi.php";
					break;
				case 'edit_retensi':
					include "admin/retensi/ubah_retensi.php";
					break;
				case 'del_retensi':
					include "admin/retensi/hapus_retensi.php";
					break;
				case 'add_retensi':
					include "admin/retensi/hapus_retensi.php";
					break;
			

				//pemindahan
				case 'data_pindah':
					include "admin/pemindahan/data_pemindahan.php";
					break;
				case 'edit_pindah':
					include "admin/pemindahan/edit_pemindahan.php";
					break;
				case 'add_pindah':
					include "admin/pemindahan/add_pemindahan.php";
					break;

				//bidang
				case 'data_bidang':
					include "admin/bidang/data_bidang.php";
					break;
				case 'edit_bidang':
					include "admin/bidang/ubah_bidang.php";
					break;
				case 'del_bidang':
					include "admin/bidang/hapus_bidang.php";
					break;
				case 'add_bidang':
					include "admin/bidang/add_bidang.php";
					break;
				
				// pemusnahan
				case 'data_musnah':
					include "admin/pemusnahan/data_pemusnahan.php";
					break;
				case 'edit_musnah':
					include "admin/pemusnahan/edit_pemusnahan.php";
					break;
				case 'add_musnah':
					include "admin/pemusnahan/add_pemusnahan.php";
					break;

				//cetak semuanya 
				case 'print_pegawai':
					include "admin/laporan/all/lap_pegawai.php";
					break;
				case 'print_arsipi':
					include "admin/laporan/all/lap_arsipi.php";
					break;
				case 'print_arsipa':
					include "admin/laporan/all/lap_arsipa.php";
					break;
				case 'print_mutasi':
					include "admin/laporan/all/lap_mutasi.php";
					break;
				case 'print_pemindahan':
					include "admin/laporan/all/lap_pemindahan.php";
					break;
				case 'print_peminjaman':
					include "admin/laporan/all/lap_peminjaman.php";
					break;
				case 'print_pemusnahan':
					include "admin/laporan/all/lap_pemusnahan.php";
					break;
				case 'print_pengembalian':
					include "admin/laporan/all/lap_pengembalian.php";
					break;
				



				
					
             

          
              //default
              default:
				  echo "<center><br><br><br><br><br><br><br><br><br>
				  <h1> Halaman tidak ditemukan !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Admin"){
              include "home/admin.php";
              }
                  elseif($data_level=="Pegawai"){
                      include "home/pegawai.php";
                      }
                        }
    ?>


			</section>
			<!-- /.content -->
		</div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <script>
			$(document).ready( function () {
				$('#myTable').DataTable();
			} );
			$(function() {
				$("#example1").DataTable();
				$("#example2").DataTable();
				$("#example3").DataTable();
				$("#example4").DataTable();
				$("#example5").DataTable();
				$("#example6").DataTable();
				$("#example7").DataTable();
				$("#example8").DataTable();
				$("#example9").DataTable();
				$("#example0").DataTable();
				$('#example10').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
			});
		</script>

        <script>
			$(function() {
				//Initialize Select2 Elements
				$(".select2").select2();
			});
		</script>

</body>

</html>

<?php  
    }else{
        header("location:login.php");
    }
?>