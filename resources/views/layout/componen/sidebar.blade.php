<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
      <img src="{{ asset ('LTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light d-xs-none text-uppercase">guru
      </span>
      <span class="brand-text font-weight-light d-sm-none">eRaport - <span style="text-transform: capitalize">guru</span>
      </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar" style="overflow-y: auto;">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item mt-1">
                  <a href="/guru/dashboard" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard</p>
                  </a>
              </li>

              <li class="nav-header fw-bold mt-2">MASTER DATA</li>

              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                          BIODATA
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">                      
                    <li class="nav-item">
                        <a href="/guru/datasiswa" class="nav-link ">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data Siswa</p>
                        </a>
                    </li>
                  </ul>
              </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            WALI KELAS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/guru/datakelas" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/guru/nilaisosial" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Nilai Sosial</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/guru/nilaispiritual" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Nilai Spiritual</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/guru/kehadiran" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Ketidakhadiran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/guru/catatan" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Catatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/guru/dataprestasi" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Prestasi</p>
                            </a>
                        </li>

                    </ul>
                </li>
                                      
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            GURU MAPEL
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/guru/datapembelajaran" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Nilai Pelajaran</p>
                            </a>
                        </li>

                    </ul>
                </li>
                                      

            
              
                           
              
                <li class="nav-item">
                  <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            PEMBINA EKSKUL
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/guru/dataekstrakurikuler" class="nav-link ">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Data Ekstrakurikuler</p>
                            </a>
                          </li>

                        </ul>
                    </li>
                
                                    


            
              <li class="nav-header mt-2 fw-bold">RAPORT</li>


              <li class="nav-item">
                    <a href="/guru/nilaiakhir" class="nav-link ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Nilai Akhir
                        </p>
                    </a>
              </li>

              <li class="nav-item">
                    <a href="/guru/cetakraport" class="nav-link ">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Cetak Raport</p>
                    </a>
              </li>

            
              <li class="nav-header mt-2 fw-bold">SAYA</li>
              <li class="nav-item mb-3">
                  <a href="/guru/profil" class="nav-link ">
                      <i class="nav-icon fas fa-user"></i>
                      <p>Profil</p>
                  </a>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>