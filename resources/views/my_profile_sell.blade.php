@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->ordersell; 
@endphp
@endsection

@section('content')

<div class="container my-5">

    <div class="row">

        @include('profile_sidebar')

        <!-- Profile Settings-->

        <div class="col-lg-8 pb-5 bg-white rounded">

            @include('alerts')
     

       <h4 class="text-success text-center py-3">Sell Orders History</h4>
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
      <tr>
         <th>Sr#</th>
        <th>Order</th>
        <th>Coin Type</th>
         <th>Quantity</th>
          <th>Amount</th>
           <th>Status</th>
        <th>Currency</th>
         <th>Payment Method</th>  
        <th>Date</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($orderData as $element)
       
   
      <tr>
        <td>{{ $element->id }}</td>
        <td>{{ $element->order_number }}</td>
        <td>{{ $element->coinType }}</td>
         <td>{{ $element->recived_bitcoin }}</td>
           <td>{{ $element->recived_total_amount }}</td>
             <td>
            @php
              if ($element->status == 'on') {
                          echo  $label = '<span class="label label-success">Confirmed</span>';
                        } else {
                           echo $label = '<span class="label label-danger">Pendding</span>';
                        }
            @endphp
          </td>
          <td>{{ $element->convertedCurrency }}</td>
         
        <td>{{ $element->payment_method }}</td>
          <td>{{ $element->order_date }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
        </div>

    </div>

    

</div>

@endsection

@section('footer')

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">





<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8" ></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js" type="text/javascript" charset="utf-8" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js" type="text/javascript" charset="utf-8" ></script>
<script type="text/javascript">
    
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
<style type="text/css">

input[type="file"]::before {

width: 100%;

position: absolute;

content: 'Upload File';

display: inline-block;

background: #BC873C;

border: 1px solid #999;

border-radius: 3px;

padding: 7px 7px 7px 15px;

color: white;

outline: none;

white-space: nowrap;

-webkit-user-select: none;

cursor: pointer;

font-weight: 700;

font-size: 10pt;

margin-left: -12px;

margin-top: -4px;

}

input[type="file"] {

border: none !important;

}

:root {

--primary-1: #036EB5;

--secondary-1: #036EB5;

--text-color-1: #036EB5;

--black-1: #036EB5;

--company-logo-1:url(img/horse24-white-mobile.png);

--top-mobile-menu-logo: url(img/horse24-white-mobile.png);

}

a {

color: var(--primary-1);

/*font-weight: 300;*/

}

a:hover {

color: #297708;

}











#company-1 .company-banner .bid-info:after {

background: #036EB5;

//opacity: 0.85;

}

#company-1 .company-bar {

background: #036EB5;

}

#company-1 .company-bar .submenu {

background: #036EB5;

}

#company-1 .bottom-options .bottom-option-single h5 {

color: var(--primary-1);

}

#company-1 .grid-wrap .lot-number,

#company-1 .lot-header .lot-number,

#company-1 .modal-tab-body .lot-number,

#company-1 #bid-bar .lot-number

{

background: var(--primary-1);

color: white;

}

.horse-wrap .lot-number{

background: var(--primary-1);

color: #ffffff;

}

#company-1 .grid-wrap .lot-number:after,

#company-1 .lot-header .lot-number:after,

#company-1 .modal-tab-body .lot-number:after,

#company-1 #bid-bar .lot-number:after {

border-left-color: var(--primary-1);

border-right-color: var(--primary-1);

}

#company-1 .hierarchical-tree .tree-cell.highlight, #company-1 .hierarchical-tree-table .tree-cell.highlight {

border-left-color: var(--primary-1);

}

#company-1 .hierarchical-tree .tree-cell.highlight:before, #company-1 .hierarchical-tree-table .tree-cell.highlight:before {

border-color: var(--primary-1);

}

#company-1 .ma5menu__container,

#company-1 .ma5menu__toggle,

#company-1.ma5menu__panel {

background: var(--black-1);

}



#company-1 .ma5menu__panel li.footermenu.footer-item-0:before{

background-color: #036EB5 !important;

}



.ma5menu__logo {

left:0 !important;

}



.ma5menu__logo {

/*left:0 !important;*/

background-image: var(--top-mobile-menu-logo) !important;

/*background-size: calc(100% - 50px) 25px !important;*/

/*background-repeat: no-repeat;*/

/*background-position: 50% 50% !important;*/

background-size: 80% !important;

background-position: 50% 0 !important;

background-repeat: no-repeat !important;

/*height: 32px;*/

}

span.ma5menu__close {}



#company-1 .company-primary {

color: var(--primary-1);

}

#company-1 .company-primary .fas {

color: #036EB5;

}

#company-1 .company-primary .fas:hover {

color: #036EB5;

}

#company-1 header nav.navbar ul li a:hover, header nav.navbar ul li.active > a

{

color: #036EB5;

}

#company-1 header nav.navbar ul li.active a.item_active {

color: #036EB5;

}

#company-1 .horse-wrap .main-row .bid-price .icon-auction {

color: #036EB5;

}

#company-1 .horse-wrap .main-row .bid-price .fas {

color: #036EB5;

}

#company-1 .company-primary-bg {

background: var(--primary-1);

}

#company-1 .ma5menu__head .ma5menu__toggle {

width: 30px !important;

height: 30px !important;

top: 5px !important;

right: -10px !important;

}

#company-1 button.company-primary-bg,

#company-1 button.company-primary,

#company-1 .btn.company-primary-bg,

#company-1 .btn.company-primary {

border-color: var(--primary-1);

}









#company-1 .company-primary-bg {

background: var(--primary-1);

}

footer.company-footer .topbar-footer, footer .topbar-footer {

background: #ffffff;

color: #222f39

}

footer.company-footer .company-logo-wrap:before {

background: #ffffff;

}

header .topbar {

background: #222f39;

color: #ffffff;

}

footer {

background: #222f39;

color: #ffffff

}

footer .mainbar-footer a{

color: #ffffff

}

#home-banner::before {

background-color: #000000;

opacity: 0.75;

}

.inline-link,

#term-link

{

color:#036EB5;

}

button.btn-primary-bg, .btn.btn-primary-bg {

background: #297708;

border-color:white;

}

button.btn-primary-bg2, .btn.btn-primary-bg2 {

background-color: #036EB5;

border-color: #036EB5;

}

.hvr-underline-from-right::before {

background: #036EB5;

}

.hvr-underline-from-center::before {

background: #036EB5;

}

section#page-header .page-title::before {

content: " ";

background: rgba(34, 47, 57, 0.85);

z-index: 1;

}

#company-1 .ma5menu__container,.ma5menu__toggle,.ma5menu__panel{

background: var(--black-1);

}

#company-1 .company-primary-bg,.ma5menu__toggle:hover{

background: var(--primary-1);

}

#company-1 .xray-gallery,.img-gallery,.video-gallery-wrap ul li.caption {



color:var(--text-color-1);

}

#company-1 .has-nav-to-top .side-nav li.active a{

color: var(--black-1);

}

#company-1 .hs-popup-wrap .hs-popup > ul li.active .step-number {

font-weight: 600;

border: 2px solid  var(--primary-1);

background-color: #fff;

color:  var(--primary-1);

}

#company-1 .progress {

background-color: #036EB5;

}

#company-1 .progress .indeterminate {

background-color: var(--primary-1);

}

#company-1 .hs-popup-wrap .hs-popup > ul li.active small,

#company-1 .primary {

color: var(--primary-1);

}

.lot-flag.bidup-started {

/* background: var(--primary-1) !important; */

background:#036EB5!important;

}

#company-1 .hs-popup-wrap .hs-popup > ul li.done a::after, .hs-popup-wrap .hs-popup > ul li.active a::after {

background: var(--primary-1) !important;

}

#company-1 .start_countdown__text {

text-align: center;

}

#company-1 .start_countdown__text .part{

color: var(--black-1);

}

/* .lot-header-inner {

display: grid;

grid-template-columns: 10% 10% 80%;

}

.lot-header-inner .item:first-child {

grid-column: 1 / 3;

grid-row: 1 / 3;

align-self: start;

margin-top: 0px;

}

.item {

padding: 0px;

}

.lot-header .lot-header-inner h6 {

margin-left: 2px;

}

.lot-header .lot-header-inner h2 {

margin-left: 0px;

padding-left: 0px;

}

@media (max-width: 767px) {

.lot-header .lot-header-inner > h6 {

display: block;

margin: 7px 0;

padding: 0 0;

border-left: 0;

}

} */

.lot-vid ul li {

list-style-type: none;

}

.lot-vid ul {

padding-left: 0px;

}

.frontdivcldesign{

shape-outside: polygon(200px 300px, 300px 300px, 300px 0, 0 0);

clip-path: polygon(-53px 654px, 388px 340px, 657px 0px, 74px 0px);

}

body{

background:#eee;

}

.widget-author {

margin-bottom: 58px;

}

.author-card {

position: relative;

padding-bottom: 48px;

background-color: #fff;

box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);

}

.author-card .author-card-cover {

position: relative;

width: 100%;

height: 100px;

background-position: center;

background-repeat: no-repeat;

background-size: cover;

}

.author-card .author-card-cover::after {

display: block;

position: absolute;

top: 0;

left: 0;

width: 100%;

height: 100%;

content: '';

opacity: 0.5;

}

.author-card .author-card-cover > .btn {

position: absolute;

top: 12px;

right: 12px;

padding: 0 10px;

}

.author-card .author-card-profile {

display: table;

position: relative;

margin-top: -22px;

padding-right: 15px;

padding-bottom: 16px;

padding-left: 20px;

z-index: 5;

}

.author-card .author-card-profile .author-card-avatar, .author-card .author-card-profile .author-card-details {

display: table-cell;

vertical-align: middle;

}

.author-card .author-card-profile .author-card-avatar {

width: 85px;

border-radius: 50%;

box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);

overflow: hidden;

}

.author-card .author-card-profile .author-card-avatar > img {

display: block;

width: 100%;

}

.author-card .author-card-profile .author-card-details {

padding-top: 20px;

padding-left: 15px;

}

.author-card .author-card-profile .author-card-name {

margin-bottom: 2px;

font-size: 14px;

font-weight: bold;

}

.author-card .author-card-profile .author-card-position {

display: block;

color: #8c8c8c;

font-size: 12px;

font-weight: 600;

}

.author-card .author-card-info {

margin-bottom: 0;

padding: 0 25px;

font-size: 13px;

}

.author-card .author-card-social-bar-wrap {

position: absolute;

bottom: -18px;

left: 0;

width: 100%;

}

.author-card .author-card-social-bar-wrap .author-card-social-bar {

display: table;

margin: auto;

background-color: #fff;

box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);

}

.btn-style-1.btn-white {

background-color: #fff;

}

.list-group-item i {

display: inline-block;

margin-top: -1px;

margin-right: 8px;

font-size: 1.2em;

vertical-align: middle;

}

.mr-1, .mx-1 {

margin-right: .25rem !important;

}

.list-group-item.active:not(.disabled) {

border-color: #28A745;

background: #fff;

color: #28A745;

cursor: default;

pointer-events: none;

}

.list-group-flush:last-child .list-group-item:last-child {

border-bottom: 0;

}

.list-group-flush .list-group-item {

border-right: 0 !important;

border-left: 0 !important;

}

.list-group-flush .list-group-item {

border-right: 0;

border-left: 0;

border-radius: 0;

}

.list-group-item.active {

z-index: 2;

color: #fff;

background-color: #28A745;

border-color: #28A745;

}

.list-group-item:last-child {

margin-bottom: 0;

border-bottom-right-radius: .25rem;

border-bottom-left-radius: .25rem;

}

a.list-group-item, .list-group-item-action {

color: #404040;

font-weight: 600;

}

.list-group-item {

padding-top: 16px;

padding-bottom: 16px;

-webkit-transition: all .3s;

transition: all .3s;

border: none !important;

border-radius: 0 !important;

color: #404040;

font-size: 12px;

font-weight: 600;

letter-spacing: .08em;

text-transform: uppercase;

text-decoration: none;

}

.list-group-item {

position: relative;

display: block;

padding: .75rem 1.25rem;

margin-bottom: -1px;

background-color: #fff;

border: 1px solid rgba(0,0,0,0.125);

}

.list-group-item.active:not(.disabled)::before {

background-color: #28A745;

}

.list-group-item::before {

display: block;

position: absolute;

top: 0;

left: 0;

width: 3px;

height: 100%;

background-color: transparent;

content: '';

}

.bg_img {

background-size: cover;

background-position: center center;

background-repeat: no-repeat;

}

.right_center {

background-position: right center;

}

.left_center {

background-position: left center;

}

.bottom_center {

background-position: bottom center;

}

.bottom_left {

background-position: bottom left;

}

.bottom_right {

background-position: bottom right;

}

.top_center {

background-position: top center;

}

.top_left {

background-position: top left;

}

.top_right {

background-position: top right;

}

.bg_contain {

background-size: contain;

}

.auction-item-2 .auction-content .bid-area .bid-amount::before, .auction-item-4 .auction-content .bid-area .bid-amount::before, .filter li span::before, .auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount::before, .upcoming-badge, .auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount::before, .auction-item-8 .auction-content .bid-area .bid-amount::before, .team-item .team-inner::before, .or::before, .video-button span, .video-button span::after, .video-button span::before {

position: absolute;

content: '';

}

.section-header-2, .section-header-2 .left, .section-header-3, .section-header-3 .left, .slider-nav, .newslater-area, .footer-bottom-wrapper, .footer-bottom-wrapper .gateway-area, .social-icons, .header-top-wrapper, .header-top-wrapper .customer-support, .header-top-wrapper .cart-button-area, .header-top-wrapper .customer-support li, .header-wrapper, .menu, .cart-sidebar-area .single-product-item, .cart-sidebar-area .single-product-item .thumb, .banner-thumb-4 .bid-now, .browse-item-2, .widget-form-group, .price-range, .client-item .client-author, .client-item .client-author .content .ratings, .auction-item-1, .auction-item-1 .auction-thumb, .auction-item-1 .auction-content .bid-amount, .auction-item-1 .auction-content .countdown-area, .auction-item-2 .auction-thumb, .auction-item-2 .auction-content .bid-area, .auction-item-2 .auction-content .bid-area .bid-amount, .auction-item-2 .auction-content .countdown-area, .call-wrapper, .auction-item-3, .auction-item-3 .auction-thumb, .auction-item-3 .auction-content .bid-amount, .auction-item-4 .auction-thumb, .auction-item-4 .auction-content .bid-area, .auction-item-4 .auction-content .bid-area .bid-amount, .auction-item-4 .auction-content .countdown-area, .filter, .auction-wrapper-5, .auction-wrapper-7, .auction-item-5 .auction-inner, .auction-item-5 .auction-inner .auction-thumb, .auction-item-5 .auction-inner .auction-content .title-area .list-area, .auction-item-5 .auction-inner .auction-content .bid-area .bid-inner, .auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount, .auction-item-5 .auction-inner .auction-content .bid-count-area, .auction-item-7 .auction-inner, .auction-item-7 .auction-inner .auction-thumb, .auction-item-7 .auction-inner .auction-content .title-area .list-area, .auction-item-7 .auction-inner .auction-content .bid-area .bid-inner, .auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount, .auction-item-7 .auction-inner .auction-content .bid-count-area, .auction-item-6 .auction-inner, .auction-item-6 .auction-inner .auction-thumb, .auction-item-6 .auction-inner .auction-content .item-information, .auction-item-6 .auction-inner .auction-bidding .bid-amount, .auction-item-8 .auction-thumb, .auction-item-8 .auction-content .bid-area, .auction-item-8 .auction-content .bid-area .bid-amount, .auction-item-8 .auction-content .bid-count-area, .team-item .team-inner .team-content .social, .counter-item .counter-header, .about-content .item-area, .login-with, .login-with li a, .account-wrapper, .account-wrapper .right-side, .login-form .form-group.checkgroup, .error-section, .video-button-2, .faq-item .faq-title, .product-header, .product-header .product-header-item, .pagination, .side-counter-item, .product-details-header ul, .price-table li, .product-bid-form, .buy-now-area, .share-area, .share-area ul, .product-info-table tbody, .product-tab-menu li, .history-table .user-info, .dash-pro-item .header, .dash-pro-item .dash-pro-body li, .dash-bid-item .header, .dash-bid-item .button-area, .sort-winning-bid, .alert-widget ul li, .dashboard-widget .share-area {

display: flex;

flex-wrap: wrap;

}

.video-button-2, .video-button-2 span, .video-button-2 span::after, .video-button-2 span::before {

top: 50%;

left: 50%;

-webkit-transform: translate(-50%, -50%);

-ms-transform: translate(-50%, -50%);

transform: translate(-50%, -50%);

position: absolute;

content: "";

}

.padding-top {

padding-top: 80px;

}

.padding-bottom {

padding-bottom: 80px;

}

.padding-top-2 {

padding-top: 40px;

}

.padding-bottom-2 {

padding-bottom: 40px;

}

@media (min-width: 768px) {

.padding-top {

padding-top: 100px;

}

.padding-bottom {

padding-bottom: 100px;

}

.padding-top-2 {

padding-top: 50px;

}

.padding-bottom-2 {

padding-bottom: 50px;

}

.pt-md-half {

padding-top: 50px;

}

.pb-md-half {

padding-bottom: 50px;

}

}

@media (min-width: 992px) {

.padding-top {

padding-top: 120px;

}

.padding-bottom {

padding-bottom: 120px;

}

.padding-top-2 {

padding-top: 60px;

}

.padding-bottom-2 {

padding-bottom: 60px;

}

.pt-lg-120 {

padding-top: 120px !important;

}

.mt-lg-120 {

margin-top: 120px !important;

}

.lg-oh {

overflow: hidden;

}

.pt-lg-half {

padding-top: 60px !important;

}

.pb-lg-half {

padding-bottom: 60px !important;

}

.mt-lg--90 {

margin-top: -90px;

position: relative;

z-index: 9;

}

.mt-lg-100 {

margin-top: 100px;

}

.pt-md-half {

padding-top: 60px;

}

.pb-md-half {

padding-bottom: 60px;

}

.cl-lg-black {

color: #52606d !important;

}

.mw-lg-100 {

min-width: 100%;

}

}

.pl-30 {

padding-left: 30px;

}

.pr-30 {

padding-right: 30px;

}

.pr {

position: relative;

}

/*Section Header*/

.mb-30-none {

margin-bottom: -30px !important;

}

.tab-item {

display: none;

animation-name: fadeInUp;

-webkit-animation-name: fadeInUp;

-moz-animation-name: fadeInUp;

animation-duration: 1s;

-webkit-animation-duration: 1s;

-moz-animation-duration: 1s;

}

.tab-item.active {

display: block;

}

.tab-menu li {

cursor: pointer;

}

.mt-10 {

margin-top: 10px;

}

.mt-20 {

margin-top: 20px;

}

.mt-50 {

margin-top: 50px;

}

.mb-10 {

margin-bottom: 10px;

}

.mb-20 {

margin-bottom: 20px;

}

.mb-30 {

margin-bottom: 30px;

}

.mt-30 {

margin-top: 30px;

}

.mb--20 {

margin-bottom: -20px;

}

.mb-50 {

margin-bottom: 50px;

}

.mb-40 {

margin-bottom: 40px;

}

.mt--40 {

margin-top: -40px;

}

.mb--50 {

margin-bottom: -50px;

}

.pt-10 {

padding-top: 10px;

}

.pt-20 {

padding-top: 20px;

}

.pb-30 {

padding-bottom: 30px;

}

.pt-30 {

padding-top: 30px;

}

.pt-50 {

padding-top: 50px;

}

.pb-10 {

padding-bottom: 10px;

}

.pb-20 {

padding-bottom: 20px;

}

.pb-50 {

padding-bottom: 50px;

}

.mb--38 {

margin-bottom: -38px;

}

.mb-40-none {

margin-bottom: -40px;

}

.mt--150 {

margin-top: -150px;

}

.mt--140 {

margin-top: -140px;

}

.mt--10 {

margin-top: -10px;

}

@media (min-width: 1200px) {

.pr-xl-15 {

padding-right: 15px;

}

}

.c-thumb {

overflow: hidden;

}

.c-thumb a {

display: block;

}

.c-thumb img {

width: 100%;

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

.cl-white {

color: #ffffff;

}

.cl-white * {

color: #ffffff;

}

.cl-white *::placeholder {

color: rgba(255, 255, 255, 0.6);

}

.cl-white p {

color: rgba(255, 255, 255, 0.9);

}

.cl-black {

color: #52606d;

}

.cl-black h1, .cl-black h2, .cl-black h3, .cl-black h4, .cl-black h5 {

color: #171d1c;

}

.mw-500 {

max-width: 500px;

}

.oh {

overflow: hidden;

}

/*Section-Header Starts Here*/

.section-bg {

background: #f1f3fd;

}

.body-bg {

background: #ffffff;

}

.theme-bg {

background: #ee4730;

}

.theme-one {

background: #3f22b3;

}

.theme-two {

background: #43b055;

}

.ash-bg {

background-color: #f6f9ff;

}

.overlay {

position: fixed;

width: 100%;

height: 100%;

position: fixed;

top: 0;

left: 0;

z-index: 99;

background: rgba(0, 0, 0, 0.7);

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

visibility: hidden;

opacity: 0;

}

.overlay.active {

opacity: 1;

visibility: visible;

}

.ratings span {

color: #ff7800;

}

.rtl {

direction: rtl;

}

.ltr {

direction: ltr;

}

.select-bar .current {

display: block;

margin-top: 2px;

}

.select-bar .list {

width: 100%;

max-height: 150px;

overflow-y: auto;

}

.select-bar .list::-webkit-scrollbar {

width: 4px;

background-color: #F5F5F5;

}

.select-bar .list::-webkit-scrollbar-thumb {

background-color: #000000;

}

.select-bar .list::-webkit-scrollbar-track {

-webkit-box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.3);

box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.3);

