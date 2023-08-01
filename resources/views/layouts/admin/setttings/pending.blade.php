@extends('layouts.admin.index')

@section('content')
{{--
<table>
    <thead>
        <tr>
            <th>Voucher Type</th>
            <th>Voucher Owner</th>
            <th>Date/Time Sent</th>
            <th>Date/Time Received</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vouchers as $voucher)
        <tr>
            <td>{{ $voucher->voucher_type }}</td>
            <td>{{ $voucher->voucher_owner }}</td>
            <td>{{ $voucher->sent_at }}</td>
            <td>{{ $voucher->received_at }}</td>
            <td>{{ $voucher->status }}</td>
            <td>
                @if($voucher->status == 'Sent')
                    <form action="{{ route('suspendVoucher', $voucher->id) }}" method="POST">
                        @csrf
                        <button type="submit">Suspend</button>
                    </form>
                @elseif($voucher->status == 'Received')
                    <form action="{{ route('releaseVoucher', $voucher->id) }}" method="POST">
                        @csrf
                        <button type="submit">Release</button>
                    </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table> --}}

<div class="pagetitle">
    <h1>Pending Vouchers</h1>

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

                      <a  href="{{ url ('admin/Suspension') }}"  class="btn btn-danger btn-sm">
                          Suspension
                    </a>

                <a  href="http://127.0.0.1:8000/admin/outgoing"  class="btn btn-success btn-sm">
                        Released
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


                    <a href="{{ url ('admin/Suspension') }}" class="btn btn-danger btn-sm">
                  Suspension

                </a>

                <a  href="http://127.0.0.1:8000/admin/outgoing"  class="btn btn-success btn-sm">
                    Released
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
