<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-6 w-100 d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
      </div>
      <div class="marquee-container w-100">
        <div class="marquee">
          Selamat Datang di Website Saya, <?= htmlspecialchars($_SESSION['username']); ?>!
        </div>
      </div>
    </div>
    <aside class=" left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex flex-column align-items-center pt-5">
          <!-- Logo di atas -->
          <a class="d-flex justify-content-center mb-2" href="" target="_blank">
            <img src="../../spike-bootstrap-1.0.0/spike-bootstrap-1.0.0/src/assets/images/logos/user6.png" alt="" width="60" height="60" style="border-radius: 50%; object-fit: cover;">
          </a>

          <!-- Nama di bawah -->
          <h4 class="text-center mb-0">Tari matul aslamiyah</h4>

          <!-- Tombol close (masih di kanan) -->
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer mt-2" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../dashboard/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../about/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">About</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../blog/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Blog</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../resume/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Resume</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../skill/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Skill</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../service/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Service</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../project/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Project</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../socmed/index.php" aria-expanded="false">
                <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone"></iconify-icon>
                <span class="hide-menu">Socmed</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="../contact/index.php" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Contact</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <style>
        /* Container marquee full-width */
        .marquee-container {
          width: 100%;
          overflow: hidden;
          white-space: nowrap;
          display: flex;
          align-items: center;
        }

        /* Animasi teks berjalan */
        .marquee {
          display: inline-block;
          padding-left: 100%;
          animation: marquee 12s linear infinite;
          color: #ffffff;
          /* teks putih */
          font-weight: bold;
          font-size: 2rem;
          /* ukuran teks besar */
        }

        @keyframes marquee {
          0% {
            transform: translateX(0%);
          }

          100% {
            transform: translateX(-100%);
          }
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
          .marquee {
            font-size: 1.5rem;
          }
        }
      </style>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->