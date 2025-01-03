@extends('layout.GuruLayout')
@section('content')
<!-- Content Wrapper. content page content -->
<div class="content-wrapper" style="min-height: 616.4px;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
              <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
              </symbol>
            </svg>
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
              <use xlink:href="#check-circle-fill"></use>
            </svg>
            <button type="button" class="pb-3 btn-close" data-bs-dismiss="alert" aria-label="Close"></button>                          Anda berhasil login sebagai <b class="text-uppercase"> guru </b>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 d-sm-none">
          <div class="timeline">
            <!-- timeline time label -->
            <div class="time-label ms-2">
              <span class="bg-emerald text-dark px-2">
                <span class="pe-1 fas fa-bullhorn"></span> 
                Informasi
              </span>
            </div>
            <div>
              <i class="fas fa-envelope bg-emerald"></i>
              <div class="timeline-item">
                <span class="time">
                  14 Juni 2023
                  <i class="fas fa-clock"></i>
                </span>
                <h3 class="timeline-header">
                    <a href="#" class="text-dark">
                      Elfin Pratama, S.T
                    </a>
                </h3>
              <div class="timeline-body">
                Untuk Wali Kelas dimohon untuk segera melakukan pe...
              </div>
              <div class="timeline-footer d-flex justify-content-between">
                <a class="btn btn-zinc btn-sm text-secondary" data-bs-toggle="modal" data-bs-target="#showInformasiXS1">Lihatdetail</a>
              </div>
              <div class="modal fade" id="showInformasiXS1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Perbaikan Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Untuk Wali Kelas dimohon untuk segera melakukan perbaikan Data Siswa. Terima kasih.
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="deleteInformasiXS1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Hapus Informasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Data: <br>
                    <b>Perbaikan Data</b>
                    <br>
                    <br>
                      Apakah anda yakin informasi tersebut akan dihapus?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="#" method="POST">
                        <input type="hidden" name="_method" value="DELETE">                                                  
                        <input type="hidden" name="_token" value="Lo0GloJfcHwhyGdV9Kg6b2oV81RVaaXsgMIdyuwi">
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row ">
        <div class="col-6">
          <!-- small box -->
          <div class="small-box bg-blues">
            <div class="inner">
              <h3>4</h3>
              <p>Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-6">
          <!-- small box -->
          <div class="small-box bg-warnings">
            <div class="inner">
              <h3>10</h3>
              <p>Guru</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-6">
          <!-- small box -->
          <div class="small-box bg-successes">
            <div class="inner">
              <h3>4</h3>
              <p>Ekstrakurikuler</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-body"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-6">
          <!-- small box -->
          <div class="small-box bg-dangers">
            <div class="inner">
              <h3>16</h3>
              <p>Mata Pelajaran</p>
            </div>
            <div class="icon">
              <i class="ion ion-map"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-6">
          <!-- small box -->
          <div class="small-box bg-secondaries">
            <div class="inner">
              <h3>4</h3>
              <p>Kelas</p>
            </div>
            <div class="icon">
              <i class="ion ion-log-in"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
          <div class="col-6">
            <!-- small box -->
              <div class="small-box bg-cyan">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Penilaian Selesai</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-checkmark-outline"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat detail <i class="fas fa-chevron-right"></i></a>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-xs-none">
        <div class="timeline">
          <!-- timeline time label -->
          <div class="time-label ms-2">
            <span class="bg-emerald text-dark px-2">
              <span class="pe-1 fas fa-bullhorn"></span> 
              Informasi
            </span>
          </div>
          <div>
            <i class="fas fa-envelope bg-emerald"></i>
              <div class="timeline-item">
                <span class="time">
                  14 Juni 2023
                  <i class="fas fa-clock"></i>
                </span>
                <h3 class="timeline-header">
                  <a href="#" class="text-dark">
                    Elfin Pratama, S.T
                  </a>
                </h3>
                <div class="timeline-body">
                  Untuk Wali Kelas dimohon untuk segera melakukan pe...
                </div>
                <div class="timeline-footer d-flex justify-content-between">
                  <a class="btn btn-zinc rounded-2 text-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#showInformasiSM1">Lihat detail</a>
                </div>
                <div class="modal fade" id="showInformasiSM1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Perbaikan Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                                                    <div class="modal-body">
                                                        Untuk Wali Kelas dimohon untuk segera melakukan perbaikan Data Siswa. Terima kasih.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="deleteInformasiSM1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                            Hapus Informasi
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Data: <br>
                                                        <b>Perbaikan Data</b>

                                                        <br> <br>
                                                        Apakah anda yakin informasi tersebut akan dihapus?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                                                        <form action="https://eraportk13.vanzdev.com/informasi/1" method="POST">
                                                            <input type="hidden" name="_method" value="DELETE">                                                            <input type="hidden" name="_token" value="Lo0GloJfcHwhyGdV9Kg6b2oV81RVaaXsgMIdyuwi">
                                                            <button type="submit" class="btn btn-primary">Hapus</button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            
                        </div>
                    </div>
                
            </div>
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <!-- Main row -->
  <div class="modal fade" id="addInformasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="https://eraportk13.vanzdev.com/informasi/create" method="POST">
                <input type="hidden" name="_token" value="Lo0GloJfcHwhyGdV9Kg6b2oV81RVaaXsgMIdyuwi">
                <input type="hidden" name="user_id" id="user_id" value="3" hidden="">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-semibold poppins" id="exampleModalLabel">Tambah Informasi
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
  <div class="col">

    <div class="form-group row">
      <label for="judul" class="col-sm-4 col-form-label">Judul Informasi</label>
      <div class="col-sm-8">
        <input type="text" value="" class="form form-control " name="judul" id="judul" required="" placeholder="Masukkan judul informasi">
              </div>
    </div>

    <div class="form-group row">
      <label for="untuk" class="col-sm-4 col-form-label">Informasi Untuk</label>
      <div class="col-sm-8">
        <select aria-readonly="true" class="form-select " name="untuk" id="exampleSelectBorder" required="">
            <option value="" disabled="" selected="">-- Pilih --</option>
            <option value="admin">Administrator</option>
            <option value="guru">Guru</option>
            <option value="walisiswa">Wali Siswa</option>
            <option value="siswa">Siswa</option>
        </select>
              </div>
    </div>

    <div class="form-group row">
      <label for="isi" class="col-sm-4 col-form-label">Isi</label>
      <div class="col-sm-8">
        <textarea type="text" class="form form-control " name="isi" id="isi" required="" placeholder="Masukkan isi informasi"></textarea>
              </div>
    </div>

    <div class="">
      <div class="checkbox">
        <label>
          <input type="checkbox" required=""> Saya yakin sudah mengisi dengan benar
        </label>
      </div>
    </div>
</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            
        </div></form>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </div></div></section>
    <!-- /.content -->

    

    </div>
@endsection