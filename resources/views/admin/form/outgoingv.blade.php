
@extends('layouts.admin.index')

@section('content')


<main id="main" class="main">


    <div class="pagetitle">
        <h1>Outgoing Vouchers</h1>

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
                      <th scope="col"> Status</th>
                    </tr>

                  <tbody>


                    <tr>
                      <th scope="row">654321</th>
                      <td>Brandon Jacob</td>
                      <td>2023-01-5</td>
                      <td>2023-01-06</td>

                      <td>

                          <a href="{{ url("#") }}"  class="btn btn-success btn-sm">
                              Received
                            </a>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Remarks
                              </button>
                            </a>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">123456</th>
                      <td> Alando </td>
                      <td>2023-01-5</td>
                      <td>2023-01-06</td>

                      <td>


                        <a href="{{ url("#") }}"  class="btn btn-success btn-sm">
                          Received
                        </a>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Remarks
                          </button>
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




  </main>


  {{-- Modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <div class="card">
                <div class="title"></div>
                <div class="info">
                    <div class="row">
                        <div class="col-7">
                            <span id="heading"></span><br>
                            <span id="details"></span>
                        </div>
                        <div class="col-5 pull-right">
                            <span id="heading"></span><br>
                            <span id="details"></span>
                        </div>
                    </div>
                </div>

                {{-- <div class="total">
                    <div class="row">
                        <div class="col-9"></div>
                        <div class="col-3"><big>&pound;</big></div>
                    </div>
                </div> --}}
                {{-- <div class="tracking">
                    <div class="title">Tracking Order</div>
                </div> --}}
                <div class="progress-track">
                    {{-- <ul id="progressbar">
                        <li class="step0 active " id="step1"></li>
                        <li class="step0 active text-center" id="step2"></li>
                        <li class="step0 active text-right" id="step3"></li>
                        <li class="step0 text-right" id="step4"></li>
                    </ul> --}}
                </div>



            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



<style>


@media(max-width:768px){
    .card{
        width: 90%;
    }
}
.title{
    color: rgb(64, 188, 2);
    font-weight: 600;
    margin-bottom: 2vh;
    padding: 0 8%;
    font-size: initial;
}
#details{
    font-weight: 400;
}
.info{
    padding: 5% 8%;
}
.info .col-5{
    padding: 0;
}
#heading{
    color: grey;
    line-height: 6vh;
}
.pricing{
    background-color: #ddd3;
    padding: 2vh 8%;
    font-weight: 400;
    line-height: 2.5;
}
.pricing .col-3{
    padding: 0;
}
.total{
    padding: 2vh 8%;
    color: rgb(252, 103, 49);
    font-weight: bold;
}
.total .col-3{
    padding: 0;
}
.footer{
    padding: 0 8%;
    font-size: x-small;
    color: black;
}
.footer img{
    height: 5vh;
    opacity: 0.2;
}
.footer a{
    color: rgb(252, 103, 49);
}
.footer .col-10, .col-2{
    display: flex;
    padding: 3vh 0 0;
    align-items: center;
}
.footer .row{
    margin: 0;
}
#progressbar {
    margin-bottom: 3vh;
    overflow: hidden;
    color: rgb(252, 103, 49);
    padding-left: 0px;
    margin-top: 3vh
}

#progressbar li {
    list-style-type: none;
    font-size: x-small;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
    color: rgb(160, 159, 159);
}

#progressbar #step1:before {
    content: "";
    color: rgb(252, 103, 49);
    width: 5px;
    height: 5px;
    margin-left: 0px !important;
    /* padding-left: 11px !important */
}

#progressbar #step2:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-left: 32%;
}

#progressbar #step3:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 32% ;
    /* padding-right: 11px !important */
}

#progressbar #step4:before {
    content: "";
    color: #fff;
    width: 5px;
    height: 5px;
    margin-right: 0px !important;
    /* padding-right: 11px !important */
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #ddd;
    border-radius: 50%;
    margin: auto;
    z-index: -1;
    margin-bottom: 1vh;
}

#progressbar li:after {
    content: '';
    height: 2px;
    background: #ddd;
    position: absolute;
    left: 0%;
    right: 0%;
    margin-bottom: 2vh;
    top: 1px;
    z-index: 1;
}
.progress-track{
    padding: 0 8%;
}
#progressbar li:nth-child(2):after {
    margin-right: auto;
}

#progressbar li:nth-child(1):after {
    margin: auto;
}

#progressbar li:nth-child(3):after {
    float: left;
    width: 68%;
}
#progressbar li:nth-child(4):after {
    margin-left: auto;
    width: 132%;
}

#progressbar  li.active{
    color: black;
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: rgb(252, 103, 49);
}
</style>






@extends('layouts.admin.index')

@section('content')
@endsection
