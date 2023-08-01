@extends('layouts.admin.index')

@section('content')


<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <table class="table datatable">

                <tr>
                  <th scope="col">Voucher ID.</th>
                  <th scope="col">Voucher owner</th>
                  <th scope="col">Date/Time receive </th>

                  <th scope="col">Date/Time sent</th>
                  <th scope="col">Status</th>
                  {{-- <th scope="col"> Location</th> --}}
                  <th scope="col"> Action</th>
                </tr>

              <tbody>


                <tr>
                  <th scope="row">654321</th>
                  <td>Brandon Jacob</td>
                  <td>2023-01-5</td>
                  <td>2023-01-06</td>
                  <td> ffd</td>
                  <td>


                <a  href="http://127.0.0.1:8000/admin/outgoing"  class="btn btn-success btn-sm">
                        Release
                        </a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">123456</th>
                  <td> Alando </td>
                  <td>2023-01-5</td>
                  <td>2023-01-06</td>
                  <td> ffd</td>
                  <td>



                <a  href="http://127.0.0.1:8000/admin/outgoing"   class="btn btn-success btn-sm">
                    Release
                </a>
                  </td>
                </tr>



              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
