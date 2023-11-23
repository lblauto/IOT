<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">IOT ADMIN <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="cards.php">Cards</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="register.php">
                <i class="fas fa-fw fa-user"></i>
                <span>Admin Profile</span></a>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="register.php">Register</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

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

                    <div style="display: flex; position:absolute; top:15px;">
                        <div class="toggle-switch" style="align-items: center;">
                            <label class="switch" style="margin-right: 5px; vertical-align: middle;">
                                <input type="checkbox" id="auto-toggle">
                                <span class="slider round"></span>
                            </label>
                            <span style="vertical-align: middle; margin-top: -10px;">Chế độ tự động</span>
                        </div>

                        <div class="manual-control" style="align-items: center; margin-left: 100px;">
                            <label class="switch" style="margin-right: 5px; vertical-align: middle;">
                                <input type="checkbox" id="manual-toggle">
                                <span class="slider round"></span>
                            </label>
                            <span style="vertical-align: middle; margin-top: -10px">Chế độ thủ công</span>
                            <button id="open-valve" class="btn btn-primary ml-3 d-none">Mở van</button>
                            <button id="close-valve" class="btn btn-danger ml-2 d-none">Đóng van</button>
                        </div>
                    </div>
                    
                    


                    <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">     

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
               <?php echo $_SESSION['username']; ?>
                  
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


    <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

        <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Do you really want to leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Click cancel to stay or click logout to log out.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST">
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>

    <script type="text/javascript">
        // Function to handle the auto/manual toggle switches
        function handleAutoToggle() {
          var autoToggle = document.getElementById('auto-toggle');
          var manualToggle = document.getElementById('manual-toggle');
          var openValve = document.getElementById('open-valve');
          var closeValve = document.getElementById('close-valve');

          if (autoToggle.checked) {
            manualToggle.checked = false; // Tắt nút Manual Control
            openValve.classList.add('d-none');
            closeValve.classList.add('d-none');
            localStorage.setItem('autoMode', 'on'); // Lưu trạng thái của chế độ tự động
            localStorage.setItem('manualMode', 'off'); // Đảm bảo rằng chế độ thủ công bị tắt
          } else {
            openValve.classList.remove('d-none');
            closeValve.classList.remove('d-none');
          }

          // Thêm chức năng của bạn cho chế độ tự động ở đây
        }

        function handleManualToggle() {
          var autoToggle = document.getElementById('auto-toggle');
          var manualToggle = document.getElementById('manual-toggle');
          var openValve = document.getElementById('open-valve');
          var closeValve = document.getElementById('close-valve');

          if (manualToggle.checked) {
            autoToggle.checked = false; // Tắt nút Auto Control
            openValve.classList.remove('d-none');
            closeValve.classList.remove('d-none');
            localStorage.setItem('manualMode', 'on'); // Lưu trạng thái của chế độ thủ công
            localStorage.setItem('autoMode', 'off'); // Đảm bảo rằng chế độ tự động bị tắt
          } else {
            openValve.classList.add('d-none');
            closeValve.classList.add('d-none');
          }

          // Thêm chức năng của bạn cho chế độ thủ công ở đây
        }

        // Event listeners
        document.getElementById('auto-toggle').addEventListener('change', handleAutoToggle);
        document.getElementById('manual-toggle').addEventListener('change', handleManualToggle);

        // Lấy trạng thái từ localStorage khi trang web được load
        window.onload = function() {
          var autoMode = localStorage.getItem('autoMode');
          var manualMode = localStorage.getItem('manualMode');

          if (autoMode === 'on') {
            document.getElementById('auto-toggle').checked = true;
            handleAutoToggle();
          }

          if (manualMode === 'on') {
            document.getElementById('manual-toggle').checked = true;
            handleManualToggle();
          }
        };


    </script>