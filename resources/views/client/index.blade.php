@include('layouts.header')

 <!DOCTYPE html>
<html>
<head>
<style>
.main{
margin-top: 250px;
}
</style>
</head>
<body>

    <div class="main container d-flex justify-content-center align-items-center" >
        <div class="row">
            <div class="col-md-6 container ">
                <img src="{{ url('img/track4.svg') }}" alt="" class="w-100  img">
            </div>
            <div class="col-md-6">
                <h1>Tracking ID</h1>

                    <input type="text" name="id_number" placeholder="Enter Your Tracking Number" class="form-control">
                    <button class="btn btn-primary" id="showMoreBtn">Show More</button>


                <div class="row mt-4" id="restOfContent" style="display: none;">
                <div class="card-body p-2">
                    <p class="lead fw-bold mb-5" style="color: #f37a27;">Form-</p>
                    <div class="row">
                        {{-- <div class="col mb-3">
                            <p class="small text-muted mb-1">Date</p>
                            <p>10 April 2021</p>
                        </div>
                        <div class="col mb-3">
                            <p class="small text-muted mb-1">Order No.</p>
                            <p>012j1gvs356c</p>
                        </div>
                    </div> --}}
                    <div class="row">
                        {{-- <div class="col-md-8 col-lg-9">
                            <p class="mb-0">Shipping</p>
                        </div> --}}
                        {{-- <div class="col-md-4 col-lg-3">
                            <p class="mb-0">£33.00</p>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="row my-4">
                    <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                        <p class="lead fw-bold mb-0" style="color: #f37a27;">£262.99</p>
                    </div>
                </div> --}}

                <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Tracking Order</p>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="horizontal-timeline">
                            <ul class="list-inline items d-flex justify-content-between">
                                <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Ordered</p>
                                </li>
                                <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Shipped</p>
                                </li>
                                <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">On the way</p>
                                </li>
                                <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                    <p style="margin-right: -8px;">Delivered</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                    <!-- Add the remaining content here -->
                </div>


            </div>

            <script>
                const showMoreBtn = document.getElementById('showMoreBtn');
                const restOfContent = document.getElementById('restOfContent');

                showMoreBtn.addEventListener('click', function () {
        // Toggle visibility of the rest of the content
        restOfContent.style.display = 'block';

        // Hide the "Show More" button
        showMoreBtn.style.display = 'none';
    });
</script>


                                </div>
                            </li>
                        </ul>





            </div>

        </div>
    </div>


<style>

.horizontal-timeline .items {
border-top: 2px solid #ddd;
}

.horizontal-timeline .items .items-list {
position: relative;
margin-right: 0;
}

.horizontal-timeline .items .items-list:before {
content: "";
position: absolute;
height: 8px;
width: 8px;
border-radius: 50%;
background-color: #ddd;
top: 0;
margin-top: -5px;
}

.horizontal-timeline .items .items-list {
padding-top: 15px;
}
</style>

</body>
</html>

@include('layouts.foooter')
