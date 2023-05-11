
@extends('layouts.admin.index')

@section('content')


<main id="main" class="main">

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
                    <th scope="col"> Location</th>
                    <th scope="col"> Action</th>
                  </tr>

                <tbody>


                  <tr>
                    <th scope="row">69</th>
                    <td>Brandon Jacob</td>
                    <td>2023-01-5</td>
                    <td>2023-01-06</td>
                    <td>Sa puso mo</td>
                    <td class="inline">
                      <button class="btn-sm btn-danger btn">

                      </button>

                      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Track
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">69</th>
                    <td>Brandon Jacob</td>
                    <td>2023-01-5</td>
                    <td>2023-01-06</td>
                    <td>Sa puso mo</td>
                    <td class="inline">
                      <button class="btn-sm btn-danger btn">

                      </button>

                      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Track
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

  </main>


  {{-- Modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@extends('layouts.admin.index')

@section('content')
@endsection