background-color: #F5F5F5;

}

.select-bar .list li {

padding: 0 20px;

}

.nice-select:after {

width: 10px;

height: 10px;

}

.pos-rel {

position: relative;

}

.pos-rel .container {

position: relative;

z-index: 1;

}

.mt-120 {

margin-top: 120px;

}

.mb-120 {

margin-bottom: 120px;

}

.mb--50 {

margin-bottom: -50px;

}

.mb--30 {

margin-bottom: -30px;

}

.mb-70 {

margin-bottom: 70px;

}

.mb--70 {

margin-bottom: -70px;

}

@media (max-width: 991px) {

.pb-max-lg-0 {

padding-bottom: 0 !important;

}

.pt-max-lg-0 {

padding-top: 0 !important;

}

.mt-max-lg-0 {

margin-top: 0 !important;

}

.mb-max-lg-0 {

margin-bottom: 0 !important;

}

}

@media (max-width: 767px) {

.pb-max-md-0 {

padding-bottom: 0 !important;

}

.pt-max-md-0 {

padding-top: 0 !important;

}

.mt-max-md-0 {

margin-top: 0 !important;

}

.mb-max-md-0 {

margin-bottom: 0 !important;

}

}

@media (max-width: 1199px) {

.pb-max-xl-0 {

padding-bottom: 0 !important;

}

.pt-max-xl-0 {

padding-top: 0 !important;

}

.mt-max-xl-0 {

margin-top: 0 !important;

}

.mb-max-xl-0 {

margin-bottom: 0 !important;

}

}

@media (max-width: 575px) {

.pb-max-sm-0 {

padding-bottom: 0 !important;

}

.pt-max-sm-0 {

padding-top: 0 !important;

}

.mt-max-sm-0 {

margin-top: 0 !important;

}

.mb-max-sm-0 {

margin-bottom: 0 !important;

}

}

.mb--40 {

margin-bottom: -40px;

}

.transparent {

background: transparent !important;

}

.no-border {

border: none !important;

}

.section-header {

margin: 0 auto 35px;

text-align: center;

}

.section-header .cate {

display: block;

color: #3f22b3;

margin-bottom: 15px;

font-family: "Roboto", sans-serif;

}

.section-header .title {

margin-bottom: 20px;

text-transform: capitalize;

}

@media (min-width: 768px) {

.section-header {

margin-bottom: 55px;

}

.section-header .cate {

margin-bottom: 24px;

font-size: 24px;

}

.section-header .title {

margin-bottom: 18px;

}

}

.section-header.cl-white .cate {

color: rgba(255, 255, 255, 0.9);

}

.section-header.mb-low {

margin-bottom: 20px;

}

@media (min-width: 768px) {

.section-header.mb-low {

margin-bottom: 26px;

}

}

.section-header.left-style {

text-align: left;

}

.section-header.left-style p {

margin-left: 0;

}

.section-header-2 {

align-items: center;

margin-bottom: 40px;

}

@media (min-width: 1200px) {

.section-header-2 {

margin-bottom: 50px;

}

}

.section-header-2 .left {

width: calc(100% - 110px);

}

.section-header-2 .left .thumb {

width: 70px;

position: relative;

}

.section-header-2 .left .thumb img {

max-width: 100%;

}

@media (min-width: 576px) {

.section-header-2 .left .thumb img {

position: absolute;

left: 0;

top: 0;

}

}

.section-header-2 .left .title {

width: calc(100% - 70px);

padding-left: 15px;

align-self: center;

margin-top: 0;

}

@media (max-width: 575px) {

.section-header-2 .left {

width: 100%;

margin-bottom: 15px;

}

.section-header-2 .left .thumb {

width: 50px;

}

.section-header-2 .left .title {

width: calc(100% - 50px);

}

}

.section-header-3 {

align-items: center;

margin-bottom: 45px;

justify-content: space-between;

}

@media (min-width: 1200px) {

.section-header-3 {

margin-bottom: 55px;

}

}

.section-header-3 .left {

width: 100%;

max-width: 640px;

}

.section-header-3 .left .thumb {

width: 80px;

position: relative;

}

.section-header-3 .left .thumb img {

max-width: 100%;

}

@media (min-width: 768px) {

.section-header-3 .left .thumb img {

position: absolute;

left: 0;

top: 0;

}

}

@media (max-width: 767px) {

.section-header-3 .left .thumb {

display: none;

}

}

.section-header-3 .left .title-area {

width: calc(100% - 80px);

padding-left: 15px;

align-self: center;

margin-top: 0;

}

.section-header-3 .left .title-area .title {

margin: 0;

margin-bottom: 18px;

}

@media (max-width: 767px) {

.section-header-3 .left .title-area {

width: 100%;

padding-left: 0;

}

}

.section-header-3 .normal-button {

margin-top: 30px;

}

@media (max-width: 575px) {

.section-header-3 .left {

width: 100%;

margin-bottom: 15px;

}

.section-header-3 .left .thumb {

width: 50px;

}

.section-header-3 .left .title {

margin-bottom: 12px;

}

.section-header-3 .normal-button {

margin-top: 15px;

font-size: 14px;

padding: 5px 25px 3px;

line-height: 40px;

}

}

@media (max-width: 991px) {

.section-header-3 .left {

max-width: 520px;

}

}

@media (max-width: 767px) {

.section-header-3 {

text-align: center;

justify-content: center;

}

}

.fa, .fab, .fad, .fal, .far, .fas {

line-height: unset;

}

.slider-nav {

justify-content: space-between;

width: 110px;

}

.slider-nav a {

width: 50px;

height: 26px;

line-height: 26px;

text-align: center;

-webkit-border-radius: 13px;

-moz-border-radius: 13px;

border-radius: 13px;

box-shadow: 0.487px 3.97px 10px 0px rgba(40, 58, 140, 0.3);

font-weight: 500;

color: #171d1c;

background-color: rgba(255, 255, 255, 0.102);

}

.slider-nav a:last-child {

margin-right: 0;

}

.slider-nav a.cl-black {

color: #52606d;

}

.slider-nav a.cl-black i {

color: #52606d;

}

.slider-nav a.active, .slider-nav a:hover {

color: #ffffff;

background: -moz-linear-gradient(45deg, #d73df5 0%, #8f3df5 100%);

background: -webkit-linear-gradient(45deg, #d73df5 0%, #8f3df5 100%);

background: -ms-linear-gradient(45deg, #d73df5 0%, #8f3df5 100%);

box-shadow: 0.731px 5.955px 13px 0px rgba(40, 58, 140, 0.25);

}

.slider-nav a.active i, .slider-nav a:hover i {

color: white;

}

.slider-nav.real-style {

display: flex;

flex-wrap: wrap;

margin: -5px;

margin-top: 25px;

width: 100%;

max-width: 290px;

}

.slider-nav.real-style a {

margin: 5px;

}

@media (max-width: 767px) {

.slider-nav.real-style {

max-width: 100%;

}

}

.countdown, .total-bids {

font-family: "Roboto", sans-serif;

}

#overlayer {

width: 100%;

height: 100%;

position: fixed;

z-index: 999999;

background: #3f22b3;

display: -webkit-box;

display: -ms-flexbox;

display: flex;

-webkit-box-align: center;

-ms-flex-align: center;

align-items: center;

-webkit-box-pack: center;

-ms-flex-pack: center;

justify-content: center;

}

#overlayer .loader {

display: inline-block;

width: 45px;

height: 45px;

position: absolute;

z-index: 3;

border: 4px solid white;

top: 50%;

-webkit-animation: loader 2.5s infinite ease;

animation: loader 2.5s infinite ease;

}

#overlayer .loader .loader-inner {

vertical-align: top;

display: inline-block;

width: 100%;

background-color: white;

-webkit-animation: loader-inner 2.5s infinite ease-in;

animation: loader-inner 2.5s infinite ease-in;

}

@-webkit-keyframes loader {

0% {

-webkit-transform: rotate(0deg);

transform: rotate(0deg);

}

25% {

-webkit-transform: rotate(180deg);

transform: rotate(180deg);

}

50% {

-webkit-transform: rotate(180deg);

transform: rotate(180deg);

}

75% {

-webkit-transform: rotate(360deg);

transform: rotate(360deg);

}

100% {

-webkit-transform: rotate(360deg);

transform: rotate(360deg);

}

}

@keyframes loader {

0% {

-webkit-transform: rotate(0deg);

transform: rotate(0deg);

}

25% {

-webkit-transform: rotate(180deg);

transform: rotate(180deg);

}

50% {

-webkit-transform: rotate(180deg);

transform: rotate(180deg);

}

75% {

-webkit-transform: rotate(360deg);

transform: rotate(360deg);

}

100% {

-webkit-transform: rotate(360deg);

transform: rotate(360deg);

}

}

@-webkit-keyframes loader-inner {

0% {

height: 0%;

}

25% {

height: 0%;

}

50% {

height: 100%;

}

75% {

height: 100%;

}

100% {

height: 0%;

}

}

@keyframes loader-inner {

0% {

height: 0%;

}

25% {

height: 0%;

}

50% {

height: 100%;

}

75% {

height: 100%;

}

100% {

height: 0%;

}

}

/*Footer Section Starts Here*/

footer {

position: relative;

}

.footer-top-shape {

position: absolute;

top: 0;

left: 50%;

-webkit-transform: translateX(-50%);

-ms-transform: translateX(-50%);

transform: translateX(-50%);

min-width: 1400px;

width: 100%;

}

@media (max-width: 767px) {

.footer-top-shape {

min-width: 570px;

}

}

.footer-top-shape img {

width: 100%;

}

.newslater-area {

position: relative;

z-index: 1;

padding: 20px 0;

border-radius: 20px;

background-color: white;

box-shadow: 0.487px 3.97px 81px 0px rgba(40, 58, 140, 0.46);

}

.newslater-area .newslater-thumb {

padding: 15px;

display: none;

}

.newslater-area .newslater-thumb img {

position: absolute;

max-width: 100%;

max-height: 100%;

top: 50%;

left: 30px;

-webkit-transform: translateY(-50%);

-ms-transform: translateY(-50%);

transform: translateY(-50%);

}

@media (min-width: 992px) {

.newslater-area .newslater-thumb {

display: block;

}

}

.newslater-area .newslater-content {

width: 100%;

padding: 15px;

}

@media (min-width: 576px) {

.newslater-area {

padding: 25px;

}

}

@media (min-width: 992px) {

.newslater-area {

padding: 55px 45px 45px;

}

.newslater-area .newslater-content, .newslater-area .newslater-thumb {

width: 50%;

}

}

.subscribe-form {

position: relative;

}

.subscribe-form input {

width: 100%;

padding: 0 150px 0 25px;

height: 60px;

background: transparent;

border: 1px solid #d9d9dd;

-webkit-border-radius: 30px;

-moz-border-radius: 30px;

border-radius: 30px;

}

.subscribe-form button {

position: absolute;

right: 0;

top: 0;

}

@media (max-width: 575px) {

.subscribe-form input {

height: 50px;

padding: 0 20px;

}

.subscribe-form button {

position: relative;

margin-top: 20px;

}

}

.mb--60 {

margin-bottom: -60px;

}

.footer-widget {

margin-bottom: 60px;

}

.footer-widget .title {

color: #ffffff;

margin-bottom: 18px;

font-weight: 500;

font-size: 24px;

}

.footer-widget .links-list {

margin-bottom: -14px;

margin-bottom: 20px;

}

.footer-widget .links-list li {

padding: 0;

}

.footer-widget .links-list li a {

padding: 5px 0 4px;

color: rgba(255, 255, 255, 0.9);

font-weight: 400;

}

@media (max-width: 575px) {

.footer-widget .links-list li a {

font-size: 16px;

}

}

.footer-widget .links-list li a i {

margin-right: 35px;

}

@media screen and (min-width: 992px) and (max-width: 1199px) {

.footer-widget .links-list li a i {

margin-right: 10px;

}

}

.footer-widget .links-list li a:hover {

color: #ee4730;

}

.copyright-area {

border-top: 1px solid rgba(255, 255, 255, 0.302);

}

.footer-bottom-wrapper {

justify-content: space-between;

align-items: center;

padding: 30px 0 0;

margin-left: -15px;

margin-right: -15px;

}

.footer-bottom-wrapper .logo, .footer-bottom-wrapper .gateway-area, .footer-bottom-wrapper .copyright {

margin-bottom: 25px;

padding-left: 15px;

padding-right: 15px;

}

.footer-bottom-wrapper .logo a {

display: block;

}

.footer-bottom-wrapper .logo img {

width: 100%;

}

.footer-bottom-wrapper .gateway-area {

margin: -8px;

margin-bottom: 17px;

}

.footer-bottom-wrapper .gateway-area li {

padding: 8px;

}

.footer-bottom-wrapper .copyright p {

margin: 0 !important;

color: rgba(255, 255, 255, 0.9);

}

@media (max-width: 991px) {

.footer-bottom-wrapper .logo {

width: 150px;

}

}

.anime-wrapper {

position: absolute;

top: 0;

left: 0;

z-index: 2;

width: 100%;

}

.anime-wrapper div[class*="anime"] {

position: absolute;

}

.anime-wrapper .anime-1 {

top: 30px;

left: calc(50% - 500px);

}

.anime-wrapper .anime-2 {

top: 40px;

left: calc(50% - 180px);

}

.anime-wrapper .anime-3 {

top: 350px;

left: calc(50% - 620px);

}

.anime-wrapper .anime-6 {

top: 250px;

left: calc(50% - 500px);

}

.anime-wrapper .anime-5 {

top: 330px;

left: calc(50% - 200px);

}

.anime-wrapper .anime-7 {

top: 360px;

left: calc(50% - 450px);

}

.social-icons {

margin: -5px;

}

.social-icons li {

padding: 5px;

}

.social-icons li a {

width: 50px;

height: 50px;

line-height: 50px;

text-align: center;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

background: #ffffff;

color: #52606d;

}

.social-icons li a:hover, .social-icons li a.active {

color: #ffffff;

background: #ee4730;

}

@media (max-width: 1199px) {

.social-icons li a {

width: 45px;

height: 45px;

line-height: 45px;

}

}

/*Header Sectionn Starts Here*/

.header-top-wrapper {

justify-content: space-between;

}

.header-top-wrapper .customer-support, .header-top-wrapper .cart-button-area {

align-items: center;

}

.header-top-wrapper .customer-support {

font-size: 16px;

}

.header-top-wrapper .customer-support a {

color: #ffffff;

}

.header-top-wrapper .customer-support li {

align-items: center;

}

.header-top-wrapper .customer-support li i {

color: #ffffff;

}

.header-top-wrapper .customer-support .select-bar {

border: none;

background: transparent;

padding-left: 5px;

}

.header-top-wrapper .customer-support .select-bar::after {

width: 6px;

height: 6px;

border-color: #ffffff;

}

.header-top-wrapper .customer-support .select-bar .current {

color: #ffffff;

}

.header-top-wrapper .customer-support .list li {

padding: 0 15px;

}

.header-top-wrapper .cart-button-area li {

padding: 4px 15px;

text-align: center;

}

.header-top-wrapper .cart-button-area li:last-child {

padding-right: 0;

}

.header-top-wrapper .cart-button-area li .user-button {

width: 40px;

line-height: 40px;

font-size: 20px;

color: #ffffff;

background: #5a4bcc;

height: 40px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

}

.header-top-wrapper .cart-button-area li .user-button.white {

background: #ffffff;

color: #171d1c;

}

.header-top-wrapper .cart-button-area li .cart-button {

width: 50px;

line-height: 40px;

font-size: 34px;

color: #ffffff;

height: 40px;

position: relative;

}

.header-top-wrapper .cart-button-area li .cart-button a {

display: flex;

}

.header-top-wrapper .cart-button-area li .cart-button .amount {

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

background: #5a4bcc;

font-size: 12px;

width: 22px;

height: 22px;

line-height: 22px;

display: block;

position: absolute;

right: 0;

top: 7px;

}

.header-top {

border: 1px solid rgba(136, 124, 225, 0.502);

}

header {

position: absolute;

left: 0;

top: 0;

width: 100%;

z-index: 99;

}

.header-wrapper {

align-items: center;

justify-content: space-between;

}

.header-wrapper .logo {

width: 160px;

}

.header-wrapper .logo a {

display: block;

}

.header-wrapper .logo img {

width: 100%;

}

.search-form {

position: relative;

width: 255px;

font-size: 14px;

margin-left: auto;

margin-right: 20px;

}

.search-form input {

height: 40px;

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;

background-color: rgba(18, 30, 105, 0.2);

border: 1px solid rgba(255, 255, 255, 0.3);

color: #ffffff;

padding: 0 45px 0 20px;

}

.search-form input::placeholder {

color: #d7d4fc;

}

.search-form button {

position: absolute;

right: 0;

top: 0;

width: 40px;

height: 40px;

border: none;

background: transparent;

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;

text-align: left;

color: #ffffff;

}

@media (min-width: 1200px) {

.search-form {

margin-left: 20px;

margin-right: 0;

}

}

@media (max-width: 767px) {

.search-form {

position: absolute;

margin-right: 0;

top: 75%;

right: 15px;

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

visibility: hidden;

opacity: 0;

}

.search-form input {

background: #3f22b3;

border: 1px solid #bccaea;

}

.search-form.active {

opacity: 1;

top: 100%;

visibility: visible;

}

}

.search-form.white input {

background: #ffffff;

color: #171d1c;

}

.search-form.white input::placeholder {

color: #52606d;

}

.search-form.white button {

color: #52606d;

}

@media (max-width: 1199px) and (min-width: 992px) {

.header-wrapper .logo {

width: 160px;

}

.header-wrapper .search-form {

width: 220px;

}

}

