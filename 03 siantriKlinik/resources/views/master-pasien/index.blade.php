@extends('layouts')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Master Data</li>
          <li class="breadcrumb-item active">Pasien</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pasien</h5>
                <!-- <a href="/master-pasien/create" class="btn btn-primary">Tambah Data</a></p> -->
                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                  Tambah
                </button>

                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Form Pasien</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate>
                          <div class="col-md-8">
                            <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="validationCustom01" value="John" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="validationCustom02" value="Doe" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="validationCustomUsername" class="form-label">Nomor Telpon</label>
                            <div class="input-group has-validation">
                              <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">email</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                              Please provide a valid email.
                            </div>
                          </div>
                          
                          <div class="col-md-12">
                            <label for="validationCustom05" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="validationCustom05" required>
                            <div class="invalid-feedback">
                              Please provide a valid alamat.
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                          </div>
                        </form><!-- End Custom Styled Validation -->
                      
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->

                <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th data-type="date" data-format="YYYY/DD/MM">Tanggal Lahir</th>
                    <th>Nomor Telepon</th>
                    <th>email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                  <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item ->tanggal_lahir }}</td>
                    <td>{{ $item ->nomor_telpon }}</td>
                    <td>{{ $item ->email }}</td>
                    <td>{{ $item ->alamat }}</td>
                    <td>
                        <a>Edit</a>
                        <a>Hapus</a>
                    </td>
                  </tr>  
                  @endforeach                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection