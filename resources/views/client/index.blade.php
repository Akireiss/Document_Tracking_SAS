@include('layouts.header')
<div class="container mt-5">

 <div class="card shadow py-2 px-5">
<div class="row">

    <div class="col-md-6">
        <div class="mt-5">

            <img src="/img/search1.svg" class="w-75 mt-5 " >
        </div>
    </div>

<div class="col-md-6">

    <div id="tracking">

       <div class="tracking-list">
         <h5 class="text-left mr-5 mt-4 px-4">Track your files here:</h5>
         <div class="input-group w-full mx-auto px-4">
             <input type="search" class="form-control rounded-start" placeholder="Track here..." aria-label="Track File" aria-describedby="search-addon">
             <button class="btn btn-primary btn-sm rounded-end" type="button">
                 <i class="fa-solid fa-magnifying-glass mx-3"></i>
             </button>
         </div>
      <p class="text-danger mt-2 px-4" style="font-size: 0.6rem">Invalid Tracking Number</p>




          <div class="tracking-item">
             <div class="tracking-icon status-intransit">
                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                </svg>
                <!-- <i class="fas fa-circle"></i> -->
             </div>
             <div class="tracking-date">Aug 10, 2018<span>05:01 PM</span></div>
             <div class="tracking-content">DESTROYEDPER SHIPPER INSTRUCTION<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
          </div>
          <div class="tracking-item">
             <div class="tracking-icon status-intransit">
                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                </svg>
                <!-- <i class="fas fa-circle"></i> -->
             </div>
             <div class="tracking-date">Aug 10, 2018<span>11:19 AM</span></div>
             <div class="tracking-content">SHIPMENT DELAYSHIPPER INSTRUCTION TO DESTROY<span>SHENZHEN, CHINA, PEOPLE'S REPUBLIC</span></div>
          </div>
          <div class="tracking-item">
             <div class="tracking-icon status-intransit">
                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                </svg>
                <!-- <i class="fas fa-circle"></i> -->
             </div>
             <div class="tracking-date">Jul 27, 2018<span>04:08 PM</span></div>
             <div class="tracking-content">DELIVERY ADVICERequest Instruction from ORIGIN<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
          </div>


          <div class="tracking-item">
             <div class="tracking-icon status-intransit">
                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                </svg>
                <!-- <i class="fas fa-circle"></i> -->
             </div>
             <div class="tracking-date">Jul 19, 2018<span>05:42 PM</span></div>
             <div class="tracking-content">Delivery InfoUNABLE TO ACCESS<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
          </div>
          <div class="tracking-item">
             <div class="tracking-icon status-outfordelivery">
                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                </svg>
                <!-- <i class="fas fa-shipping-fast"></i> -->
             </div>
             <div class="tracking-date">Jul 19, 2018<span>07:36 AM</span></div>
             <div class="tracking-content">Shipment is out for despatch by KLHB023.<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
          </div>
          <div class="tracking-item">
             <div class="tracking-icon status-intransit">
                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                </svg>
                <!-- <i class="fas fa-circle"></i> -->
             </div>
             <div class="tracking-date">Jul 17, 2018<span>10:54 AM</span></div>
             <div class="tracking-content">Delivery InfoCLOSED-OFFICE/HOUSE CLOSED<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
          </div>
          <div class="tracking-item">
             <div class="tracking-icon status-outfordelivery">
                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                </svg>
                <!-- <i class="fas fa-shipping-fast"></i> -->
             </div>
             <div class="tracking-date">Jul 17, 2018<span>08:08 AM</span></div>
             <div class="tracking-content">Shipment is out for despatch by KLHB023.<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
          </div>

          <div class="tracking-item">
             <div class="tracking-icon status-outfordelivery">
                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                </svg>
                <!-- <i class="fas fa-shipping-fast"></i> -->
             </div>
             <div class="tracking-date">Jul 16, 2018<span>08:32 AM</span></div>
             <div class="tracking-content">Shipment is out for despatch by KLHB023.<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
          </div>



          <div class="tracking-item">
             <div class="tracking-icon status-inforeceived">
                <svg class="svg-inline--fa fa-clipboard-list fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="clipboard-list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                   <path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"></path>
                </svg>
                <!-- <i class="fas fa-clipboard-list"></i> -->
             </div>
             <div class="tracking-date">Jul 06, 2018<span>02:02 PM</span></div>
             <div class="tracking-content">Shipment designated to MALAYSIA.<span>HONG KONG, HONGKONG</span></div>
          </div>
       </div>
    </div>
 </div>
</div>
</div>
</div>

@include('layouts.foooter')
