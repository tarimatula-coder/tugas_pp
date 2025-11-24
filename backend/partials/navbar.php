<!--  Main wrapper -->
<div class="body-wrapper">

  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
              </a>
            </li>
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                </a>
              </li>

              <!-- Jam & Kalender -->
              <li class="nav-item me-3 d-flex align-items-center">
                <span id="month" style="font-weight: bold; font-size:20px; color:#000; margin-right:12px;"></span>
                <span style="font-size:20px; color:#000; margin-right:12px;">|</span>
                <span id="clock" style="font-weight: bold; font-size:20px; color:#000;"></span>
              </li>
            </ul>

            <script>
              function updateDateTime() {
                const now = new Date();

                // Jam: HH:MM:SS
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');

                // Tanggal: Hari, DD Bulan YYYY
                const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                ];

                const dayName = days[now.getDay()];
                const date = now.getDate();
                const month = months[now.getMonth()];
                const year = now.getFullYear();

                document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
                document.getElementById('month').textContent = `${dayName}, ${date} ${month} ${year}`;
              }

              setInterval(updateDateTime, 1000);
              updateDateTime();
            </script>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../../spike-bootstrap-1.0.0/spike-bootstrap-1.0.0/src/assets/images/profile/user7.jpg" alt="" width="35" height="35"
                    class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">
                        <?= htmlspecialchars($_SESSION['username']); ?>
                      </p>
                      <p class="mb-0 fs-3">
                        <?= htmlspecialchars($_SESSION['email']); ?>
                      </p>
                    </a>
                    <a href="../../actions/auth/logout.php"
                      class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->