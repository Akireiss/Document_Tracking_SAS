@extends('office.index')

@section('content')


    <div class="pagetitle">
      <h1>Outgoing Vouchers</h1>

    </div>

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


                      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Received
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <th scope="row">123456</th>
                    <td> Alando </td>
                    <td>2023-01-5</td>
                    <td>2023-01-06</td>

                    <td class="inline">


                      <a href="" type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Received
                      </a>
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