.menu {

align-items: center;

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

.menu li {

padding: 0;

position: relative;

}

.menu li a {

padding: 10px 15px;

color: #ffffff;

text-transform: capitalize;

font-weight: 500;

font-family: "Roboto", sans-serif;

}

@media (max-width: 1199px) and (min-width: 992px) {

.menu li a {

font-size: 16px;

}

}

@media (min-width: 992px) {

.menu li .submenu {

position: absolute;

top: 100%;

left: 0;

min-width: 220px;

background: #ffffff;

visibility: hidden;

transform-origin: top;

-webkit-transform: scaleY(0);

-ms-transform: scaleY(0);

transform: scaleY(0);

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

.menu li .submenu li a {

color: #171d1c;

font-size: 16px;

text-transform: capitalize;

padding: 4px 20px;

border-bottom: 1px solid #bccaea;

display: flex;

align-items: center;

justify-content: space-between;

}

.menu li .submenu li .submenu {

top: 0;

left: 100%;

}

.menu li .submenu li:hover > a {

color: #ffffff;

background: #3f22b3;

border-color: transparent;

}

.menu li:hover > .submenu {

-webkit-transform: scaleY(1);

-ms-transform: scaleY(1);

transform: scaleY(1);

visibility: visible;

}

}

@media (max-width: 991px) {

.menu {

display: block;

background: #ffffff;

position: absolute;

top: 100%;

left: 0;

width: 100%;

z-index: 9;

transform-origin: top;

-webkit-transform: scaleY(0);

-ms-transform: scaleY(0);

transform: scaleY(0);

visibility: hidden;

}

.menu li {

width: 100%;

border-bottom: 1px solid #bccaea;

}

.menu li .submenu {

display: none;

padding-left: 20px;

}

.menu li .submenu li:last-child {

border-bottom: none;

}

.menu li .submenu li:first-child {

border-top: 1px solid #bccaea;

}

.menu li a {

display: flex;

justify-content: space-between;

align-items: center;

color: #171d1c;

padding: 5px 20px;

font-size: 16px;

text-transform: capitalize;

}

.menu.active {

-webkit-transform: scaleY(1);

-ms-transform: scaleY(1);

transform: scaleY(1);

visibility: visible;

}

}

.menu-item-has-children > a::after {

content: "\f0d7";

font-family: "Font Awesome 5 Free";

margin-left: 5px;

font-weight: 600;

}

.search-bar {

margin-right: 30px;

margin-left: auto;

}

.search-bar a {

color: #ee4730;

color: #ffffff;

}

.header-bar {

position: relative;

cursor: pointer;

width: 25px;

height: 20px;

}

.header-bar span {

position: absolute;

display: inline-block;

height: 3px;

width: 100%;

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

background-color: #ffffff;

left: 0;

}

.header-bar span:first-child {

top: 0;

}

.header-bar span:nth-child(2) {

top: 52%;

transform: translateY(-65%);

}

.header-bar span:last-child {

bottom: 0;

}

.header-bar.active span:first-child {

-webkit-transform: rotate(45deg) translate(3px, 9px);

-ms-transform: rotate(45deg) translate(3px, 9px);

transform: rotate(45deg) translate(3px, 9px);

}

.header-bar.active span:nth-child(2) {

opacity: 0;

}

.header-bar.active span:last-child {

-webkit-transform: rotate(-45deg) translate(3px, -9px);

-ms-transform: rotate(-45deg) translate(3px, -9px);

transform: rotate(-45deg) translate(3px, -9px);

}

.header-bottom {

padding: 20px 0;

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

.header-bottom.active {

background: #693ff5;

position: fixed;

top: 0;

left: 0;

width: 100%;

z-index: 99;

animation-name: fadeInUp;

animation-duration: 1s;

}

/*Cart Area Sidebar Starts*/

.cart-sidebar-area {

background-color: #0a3d62;

max-width: 350px;

width: 100%;

height: 100vh;

padding: 30px;

position: fixed;

right: 0;

overflow-y: auto;

top: 0;

z-index: 9999;

-webkit-transition: 0.7s ease;

-moz-transition: 0.7s ease;

-o-transition: 0.7s ease;

transition: 0.7s ease;

-ms-transform: translateX(350px);

-webkit-transform: translateX(350px);

transform: translateX(350px);

}

.cart-sidebar-area.active {

visibility: visible;

opacity: 1;

-ms-transform: translateX(0px);

-webkit-transform: translateX(0px);

transform: translateX(0px);

}

.cart-sidebar-area .btn-wrapper {

margin-top: 40px;

}

.cart-sidebar-area .top-content {

position: relative;

margin-bottom: 35px;

}

.cart-sidebar-area .logo {

max-width: 160px;

display: block;

}

.cart-sidebar-area .logo img {

width: 100%;

}

.cart-sidebar-area .side-sidebar-close-btn {

position: absolute;

right: 0px;

top: 0px;

display: inline-block;

font-size: 16px;

color: #ee4730;

cursor: pointer;

}

.cart-sidebar-area .cart-products .title {

font-size: 18px;

color: #ffffff;

font-weight: 500;

margin: 0;

margin-bottom: 25px;

}

.cart-sidebar-area .single-product-item {

min-height: 80px;

margin-bottom: 20px;

}

.cart-sidebar-area .single-product-item .thumb {

width: 100px;

justify-content: center;

align-items: center;

background: #fff;

height: 100px;

}

.cart-sidebar-area .single-product-item .thumb img {

max-width: 100%;

max-height: 100%;

}

.cart-sidebar-area .single-product-item .content {

width: calc(100% - 100px);

padding-left: 20px;

}

.cart-sidebar-area .single-product-item .content .price {

color: rgba(255, 255, 255, 0.9);

}

.cart-sidebar-area .single-product-item .content .price .pprice {

color: #ffffff;

}

.cart-sidebar-area .single-product-item .content .price .dprice {

padding-left: 5px;

font-size: 80%;

}

.cart-sidebar-area .single-product-item .content .title {

font-size: 16px;

line-height: 26px;

color: #ffffff;

font-weight: 400;

margin-top: 0;

margin-bottom: 0px;

}

.cart-sidebar-area .single-product-item .content .remove-cart {

display: inline-block;

font-size: 10px;

color: #fff;

background-color: #ee4730;

padding: 2px 18px;

border-radius: 5px;

text-transform: uppercase;

margin-top: 10px;

-webkit-transition: all 0.3s ease-in;

-moz-transition: all 0.3s ease-in;

-o-transition: all 0.3s ease-in;

transition: all 0.3s ease-in;

}

.cart-sidebar-area .single-product-item .content .remove-cart:hover {

opacity: .8;

}

.cart-sidebar-area .custom-button {

background: #ffffff;

color: #171d1c;

text-transform: capitalize;

}

.cart-sidebar-area .custom-button:hover {

background: #ee4730;

}

.overlay {

cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVBAMAAABbObilAAAAMFBMVEVMaXH////////////////////////////////////////////////////////////6w4mEAAAAD3RSTlMAlAX+BKLcA5+b6hJ7foD4ZP1OAAAAkUlEQVR4XkWPoQ3CUBQAL4SktoKAbCUjgAKLJZ2ABYosngTJCHSD6joUI6BZgqSoB/+Shqde7sS9x3OGk81fdO+texMtRVTia+TsQtHEUJLdohJfgNNPJHyEJPZTsWLoxShqsWITazEwqePAn69Sw2TUxk1+euPis3EwaXy8RMHSZBIlRcKKnC5hRctjMf57/wJbBlAIs9k1BAAAAABJRU5ErkJggg==), progress;

}

.overlay.active {

visibility: visible;

opacity: 1;

}

/*Banner Section One Starts Here*/

.banner-section {

position: relative;

padding: 220px 0 240px;

overflow: hidden;

}

@media (min-width: 992px) {

.banner-section {

padding: 270px 0 270px;

}

}

@media (min-width: 1200px) {

.banner-section {

padding: 280px 0 280px;

}

}

.banner-content {

position: relative;

z-index: 2;

}

.banner-content .title {

font-size: 76px;

line-height: 86px;

margin-bottom: 15px;

}

.banner-content p {

font-size: 22px;

line-height: 34px;

margin: 0;

margin-bottom: 33px;

}

.banner-content .custom-button {

letter-spacing: 2px;

}

@media (min-width: 768px) {

.banner-content {

margin-bottom: 25px;

}

}

@media (max-width: 1199px) {

.banner-content .title {

font-size: 60px;

line-height: 70px;

}

.banner-content p {

font-size: 20px;

line-height: 30px;

margin-bottom: 35px;

}

}

@media (max-width: 767px) {

.banner-content p {

font-size: 18px;

line-height: 28px;

margin-bottom: 32px;

}

}

@media (max-width: 575px) {

.banner-content .title {

font-size: 42px;

line-height: 50px;

margin-bottom: 10px;

}

.banner-content p {

font-size: 16px;

line-height: 26px;

margin-bottom: 25px;

}

}

@media (min-width: 1200px) {

.banner-content .title {

font-size: 80px;

line-height: 90px;

}

}

.banner-content .cate {

margin-bottom: 15px;

color: #00f7ff;

}

@media (max-width: 767px) {

.banner-content .cate {

margin-bottom: 10px;

}

}

.banner-shape, .banner-shape-2 {

position: absolute;

content: "";

left: 50%;

bottom: -5px;

-webkit-transform: translateX(-50%);

-ms-transform: translateX(-50%);

transform: translateX(-50%);

width: 100%;

}

.banner-shape img, .banner-shape-2 img {

width: 100%;

}

/*Banner Section Two Starts Here*/

.banner-section-2 {

position: relative;

overflow: hidden;

padding: 220px 0 240px;

}

@media (min-width: 992px) {

.banner-section-2 {

padding: 200px 0 240px;

}

}

@media (min-width: 1200px) {

.banner-section-2 {

padding: 220px 0 270px;

}

}

.banner-shape-2 {

bottom: -100px;

min-width: 1800px;

}

.banner-thumb {

position: relative;

z-index: 1;

}

.banner-thumb img {

position: absolute;

top: 50%;

-webkit-transform: translateY(-45%);

-ms-transform: translateY(-45%);

transform: translateY(-45%);

left: 0;

}

@media (max-width: 1199px) {

.banner-thumb img {

max-width: 580px;

}

}

.banner-thumb-2 {

position: relative;

}

.banner-thumb-2 img {

position: absolute;

top: 50%;

-webkit-transform: translateY(-45%);

-ms-transform: translateY(-45%);

transform: translateY(-45%);

left: 0;

}

@media (max-width: 1199px) {

.banner-thumb-2 img {

max-width: 600px;

}

}

.banner-thumb-3 {

position: relative;

}

.banner-thumb-3 img {

position: absolute;

top: 50%;

-webkit-transform: translateY(-45%);

-ms-transform: translateY(-45%);

transform: translateY(-45%);

left: -40px;

z-index: 1;

max-width: 750px;

}

@media (max-width: 1399px) {

.banner-thumb-3 img {

left: -7%;

width: 700px;

}

}

@media (max-width: 1199px) {

.banner-thumb-3 img {

width: 550px;

}

}

/*Browse Slider Seciton Starts Here*/

.browse-item {

display: block;

border-radius: 10px;

box-shadow: -2.034px 6.84px 10px 0px rgba(55, 34, 154, 0.3);

padding: 40px 15px;

text-align: center;

text-transform: uppercase;

color: #171d1c;

margin: 15px;

background: #ffffff;

font-family: "Roboto", sans-serif;

font-weight: 500;

}

.browse-item img {

height: 88px;

width: unset !important;

margin: 0 auto 10px;

}

.browse-item:hover, .browse-item.active {

color: #ffffff;

background: -moz-linear-gradient(88deg, #432eb9 4%, #6e48d3 58%, #9961ec 100%);

background: -webkit-linear-gradient(88deg, #432eb9 4%, #6e48d3 58%, #9961ec 100%);

background: -ms-linear-gradient(88deg, #432eb9 4%, #6e48d3 58%, #9961ec 100%);

}

.browse-slider-section {

position: relative;

z-index: 9;

}

.mt--140 {

margin-top: -140px;

}

/*Banner Section Four Starts Here*/

.bot-0 {

bottom: 0;

}

.banner-thumb-4 {

position: relative;

}

.banner-thumb-4 .bid-now {

width: 140px;

height: 140px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

color: #ffffff;

position: absolute;

top: 130px;

left: 25px;

text-transform: capitalize;

justify-content: center;

align-items: center;

flex-direction: column;

background: -moz-linear-gradient(135deg, #f5317f 0%, #ff7c6e 100%);

background: -webkit-linear-gradient(135deg, #f5317f 0%, #ff7c6e 100%);

background: -ms-linear-gradient(135deg, #f5317f 0%, #ff7c6e 100%);

box-shadow: 0px 5px 3px 0px rgba(245, 49, 127, 0.2);

}

.banner-thumb-4 .bid-now span {

display: block;

}

.banner-thumb-4 .bid-now i {

font-size: 48px;

line-height: 1;

display: block;

margin-bottom: 5px;

}

@media (max-width: 1199px) {

.banner-thumb-4 .bid-now {

width: 100px;

height: 100px;

left: 0;

}

.banner-thumb-4 .bid-now i {

font-size: 40px;

}

}

@media screen and (max-width: 499px) {

.banner-thumb-4 .bid-now {

width: 80px;

height: 80px;

top: 0px;

}

.banner-thumb-4 .bid-now i {

font-size: 24px;

}

.banner-thumb-4 .bid-now span {

font-size: 14px;

}

}

@media (min-width: 992px) {

.banner-thumb-4 {

position: absolute;

left: 0;

-webkit-transform: translate(-10%, -30%);

-ms-transform: translate(-10%, -30%);

transform: translate(-10%, -30%);

}

.banner-thumb-4 img {

max-width: 770px;

}

}

@media (min-width: 992px) and (max-width: 1399px) {

.banner-thumb-4 {

-webkit-transform: translate(-21%, -42%);

-ms-transform: translate(-21%, -42%);

transform: translate(-21%, -42%);

}

.banner-thumb-4 img {

max-width: 700px;

}

}

@media (min-width: 992px) and (max-width: 1199px) {

.banner-thumb-4 {

left: 0;

-webkit-transform: translate(0, -50%);

-ms-transform: translate(0, -50%);

transform: translate(0, -50%);

}

.banner-thumb-4 img {

max-width: 550px;

}

}

@media (min-width: 992px) and (min-width: 1200px) {

.banner-thumb-4 {

-webkit-transform: translate(-21%, -42%);

-ms-transform: translate(-21%, -42%);

transform: translate(-21%, -42%);

}

}

@media (min-width: 992px) and (min-width: 1400px) {

.banner-thumb-4 {

-webkit-transform: translate(-10%, -37%);

-ms-transform: translate(-10%, -37%);

transform: translate(-10%, -37%);

}

}

@media (max-width: 991px) {

.banner-thumb-4 {

width: 100%;

max-width: 500px;

margin: 40px auto 0;

}

.banner-thumb-4 img {

width: 100%;

}

}

@media screen and (max-width: 499px) {

.banner-thumb-4 {

margin-top: 30px;

}

}

.banner-section-4 {

position: relative;

overflow: hidden;

padding: 240px 0 100px;

}

.banner-section-4 .container {

position: relative;

z-index: 1;

}

@media (min-width: 992px) {

.banner-section-4 {

padding: 270px 0 270px;

}

}

@media (min-width: 1200px) {

.banner-section-4 {

padding: 280px 0 340px;

}

}

@media (max-width: 575px) {

.banner-section-4 {

padding: 200px 0 70px;

}

}

/*Banner Section 5 Starts Here*/

.banner-section-5 {

position: relative;

overflow: hidden;

padding: 240px 0 120px;

}

.banner-section-5 .container {

position: relative;

z-index: 1;

}

@media (min-width: 992px) {

.banner-section-5 {

padding: 270px 0;

}

}

@media (min-width: 1200px) {

.banner-section-5 {

padding: 280px 0 445px;

}

}

@media (max-width: 575px) {

.banner-section-5 {

padding: 220px 0 120px;

}

}

.banner-thumb-5 {

position: relative;

}

.banner-thumb-5 img {

position: absolute;

top: 0;

left: -170px;

-webkit-transform: translateY(-40%);

-ms-transform: translateY(-40%);

transform: translateY(-40%);

}

@media (max-width: 1199px) {

.banner-thumb-5 img {

-webkit-transform: translateY(-50%);

-ms-transform: translateY(-50%);

transform: translateY(-50%);

max-width: 800px;

}

}

@media (min-width: 1200px) {

.banner-shape-5 {

min-width: 1920px;

}

}

.browse-item-2 {

padding: 30px 15px 25px;

border-radius: 5px;

box-shadow: -1px 0px 10px 0px rgba(55, 34, 154, 0.3);

margin: 15px;

align-items: center;

}

.browse-item-2 .thumb {

width: 40px;

}

.browse-item-2 .content {

width: calc(100% - 40px);

padding-left: 15px;

}

.browse-item-2 .content .title {

color: #171d1c;

font-size: 16px;

line-height: 1.3;

display: block;

margin-bottom: 5px;

font-family: "Roboto", sans-serif;

}

.browse-item-2 .content .info {

color: #52606d;

font-size: 15px;

display: block;

}

.browse-item-2 .badges {

border-radius: 50%;

background: -moz-linear-gradient(-73deg, #432eb9 4%, #6e48d3 58%, #9961ec 100%);

background: -webkit-linear-gradient(-73deg, #432eb9 4%, #6e48d3 58%, #9961ec 100%);

background: -ms-linear-gradient(-73deg, #432eb9 4%, #6e48d3 58%, #9961ec 100%);

box-shadow: 0px 6px 10px 0px rgba(55, 34, 154, 0.22);

color: #ffffff;

font-size: 13px;

line-height: 30px;

height: 30px;

width: 30px;

position: absolute;

top: calc(50% - 15px);

left: -15px;

}

/*Hero Section Starts Here*/

.hero-section {

position: relative;

padding: 190px 0 505px;

overflow: hidden;

}

.hero-section .container, .hero-section .container-fluid {

position: relative;

z-index: 1;

}

@media (max-width: 991px) {

.hero-section {

padding: 190px 0 160px;

}

.hero-section.style-2 {

padding-bottom: 300px;

}

}

@media (min-width: 992px) {

.pb-lg-400 {

padding-bottom: 400px !important;

}

.mt-lg--325 {

margin-top: -325px !important;

}

}

.hero-bg {

position: absolute;

bottom: 0;

top: 0;

left: 0;

right: 0;

}

.breadcrumb {

background: transparent;

padding: 0;

margin: 0;

}

.breadcrumb li {

color: #ffffff;

text-transform: capitalize;

}

.breadcrumb li a {

color: #ffffff;

}

.breadcrumb li a::after {

content: "\f101";

font-family: "Flaticon";

font-weight: 500;

margin: 0 10px;

color: #ffffff;

}

.breadcrumb li a:hover {

color: #ee4730;

}

.breadcrumb li span {

color: #ffffff;

}

/*Sidebar Widget Starts Here*/

.widget {

background: #ffffff;

padding: 30px;

border-radius: 5px;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

margin-bottom: 30px;

}

.widget .title {

border-bottom: 1px solid #eae7e7;

text-align: center;

padding-bottom: 18px;

margin-bottom: 30px;

}

.widget:last-child {

margin-bottom: 0;

}

.widget .custom-button {

padding: 0 25px;

line-height: 40px;

font-size: 16px;

text-transform: uppercase;

background: -moz-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -webkit-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -ms-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

box-shadow: 0px 3px 5px 0px rgba(162, 44, 202, 0.3);

}

.widget .ui-state-default {

width: 19px;

height: 19px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

display: block;

border: none;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

background-color: white;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

outline: none;

cursor: pointer;

top: -9px;

}

.widget .ui-state-default::after {

position: absolute;

content: "";

width: 13px;

height: 13px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

background: -moz-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -webkit-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -ms-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

top: 3px;

left: 3px;

display: block;

}

.widget .ui-slider-range {

background: -moz-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -webkit-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -ms-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

}

.widget .ui-widget.ui-widget-content {

height: 3px;

background: #d2d2d2;

border: none;

margin-bottom: 25px;

}

.widget-form-group {

align-items: center;

margin-bottom: 6px;

}

.widget-form-group:last-child {

margin-bottom: 0;

}

.widget-form-group input {

width: 14px;

height: 14px;

}

.widget-form-group label {

margin: 0;

width: calc(100% - 14px);

padding-left: 8px;

font-size: 14px;

color: #171d1c;

font-weight: 500;

}

.price-range {

align-items: center;

justify-content: space-between;

font-size: 14px;

}

.price-range label {

margin: 0;

font-weight: 500;

color: #171d1c;

}

.price-range input {

height: unset;

width: unset;

padding: 7px;

background: transparent;

border: none;

text-align: right;

font-weight: 500;

color: #171d1c;

padding-right: 0;

}

/*Client Section Starts Here*/

.client-item {

background: #ffffff;

margin: 15px;

border-radius: 20px;

box-shadow: 0.487px 3.97px 15px 0px rgba(40, 58, 140, 0.19);

}

.client-item .client-content {

padding: 25px 30px;

}

.client-item .client-content p {

margin: 0 !important;

}

.client-item .client-author {

border-top: 1px solid #edeafb;

padding: 20px 30px;

align-items: center;

}

.client-item .client-author .thumb {

width: 50px;

height: 50px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

overflow: hidden;

}

.client-item .client-author .thumb a {

display: block;

}

.client-item .client-author .thumb img {

width: 100%;

}

.client-item .client-author .content {

width: calc(100% - 50px);

padding-left: 20px;

}

.client-item .client-author .content .title {

margin: 0;

}

.client-item .client-author .content .ratings {

font-size: 14px;

}

.m--15 {

margin: -15px;

}

div[class*="auction"] .custom-button {

text-transform: capitalize;

}

/*How Section Starts Here*/

.how-wrapper {

padding: 60px;

border-radius: 20px;

}

@media (min-width: 768px) {

.how-wrapper.shadow-style {

background-color: #ffffff;

box-shadow: 0 0 15px rgba(23, 29, 28, 0.2);

}

}

@media (max-width: 1199px) {

.how-wrapper {

padding: 60px 40px;

}

}

@media (max-width: 991px) {

.how-wrapper {

padding: 50px 30px;

}

}

@media (max-width: 575px) {

.how-wrapper {

padding: 40px 15px;

}

}

.how-item {

margin-bottom: 40px;

text-align: center;

}

.how-item .how-thumb {

margin: 0 auto 25px;

}

.how-item .how-thumb img {

max-width: 100%;

}

@media (min-width: 768px) {

.how-item .how-thumb {

margin-bottom: 40px;

}

}

@media (max-width: 575px) {

.how-item .how-thumb {

max-width: 180px;

}

}

.how-item .how-content .title {

margin-bottom: 18px;

}

.how-video-wrapper {

padding: 120px 0 110px;

text-align: center;

}

.how-video-wrapper a .title {

color: #ffffff;

margin-bottom: 20px;

}

.how-video-wrapper a .video-button {

margin: 0 auto;

}

@media (max-width: 991px) {

.how-video-wrapper {

padding: 80px 0;

}

}

.car-1, .car-2 {

position: absolute;

top: 0;

}

@media screen and (max-width: 1700px) {

.car-1 img, .car-2 img {

max-width: 350px;

}

}

@media screen and (max-width: 1599px) {

.car-1 img, .car-2 img {

max-width: 280px;

}

}

.car-1 {

left: 0;

}

.car-2 {

right: 0;

}

/*Art & Electronics Auction Section Starts Here*/

.auction-item-1 {

border: 1px solid #d4d7f5;

border-radius: 10px;

padding: 10px;

margin: 0 1px 30px 0;

align-items: center;

overflow: hidden;

}

.auction-item-1 .auction-thumb {

position: relative;

border-radius: 10px;

overflow: hidden;

background-color: #f6f6ff;

justify-content: center;

align-items: center;

width: calc(50% - 7px);

}

.auction-item-1 .auction-thumb .bid {

width: 40px;

height: 40px;

color: #ffffff;

line-height: 40px;

font-size: 18px;

position: absolute;

bottom: 20px;

right: 20px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

text-align: center;

background: -moz-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -webkit-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -ms-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.13);

}

.auction-item-1 .auction-thumb .rating {

color: #ff7800;

position: absolute;

top: 20px;

right: 20px;

}

.auction-item-1 .auction-thumb img {

width: 100%;

}

.auction-item-1 .auction-content {

padding-left: 20px;

width: calc(50% + 7px);

}

.auction-item-1 .auction-content .title {

margin: 0;

line-height: 28px;

font-size: 20px;

margin-bottom: 15px;

}

.auction-item-1 .auction-content .title a {

display: -webkit-box;

-webkit-line-clamp: 2;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-1 .auction-content .bid-amount {

padding: 12px 20px;

align-items: center;

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

}

.auction-item-1 .auction-content .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

.auction-item-1 .auction-content .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-1 .auction-content .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-1 .auction-content .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

.auction-item-1 .auction-content .countdown-area {

font-size: 16px;

justify-content: space-between;

align-items: center;

margin-top: 5px;

}

.auction-item-1 .auction-content .countdown-area .countdown {

margin-top: 5px;

}

.auction-item-1 .auction-content .countdown-area .total-bids {

margin-top: 5px;

width: 80px;

color: #43b055;

padding-left: 15px;

text-shadow: 0px 6px 7px rgba(0, 0, 0, 0.19);

border-left: 1px solid #d0cff0;

line-height: 20px;

}

@media screen and (max-width: 520px) {

.auction-item-1 {

max-width: 350px;

margin-left: auto;

margin-right: auto;

}

.auction-item-1 .auction-thumb, .auction-item-1 .auction-content {

width: 100%;

}

.auction-item-1 .auction-content {

padding: 0;

padding-top: 30px;

}

}

.countdown {

text-shadow: 0px 5px 3px rgba(245, 49, 127, 0.2);

background: -webkit-linear-gradient(#ff7c6e, #f5317f);

background-clip: text;

-webkit-background-clip: text;

-webkit-text-fill-color: transparent;

}

/*Coins & Bullions Auction Section Starts Here*/

.auction-item-2 {

padding: 10px 10px 30px;

border-radius: 10px;

background-color: #ffffff;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

margin: 0 auto 30px;

}

@media (max-width: 575px) {

.auction-item-2 {

max-width: 350px;

}

}

.auction-item-2 .auction-thumb {

position: relative;

border-radius: 10px;

overflow: hidden;

background-color: #f6f6ff;

justify-content: center;

align-items: center;

}

.auction-item-2 .auction-thumb .bid {

width: 40px;

height: 40px;

color: #ffffff;

line-height: 40px;

font-size: 18px;

position: absolute;

bottom: 20px;

right: 20px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

text-align: center;

background: -moz-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -webkit-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -ms-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.13);

}

.auction-item-2 .auction-thumb .rating {

color: #ff7800;

position: absolute;

top: 20px;

right: 20px;

}

.auction-item-2 .auction-thumb img {

width: 100%;

}

.auction-item-2 .auction-content .title {

margin: 0;

line-height: 28px;

font-size: 20px;

padding: 16px 0;

}

.auction-item-2 .auction-content .title a {

display: -webkit-box;

-webkit-line-clamp: 2;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-2 .auction-content .custom-button {

width: 100%;

max-width: 230px;

text-align: center;

}

.auction-item-2 .auction-content .bid-area .bid-amount {

padding: 12px 10px;

align-items: center;

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

width: 50%;

justify-content: center;

position: relative;

}

.auction-item-2 .auction-content .bid-area .bid-amount .icon {

max-width: 30px;

}

.auction-item-2 .auction-content .bid-area .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-2 .auction-content .bid-area .bid-amount .icon {

max-width: 25px;

}

.auction-item-2 .auction-content .bid-area .bid-amount .icon i {

font-size: 30px;

}

}

.auction-item-2 .auction-content .bid-area .bid-amount .amount-content {

padding-left: 15px;

max-width: calc(100% - 30px);

}

.auction-item-2 .auction-content .bid-area .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-2 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-2 .auction-content .bid-area .bid-amount .amount-content {

max-width: calc(100% - 25px);

}

.auction-item-2 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-2 .auction-content .bid-area .bid-amount::before {

width: 1px;

right: 0;

bottom: 15px;

top: 15px;

background: #bfbee8;

}

.auction-item-2 .auction-content .bid-area .bid-amount:nth-child(even)::before {

display: none;

}

.auction-item-2 .auction-content .bid-area .bid-amount:nth-child(even) .icon i,

.auction-item-2 .auction-content .bid-area .bid-amount:nth-child(even) .amount-content .current {

color: #ee4730;

}

@media (max-width: 1199px) and (min-width: 992px) {

.auction-item-2 .auction-content .bid-area .bid-amount {

padding: 12px 5px;

}

}

@media screen and (max-width: 450px) {

.auction-item-2 .auction-content .bid-area .bid-amount {

padding: 12px 0;

}

.auction-item-2 .auction-content .bid-area .bid-amount .icon {

width: 25px;

}

.auction-item-2 .auction-content .bid-area .bid-amount .icon i {

font-size: 30px;

}

.auction-item-2 .auction-content .bid-area .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-2 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-2 .auction-content .countdown-area {

font-size: 18px;

justify-content: space-between;

align-items: center;

margin-top: 5px;

margin-bottom: 20px;

padding-left: 10px;

padding-right: 10px;

}

.auction-item-2 .auction-content .countdown-area .countdown {

margin-top: 5px;

text-shadow: 0px 5px 3px rgba(245, 49, 127, 0.2);

background: -webkit-linear-gradient(#ff7c6e, #f5317f);

background-clip: text;

-webkit-background-clip: text;

-webkit-text-fill-color: transparent;

}

.auction-item-2 .auction-content .countdown-area .total-bids {

margin-top: 5px;

color: #43b055;

padding-left: 15px;

text-shadow: 0px 6px 7px rgba(0, 0, 0, 0.19);

border-left: 1px solid #d0cff0;

line-height: 20px;

}

@media (min-width: 1200px) {

.auction-item-2 .auction-content .countdown-area .total-bids {

padding-left: 35px;

}

}

/*Jewelry Section Starts Here*/

.jewelry-bg, .car-bg {

position: absolute;

width: 100%;

bottom: 0;

left: 0;

}

.jewelry-bg img, .car-bg img {

width: 100%;

}

.car-bg {

min-width: 1400px;

left: 50%;

-webkit-transform: translateX(-50%);

-ms-transform: translateX(-50%);

transform: translateX(-50%);

}

/*Call In Section Starts Here*/

.call-wrapper {

padding: 80px 80px 50px;

border-radius: 20px;

justify-content: space-between;

align-items: center;

}

.call-wrapper .section-header {

max-width: 420px;

text-align: left;

margin-left: 0;

margin-bottom: 30px;

}

.call-wrapper .custom-button {

color: #ee4730;

margin-bottom: 30px;

}

@media (max-width: 991px) {

.call-wrapper {

padding: 65px 40px 30px;

}

}

@media (max-width: 575px) {

.call-wrapper {

padding: 65px 30px 30px;

}

}

@media screen and (max-width: 499px) {

.call-wrapper {

padding: 65px 15px 30px;

}

}

/*Popular Auction Section Starts Here*/

.auction-item-3 {

margin-bottom: 40px;

}

.auction-item-3 .auction-thumb {

position: relative;

border-radius: 10px;

overflow: hidden;

background-color: #f6f6ff;

justify-content: center;

align-items: center;

width: calc(50% - 7px);

}

.auction-item-3 .auction-thumb .bid {

width: 40px;

height: 40px;

color: #ffffff;

line-height: 40px;

font-size: 18px;

position: absolute;

bottom: 20px;

right: 20px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

text-align: center;

background: -moz-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -webkit-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -ms-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.13);

}

.auction-item-3 .auction-thumb .rating {

color: #ff7800;

position: absolute;

top: 20px;

right: 20px;

}

.auction-item-3 .auction-thumb img {

width: 100%;

}

.auction-item-3 .auction-content {

padding-left: 20px;

width: calc(50% + 7px);

text-align: center;

align-self: center;

}

.auction-item-3 .auction-content .title {

margin: 0;

line-height: 26px;

font-size: 20px;

margin-bottom: 15px;

}

.auction-item-3 .auction-content .title a {

display: -webkit-box;

-webkit-line-clamp: 2;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-3 .auction-content .bid-amount {

padding: 12px 20px;

justify-content: center;

align-items: center;

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

}

.auction-item-3 .auction-content .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

.auction-item-3 .auction-content .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-3 .auction-content .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-3 .auction-content .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

.auction-item-3 .auction-content .bids-area {

margin-top: 7px;

font-size: 16px;

}

.auction-item-3 .auction-content .bids-area .total-bids {

color: #43b055;

}

@media screen and (max-width: 520px) {

.auction-item-3 {

max-width: 300px;

margin-left: auto;

margin-right: auto;

}

.auction-item-3 .auction-thumb, .auction-item-3 .auction-content {

width: 100%;

}

.auction-item-3 .auction-content {

padding: 0;

padding-top: 20px;

}

}

.popular-auction-wrapper {

border-radius: 20px;

background-color: #ffffff;

box-shadow: 0 0 20px rgba(23, 29, 28, 0.2);

padding: 50px 30px;

}

@media (max-width: 767px) {

.popular-auction-wrapper {

box-shadow: none;

background: transparent;

padding: 0;

}

.popular-auction-wrapper .auction-item-3 {

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.26);

background: #ffffff;

padding: 15px;

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

border-radius: 10px;

margin-bottom: 30px;

}

}

.popular-bg, .how-video-shape {

position: absolute;

top: 0;

left: 0;

width: 100%;

height: 600px;

max-height: calc(100% - 120px);

}

.how-video-shape {

background-size: contain;

background-position: left top;

}

/*Real Estate Auction Starts Here*/

.auction-item-4 {

border-radius: 10px;

display: flex;

flex-wrap: wrap;

flex-direction: row-reverse;

}

.auction-item-4 .auction-thumb {

position: relative;

border-radius: 10px;

overflow: hidden;

background-color: #f6f6ff;

justify-content: center;

align-items: center;

width: 100%;

}

.auction-item-4 .auction-thumb .bid {

width: 40px;

height: 40px;

color: #ffffff;

line-height: 40px;

font-size: 18px;

position: absolute;

bottom: 20px;

right: 20px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

text-align: center;

background: -moz-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -webkit-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -ms-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.13);

}

.auction-item-4 .auction-thumb .rating {

color: #ff7800;

position: absolute;

top: 20px;

right: 20px;

}

.auction-item-4 .auction-thumb img {

width: 100%;

}

.auction-item-4 .auction-thumb a {

display: block;

}

.auction-item-4 .auction-content {

width: 100%;

text-align: center;

}

.auction-item-4 .auction-content .title {

margin: 0;

padding: 16px 0;

}

.auction-item-4 .auction-content .title a {

display: -webkit-box;

-webkit-line-clamp: 2;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-4 .auction-content .custom-button {

width: 100%;

max-width: 230px;

text-align: center;

}

.auction-item-4 .auction-content .bid-area .bid-amount {

padding: 12px 10px;

align-items: center;

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

width: 50%;

justify-content: center;

position: relative;

}

.auction-item-4 .auction-content .bid-area .bid-amount .icon {

max-width: 30px;

}

.auction-item-4 .auction-content .bid-area .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-4 .auction-content .bid-area .bid-amount .icon {

max-width: 25px;

}

.auction-item-4 .auction-content .bid-area .bid-amount .icon i {

font-size: 30px;

}

}

.auction-item-4 .auction-content .bid-area .bid-amount .amount-content {

padding-left: 15px;

max-width: calc(100% - 30px);

}

.auction-item-4 .auction-content .bid-area .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-4 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-4 .auction-content .bid-area .bid-amount .amount-content {

max-width: calc(100% - 25px);

}

.auction-item-4 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-4 .auction-content .bid-area .bid-amount::before {

width: 1px;

right: 0;

bottom: 15px;

top: 15px;

background: #bfbee8;

}

.auction-item-4 .auction-content .bid-area .bid-amount:nth-child(even)::before {

display: none;

}

.auction-item-4 .auction-content .bid-area .bid-amount:nth-child(even) .icon i,

.auction-item-4 .auction-content .bid-area .bid-amount:nth-child(even) .amount-content .current {

color: #ee4730;

}

@media (max-width: 1199px) and (min-width: 992px) {

.auction-item-4 .auction-content .bid-area .bid-amount {

padding: 12px 5px;

}

}

@media screen and (max-width: 450px) {

.auction-item-4 .auction-content .bid-area .bid-amount {

padding: 12px 0;

}

.auction-item-4 .auction-content .bid-area .bid-amount .icon {

width: 25px;

}

.auction-item-4 .auction-content .bid-area .bid-amount .icon i {

font-size: 30px;

}

.auction-item-4 .auction-content .bid-area .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-4 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-4 .auction-content .countdown-area {

font-size: 18px;

justify-content: space-between;

align-items: center;

margin-top: 5px;

margin-bottom: 20px;

padding-left: 10px;

padding-right: 10px;

}

.auction-item-4 .auction-content .countdown-area .countdown {

margin-top: 5px;

text-shadow: 0px 5px 3px rgba(245, 49, 127, 0.2);

background: -webkit-linear-gradient(#ff7c6e, #f5317f);

background-clip: text;

-webkit-background-clip: text;

-webkit-text-fill-color: transparent;

}

.auction-item-4 .auction-content .countdown-area .total-bids {

margin-top: 5px;

color: #43b055;

padding-left: 15px;

text-shadow: 0px 6px 7px rgba(0, 0, 0, 0.19);

border-left: 1px solid #d0cff0;

line-height: 20px;

}

@media (min-width: 1200px) {

.auction-item-4 .auction-content .countdown-area .total-bids {

padding-left: 35px;

}

}

@media (min-width: 992px) {

.auction-item-4 {

justify-content: space-between;

align-items: center;

}

.auction-item-4 .auction-content {

width: calc((calc(100% / 12) * 5) - 15px);

}

.auction-item-4 .auction-content .title {

margin-bottom: 15px;

}

.auction-item-4 .auction-content .countdown-area {

margin-top: 15px;

margin-bottom: 25px;

}

.auction-item-4 .auction-content .countdown-area .total-bids {

width: 50%;

}

.auction-item-4 .auction-thumb {

width: calc((calc(100% / 12) * 7) - 15px);

}

}

@media (max-width: 991px) {

.auction-item-4 {

background-color: #ffffff;

border: 1px solid #d4d7f5;

padding: 10px 10px 30px;

}

}

@media (max-width: 575px) {

.auction-item-4 {

max-width: 350px;

margin: 0 auto;

}

}

.owl-dots {

counter-reset: realCounter;

position: absolute;

right: 60px;

bottom: -60px;

width: 175px;

text-align: center;

}

.owl-dots .owl-dot {

counter-increment: realCounter;

background: transparent;

position: relative;

}

.owl-dots .owl-dot span {

display: none !important;

}

.owl-dots .owl-dot::before {

content: counter(realCounter);

margin: 0;

width: 30px !important;

height: 30px !important;

line-height: 30px !important;

display: block !important;

color: #52606d;

}

.owl-dots .owl-dot.active::before {

color: #3f22b3;

font-size: 24px;

}

.owl-dots .owl-dot:nth-of-type(n + 6) {

display: none;

}

@media (max-width: 767px) {

.owl-dots {

width: unset;

left: 60px;

}

}

/*Upcoming Auction Section Starts Here*/

.filter-wrapper {

box-shadow: 0px 14px 10px 0px #ece8fd;

margin-bottom: 40px;

}

@media (min-width: 992px) {

.filter-wrapper {

margin-bottom: 60px;

}

}

.filter {

justify-content: center;

text-align: center;

margin-top: -25px;

}

.filter li {

flex-grow: 1;

cursor: pointer;

padding: 0;

text-transform: capitalize;

}

.filter li span {

padding: 15px 25px;

display: inline-block;

position: relative;

}

.filter li span::before {

bottom: 0;

left: 0;

height: 2px;

background: #ee4730;

width: 0;

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

@media (max-width: 767px) {

.filter li span {

padding: 5px 15px;

font-size: 16px;

}

}

.filter li.active {

color: #ee4730;

}

.filter li.active span::before {

width: 100%;

}

.filter li i {

margin-right: 5px;

}

.filter.niche-border {

border-bottom: 2px solid #d4d4f1;

}

.filter.niche-border li span::before {

bottom: -2px;

}

.no-shadow {

box-shadow: none;

}

.auction-item-5 {

padding: 15px;

width: 100%;

}

.auction-item-5 .auction-inner {

padding: 10px;

border-radius: 10px;

background-color: white;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

overflow: hidden;

position: relative;

}

.auction-item-5 .auction-inner .auction-thumb {

position: relative;

border-radius: 10px;

overflow: hidden;

background-color: #f6f6ff;

justify-content: center;

align-items: center;

width: 350px;

}

.auction-item-5 .auction-inner .auction-thumb .rating {

color: #ff7800;

position: absolute;

top: 20px;

right: 20px;

}

.auction-item-5 .auction-inner .auction-thumb img {

width: 100%;

}

.auction-item-5 .auction-inner .auction-content {

width: 495px;

padding: 15px 20px;

align-self: center;

}

.auction-item-5 .auction-inner .auction-content .title-area {

padding: 0 0 30px;

}

.auction-item-5 .auction-inner .auction-content .title-area .title {

margin: 0;

line-height: 28px;

font-size: 20px;

margin-bottom: 16px;

}

.auction-item-5 .auction-inner .auction-content .title-area .title a {

display: -webkit-box;

-webkit-line-clamp: 1;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-5 .auction-inner .auction-content .title-area .list-area {

margin: -5px -20px;

font-size: 16px;

}

@media (max-width: 991px) {

.auction-item-5 .auction-inner .auction-content .title-area .list-area {

font-size: 14px;

}

}

.auction-item-5 .auction-inner .auction-content .title-area .list-area .list-item {

padding: 5px 20px;

color: #52606d;

border-right: 1px solid #bfbee8;

display: inline-block;

line-height: 1;

max-width: 50%;

}

.auction-item-5 .auction-inner .auction-content .title-area .list-area .list-item:last-child {

border: none;

}

.auction-item-5 .auction-inner .auction-content .title-area .list-area .list-item .list-id {

color: #171d1c;

font-family: "Roboto", sans-serif;

font-weight: 500;

}

.auction-item-5 .auction-inner .auction-content .title-area .list-area .list-item .list-id::after {

content: " : ";

}

.auction-item-5 .auction-inner .auction-content .bid-area {

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount {

padding: 12px 10px;

align-items: center;

max-width: 50%;

width: 185px;

position: relative;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon {

max-width: 30px;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon {

max-width: 25px;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon i {

font-size: 30px;

}

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content {

padding-left: 15px;

max-width: calc(100% - 30px);

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content {

max-width: calc(100% - 25px);

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount::before {

width: 1px;

right: 0;

bottom: 15px;

top: 15px;

background: #bfbee8;

}

@media (min-width: 1200px) {

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even) {

padding-left: 30px;

}

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even)::before {

display: none;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even) .icon i,

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even) .amount-content .current {

color: #ee4730;

}

@media (max-width: 1199px) and (min-width: 992px) {

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount {

padding: 12px 5px;

}

}

@media screen and (max-width: 450px) {

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount {

padding: 12px 0;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon {

width: 25px;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon i {

font-size: 30px;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-5 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-5 .auction-inner .auction-content .bid-count-area {

margin: -5px -20px;

margin-top: 15px;

font-size: 16px;

align-items: center;

}

@media (max-width: 991px) {

.auction-item-5 .auction-inner .auction-content .bid-count-area {

font-size: 14px;

}

}

.auction-item-5 .auction-inner .auction-content .bid-count-area .item {

padding: 5px 20px;

color: #43b055;

border-right: 1px solid #bfbee8;

display: inline-block;

line-height: 1;

max-width: 50%;

}

.auction-item-5 .auction-inner .auction-content .bid-count-area .item:last-child {

border: none;

}

.auction-item-5 .auction-inner .auction-content .bid-count-area .item .left {

color: #171d1c;

}

.auction-item-5 .auction-inner .auction-content .bid-count-area .item .left::after {

content: " : ";

}

.auction-item-5 .auction-inner .auction-bidding {

border-radius: 10px;

background-color: rgba(214, 213, 243, 0.302);

padding: 30px 15px;

width: calc(100% - 350px - 495px);

text-align: center;

}

.auction-item-5 .auction-inner .auction-bidding .bid-title {

color: #3f22b3;

font-family: "Roboto", sans-serif;

font-weight: 500;

}

.auction-item-5 .auction-inner .auction-bidding .countdown {

margin-bottom: 30px;

}

.auction-item-5 .auction-inner .auction-bidding .bid-incr {

margin-bottom: 25px;

}

.auction-item-5 .auction-inner .auction-bidding .bid-incr .title {

margin-bottom: 18px;

display: block;

}

.auction-item-5 .auction-inner .auction-bidding .custom-button {

text-transform: capitalize;

font-size: 16px;

}

@media (max-width: 1199px) {

.auction-item-5 .auction-inner .auction-thumb {

width: 250px;

}

.auction-item-5 .auction-inner .auction-content {

width: 410px;

}

.auction-item-5 .auction-inner .auction-bidding {

width: calc(100% - 260px - 400px);

}

}

@media (max-width: 991px) {

.auction-item-5 {

width: 50%;

}

.auction-item-5 .auction-inner .auction-thumb, .auction-item-5 .auction-inner .auction-content, .auction-item-5 .auction-inner .auction-bidding {

width: 100%;

}

.auction-item-5 .auction-inner .auction-content {

padding: 25px 0 30px;

}

.auction-item-5 .auction-inner .auction-content .title-area .title {

margin-bottom: 5px;

}

.auction-item-5 .auction-inner .auction-bidding .custom-button {

font-size: 14px;

}

.auction-item-5 .auction-inner .auction-bidding .countdown {

margin-bottom: 15px;

}

.auction-item-5 .auction-inner .auction-bidding .bid-incr {

margin-bottom: 15px;

}

}

@media (max-width: 767px) {

.auction-item-5 {

width: 100%;

}

}

@media screen and (max-width: 767px) and (min-width: 426px) {

.auction-item-5 {

text-align: center;

}

.auction-item-5 .title-area .list-area {

justify-content: center;

margin: -5px -15px;

}

.auction-item-5 .bid-area .bid-inner {

justify-content: center;

}

.auction-item-5 .bid-count-area {

justify-content: center;

margin: -5px -15px;

}

}

@media screen and (max-width: 425px) {

.auction-item-5 .auction-inner .auction-content {

padding: 20px 0;

}

.auction-item-5 .auction-inner .auction-content .title-area {

padding-bottom: 20px;

}

.auction-item-5 .auction-inner .auction-content .title-area .title {

margin-bottom: 12px;

}

.auction-item-5 .auction-inner .auction-content .title-area .list-area .list-item {

width: 100%;

max-width: 100%;

border: none;

}

.auction-item-5 .auction-inner .auction-content .bid-count-area .item {

width: 100%;

max-width: 100%;

border: none;

}

}

.upcoming-badge {

width: 125px;

height: 128px;

left: 0;

top: 0;

color: #ffffff;

font-size: 30px;

padding: 20px;

line-height: 1;

z-index: 2;

background: -moz-linear-gradient(135deg, #2cbfc7 0%, #46eeaa 100%);

background: -webkit-linear-gradient(135deg, #2cbfc7 0%, #46eeaa 100%);

background: -ms-linear-gradient(135deg, #2cbfc7 0%, #46eeaa 100%);

clip-path: polygon(100% 0, 0% 100%, 0 0);

-webkit-clip-path: polygon(100% 0, 0% 100%, 0 0);

text-align: left;

}

@media screen and (max-width: 425px) {

.upcoming-badge {

width: 100px;

height: 100px;

padding: 15px;

font-size: 24px;

}

}

/*Upcoming Auction Section Starts Here*/

.auction-item-7 {

padding: 15px;

width: 100%;

}

.auction-item-7 .auction-inner {

border-radius: 4px;

background-color: white;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

overflow: hidden;

position: relative;

}

.auction-item-7 .auction-inner .auction-thumb {

position: relative;

overflow: hidden;

background-color: #f6f6ff;

justify-content: center;

align-items: center;

width: 350px;

}

.auction-item-7 .auction-inner .auction-thumb .rating {

color: #ff7800;

position: absolute;

top: 20px;

right: 20px;

}

.auction-item-7 .auction-inner .auction-thumb img {

width: 100%;

}

.auction-item-7 .auction-inner .auction-content {

width: 495px;

padding: 15px 20px;

align-self: center;

}

.auction-item-7 .auction-inner .auction-content .title-area {

padding: 0 0 15px;

}

.auction-item-7 .auction-inner .auction-content .title-area .title {

margin: 0;

line-height: 28px;

font-size: 20px;

margin-bottom: 10px;

}

.auction-item-7 .auction-inner .auction-content .title-area .title a {

display: -webkit-box;

-webkit-line-clamp: 1;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-7 .auction-inner .auction-content .title-area .list-area {

margin: -5px -20px 9px;

font-size: 16px;

}

@media (max-width: 991px) {

.auction-item-7 .auction-inner .auction-content .title-area .list-area {

font-size: 14px;

}

}

.auction-item-7 .auction-inner .auction-content .title-area .list-area .list-item {

padding: 5px 20px;

color: #52606d;

border-right: 1px solid #bfbee8;

display: inline-block;

line-height: 1;

max-width: 50%;

}

.auction-item-7 .auction-inner .auction-content .title-area .list-area .list-item:last-child {

border: none;

}

.auction-item-7 .auction-inner .auction-content .title-area .list-area .list-item .list-id {

color: #171d1c;

font-family: "Roboto", sans-serif;

font-weight: 500;

}

.auction-item-7 .auction-inner .auction-content .title-area .list-area .list-item .list-id::after {

content: " : ";

}

.auction-item-7 .auction-inner .auction-content .title-area .item-feature {

margin: 0 -10px;

}

.auction-item-7 .auction-inner .auction-content .title-area .item-feature span {

padding: 0 12px 0 10px;

margin-bottom: 5px;

font-size: 14px;

position: relative;

}

.auction-item-7 .auction-inner .auction-content .title-area .item-feature span::after {

content: "|";

font-size: 12px;

position: absolute;

right: 0;

top: 0;

line-height: 1;

}

.auction-item-7 .auction-inner .auction-content .title-area .item-feature span:last-child::after {

display: none;

}

.auction-item-7 .auction-inner .auction-content .bid-area {

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount {

padding: 12px 10px;

align-items: center;

max-width: 50%;

width: 185px;

position: relative;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon {

max-width: 30px;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon {

max-width: 25px;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon i {

font-size: 30px;

}

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content {

padding-left: 15px;

max-width: calc(100% - 30px);

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content {

max-width: calc(100% - 25px);

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount::before {

width: 1px;

right: 0;

bottom: 15px;

top: 15px;

background: #bfbee8;

}

@media (min-width: 1200px) {

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even) {

padding-left: 30px;

}

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even)::before {

display: none;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even) .icon i,

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount:nth-child(even) .amount-content .current {

color: #ee4730;

}

@media (max-width: 1199px) and (min-width: 992px) {

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount {

padding: 12px 5px;

}

}

@media screen and (max-width: 450px) {

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount {

padding: 12px 0;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon {

width: 25px;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .icon i {

font-size: 30px;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-7 .auction-inner .auction-content .bid-area .bid-inner .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-7 .auction-inner .auction-content .bid-count-area {

margin: -5px -20px;

margin-top: 15px;

font-size: 16px;

align-items: center;

}

@media (max-width: 991px) {

.auction-item-7 .auction-inner .auction-content .bid-count-area {

font-size: 14px;

}

}

.auction-item-7 .auction-inner .auction-content .bid-count-area .item {

padding: 5px 20px;

color: #43b055;

border-right: 1px solid #bfbee8;

display: inline-block;

line-height: 1;

max-width: 50%;

}

.auction-item-7 .auction-inner .auction-content .bid-count-area .item:last-child {

border: none;

}

.auction-item-7 .auction-inner .auction-content .bid-count-area .item .left {

color: #171d1c;

}

.auction-item-7 .auction-inner .auction-content .bid-count-area .item .left::after {

content: " : ";

}

.auction-item-7 .auction-inner .auction-bidding {

border-radius: 4px;

background-color: rgba(214, 213, 243, 0.302);

padding: 30px 15px;

width: calc(100% - 350px - 495px);

text-align: center;

}

.auction-item-7 .auction-inner .auction-bidding .bid-title {

color: #3f22b3;

font-family: "Roboto", sans-serif;

font-weight: 500;

}

.auction-item-7 .auction-inner .auction-bidding .countdown {

margin-bottom: 30px;

}

.auction-item-7 .auction-inner .auction-bidding .bid-incr {

margin-bottom: 25px;

}

.auction-item-7 .auction-inner .auction-bidding .bid-incr .title {

margin-bottom: 18px;

display: block;

}

.auction-item-7 .auction-inner .auction-bidding .custom-button {

text-transform: capitalize;

font-size: 16px;

}

@media (max-width: 1199px) {

.auction-item-7 .auction-inner .auction-thumb {

width: 250px;

}

.auction-item-7 .auction-inner .auction-content {

width: 410px;

}

.auction-item-7 .auction-inner .auction-bidding {

width: calc(100% - 260px - 400px);

}

}

@media (max-width: 991px) {

.auction-item-7 {

width: 50%;

}

.auction-item-7 .auction-inner {

padding: 10px;

}

.auction-item-7 .auction-inner .auction-thumb, .auction-item-7 .auction-inner .auction-content, .auction-item-7 .auction-inner .auction-bidding {

width: 100%;

}

.auction-item-7 .auction-inner .auction-thumb {

border-radius: 4px;

}

.auction-item-7 .auction-inner .auction-content {

padding: 25px 0 30px;

}

.auction-item-7 .auction-inner .auction-content .title-area .title {

margin-bottom: 5px;

}

.auction-item-7 .auction-inner .auction-bidding .custom-button {

font-size: 14px;

}

.auction-item-7 .auction-inner .auction-bidding .countdown {

margin-bottom: 15px;

}

.auction-item-7 .auction-inner .auction-bidding .bid-incr {

margin-bottom: 15px;

}

}

@media (max-width: 767px) {

.auction-item-7 {

width: 100%;

}

}

@media screen and (max-width: 767px) and (min-width: 426px) {

.auction-item-7 {

text-align: center;

}

.auction-item-7 .title-area .list-area {

justify-content: center;

margin: -5px -15px;

}

.auction-item-7 .bid-area .bid-inner {

justify-content: center;

}

.auction-item-7 .bid-count-area {

justify-content: center;

margin: -5px -15px;

}

}

@media screen and (max-width: 425px) {

.auction-item-7 .auction-inner .auction-content {

padding: 20px 0;

}

.auction-item-7 .auction-inner .auction-content .title-area {

padding-bottom: 20px;

}

.auction-item-7 .auction-inner .auction-content .title-area .title {

margin-bottom: 12px;

}

.auction-item-7 .auction-inner .auction-content .title-area .list-area .list-item {

width: 100%;

max-width: 100%;

border: none;

}

.auction-item-7 .auction-inner .auction-content .bid-count-area .item {

width: 100%;

max-width: 100%;

border: none;

}

}

.upcoming-badge-2 {

width: 34px;

height: 60px;

background: #43b055;

color: #ffffff;

line-height: 74px;

text-align: center;

-webkit-border-radius: 0 0 17px 17px;

-moz-border-radius: 0 0 17px 17px;

border-radius: 0 0 17px 17px;

position: absolute;

left: 30px;

top: 0;

z-index: 1;

}

.upcoming-badge-2:hover {

color: #ffffff;

}

/*Trending Auction Starts Here*/

.auction-item-6 {

margin-bottom: 30px;

}

.auction-item-6 .auction-inner {

padding: 10px;

border-radius: 10px;

background-color: white;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

overflow: hidden;

position: relative;

}

.auction-item-6 .auction-inner .auction-thumb {

position: relative;

border-radius: 10px;

overflow: hidden;

background-color: #f6f6ff;

justify-content: center;

align-items: center;

width: 325px;

}

.auction-item-6 .auction-inner .auction-thumb .rating {

color: #ff7800;

position: absolute;

top: 20px;

right: 20px;

}

.auction-item-6 .auction-inner .auction-thumb .bid {

width: 40px;

height: 40px;

color: #ffffff;

line-height: 40px;

font-size: 18px;

position: absolute;

bottom: 20px;

right: 20px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

text-align: center;

background: -moz-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -webkit-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

background: -ms-linear-gradient(135deg, #b122e6 0%, #ff63de 100%);

box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.13);

}

.auction-item-6 .auction-inner .auction-thumb img {

width: 100%;

}

.auction-item-6 .auction-inner .auction-content {

width: calc(100% - 245px - 325px);

padding: 10px 30px;

}

.auction-item-6 .auction-inner .auction-content .title {

margin: 0;

padding-bottom: 10px;

border-bottom: 1px solid #bccaea;

}

.auction-item-6 .auction-inner .auction-content .title a {

display: -webkit-box;

-webkit-line-clamp: 1;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-6 .auction-inner .auction-content .item-information {

padding-top: 17px;

margin-bottom: -10px;

}

.auction-item-6 .auction-inner .auction-content .item-information ul {

width: 50%;

}

.auction-item-6 .auction-inner .auction-content .item-information ul li {

padding: 0;

color: #171d1c;

margin-bottom: 5px;

font-size: 16px;

}

.auction-item-6 .auction-inner .auction-content .item-information ul li span {

color: #717185;

}

.auction-item-6 .auction-inner .auction-content .item-information ul li span::after {

content: ":";

margin: 0 5px;

display: inline-block;

}

.auction-item-6 .auction-inner .auction-content .item-information ul:nth-child(even) {

padding-left: 30px;

}

.auction-item-6 .auction-inner .auction-bidding {

border-radius: 10px;

background-color: rgba(214, 213, 243, 0.302);

padding: 25px 15px;

width: 245px;

text-align: center;

}

.auction-item-6 .auction-inner .auction-bidding .bid-title {

color: #3f22b3;

font-family: "Roboto", sans-serif;

font-weight: 500;

}

.auction-item-6 .auction-inner .auction-bidding .countdown {

margin-bottom: 15px;

}

.auction-item-6 .auction-inner .auction-bidding .bid-amount {

padding: 12px 20px;

justify-content: center;

align-items: center;

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

}

.auction-item-6 .auction-inner .auction-bidding .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

.auction-item-6 .auction-inner .auction-bidding .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-6 .auction-inner .auction-bidding .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-6 .auction-inner .auction-bidding .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

.auction-item-6 .auction-inner .auction-bidding .bids-area {

padding: 15px 0;

font-size: 16px;

}

.auction-item-6 .auction-inner .auction-bidding .bids-area .total-bids {

color: #43b055;

}

.auction-item-6 .auction-inner .auction-bidding .custom-button {

text-transform: capitalize;

font-size: 16px;

}

@media (max-width: 1199px) {

.auction-item-6 .auction-inner .auction-thumb {

width: 220px;

}

.auction-item-6 .auction-inner .auction-content {

width: calc(100% - 220px - 220px);

}

.auction-item-6 .auction-inner .auction-content .item-information ul:nth-child(even) {

padding-left: 20px;

}

.auction-item-6 .auction-inner .auction-bidding {

width: 220px;

}

}

@media (max-width: 991px) {

.auction-item-6 .auction-inner .auction-thumb, .auction-item-6 .auction-inner .auction-content, .auction-item-6 .auction-inner .auction-bidding {

width: 100%;

}

.auction-item-6 .auction-inner .auction-content {

padding: 30px 0;

text-align: center;

}

.auction-item-6 .auction-inner .auction-content .title {

padding-bottom: 15px;

}

.auction-item-6 .auction-inner .auction-content .item-information ul {

width: 100%;

padding-left: 0;

}

.auction-item-6 .auction-inner .auction-content .item-information ul:nth-child(even) {

padding-left: 0;

}

.auction-item-6 .auction-inner .auction-bidding .custom-button {

font-size: 14px;

}

.auction-item-6 .auction-inner .auction-bidding .countdown {

margin-bottom: 15px;

}

}

@media screen and (max-width: 425px) {

.auction-item-6 .auction-inner .auction-content {

padding: 15px 0 25px;

}

}

/*Fetured Auction Section Starts Here*/

.auction-item-8 {

border-radius: 10px;

background-color: #ffffff;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

margin: 0 auto 30px;

}

@media (max-width: 575px) {

.auction-item-8 {

max-width: 350px;

}

}

.auction-item-8 .auction-thumb .countdown-area {

width: 94px;

margin-bottom: -5px;

}

.auction-item-8 .auction-thumb .countdown-area .countdown {

width: 34px;

height: 143px;

color: #ffffff;

-webkit-border-radius: 0 0 17px 17px;

-moz-border-radius: 0 0 17px 17px;

border-radius: 0 0 17px 17px;

margin: 0 auto 15px;

box-shadow: 0px 7px 16px 0px rgba(31, 30, 72, 0.26);

position: relative;

text-shadow: 0px 5px 3px rgba(245, 49, 127, 0.2);

background-clip: unset;

-webkit-background-clip: unset;

-webkit-text-fill-color: unset;

background: #43b055;

}

.auction-item-8 .auction-thumb .countdown-area .countdown::after, .auction-item-8 .auction-thumb .countdown-area .countdown::before {

position: absolute;

content: " : ";

left: 50%;

-webkit-transform: translateX(-50%);

-ms-transform: translateX(-50%);

transform: translateX(-50%);

}

.auction-item-8 .auction-thumb .countdown-area .countdown::after {

top: 30px;

}

.auction-item-8 .auction-thumb .countdown-area .countdown::before {

top: 75px;

}

.auction-item-8 .auction-thumb .countdown-area .countdown .count-item {

background: transparent;

color: #fff;

text-shadow: none;

text-align: center;

font-size: 14px;

line-height: 45px;

}

.auction-item-8 .auction-thumb .countdown-area .bid, .auction-item-8 .auction-thumb .countdown-area .rating {

margin: 0 auto 15px;

width: 34px;

height: 34px;

line-height: 34px;

text-align: center;

color: #43b055;

box-shadow: 0px 7px 16px 0px rgba(31, 30, 72, 0.26);

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

display: block;

}

.auction-item-8 .auction-thumb .thumb-area {

width: calc(100% - 94px);

-webkit-border-radius: 0 10px 0 0;

-moz-border-radius: 0 10px 0 0;

border-radius: 0 10px 0 0;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-8 .auction-thumb .countdown-area {

width: 70px;

}

.auction-item-8 .auction-thumb .thumb-area {

width: calc(100% - 70px);

}

}

@media screen and (max-width: 399px) {

.auction-item-8 .auction-thumb .countdown-area {

width: 70px;

}

.auction-item-8 .auction-thumb .thumb-area {

width: calc(100% - 70px);

}

}

.auction-item-8 .auction-content {

padding: 0 10px 30px;

}

.auction-item-8 .auction-content .title-area {

padding: 25px 0 16px;

}

.auction-item-8 .auction-content .title-area .title {

margin: 0;

line-height: 28px;

font-size: 20px;

}

.auction-item-8 .auction-content .title-area .title a {

display: -webkit-box;

-webkit-line-clamp: 2;

-webkit-box-orient: vertical;

text-overflow: ellipsis;

overflow: hidden;

}

.auction-item-8 .auction-content .title-area .item-feature {

margin: 0 -10px;

}

.auction-item-8 .auction-content .title-area .item-feature span {

padding: 0 12px 0 10px;

margin-bottom: 5px;

font-size: 14px;

position: relative;

}

.auction-item-8 .auction-content .title-area .item-feature span::after {

content: "|";

font-size: 12px;

position: absolute;

right: 0;

top: 0;

line-height: 1;

}

.auction-item-8 .auction-content .title-area .item-feature span:last-child::after {

display: none;

}

.auction-item-8 .auction-content .custom-button {

width: 100%;

max-width: 230px;

text-align: center;

}

.auction-item-8 .auction-content .bid-area .bid-amount {

padding: 12px 10px;

align-items: center;

border-bottom: 2px dotted #deddf5;

border-top: 2px dotted #deddf5;

width: 50%;

justify-content: center;

position: relative;

}

.auction-item-8 .auction-content .bid-area .bid-amount .icon {

max-width: 30px;

}

.auction-item-8 .auction-content .bid-area .bid-amount .icon i {

line-height: 1;

font-size: 36px;

color: #43b055;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-8 .auction-content .bid-area .bid-amount .icon {

max-width: 25px;

}

.auction-item-8 .auction-content .bid-area .bid-amount .icon i {

font-size: 30px;

}

}

.auction-item-8 .auction-content .bid-area .bid-amount .amount-content {

padding-left: 15px;

max-width: calc(100% - 30px);

}

.auction-item-8 .auction-content .bid-area .bid-amount .amount-content .current {

font-size: 14px;

color: #43b055;

line-height: 20px;

margin-bottom: 5px;

}

.auction-item-8 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 20px;

line-height: 20px;

color: #171d1c;

}

@media (min-width: 992px) and (max-width: 1199px) {

.auction-item-8 .auction-content .bid-area .bid-amount .amount-content {

max-width: calc(100% - 25px);

}

.auction-item-8 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-8 .auction-content .bid-area .bid-amount::before {

width: 1px;

right: 0;

bottom: 15px;

top: 15px;

background: #bfbee8;

}

.auction-item-8 .auction-content .bid-area .bid-amount:nth-child(even)::before {

display: none;

}

.auction-item-8 .auction-content .bid-area .bid-amount:nth-child(even) .icon i,

.auction-item-8 .auction-content .bid-area .bid-amount:nth-child(even) .amount-content .current {

color: #ee4730;

}

@media (max-width: 1199px) and (min-width: 992px) {

.auction-item-8 .auction-content .bid-area .bid-amount {

padding: 12px 5px;

}

}

@media screen and (max-width: 450px) {

.auction-item-8 .auction-content .bid-area .bid-amount {

padding: 12px 0;

}

.auction-item-8 .auction-content .bid-area .bid-amount .icon {

width: 25px;

}

.auction-item-8 .auction-content .bid-area .bid-amount .icon i {

font-size: 30px;

}

.auction-item-8 .auction-content .bid-area .bid-amount .amount-content {

padding-left: 15px;

}

.auction-item-8 .auction-content .bid-area .bid-amount .amount-content .amount {

font-size: 18px;

}

}

.auction-item-8 .auction-content .bid-count-area {

margin: -5px -20px 25px;

margin-top: 15px;

font-size: 14px;

align-items: center;

}

.auction-item-8 .auction-content .bid-count-area .item {

padding: 5px 20px;

color: #43b055;

border-right: 1px solid #bfbee8;

display: inline-block;

line-height: 1;

max-width: 50%;

}

.auction-item-8 .auction-content .bid-count-area .item:last-child {

border: none;

}

.auction-item-8 .auction-content .bid-count-area .item .left {

color: #171d1c;

}

.auction-item-8 .auction-content .bid-count-area .item .left::after {

content: " : ";

}

.auction-item-8 .auction-content .bid-count-area .bid-count-area {

justify-content: center;

margin: -5px -15px 25px;

}

@media screen and (max-width: 425px) {

.auction-item-8 .auction-content .bid-count-area .item {

width: 100%;

max-width: 100%;

border: none;

}

}

/*Team Section Starts Here*/

.team-item {

max-width: 220px;

margin: 0 auto 30px;

padding: 0 15px;

}

.team-item .team-inner {

position: relative;

padding: 0 10px;

}

.team-item .team-inner::before {

top: 60px;

right: 0;

left: 0;

bottom: 0;

border-radius: 10px;

background: #ffffff;

box-shadow: 1.753px 3.595px 10px 0px rgba(44, 46, 69, 0.09);

}

.team-item .team-inner * {

position: relative;

z-index: 1;

}

.team-item .team-inner .team-thumb {

-webkit-border-radius: 5px;

-moz-border-radius: 5px;

border-radius: 5px;

overflow: hidden;

}

.team-item .team-inner .team-thumb a {

display: block;

}

.team-item .team-inner .team-thumb img {

width: 100%;

}

.team-item .team-inner .team-content {

padding: 15px 10px 5px;

text-align: center;

}

.team-item .team-inner .team-content .social {

justify-content: center;

}

.team-item .team-inner .team-content .social li {

padding: 2px;

}

.team-item .team-inner .team-content .social li a {

color: #52606d;

padding: 5px;

font-size: 16px;

line-height: 1;

}

.team-item .team-inner .team-content .social li a:hover {

color: #ee4730;

}

.team-item .team-inner .team-content .social li:nth-child(even) a {

color: #ee4730;

}

/*Overview Section Starts Here*/

.expert-item {

text-align: center;

margin-bottom: 40px;

}

.expert-item .thumb {

height: 47px;

margin: 0 0 38px;

}

.expert-item .thumb img {

max-height: 66px;

}

.expert-item .content .title {

font-size: 18px;

text-transform: capitalize;

}

@media (min-width: 992px) {

.overview-content {

max-width: 585px;

margin-left: auto;

padding-left: 30px;

}

}

/*Counter Section Starts Here*/

.counter-item {

text-align: center;

padding: 28px 30px 30px;

border: 1px solid rgba(181, 156, 228, 0.5);

border-radius: 10px;

margin-bottom: 30px;

}

.counter-item .counter-header {

margin: 0;

justify-content: center;

}

.counter-item .counter-header .title {

margin-bottom: 20px;

}

/*About Section Starts Here*/

.about-content {

position: relative;

z-index: 1;

}

.about-content .subtitle {

text-transform: uppercase;

margin-bottom: 19px;

}

.about-content .title {

font-weight: 700;

text-transform: uppercase;

margin-bottom: 19px;

}

.about-content .title span {

color: #ee4730;

margin-bottom: 10px;

}

.about-content p {

color: #171d1c;

}

.about-content .item-area {

margin: 0 -15px -20px;

max-width: 440px;

}

.about-content .item-area .item {

flex-grow: 1;

padding: 0 15px 20px;

text-align: center;

}

@media (min-width: 576px) {

.about-content .item-area .item {

max-width: 250px;

}

}

.about-content .item-area .item .thumb {

margin-bottom: 20px;

}

.about-content .item-area .item .thumb img {

max-width: 100%;

}

.about-content .item-area .item p {

text-transform: uppercase;

color: #171d1c;

}

.about-wrapper {

padding-left: 30px;

padding-right: 30px;

padding-bottom: 50px;

border-radius: 10px;

background: #ffffff;

box-shadow: 0 0 15px rgba(44, 46, 69, 0.15);

position: relative;

}

@media (max-width: 575px) {

.about-wrapper {

padding-left: 15px;

padding-right: 15px;

}

}

@media (max-width: 991px) {

.about-wrapper {

padding-top: 50px;

}

}

.about-thumb {

position: absolute;

right: 0;

top: 0;

top: 50px;

bottom: 50px;

right: 30px;

}

@media (max-width: 991px) {

.about-thumb {

display: none;

}

}

.about-thumb img {

width: unset !important;

height: 100%;

}

.mt--100 {

margin-top: -100px;

}

.mt--240 {

margin-top: -240px;

}

@media (min-width: 992px) {

.mt-lg--440 {

margin-top: -440px;

}

}

/*Account Section Starts Here*/

.login-with {

margin: -15px;

margin-bottom: 20px;

}

.login-with li {

flex-grow: 1;

padding: 15px;

}

.login-with li a {

align-items: center;

padding: 12px 15px;

border: 1px solid rgba(97, 90, 191, 0.2);

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

border-radius: 10px;

justify-content: center;

color: #171d1c;

}

.login-with li a i {

margin-right: 7px;

}

.login-with li a i[class*="facebook"] {

color: #3b5998;

}

.login-with li a i[class*="google"] {

color: #dd4b39;

}

.login-with li a:hover {

background: #ee4730;

color: #ffffff;

}

.login-with li a:hover i {

color: #ffffff;

}

.or {

position: relative;

margin-bottom: 20px;

text-align: center;

}

.or::before {

left: 0;

top: 50%;

height: 1px;

width: 100%;

background: rgba(97, 90, 191, 0.2);

}

.or span {

display: inline-block;

padding: 0 25px;

background: #ffffff;

position: relative;

color: #171d1c;

z-index: 1;

}

.account-wrapper {

position: relative;

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

border-radius: 10px;

background: #ffffff;

box-shadow: 0 0 15px rgba(44, 46, 69, 0.11);

}

.account-wrapper .left-side {

padding: 60px 30px 60px 60px;

width: calc(100% - 350px);

}

.account-wrapper .right-side {

background: -moz-linear-gradient(90deg, #5140fe 0%, #7757f7 56%, #9d6ef0 100%);

background: -webkit-linear-gradient(90deg, #5140fe 0%, #7757f7 56%, #9d6ef0 100%);

background: -ms-linear-gradient(90deg, #5140fe 0%, #7757f7 56%, #9d6ef0 100%);

justify-content: center;

align-items: center;

width: 350px;

padding: 60px 30px;

-webkit-border-radius: 0 10px 10px 0;

-moz-border-radius: 0 10px 10px 0;

border-radius: 0 10px 10px 0;

}

.account-wrapper .right-side .custom-button {

border: 1px solid rgba(255, 255, 255, 0.3);

font-weight: 400;

}

@media (max-width: 1199px) {

.account-wrapper .left-side {

padding-left: 30px;

}

}

@media (max-width: 991px) {

.account-wrapper .left-side, .account-wrapper .right-side {

width: 100%;

}

.account-wrapper .right-side {

-webkit-border-radius: 0 0 10px 10px;

-moz-border-radius: 0 0 10px 10px;

border-radius: 0 0 10px 10px;

}

}

@media (max-width: 575px) {

.account-wrapper .left-side, .account-wrapper .right-side {

padding-left: 15px;

padding-right: 15px;

}

}

.login-form .form-group {

position: relative;

font-size: 16px;

text-align: center;

}

.login-form .form-group .pass-type {

right: 30px;

top: 50%;

-webkit-transform: translateY(-50%);

-ms-transform: translateY(-50%);

transform: translateY(-50%);

position: absolute;

cursor: pointer;

}

.login-form .form-group input {

height: 50px;

border: 1px solid rgba(97, 90, 191, 0.2);

background: #ffffff;

padding: 0 75px;

}

.login-form .form-group label {

position: absolute;

left: 30px;

top: 50%;

-webkit-transform: translateY(-50%);

-ms-transform: translateY(-50%);

transform: translateY(-50%);

color: #52606d;

}

.login-form .form-group a {

color: #52606d;

}

.login-form .form-group .custom-button {

font-size: 16px;

height: 50px;

padding: 0 50px;

}

.login-form .form-group.checkgroup {

align-items: center;

text-align: left;

}

.login-form .form-group.checkgroup input {

width: 14px;

height: 14px;

}

.login-form .form-group.checkgroup label {

font-size: 14px;

margin: 0;

margin-top: 2px;

line-height: 1.3;

color: #171d1c;

width: calc(100% - 14px);

}

@media (max-width: 575px) {

.login-form .form-group input {

padding: 0 30px 0 30px;

}

.login-form .form-group label {

left: 10px;

}

.login-form .form-group .pass-type {

right: 10px;

}

}

/*Contact Section Starts Here*/

.contact-wrapper {

position: relative;

background: #ffffff;

background-color: #ffffff;

box-shadow: 0px 6px 18px 0px rgba(16, 5, 54, 0.17);

padding-left: 40px;

}

@media (max-width: 991px) {

.contact-wrapper {

padding-right: 40px;

}

}

@media (max-width: 575px) {

.contact-wrapper {

padding-left: 15px;

padding-right: 15px;

}

}

.contact-form .form-group {

position: relative;

margin-bottom: 30px;

}

.contact-form .form-group input {

height: 60px;

padding: 0 50px;

background: transparent;

border: none;

border-bottom: 1px solid #bccaea;

-webkit-border-radius: 0;

-moz-border-radius: 0;

border-radius: 0;

}

.contact-form .form-group input:focus {

border-bottom: 1px solid #3f22b3;

}

.contact-form .form-group label {

position: absolute;

left: 0;

width: 30px;

height: 30px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

background: -moz-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -webkit-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -ms-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

box-shadow: 0px 3px 5px 0px rgba(162, 44, 202, 0.3);

color: #ffffff;

top: 15px;

text-align: center;

font-size: 14px;

}

.contact-form .form-group label.message {

top: 0;

}

.contact-form .form-group textarea {

padding: 5px 50px 0;

background: transparent;

border: none;

border-bottom: 1px solid #bccaea;

-webkit-border-radius: 0;

-moz-border-radius: 0;

border-radius: 0;

}

.contact-form .form-group textarea:focus {

border-bottom: 1px solid #3f22b3;

}

.contact-form .form-group .custom-button {

font-size: 16px;

height: 50px;

padding: 0 50px;

}

@media (max-width: 575px) {

.contact-form .form-group input {

padding: 0 0 0 40px;

}

.contact-form .form-group textarea {

padding: 5px 0 5px 40px;

}

}

/*Error Section Starts Here*/

.error-section {

min-height: 100vh;

justify-content: center;

align-items: center;

}

.error-wrapper {

max-width: 705px;

margin: 0 auto;

text-align: center;

}

.error-wrapper .error-thumb {

margin-bottom: 50px;

}

.error-wrapper .error-thumb img {

max-width: 100%;

}

.error-wrapper .title {

color: #171d1c;

}

.error-wrapper .title a {

color: #ee4730;

}

/*Faq Section Menu Starts Here*/

.sticky-menu {

position: sticky;

top: 120px;

}

.faq-menu {

padding: 60px 30px;

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;

}

.faq-menu ul li a {

padding: 8px 0;

color: #ffffff;

position: relative;

}

.faq-menu ul li a::before {

position: absolute;

content: "\f105";

font-family: "Font Awesome 5 Free";

font-weight: 600;

left: 12px;

top: 10px;

opacity: 0;

}

.faq-menu ul li a:hover, .faq-menu ul li a.active {

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

border-radius: 10px;

background: rgba(255, 255, 255, 0.2);

padding-left: 30px;

}

.faq-menu ul li a:hover::before, .faq-menu ul li a.active::before {

opacity: 1;

}

@media (max-width: 575px) {

.faq-menu {

padding: 40px 30px;

}

}

@media (max-width: 991px) {

.faq-menu {

max-width: 400px;

margin: 0 auto 30px;

}

}

.faq-video {

padding: 10px;

background: #ffffff;

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;

text-align: center;

box-shadow: 0px 9px 43px 0px rgba(16, 5, 54, 0.27);

}

@media (max-width: 991px) {

.faq-video {

max-width: 400px;

margin: 0 auto;

}

}

.faq-video .video-area {

-webkit-border-radius: 20px;

-moz-border-radius: 20px;

border-radius: 20px;

position: relative;

display: block;

overflow: hidden;

}

.faq-video .video-area img {

width: 100%;

}

.faq-video .video-area .video-button-2 i {

background: #3f22b3;

border-color: #3f22b3;

}

.faq-video .title {

margin: 0;

padding: 20px 0 10px;

}

.mt-70 {

margin-top: 70px;

}

.video-button-2 {

width: 280px;

height: 280px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

justify-content: center;

overflow: hidden;

align-items: center;

}

@media screen and (max-width: 400px) {

.video-button-2 {

width: 140px;

height: 140px;

}

}

.video-button-2 span {

display: block;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

width: 50px;

height: 50px;

}

.video-button-2 span::after, .video-button-2 span::before {

width: 100%;

height: 100%;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

border: .1px solid #5bc4e1;

animation: videoTwo 8s linear infinite;

-webkit-animation: videoTwo 8s linear infinite;

-moz-animation: videoTwo 8s linear infinite;

}

.video-button-2 span:nth-child(1)::after {

animation-delay: 1s;

-webkit-animation-delay: 1s;

-moz-animation-delay: 1s;

}

.video-button-2 span:nth-child(2)::after {

animation-delay: 2s;

-webkit-animation-delay: 2s;

-moz-animation-delay: 2s;

}

.video-button-2 span:nth-child(3)::after {

animation-delay: 3s;

-webkit-animation-delay: 3s;

-moz-animation-delay: 3s;

}

.video-button-2 span:nth-child(4)::after {

animation-delay: 4s;

-webkit-animation-delay: 4s;

-moz-animation-delay: 4s;

}

.video-button-2 span:nth-child(1)::before {

animation-delay: 5s;

-webkit-animation-delay: 5s;

-moz-animation-delay: 5s;

}

.video-button-2 span:nth-child(2)::before {

animation-delay: 6s;

-webkit-animation-delay: 6s;

-moz-animation-delay: 6s;

}

.video-button-2 span:nth-child(3)::before {

animation-delay: 7s;

-webkit-animation-delay: 7s;

-moz-animation-delay: 7s;

}

.video-button-2 i {

width: 50px;

height: 50px;

line-height: 40px;

text-align: center;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

display: block;

background: #2573d5;

color: #ffffff;

border: 5px solid #72a2dd;

}

@keyframes videoTwo {

0% {

-webkit-transform: translate(-50%, -50%) scale(1);

-ms-transform: translate(-50%, -50%) scale(1);

transform: translate(-50%, -50%) scale(1);

opacity: 1;

}

100% {

-webkit-transform: translate(-50%, -50%) scale(5);

-ms-transform: translate(-50%, -50%) scale(5);

transform: translate(-50%, -50%) scale(5);

opacity: 0;

}

}

@-webkit-keyframes videoTwo {

0% {

-webkit-transform: translate(-50%, -50%) scale(1);

-ms-transform: translate(-50%, -50%) scale(1);

transform: translate(-50%, -50%) scale(1);

opacity: 1;

}

100% {

-webkit-transform: translate(-50%, -50%) scale(5);

-ms-transform: translate(-50%, -50%) scale(5);

transform: translate(-50%, -50%) scale(5);

opacity: 0;

}

}

@-o-keyframes videoTwo {

0% {

-webkit-transform: translate(-50%, -50%) scale(1);

-ms-transform: translate(-50%, -50%) scale(1);

transform: translate(-50%, -50%) scale(1);

opacity: 1;

}

100% {

-webkit-transform: translate(-50%, -50%) scale(5);

-ms-transform: translate(-50%, -50%) scale(5);

transform: translate(-50%, -50%) scale(5);

opacity: 0;

}

}

.faq-area {

background: #ffffff;

border-radius: 10px;

position: relative;

}

.faq-area .faq-wrapper {

padding-left: 30px;

padding-right: 30px;

max-width: 790px;

margin: -20px auto 0;

}

@media (max-width: 767px) {

.faq-area .faq-wrapper {

padding: 0 15px;

}

}

.faq-area::before {

position: absolute;

content: "";

top: 0;

left: 0;

right: 0;

bottom: 50%;

box-shadow: 52.739px -211.524px 70px 0px rgba(44, 46, 69, 0.05), 11.273px -80.212px 70px 0px rgba(44, 46, 69, 0.06);

}

.faq-area * {

position: relative;

z-index: 1;

}

.faq-item {

padding: 0 30px;

border-radius: 10px;

background-color: #ebf2ff;

border: 1px solid rgba(101, 93, 202, 0.3);

box-shadow: -2.316px 18.858px 10px 0px rgba(26, 18, 65, 0.05);

margin-bottom: 20px;

}

.faq-item:last-child {

margin-bottom: 0;

}

.faq-item .faq-title {

cursor: pointer;

padding: 20px 0;

position: relative;

align-items: center;

}

.faq-item .faq-title img {

width: 40px;

}

.faq-item .faq-title .title {

align-self: center;

display: block;

width: calc(100% - 40px);

padding-right: 50px;

padding-left: 20px;

font-size: 20px;

color: #323636;

line-height: 28px;

font-family: "Roboto", sans-serif;

}

.faq-item .faq-title .right-icon {

border-radius: 50%;

background: -moz-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -webkit-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -ms-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

width: 40px;

height: 40px;

line-height: 40px;

top: 50%;

-webkit-transform: translateY(-50%);

-ms-transform: translateY(-50%);

transform: translateY(-50%);

right: 0;

position: absolute;

}

.faq-item .faq-title .right-icon::after, .faq-item .faq-title .right-icon::before {

position: absolute;

content: '';

background: #ffffff;

top: 50%;

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

left: 50%;

-webkit-transform: translate(-50%, -50%);

-ms-transform: translate(-50%, -50%);

transform: translate(-50%, -50%);

}

.faq-item .faq-title .right-icon::before {

width: 2px;

height: 20px;

}

.faq-item .faq-title .right-icon::after {

width: 20px;

height: 2px;

}

.faq-item .faq-content {

padding: 30px 0;

border-top: 1px solid rgba(101, 93, 202, 0.3);

display: none;

}

.faq-item .faq-content p {

font-size: 16px;

color: #323636;

}

.faq-item.active .faq-content {

display: block;

}

.faq-item.open .faq-title .title {

color: #ee4730;

}

.faq-item.open .faq-title .right-icon::before {

-webkit-transform: translate(-50%, -50%) rotate(90deg);

-ms-transform: translate(-50%, -50%) rotate(90deg);

transform: translate(-50%, -50%) rotate(90deg);

}

@media (max-width: 767px) {

.faq-item {

padding: 0 15px;

}

}

@media screen and (max-width: 499px) {

.faq-item .faq-title {

padding-bottom: 10px;

}

.faq-item .faq-title .right-icon {

width: 30px;

height: 30px;

line-height: 30px;

font-size: 14px;

}

.faq-item .faq-title .right-icon::after {

width: 15px;

}

.faq-item .faq-title .right-icon::before {

height: 15px;

}

.faq-item .faq-title .title {

width: 100%;

padding-left: 0;

padding-right: 40px;

font-size: 18px;

font-weight: 500;

}

.faq-item .faq-title img {

display: none;

}

}

@media (min-width: 768px) {

.product-details .faq-item .faq-title {

padding: 15px 0;

}

}

.popular-article-item {

padding: 30px 20px;

border-radius: 20px;

box-shadow: 0px 9px 18px 0px rgba(16, 5, 54, 0.17);

background: #ffffff;

position: relative;

margin-bottom: 20px;

}

.popular-article-item .right-con {

position: absolute;

right: 10px;

top: 30px;

width: 24px;

height: 24px;

line-height: 24px;

text-align: center;

font-size: 12px;

box-shadow: 0px 6px 18px 0px rgba(16, 5, 54, 0.17);

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

color: #43b055;

}

.popular-article-item .title {

margin-bottom: 20px;

}

.product-header {

padding: 5px 10px;

border: 1px solid rgba(13, 21, 75, 0.15);

box-shadow: 0px 14px 16px 0px rgba(31, 43, 92, 0.11);

-webkit-border-radius: 5px;

-moz-border-radius: 5px;

border-radius: 5px;

align-items: center;

justify-content: space-between;

}

.product-header .product-header-item {

align-items: center;

justify-content: center;

color: #171d1c;

font-size: 16px;

padding: 10px;

}

.product-header .product-header-item .item {

margin-right: 8px;

}

.product-header .product-header-item .select-bar {

height: 37px;

-webkit-border-radius: 19px;

-moz-border-radius: 19px;

border-radius: 19px;

width: 135px;

padding: 0;

padding-left: 30px;

}

.product-header .product-header-item .select-bar .current {

line-height: 37px;

text-transform: capitalize;

font-size: 16px;

color: #171d1c;

}

.product-header .product-header-item .select-bar::after {

height: 7px;

width: 7px;

border-color: #171d1c;

}

@media (max-width: 991px) {

.product-header > * {

flex-grow: 1;

}

}

@media (min-width: 992px) {

.product-header.style-2 .product-search, .product-header.style-2 .product-header-item {

width: calc((100% - 20px) / 3);

}

}

.product-search {

margin: 10px;

position: relative;

}

@media (min-width: 992px) {

.product-search {

max-width: 240px;

}

}

.product-search input {

height: 100%;

background: transparent;

height: 37px;

-webkit-border-radius: 19px;

-moz-border-radius: 19px;

border-radius: 19px;

border: 1px solid rgba(13, 21, 75, 0.15);

font-size: 14px;

padding-right: 30px;

}

.product-search button {

height: 35px;

width: 35px;

text-align: center;

background: #ffffff;

font-size: 14px;

position: absolute;

right: 1px;

bottom: 1px;

-webkit-border-radius: 19px;

-moz-border-radius: 19px;

border-radius: 19px;

border: none;

}

/*.pagination {

justify-content: center;

margin: -5px;

margin-top: 35px;

}*/

/*.pagination li {

padding: 5px;

}*/

/*.pagination li a {

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

width: 50px;

height: 50px;

line-height: 50px;

text-align: center;

background: #ffffff;

border: 1px solid rgba(234, 234, 234, 0.1);

box-shadow: 0px 15px 30px 0px rgba(119, 123, 146, 0.1);

color: #52606d;

font-weight: 700;

}*/

/*.pagination li a.active, .pagination li a:hover {

color: #ffffff;

background: -moz-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -webkit-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

background: -ms-linear-gradient(166deg, #f22876 0%, #942dd9 100%);

}*/

/*Product Details Section Starts Here*/

.product-bottom-slider {

width: calc(100% - 100px);

margin: 0 auto;

}

@media (max-width: 575px) {

.product-bottom-slider {

width: calc(100% - 90px);

}

}

.slide-bottom-item {

margin: 20px;

border-radius: 20px;

box-shadow: 0px 0px 15px rgba(22, 26, 57, 0.36);

cursor: pointer;

}

@media (max-width: 575px) {

.slide-bottom-item {

margin: 10px;

box-shadow: 0px 0px 5px rgba(22, 26, 57, 0.36);

}

}

.slide-bottom-item .slide-inner {

border-radius: 20px;

overflow: hidden;

}

.slide-bottom-item .slide-inner img {

width: 100%;

}

.slide-top-item {

margin: 15px;

box-shadow: 0px 0px 15px rgba(22, 26, 57, 0.36);

background: #f1f3fd;

border-radius: 20px;

}

.slide-top-item .slide-inner {

overflow: hidden;

border-radius: 20px;

}

.slide-top-item .slide-inner img {

width: 100%;

}

@media (max-width: 575px) {

.slide-top-item {

margin: 10px;

box-shadow: 0px 0px 5px rgba(22, 26, 57, 0.36);

}

}

.product-details-slider-top-wrapper {

margin: -15px;

margin-bottom: 0;

}

@media (max-width: 575px) {

.product-details-slider-top-wrapper {

margin: -10px;

}

}

.det-nav {

width: 40px;

height: 40px;

line-height: 40px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

background-color: #ffffff;

box-shadow: 0px 9px 20px 0px rgba(22, 26, 57, 0.36);

text-align: center;

color: #52606d;

margin-top: -20px;

position: absolute;

top: 50%;

cursor: pointer;

}

.det-nav:hover, .det-nav.active {

color: #ffffff;

background: -moz-linear-gradient(7deg, #ec1379 0%, #6c0092 100%);

background: -webkit-linear-gradient(7deg, #ec1379 0%, #6c0092 100%);

background: -ms-linear-gradient(7deg, #ec1379 0%, #6c0092 100%);

box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.35);

}

.product-details-slider-wrapper {

position: relative;

margin-bottom: -10px;

margin-top: 20px;

}

@media (min-width: 576px) {

.product-details-slider-wrapper {

margin-bottom: -20px;

}

}

.det-prev {

left: 0;

}

.det-next {

right: 0;

}

.product-single-sidebar {

border: 1px solid rgba(101, 93, 202, 0.3);

border-radius: 30px;

padding: 36px 20px 30px;

}

.product-single-sidebar .title {

font-size: 18px;

margin-bottom: 8px;

}

.product-single-sidebar .countdown {

font-size: 24px;

line-height: 1;

padding-bottom: 10px;

border-bottom: 1px solid rgba(101, 93, 202, 0.3);

}

@media (min-width: 576px) {

.product-single-sidebar .countdown {

font-size: 30px;

line-height: 1;

}

}

@media (min-width: 576px) and (min-width: 992px) and (max-width: 1199px) {

.product-single-sidebar .countdown {

font-size: 24px;

}

}

.mt-40-60-80 {

margin-top: 40px;

}

@media (min-width: 576px) {

.mt-40-60-80 {

margin-top: 60px;

}

}

@media (min-width: 768px) {

.mt-40-60-80 {

margin-top: 80px;

}

}

.product-sidebar-area {

text-align: center;

}

@media (max-width: 991px) {

.product-sidebar-area {

margin-top: 50px;

}

}

@media (max-width: 991px) and (max-width: 767px) {

.product-sidebar-area {

margin-top: 40px;

}

}

.product-sidebar-area .cart-link {

color: #007ec3;

text-decoration: underline;

font-size: 16px;

}

.side-counter-area {

margin-bottom: -21px;

padding-top: 22px;

}

@media (max-width: 991px) {

.side-counter-area {

display: flex;

flex-wrap: wrap;

margin-left: -15px;

margin-right: -15px;

justify-content: center;

margin-bottom: -30px;

}

.side-counter-area .side-counter-item {

padding: 0 15px;

margin-bottom: 30px;

flex-grow: 1;

}

}

.side-counter-item {

text-align: left;

align-items: center;

margin: 0 0 18px;

}

.side-counter-item .thumb {

width: 44px;

}

.side-counter-item .content {

width: calc(100% - 44px);

padding-left: 20px;

}

.side-counter-item .content .count-title {

margin: 0 0 5px;

}

.side-counter-item .content p {

font-size: 14px;

}

.product-details-header {

margin-bottom: 21px;

}

.product-details-header ul {

margin: 0 -15px;

}

.product-details-header ul li {

padding: 0 15px;

position: relative;

}

.product-details-header ul li::after {

position: absolute;

content: "";

width: 2px;

height: 14px;

top: 50%;

margin-top: -8px;

right: 0;

background: #bccaea;

}

.product-details-header ul li:last-child::after {

display: none;

}

@media (min-width: 576px) {

.product-details-header .title {

margin-bottom: 13px;

}

}

.price-table {

background: #ebf2ff;

border-radius: 10px;

padding: 40px 30px;

}

.price-table li {

justify-content: space-between;

padding: 0;

margin-bottom: 5px;

}

.price-table li * {

margin: 0;

margin-bottom: 5px;

}

.price-table li:last-child {

margin-bottom: 0;

}

.price-table li.header {

margin-bottom: 20px;

}

.price-table li .price {

color: #43b055;

}

.price-table li .info {

color: #52606d;

}

@media (max-width: 575px) {

.price-table {

padding: 30px 15px;

}

.price-table li.header {

margin-bottom: 0;

}

}

.product-bid-area {

padding: 20px 0;

border-bottom: 1px solid #e0e0f1;

border-top: 1px solid #e0e0f1;

}

.product-bid-form {

align-items: center;

justify-content: space-between;

margin: -15px;

}

.product-bid-form .search-icon {

width: 65px;

height: 65px;

margin: 15px;

}

.product-bid-form .search-icon img {

width: 100%;

}

@media (max-width: 575px) {

.product-bid-form .search-icon {

display: none;

}

}

.product-bid-form button, .product-bid-form input {

margin: 15px;

width: unset;

}

.product-bid-form input {

flex-grow: 1;

height: 50px;

padding: 0px 30px;

-webkit-border-radius: 25px;

-moz-border-radius: 25px;

border-radius: 25px;

border: 1px solid #e0e0f1;

background: transparent;

}

.product-bid-form button.custom-button {

text-transform: capitalize;

height: 50px;

}

@media (max-width: 767px) {

.product-bid-form {

margin: -10px;

}

.product-bid-form button, .product-bid-form input, .product-bid-form .search-icon {

margin: 10px;

}

}

.rating i {

color: #ff7800;

}

.custom-button.border {

border: 1px solid #bccaea;

}

.buy-now-area {

justify-content: space-between;

align-items: center;

padding-top: 15px;

margin: -5px;

}

.buy-now-area > * {

margin: 5px;

margin-top: 15px;

}

.share-area {

align-items: center;

}

.share-area span {

margin-right: 10px;

}

.share-area ul li {

padding: 0 5px;

}

.share-area ul li a {

padding: 5px;

color: #52606d;

}

.share-area ul li a:hover {

color: #ff7800;

}

.mb-40-60 {

margin-bottom: 40px;

}

@media (min-width: 768px) {

.mb-40-60 {

margin-bottom: 60px;

}

}

.tab-details-content .title {

margin: 0;

margin-bottom: 30px;

}

.tab-details-content .item {

margin-bottom: 35px;

}

.tab-details-content .item p {

margin-top: 0;

margin-bottom: 15px;

}

.tab-details-content .item .subtitle {

margin-bottom: 10px;

}

.tab-details-content .item ul {

margin-bottom: 15px;

}

.tab-details-content .item ul:last-child {

margin-bottom: -7px !important;

}

.tab-details-content .item ul li {

padding: 0;

}

@media (min-width: 768px) {

.tab-details-content .item {

margin-bottom: 45px;

}

.tab-details-content .item .title {

margin-bottom: 18px;

}

.tab-details-content .item .subtitle {

margin-bottom: 15px;

}

.tab-details-content .item ul {

margin-bottom: 25px;

}

.tab-details-content .item ul:last-child {

margin-bottom: -7px !important;

}

.tab-details-content .item ul li {

padding: 0;

}

.tab-details-content .item p {

margin-bottom: 25px;

}

}

.tab-details-content .item:last-child {

margin-bottom: 0;

}

.product-info-table {

width: 100%;

max-width: 800px;

border: 1px solid #eaeaea;

}

.product-info-table tbody tr {

width: 50%;

display: flex;

word-wrap: wrap;

font-size: 16px;

}

.product-info-table tbody tr th, .product-info-table tbody tr td {

width: 50%;

display: block;

padding: 10px;

font-weight: 400;

}

.product-info-table tbody tr th {

color: #171d1c;

}

.product-info-table tbody tr td {

padding-left: 20px;

position: relative;

}

.product-info-table tbody tr td::before {

position: absolute;

left: 0;

top: 50%;

-webkit-transform: translateY(-50%);

-ms-transform: translateY(-50%);

transform: translateY(-50%);

content: ":";

}

.product-info-table tbody tr:nth-of-type(4n + 3), .product-info-table tbody tr:nth-of-type(4n + 4) {

background: #ebf2ff;

}

@media (max-width: 767px) {

.product-info-table tbody tr {

width: 100%;

}

.product-info-table tbody tr:nth-of-type(4n + 1), .product-info-table tbody tr:nth-of-type(4n + 3) {

background: #ebf2ff;

}

.product-info-table tbody tr:nth-of-type(4n + 2), .product-info-table tbody tr:nth-of-type(4n + 4) {

background: #fff;

}

}

.product-tab-menu-area {

background: #ebf2ff;

}

.mt-70-100 {

margin-top: 70px;

}

@media (min-width: 992px) {

.mt-70-100 {

margin-top: 100px;

}

}

.product-tab-menu {

border: none;

align-items: stretch;

margin: 0 -15px;

padding: 10px 0;

}

.product-tab-menu li {

padding: 10px 15px;

flex-grow: 1;

align-items: center;

}

.product-tab-menu li a {

display: flex;

align-items: center;

padding: 10px;

border: 1px solid rgba(101, 93, 202, 0.3);

border-radius: 10px;

height: 100%;

width: 100%;

justify-content: center;

}

.product-tab-menu li a.active {

background: #ffffff;

box-shadow: 0.707px 0.707px 10px 0px rgba(55, 34, 154, 0.1);

}

.product-tab-menu li a .thumb {

max-width: 100%;

}

.product-tab-menu li a .content {

color: #171d1c;

padding-left: 20px;

}

.shipping-table {

width: 100%;

max-width: 800px;

border: 1px solid #eaeaea;

}

.shipping-table thead th {

color: #171d1c;

text-transform: capitalize;

padding: 15px 10px 15px 20px;

font-weight: 500;

}

.shipping-table tbody tr {

font-size: 16px;

}

.shipping-table tbody tr td {

padding: 10px;

font-weight: 400;

}

.shipping-table tbody tr th {

color: #171d1c;

}

.shipping-table tbody tr td {

padding-left: 20px;

position: relative;

}

.shipping-table tbody tr td:nth-of-type(even)::before {

position: absolute;

left: 0;

top: 50%;

-webkit-transform: translateY(-50%);

-ms-transform: translateY(-50%);

transform: translateY(-50%);

content: ":";

}

.shipping-table tbody tr:nth-of-type(odd) {

background: #ebf2ff;

}

@media (max-width: 575px) {

.shipping-table {

min-width: 550px;

}

}

.shipping-wrapper .table-wrapper, .history-wrapper .table-wrapper {

width: 100%;

overflow-x: auto;

}

.shipping-wrapper .item, .history-wrapper .item {

margin-bottom: 35px;

}

.shipping-wrapper .item p, .history-wrapper .item p {

margin-top: 0;

margin-bottom: 15px;

}

.shipping-wrapper .item .title, .history-wrapper .item .title {

margin-bottom: 18px;

text-transform: capitalize;

}

.shipping-wrapper .item ul, .history-wrapper .item ul {

margin-bottom: 15px;

}

.shipping-wrapper .item ul:last-child, .history-wrapper .item ul:last-child {

margin-bottom: -7px !important;

}

.shipping-wrapper .item ul li, .history-wrapper .item ul li {

padding: 0;

}

@media (min-width: 768px) {

.shipping-wrapper .item, .history-wrapper .item {

margin-bottom: 45px;

}

.shipping-wrapper .item .title, .history-wrapper .item .title {

margin-bottom: 18px;

}

.shipping-wrapper .item ul, .history-wrapper .item ul {

margin-bottom: 25px;

}

.shipping-wrapper .item ul:last-child, .history-wrapper .item ul:last-child {

margin-bottom: -7px !important;

}

.shipping-wrapper .item ul li, .history-wrapper .item ul li {

padding: 0;

}

.shipping-wrapper .item p, .history-wrapper .item p {

margin-bottom: 25px;

}

}

.shipping-wrapper .item:last-child, .history-wrapper .item:last-child {

margin-bottom: 0;

}

.history-table-area {

background: #ebf2ff;

-webkit-border-radius: 5px;

-moz-border-radius: 5px;

border-radius: 5px;

padding: 20px 40px;

}

@media (max-width: 991px) {

.history-table-area {

padding: 30px;

}

}

@media (max-width: 575px) {

.history-table-area {

padding: 30px 15px;

}

}

.history-table {

width: 100%;

}

.history-table tr {

border-bottom: 1px solid #c2d2ef;

color: #171d1c;

}

.history-table tr td, .history-table tr th {

text-align: center;

}

.history-table tr td:first-child, .history-table tr th:first-child {

text-align: left;

}

.history-table tr td:last-child, .history-table tr th:last-child {

text-align: right;

}

.history-table tr th {

text-transform: capitalize;

font-size: 20px;

font-weight: 500;

padding: 15px 0;

}

.history-table tr td {

padding: 10px 0;

}

.history-table .user-info {

align-items: center;

}

.history-table .user-info .thumb {

width: 60px;

height: 60px;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

overflow: hidden;

}

.history-table .user-info .thumb img {

width: 100%;

}

.history-table .user-info .content {

padding-left: 20px;

}

@media (max-width: 991px) {

.history-table {

font-size: 16px;

}

.history-table .user-info .thumb {

width: 60px;

height: 60px;

}

.history-table td {

padding: 15px 0;

}

.history-table tr th {

font-size: 18px;

}

}

@media (max-width: 767px) {

.history-table .content {

color: #ee4730;

}

}

@media (max-width: 767px) and (max-width: 575px) {

.history-table .user-info {

display: block;

}

.history-table .user-info .content {

padding: 0;

}

.history-table .user-info .thumb {

margin: 0 auto 5px;

}

}

@media (max-width: 767px) {

.history-table thead {

display: none;

}

.history-table tbody tr {

display: block;

}

.history-table tbody tr td {

display: flex;

align-items: center;

flex-wrap: wrap;

justify-content: space-between;

padding: 10px 0;

}

.history-table tbody tr td::before {

content: attr(data-history);

text-transform: uppercase;

color: #007ec3;

font-weight: 600;

}

}

.faq-head-title {

text-transform: capitalize;

margin-bottom: 18px;

}

@media (min-width: 768px) {

.faq-head-title {

margin-bottom: 25px;

}

}

/*Dashboard Section Starts Here*/

.dashboard-widget {

border-radius: 20px;

background-color: #ffffff;

box-shadow: 0px 6px 18px 0px rgba(16, 5, 54, 0.17);

padding: 30px 20px;

}

@media screen and (min-width: 450px) {

.dashboard-widget {

padding: 30px;

}

}

.dashboard-widget .user {

text-align: center;

margin-bottom: 30px;

}

.dashboard-widget .user .thumb-area {

width: 100px;

margin: 0 auto 30px;

position: relative;

}

.dashboard-widget .user .thumb-area .profile-pic-edit {

position: absolute;

bottom: 10px;

right: 0;

width: 30px;

height: 30px;

line-height: 30px;

text-align: center;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

font-size: 16px;

color: #ffffff;

background: -moz-linear-gradient(135deg, #8739e6 0%, #5496ff 100%);

background: -webkit-linear-gradient(135deg, #8739e6 0%, #5496ff 100%);

background: -ms-linear-gradient(135deg, #8739e6 0%, #5496ff 100%);

box-shadow: 0px 19px 56px 0px rgba(0, 0, 0, 0.2);

margin: 0;

}

.dashboard-widget .user .thumb-area .thumb {

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

overflow: hidden;

}

.dashboard-widget .user .thumb-area .thumb img {

width: 100%;

}

.dashboard-widget .user .content .title {

margin-bottom: 0;

}

.dashboard-widget h2, .dashboard-widget h3, .dashboard-widget h4, .dashboard-widget h5, .dashboard-widget h6 {

color: #37406f;

}

.dashboard-widget h2 a, .dashboard-widget h3 a, .dashboard-widget h4 a, .dashboard-widget h5 a, .dashboard-widget h6 a {

color: #37406f;

}

.dashboard-widget .dashboard-title {

border-bottom: 1px solid #d5d7f3;

}

.dashboard-widget .dashboard-title .title {

padding-bottom: 20px;

}

.dashboard-menu li {

padding: 0;

margin-bottom: 1px;

}

.dashboard-menu li a {

padding: 10px 20px;

color: #37406f;

text-transform: capitalize;

font-weight: 500;

line-height: 30px;

-webkit-border-radius: 25px;

-moz-border-radius: 25px;

border-radius: 25px;

display: block;

}

.dashboard-menu li a i {

font-weight: 400;

margin-right: 10px;

color: #ee4730;

}

.dashboard-menu li a:hover, .dashboard-menu li a.active {

background: #f7f6fc;

}

.dashboard-item {

border-radius: 20px;

background-color: white;

box-shadow: 2.487px 1.678px 57px 0px rgba(16, 5, 54, 0.13);

margin-bottom: 30px;

padding: 40px 15px 30px;

text-align: center;

}

.dashboard-item .thumb {

height: 80px;

margin-bottom: 16px;

}

.dashboard-item .thumb img {

max-width: 100%;

}

.dashboard-purchasing-tabs .nav-tabs {

margin-bottom: 25px;

}

.dashboard-purchasing-tabs .nav-tabs li {

padding: 0 10px;

}

.dashboard-purchasing-tabs .nav-tabs li:first-child {

padding-left: 0;

}

.dashboard-purchasing-tabs .nav-tabs li:last-child {

padding-right: 0;

}

.dashboard-purchasing-tabs .nav-tabs li a {

padding: 10px 0;

position: relative;

color: #37406f;

}

.dashboard-purchasing-tabs .nav-tabs li a::after {

bottom: -1px;

left: 0;

right: 100%;

top: calc(100% - 3px);

background: #ee4730;

position: absolute;

content: "";

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

.dashboard-purchasing-tabs .nav-tabs li a.active::after {

right: 0;

}

@media (min-width: 768px) {

.dashboard-purchasing-tabs .nav-tabs li {

padding: 0 20px;

}

.dashboard-purchasing-tabs .nav-tabs li a {

font-size: 22px;

font-weight: 500;

}

}

.purchasing-table {

width: 100%;

font-size: 16px;

}

.purchasing-table thead th {

color: #37406f;

}

.purchasing-table tbody tr {

font-size: 16px;

color: #171d1c;

font-weight: 500;

}

.purchasing-table tbody tr:hover {

background: rgba(215, 217, 245, 0.078);

}

.purchasing-table tbody tr td {

padding: 13px 0;

border-bottom: 1px solid rgba(215, 217, 245, 0.502);

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

@media (max-width: 767px) {

.purchasing-table thead {

display: none;

}

.purchasing-table tbody tr td {

padding: 3px 7px;

display: flex;

flex-wrap: wrap;

justify-content: space-between;

}

.purchasing-table tbody tr td:last-child {

padding-bottom: 10px;

}

.purchasing-table tbody tr td:first-child {

padding-top: 10px;

}

.purchasing-table tbody tr td::before {

content: attr(data-purchase);

color: #007ec3;

text-transform: capitalize;

}

.purchasing-table tbody tr:hover {

background: unset;

}

.purchasing-table tbody tr:nth-last-of-type(2n - 1) {

background: rgba(215, 217, 245, 0.3);

}

}

/*Profile Section Starts Here*/

.dash-pro-item .header {

justify-content: space-between;

margin-bottom: 30px;

}

.dash-pro-item .header .title {

margin: 0;

width: calc(100% - 80px);

}

.dash-pro-item .header .edit {

text-align: right;

width: 80px;

cursor: pointer;

}

@media (max-width: 575px) {

.dash-pro-item .header {

margin-bottom: 20px;

}

.dash-pro-item .header .title {

width: calc(100% - 70px);

}

.dash-pro-item .header .edit {

width: 70px;

font-size: 14px;

}

}

.dash-pro-item .dash-pro-body li {

color: #37406f;

padding: 0;

margin-bottom: 8px;

}

.dash-pro-item .dash-pro-body li .info-name {

width: 135px;

position: relative;

padding-right: 15px;

}

.dash-pro-item .dash-pro-body li .info-name:after {

content: ":";

position: absolute;

right: 0;

}

.dash-pro-item .dash-pro-body li .info-value {

width: calc(100% - 135px);

padding-left: 20px;

}

.dash-pro-item .dash-pro-body li .info-value i {

font-size: 14px;

}

@media (max-width: 575px) {

.dash-pro-item .dash-pro-body li {

margin-bottom: 12px;

}

.dash-pro-item .dash-pro-body li .info-name, .dash-pro-item .dash-pro-body li .info-value {

width: 100%;

padding: 0;

font-size: 16px;

}

.dash-pro-item .dash-pro-body li .info-name::after, .dash-pro-item .dash-pro-body li .info-value::after {

display: none;

}

.dash-pro-item .dash-pro-body li .info-name {

color: #ee4730;

margin-bottom: -3px;

}

}

.dash-bid-item .header {

justify-content: space-between;

margin-bottom: 30px;

}

.dash-bid-item .header .title {

margin: 0;

}

@media (max-width: 575px) {

.dash-bid-item .header {

margin-bottom: 20px;

}

.dash-bid-item .header .edit {

font-size: 14px;

}

}

.dash-bid-item .button-area {

margin: -10px;

border: none;

}

.dash-bid-item .button-area li {

padding: 10px;

}

.dash-bid-item .button-area li .custom-button {

text-transform: capitalize;

}

.dash-bid-item .button-area li .custom-button.active {

color: #ffffff;

background: -moz-linear-gradient(92deg, #ff8359 0%, #ffdf40 100%);

background: -webkit-linear-gradient(92deg, #ff8359 0%, #ffdf40 100%);

background: -ms-linear-gradient(92deg, #ff8359 0%, #ffdf40 100%);

}

.dash-bid-item .button-area .list li {

padding: 0 20px;

}

.sort-winning-bid {

align-items: center;

justify-content: center;

color: #171d1c;

font-size: 16px;

padding: 10px;

}

.sort-winning-bid .item {

margin-right: 8px;

}

.sort-winning-bid .select-bar {

height: 37px;

-webkit-border-radius: 19px;

-moz-border-radius: 19px;

border-radius: 19px;

width: 135px;

padding: 0;

padding-left: 30px;

}

.sort-winning-bid .select-bar .current {

line-height: 37px;

text-transform: capitalize;

font-size: 16px;

color: #171d1c;

}

.sort-winning-bid .select-bar::after {

height: 7px;

width: 7px;

border-color: #171d1c;

}

/*Alert Section Starts Here*/

.alert-widget ul {

padding: 23px 0 20px;

margin-bottom: -50px;

}

.alert-widget ul li {

align-items: start;

padding: 0;

margin-bottom: 40px;

}

.alert-widget ul li input {

width: 25px;

height: 0;

position: relative;

}

.alert-widget ul li input::after {

position: absolute;

content: "";

-webkit-border-radius: 3px;

-moz-border-radius: 3px;

border-radius: 3px;

left: 0;

top: 0;

width: 25px;

height: 25px;

border: 1px solid #bccaea;

}

.alert-widget ul li input:checked::after {

opacity: 1;

background: url(./img/check.png) no-repeat center center;

}

.alert-widget ul li label {

width: calc(100% - 25px);

margin: 0;

padding-left: 30px;

}

.alert-widget ul li label .title {

margin-bottom: 19px;

}

@media (max-width: 575px) {

.alert-widget ul li label {

padding-left: 20px;

}

}

/*Refferral Section Starts Here*/

.referral-form {

position: relative;

}

.referral-form input {

height: 50px;

-webkit-border-radius: 25px;

-moz-border-radius: 25px;

border-radius: 25px;

border: 1px solid rgba(55, 64, 111, 0.2);

background-color: #fbfcff;

box-shadow: 4.822px 9.887px 8px 0px rgba(167, 169, 192, 0.13);

padding: 0 20px;

}

.referral-form button.custom-button {

text-transform: capitalize;

font-weight: 500;

font-size: 18px;

height: 50px;

-webkit-border-radius: 25px;

-moz-border-radius: 25px;

border-radius: 25px;

color: #ffffff;

margin-top: 20px;

}

@media (min-width: 768px) {

.referral-form input {

padding: 0 180px 0 20px;

}

.referral-form button.custom-button {

position: absolute;

right: 0;

top: 0;

padding: 0px 60px;

margin: 0;

}

}

.dashboard-widget .share-area {

align-items: center;

margin-bottom: -10px;

}

.dashboard-widget .share-area .left {

margin-right: 10px;

margin-bottom: 10px;

}

.dashboard-widget .share-area .social-icons {

margin-bottom: 10px;

}

.dashboard-widget .share-area .social-icons li a {

padding: 0;

border: 1px solid #eaeaea;

border-radius: 50%;

background-color: white;

box-shadow: 0px 15px 30px 0px rgba(119, 123, 146, 0.1);

}

.dashboard-widget .share-area .social-icons li a:hover, .dashboard-widget .share-area .social-icons li a.active {

background: -webkit-linear-gradient(-103deg, #ef774c 0%, #ed684f 35%, #e84351 76%, #e73351 100%);

color: #ffffff;

}

.dashboard-widget .stats span {

font-size: 18px;

margin-left: 7px;

}

.dashboard-widget .stats:last-child {

margin-bottom: -13px;

}

.referral-table {

width: 100%;

}

.referral-table tr td, .referral-table tr th {

text-align: center;

}

.referral-table tr td:first-child, .referral-table tr th:first-child {

text-align: left;

}

.referral-table tr td:last-child, .referral-table tr th:last-child {

text-align: right;

}

.referral-table thead tr th {

font-weight: 400;

color: #37406f;

}

.referral-table tbody tr {

font-size: 16px;

color: #171d1c;

}

.referral-table tbody tr:hover {

background: rgba(215, 217, 245, 0.078);

}

.referral-table tbody tr td {

padding: 13px 0;

border-bottom: 1px solid rgba(215, 217, 245, 0.502);

-webkit-transition: all ease 0.3s;

-moz-transition: all ease 0.3s;

transition: all ease 0.3s;

}

@media (max-width: 575px) {

.referral-table thead {

display: none;

}

.referral-table tbody tr td {

padding: 3px 7px;

display: flex;

flex-wrap: wrap;

justify-content: space-between;

}

.referral-table tbody tr td:last-child {

padding-bottom: 10px;

}

.referral-table tbody tr td:first-child {

padding-top: 10px;

}

.referral-table tbody tr td::before {

content: attr(data-label);

color: #007ec3;

text-transform: capitalize;

}

.referral-table tbody tr:hover {

background: unset;

}

.referral-table tbody tr:nth-last-of-type(2n - 1) {

background: rgba(215, 217, 245, 0.3);

}

}

.cart-sidebar-area .single-product-item .content .title a {

color: #ffffff;

}

.cart-sidebar-area .single-product-item .content .title a:hover {

color: #ee4730;

}

@keyframes plus-anime {

0% {

-webkit-transform: rotate(0deg);

-ms-transform: rotate(0deg);

transform: rotate(0deg);

}

100% {

-webkit-transform: rotate(1440deg);

-ms-transform: rotate(1440deg);

transform: rotate(1440deg);

}

}

.plus-anime {

animation: plus-anime 18s linear infinite;

-webkit-animation: plus-anime 18s linear infinite;

-moz-animation: plus-anime 18s linear infinite;

}

.zigzag {

animation: zigzag 10s alternate infinite;

-webkit-animation: zigzag 10s alternate infinite;

-moz-animation: zigzag 10s alternate infinite;

}

.zigzag:nth-child(odd) {

animation-delay: 3s;

-webkit-animation-delay: 3s;

-moz-animation-delay: 3s;

}

@keyframes zigzag {

0% {

-webkit-transform: translate(-10px, -10px);

-ms-transform: translate(-10px, -10px);

transform: translate(-10px, -10px);

}

25% {

-webkit-transform: translate(10px, -10px);

-ms-transform: translate(10px, -10px);

transform: translate(10px, -10px);

}

50% {

-webkit-transform: translate(-10px, 10px);

-ms-transform: translate(-10px, 10px);

transform: translate(-10px, 10px);

}

75% {

-webkit-transform: translate(10px, 10px);

-ms-transform: translate(10px, 10px);

transform: translate(10px, 10px);

}

75% {

-webkit-transform: translate(-10px, -10px);

-ms-transform: translate(-10px, -10px);

transform: translate(-10px, -10px);

}

}

/*All Animation Ends Here*/

.scrollToTop {

width: 35px;

height: 35px;

line-height: 35px;

color: #ffffff;

z-index: 999;

bottom: 30px;

right: 30px;

position: fixed;

border-radius: 5px;

-webkit-transform: translateY(150px);

-ms-transform: translateY(150px);

transform: translateY(150px);

background: #ee4730;

text-align: center;

font-size: 16px;

}

.scrollToTop:hover {

color: #ffffff;

}

.scrollToTop.active {

-webkit-transform: translateY(0);

-ms-transform: translateY(0);

transform: translateY(0);

animation: bounceInDown 2s;

-webkit-animation: bounceInDown 2s;

-moz-animation: bounceInDown 2s;

}

.scrollToTop img {

width: 100%;

}

.custom-button {

color: #ffffff;

-webkit-border-radius: 30px;

-moz-border-radius: 30px;

border-radius: 30px;

font-weight: 500;

text-transform: uppercase;

padding: 12px 30px 10px;

font-size: 18px;

background: -moz-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -ms-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -webkit-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

box-shadow: -1.04px 4.891px 20px 0px rgba(69, 49, 183, 0.5);

font-family: "Roboto", sans-serif;

}

.custom-button:hover {

color: #ffffff;

background-color: #ffffff;

}

@media (max-width: 575px) {

.custom-button {

padding: 15px 30px 10px;

font-size: 16px;

}

}

.custom-button.white {

background: #ffffff;

color: #3f22b3;

}

.custom-button.white:hover {

background: #3f22b3;

color: #ffffff;

}

.custom-button.active {

background: transparent;

color: #171d1c;

text-transform: capitalize;

box-shadow: none;

}

.custom-button.active:hover {

background: -moz-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -ms-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -webkit-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

box-shadow: -1.04px 4.891px 20px 0px rgba(69, 49, 183, 0.5);

border-color: #ee4730;

color: #ffffff;

}

.custom-button.yellow {

background: -moz-linear-gradient(92deg, #ff8359 0%, #ffdf40 100%);

background: -webkit-linear-gradient(92deg, #ff8359 0%, #ffdf40 100%);

background: -ms-linear-gradient(92deg, #ff8359 0%, #ffdf40 100%);

box-shadow: 0px 19px 56px 0px rgba(0, 0, 0, 0.2);

}

@media (min-width: 576px) {

.custom-button.btn-large {

padding: 12px 48px 8px;

line-height: 40px;

-webkit-border-radius: 30px;

-moz-border-radius: 30px;

border-radius: 30px;

}

}

.custom-button.pink {

background: -moz-linear-gradient(135deg, #ff63de 0%, #d843e2 44%, #b122e6 100%);

background: -webkit-linear-gradient(135deg, #ff63de 0%, #d843e2 44%, #b122e6 100%);

background: -ms-linear-gradient(135deg, #ff63de 0%, #d843e2 44%, #b122e6 100%);

box-shadow: 0px 8px 8px 0px rgba(0, 0, 0, 0.2);

text-transform: capitalize;

}

button.custom-button {

padding: 0 40px;

font-size: 20px;

outline: none;

border: none;

height: 60px;

width: auto;

-webkit-border-radius: 30px;

-moz-border-radius: 30px;

border-radius: 30px;

}

@media (max-width: 575px) {

button.custom-button {

height: 50px;

font-size: 16px;

}

}

.load-wrapper {

margin-top: 40px;

text-align: center;

}

@media (min-width: 768px) {

.load-wrapper {

margin-top: 60px;

}

}

.load-more {

line-height: 57px;

padding: 3px 45px 0;

-webkit-border-radius: 30px;

-moz-border-radius: 30px;

border-radius: 30px;

border: 1px solid #5e5bb7;

font-size: 18px;

color: #171d1c;

text-transform: capitalize;

}

.load-more:hover {

color: #ffffff;

background: #ee4730;

}

.load-more.small {

padding: 3px 33px 0;

}

.load-more.e-small {

line-height: 47px;

padding: 3px 33px 0;

}

@media (max-width: 575px) {

.load-more {

line-height: 45px;

padding: 3px 30px 0;

font-size: 16px;

}

}

.video-button {

color: #ffffff;

border: none;

text-align: center;

width: 60px;

height: 60px;

z-index: 1;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

background: #3f22b3;

position: relative;

}

.video-button a {

display: block;

position: relative;

z-index: 1;

}

.video-button i {

line-height: 60px;

font-size: 36px;

margin-left: 8px;

}

.video-button:hover {

color: #ffffff;

}

.video-button::after, .video-button::before {

position: absolute;

content: "";

width: 100%;

height: 100%;

left: 0;

top: 0;

border-radius: 74px;

background: #3f22b3;

opacity: 0.15;

z-index: -10;

}

.video-button::before {

z-index: -10;

-webkit-animation: inner-ripple 2000ms linear infinite;

-moz-animation: inner-ripple 2000ms linear infinite;

animation: inner-ripple 2000ms linear infinite;

}

.video-button::after {

z-index: -10;

-webkit-animation: outer-ripple 2000ms linear infinite;

-moz-animation: outer-ripple 2000ms linear infinite;

animation: outer-ripple 2000ms linear infinite;

}

.video-button span {

width: 100%;

height: 100%;

border: 0.3px solid #3f22b3;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

animation: 5s customZoom infinite;

-webkit-animation: 5s customZoom infinite;

-moz-animation: 5s customZoom infinite;

top: 50%;

left: 50%;

-webkit-transform: translate(-50%, -50%);

-ms-transform: translate(-50%, -50%);

transform: translate(-50%, -50%);

}

.video-button span::after, .video-button span::before {

width: 100%;

height: 100%;

border: 0.3px solid #3f22b3;

-webkit-border-radius: 50%;

-moz-border-radius: 50%;

border-radius: 50%;

animation: 5s customZoom infinite;

-webkit-animation: 5s customZoom infinite;

-moz-animation: 5s customZoom infinite;

top: 50%;

left: 50%;

opacity: 0;

}

.video-button span::after {

animation-delay: 1s;

}

.video-button span:nth-child(even) {

animation-delay: 4s;

}

.video-button span:nth-child(even)::after {

animation-delay: 2s;

}

.video-button span:nth-child(even)::before {

animation-delay: 3s;

}

@keyframes customZoom {

0% {

-webkit-transform: translate(-50%, -50%) scale(1);

-ms-transform: translate(-50%, -50%) scale(1);

transform: translate(-50%, -50%) scale(1);

opacity: .9;

}

100% {

-webkit-transform: translate(-50%, -50%) scale(2);

-ms-transform: translate(-50%, -50%) scale(2);

transform: translate(-50%, -50%) scale(2);

opacity: .1;

}

}

.normal-button {

line-height: 50px;

padding: 2px 40px 1px;

border: 1px solid #b59ce4;

border-radius: 30px;

color: #171d1c;

line-height: 46px;

}

.normal-button:hover {

color: #ffffff;

background: -moz-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -ms-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

background: -webkit-linear-gradient(90deg, #3da9f5 0%, #683df5 100%);

box-shadow: -1.04px 4.891px 20px 0px rgba(69, 49, 183, 0.5);

}

@keyframes outer-ripple {

0% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

-webkit-filter: alpha(opacity=50);

}

80% {

transform: scale(1.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(1.5);

-moz-transform: scale(1.5);

-ms-transform: scale(1.5);

-o-transform: scale(1.5);

}

100% {

transform: scale(2.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(2.5);

-moz-transform: scale(2.5);

-ms-transform: scale(2.5);

-o-transform: scale(2.5);

}

}

@-webkit-keyframes outer-ripple {

0% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

80% {

transform: scale(2.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(2.5);

-moz-transform: scale(2.5);

-ms-transform: scale(2.5);

-o-transform: scale(2.5);

}

100% {

transform: scale(3.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(3.5);

-moz-transform: scale(3.5);

-ms-transform: scale(3.5);

-o-transform: scale(3.5);

}

}

@-moz-keyframes outer-ripple {

0% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

80% {

transform: scale(2.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(2.5);

-moz-transform: scale(2.5);

-ms-transform: scale(2.5);

-o-transform: scale(2.5);

}

100% {

transform: scale(3.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(3.5);

-moz-transform: scale(3.5);

-ms-transform: scale(3.5);

-o-transform: scale(3.5);

}

}

/* inner ripple */

@keyframes inner-ripple {

0% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

30% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

100% {

transform: scale(1.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(1.5);

-moz-transform: scale(1.5);

-ms-transform: scale(1.5);

-o-transform: scale(1.5);

}

}

@-webkit-keyframes inner-ripple {

0% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

30% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

100% {

transform: scale(1.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(1.5);

-moz-transform: scale(1.5);

-ms-transform: scale(1.5);

-o-transform: scale(1.5);

}

}

@-moz-keyframes inner-ripple {

0% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

30% {

transform: scale(1);

filter: alpha(opacity=50);

opacity: 0.5;

-webkit-transform: scale(1);

-moz-transform: scale(1);

-ms-transform: scale(1);

-o-transform: scale(1);

}

100% {

transform: scale(1.5);

filter: alpha(opacity=0);

opacity: 0;

-webkit-transform: scale(1.5);

-moz-transform: scale(1.5);

-ms-transform: scale(1.5);

-o-transform: scale(1.5);

}

}

.button-3 {

text-transform: uppercase;

font-weight: 500;

-webkit-border-radius: 30px;

-moz-border-radius: 30px;

border-radius: 30px;

border: 1px solid #cac7f6;

color: #37406f;

padding: 10px 40px;

font-size: 16px;

font-family: "Roboto", sans-serif;

}

.button-3.active, .button-3:hover {

color: #ffffff;

border-color: transparent;

background: -ms-linear-gradient(-65deg, #c165dd 0%, #1153fc 100%);

background: -moz-linear-gradient(-65deg, #c165dd 0%, #1153fc 100%);

background: -webkit-linear-gradient(-65deg, #c165dd 0%, #1153fc 100%);

box-shadow: 0px 7px 24px 0px rgba(18, 83, 252, 0.51);

}

.button-3.active:hover {

background: transparent;

border: 1px solid #cac7f6;

color: #37406f;

box-shadow: none;

}

.button-3 i {

margin-left: 5px;

}

.button-3.long-light {

padding: 10px 30px;

font-weight: 400;

text-transform: capitalize;

font-size: 16px;

}

.text-primary{

color: #036EB5 !important;

}

.btn-primary{

background:#036EB5 !important;

}

.btn-danger{



background:#962B25 !important;

}

/*All Animation Ends Here*/

</style>

@endsection