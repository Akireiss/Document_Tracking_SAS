@include('layouts.header')

    <div class="main container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-6 container ">

                <br>
 <img class="thumb" fetchpriority="high" data-pin-no-hover="true" src="img/lcoation.png" sizes="(max-width: 479px) 100vw, (min-aspect-ratio: 626/626) calc((100vh - 184px) * 1), (max-width: 1095px) calc(100vw - 40px), calc(100vw - 540px)" width="626" height="626" alt="PSD 3d looking for a text file" style="max-width: calc((100vh - 184px) * 1)" srcset="https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=360 360w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=740 740w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=826 826w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=900 900w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=996 996w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=1060 1060w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=1380 1380w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=1480 1480w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=1800 1800w, https://img.freepik.com/premium-psd/3d-looking-text-file_380580-968.jpg?w=2000 2000w">


            </div>
            <div class="col-md-6">
                <h1>Tracking ID</h1>

                <input type="text" name="id_number" placeholder="Enter Your Tracking Number" class="form-control">
                <button class="btn btn-primary" id="showMoreBtn">Show More</button>

                <style>
                    .main{
    margin-top: 280px;
}

                    .main {
                        display: flex;
                        flex-direction: column;
                        align-items: flex-start;
                        margin-left: 280px;
                    }

                    .horizontal-timeline .items {
                        display: flex;
                        flex-direction: column;
                        align-items: flex-start;
                        border-left: 2px solid #ddd;
                        padding-left: 15px;
                    }

                    .horizontal-timeline .items .items-list {
                        position: relative;
                        margin-bottom: 15px;
                    }

                    .horizontal-timeline .items .items-list:before {
                        content: "";
                        position: absolute;
                        height: 8px;
                        width: 8px;
                        border-radius: 50%;
                        background-color: #ddd;
                        left: 0;
                        margin-left: -5px;
                        margin-top: 0;
                    }
                </style>

                <div class="row mt-4" id="restOfContent" style="display: none;">
                    <div class="card-body p-2">
                        <p class="lead fw-bold mb-5" style="color: #f37a27;">Track Form</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="horizontal-timeline">
                                    <ul class="list-inline items">
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white mx-1" style="background-color: #30da0e;">Audit Office</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white mx-1" style="background-color:  #30da0e;">Budget Office</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white mx-1" style="background-color:  #30da0e;">Accounting Office</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white mx-1" style="background-color:   #3e15f4;">Audit Office</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white mx-1" style="background-color:  #e41010;">Cashier's Office</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white mx-1" style="background-color: #e41010;">Chancellor's Office</p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white mx-1" style="background-color: #e41010;">Cashier's Office</p>
                                        </li>
                                        <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                            <p style="margin-right: -8px;">Released</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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












@include('layouts.foooter')
