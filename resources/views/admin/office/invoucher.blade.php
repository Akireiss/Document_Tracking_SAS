@extends('office.index')

@section('content')


    <div class="pagetitle">
      <h1>Data Tables</h1>

      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav> --}}

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <table class="table datatable">

                  <tr>
                    <th scope="col">Voucher ID.</th>
                    <th scope="col">Voucher owner</th>
                    <th scope="col">Date sent </th>
                    <th scope="col">Date receive</th>
                    {{-- <th scope="col"> Location</th> --}}
                    <th scope="col"> Action</th>
                  </tr>

                <tbody>


                  <tr>
                    <th scope="row">654321</th>
                    <td>Brandon Jacob</td>
                    <td>2023-01-5</td>
                    <td>2023-01-06</td>

                    <td class="inline">
                      <button class="btn-sm btn-danger btn">

                      </button>

                      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Recieve
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">123456</th>
                    <td> Alando </td>
                    <td>2023-01-5</td>
                    <td>2023-01-06</td>

                    <td class="inline">
                      <button class="btn-sm btn-danger btn">

                      </button>

                      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Recieve
                      </button>
                    </td>
                  </tr>



                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>













@endsection
