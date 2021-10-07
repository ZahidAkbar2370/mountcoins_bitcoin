@extends('frontLayout')

@section('meta')
@php
 $meta=App\MetaTag::find(1)->first(); 

 echo $meta->home; 
@endphp
@endsection

@section('content')

<!-- //////////////////////////////////////////////// -->

  <div class="container-fluid pt-2" style="padding: 0px">

    <div class="row">
      <div class="col-md-12">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <figure class="highcharts-figure">
          <div id="container"></div>
          <p class="highcharts-description">
          </p>
        </figure>

<style type="text/css">
  .highcharts-figure, .highcharts-data-table table {
  min-width: 360px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>

<script type="text/javascript">
  Highcharts.getJSON(
  'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
  function (data) {

    Highcharts.chart('container', {
      chart: {
        zoomType: 'x'
      },
      title: {
        text: 'BTC to USD exchange rate over time'
      },
      subtitle: {
        text: document.ontouchstart === undefined ?
          'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
      },
      xAxis: {
        type: 'datetime'
      },
      yAxis: {
        title: {
          text: 'Exchange rate'
        }
      },
      legend: {
        enabled: false
      },
      plotOptions: {
        area: {
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, Highcharts.getOptions().colors[0]],
              [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
            ]
          },
          marker: {
            radius: 2
          },
          lineWidth: 1,
          states: {
            hover: {
              lineWidth: 1
            }
          },
          threshold: null
        }
      },

      series: [{
        type: 'area',
        name: 'USD to EUR',
        data: data
      }]
    });
  }
);
</script>
      </div>
    </div>
  </div>
<br><br><br>
<!-- //////////////////////////////////////////////// -->

<div class="container-fluid pt-2" style="padding: 0px">

    <div class="row">
       <div class="col-md-3">
            
        </div>
         <div class="col-md-3">
          <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
<a href="{{url('sell')}}" class=" btn-outline-success  btn-lg text-white font-weight-bold shadow-lg text-decoration-none text-capitalize btn-block text-center" style=";
    background-color: cadetblue;
    border: 1px solid cadetblue;
    border-radius: 27px;"> SELL BTC:$ {{  CH::Get_Sell_Setting_price() }}</a>
</p> 
        </div> 
         <div class="col-md-3">

              <p data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
<a href="{{url('buy')}}" class=" btn-warning btn-lg text-white font-weight-bold shadow-lg text-decoration-none text-capitalize btn-block text-center" style=";
   background-color: cadetblue;
    border: 1px solid cadetblue;
    border-radius: 27px;">BUY BTC:$ {{  CH::Get_Buy_Setting_price() }}</a> 
</p> 

          
        </div>  
  
         <div class="col-md-3">
            
        </div> 
    </div>
    
 
    
</div>
<!-- <img src="{{asset('img/coins (1) (2).png')}}" style="margin-top: 30px"> -->

<!-- <div class="pt-3 pb-3 mt-2 mb-5" style='background-image: url("{{ asset('banner1-1.jpg') }}");
  background-color: #000000;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;'> -->
<div class="container-fluid" style="padding: 0px">
    {{-- success message display --}}

@if(session('message'))

<div class="alert alert-success alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Success!</strong> {{ session('message') }}

</div>

@endif



{{-- error message display if company added --}}

@if(session('error'))

<div class="alert alert-danger alert-dismissible">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  <strong>Alert!</strong> {{ session('error') }}

</div>

@endif


<div class="container bitcoin_value_table" style="padding: 10px">

    <div class="card row table_rows  table-responsive " style="background: gainsboro;">

        

        

        <table class="table table-hover table-sm table-borderless">

            <thead>

                <tr>

                    <th>Icon</th>

                    <th class="mobile-hide">Coin Name</th>

                    <th >Price</th>

                    <th class="mobile-hide">Market Cap</th>

                    {{--  <th  class="mobile-hide" >Volume (24hr)</th>

                    <th  class="mobile-hide">Supply</th> --}}

                    <th  class="mobile-hide">Change (24hr)</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($View_Bit_Cry_Prices as  $Prices)

                <tr>

                    <td scope="row">
                    
                    <img src="https://www.blockchain.com/explorer-frontend/_next/image?url=https%3A%2F%2Fwww.cryptocompare.com{{ $Prices->img_url }}&w=96&q=75" alt="" class="img-thumbnail" width="50" height="50">

                    </td>

                    <td class="mobile-hide">

                    <div></span>

                      <strong>{{ $Prices->name }}</strong></div>

                      <div class="coin-code">{{ $Prices->symbol }}</div>

            </td>

            <td class="market_capital  sorting_1" style="font-size:19px;font-weight: 600;width: 310px">$ @php


             $btcvalplus= $Prices->price+ CH::Get_Latest_Additional_price()->cryptocurrency_additional_sell_price;
  

      $btcvalTotal=$btcvalplus-CH::Get_Latest_Additional_price()->cryptocurrency_decremental_sell_price; 
       echo $btcvalTotal;


                // echo CH::Get_Latest_Additional_price()[0]->cryptocurrency_additional_price +$Prices->price;

            @endphp</td>

            <td class="price mobile-hide" data-usd="17,819.1743" style="font-size:19px;font-weight: 600;">$ {{ $Prices->market_cap}}</td>

            

            <td class="increment change mobile-hide" style="font-size:19px;font-weight: 600;">$ {{ $Prices->percent_change_24h }}</td>

        </tr>

        @endforeach

    </tbody>

</table>

<div class="text-center mx-auto">

    

    {{ $View_Bit_Cry_Prices->links() }}

</div>





</div>

</div>




@endsection

@section('footer')

<script >

$(document).ready(function () {

$('.paypal').prop('required',true);

function GetbtcConvertedValues(){

$('.loader').show();

var   coinid=$('option:selected').attr('coin-id');

var coinVal= $('.bitcoin_valuefConverion').val();

var coinType= $('.cointType').val();

var currencyVal= $('.bitcoin_converted_amount').val();

var currencyType= $('.currencyType').val();

console.log(coinVal,coinType,currencyVal,currencyType,coinid);

// $('.loader').show();

$.ajax({

url:"{{ route('converter') }}",

type:"POST",

dataType:"json",

data:{coinVal:coinVal,coinType:coinType,currencyVal:currencyVal,currencyType:currencyType,coinid:coinid,_token:"{{ csrf_token() }}"},

success:function(res)

{


var btcvalcurrent=res.PRICE;
var calculatebtc=+ btcvalcurrent + +{{ CH::Get_Latest_Additional_price()->cryptocurrency_additional_sell_price }};
var finalbtcVal=calculatebtc-{{ CH::Get_Latest_Additional_price()->cryptocurrency_decremental_sell_price}};
var multipyCount=res.PRICE*coinVal;

var CointPlusVal= + multipyCount + +{{ CH::Get_Latest_Additional_price()->cryptocurrency_additional_sell_price }};

var converted_amount=CointPlusVal-{{ CH::Get_Latest_Additional_price()->cryptocurrency_decremental_sell_price   }};

$('.bitcoin_converted_amount').val(converted_amount);

$('.coiniconlive').html('<img src="https://www.blockchain.com/explorer-frontend/_next/image?url=https%3A%2F%2Fwww.cryptocompare.com'+res.IMAGEURL+'&amp;w=96&amp;q=75" alt="" class="img-thumbnail" width="50" height="50">');

$('.loader').hide();

},

error: function(XMLHttpRequest, textStatus, errorThrown) {

console.log("Status: " + textStatus); console.log("Error: " + errorThrown);console.log("Error: " + errorThrown);

}

});

}

GetbtcConvertedValues();

$(".bitcoin_valuefConverion,.cointType,.currencyType").change(function() {





if($('.cointType').val()=='select_currency'){

alert('Please Select Coin First');

}else{



    GetbtcConvertedValues();

}

    





});

$('#coins-info-table').DataTable( {

"pageLength": 25

} );

});

</script>

<style type="text/css">

    .card{  

background: gainsboro !important;

    }
/*.coinValassign{
    display: none; 
}*/
.coin-code {

display: inline-block;

font-size: 10px;

padding: 2px 5px;

border: 1px solid #fcc118;

color: #fcc118;

border-radius: 4px;

margin-right: 10px;

}

.navbar-toggle {

margin-top: 25px;

}

table.dataTable thead th {

position: relative;

background-image: none !important;

}

table.dataTable thead th.sorting:after, table.dataTable thead th.sorting_asc:after, table.dataTable thead th.sorting_desc:after {

position: absolute;

top: 12px;

right: 8px;

display: block;

}

.navbar-inverse {

background-color: #101820;

border-color: #101820;

margin-bottom: 0px;

}

.navbar-brand {

float: left;

height: 50px;

padding: 33px 30px 50px 0px;

font-size: 18px;

line-height: 20px;

}

.navbar-inverse .navbar-nav>li>a {

color: #ffffff;

}

.well {

min-height: 20px;

padding: 19px;

margin-bottom: 20px;

background-color: #f9f9f9;

border: 1px solid #eee;

border-radius: 4px;

-webkit-box-shadow: none;

box-shadow: none;

}

tr.increment td{

background-color:rgba(0,255,0,.4)!important;

transition:all .7s ease;

}

tr.decrement td{

background-color:rgba(255,0,0,.4)!important;

transition:all .7s ease;

}

.container.content {

padding: 40px;

background: #fff;

}

.container.content.chart {

background: #f9f9f9;

padding: 40px;

border-top: 1px solid #eee;

border-bottom: 1px solid #eee;

}

.header-bar {

font-size: 16px;

padding: 15px 0 17px 0;

text-align: center;

background: #fcc118;

color: #fff;

}

.banner-ad {

text-align: center;

margin-bottom: 30px;

}

.banner-ad img {

max-width: 100%;

}

a.header-link:hover {

text-decoration: none;

}

.btn-value {

background: #fcc118;

color: #101820;

border: 2px solid #fcc118;

border-radius: 210px;

padding: 10px 25px;

font-weight: bold;

}

form.navbar-form.navbar-right {

padding: 15px 0;

}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {

padding: 15px;

line-height: 1.42857143;

vertical-align: top;

border-top: 1px solid #ddd;

}

.coin-header {

font-size: 16px;

text-transform: uppercase;

font-weight: 600;

}

.tx {

}

footer {

background: #101820;

padding: 0px 0;

text-align: center;

}

footer img {

-webkit-filter: grayscale(100%);

-moz-filter: grayscale(100%);

-ms-filter: grayscale(100%);

-o-filter: grayscale(100%);

filter: grayscale(100%);

opacity: 0.3;

}

@keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Firefox < 16 */

@-moz-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Safari, Chrome and Opera > 12.1 */

@-webkit-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Internet Explorer */

@-ms-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

/* Opera < 12.1 */

@-o-keyframes fadein {

from {

opacity: 0;

}

to {

opacity: 1;

}

}

@media (min-width: 992px) {

/* 992px and above */

.affix-sidebar.affix {

top: 30px;

/* Top Position */

width: 294px;

/* Widget Width (small desktop) */

}

}

@media (min-width: 1200px) {

/* 1200px and above */

.affix-sidebar.affix {

width: 364px;

/* Widget Width (large desktop) */

}

}

@media (max-width: 991px) {

/* 991px and below */

.affix-sidebar.affix {

position: static;

}

.mobile-hide {

display: none;

}

.mobile-center {

text-align: center;

}

.mobile-center h2 {

margin-bottom: 30px;

}

.table-responsive {

border: 0px;

}

.well {

margin-bottom: 0px;

}

.col-lg-6 {

width: 50%;

display: inline-block;

}

.container.content {

padding: 15px 0;

}

}

@media (min-width: 768px) {

.navbar-nav>li>a {

padding-top: 35px;

padding-bottom: 35px;

}

}

#account_id

{

background-color:#e9ecef;

}

.paypal,.bank_wire,.westren_union,.perfect_money,.payza,.payoneer,.webmoney,.okpay,.skrill,.nettler,.dash,.money_gram,.credit_card,.instaforex,.solid_trust_pay,.us_bank,.advcash,.alipay_china,.paysafecard,.onecard,.sofort,.qivi_wallet,.entromoney,.mobile_wallet,.mobile_pay,.capital_one,.apple_pay,.chase_quick_pay,.transfer_wise,.venmo_mobile_payment,.xoom_mobile_payment,.swift_transfer,.direct_bank_deposit,.buy_gift_card,.buy_virtual_card,.google_pay,.yandex_money,.payco,.ria_money_transfer,.xoom_money_transfer,.wordremit,.select_currency_to,.select_currency{

display: none;

}

</style>

<script>



let classesCss=['paypal','bank_wire','westren_union','perfect_money','payza','payoneer','webmoney','okpay','skrill','nettler','dash','money_gram','credit_card','instaforex','solid_trust_pay','us_bank','advcash','alipay_china','paysafecard','onecard','sofort','qivi_wallet','entromoney','mobile_wallet','mobile_pay','capital_one','apple_pay','chase_quick_pay','transfer_wise','venmo_mobile_payment','chase_quick_pay','swift_transfer','direct_bank_deposit','buy_gift_card','buy_virtual_card','google_pay','yandex_money','payco','ria_money_transfer','xoom_money_transfer','wordremit'];

$('.paymentVal').on('change', function() {

classesCss.filter(word => word !=this.value);

classesCss.map(function(key, index) {

$('.'+key).hide();

$('.'+key).prop('required',false);

console.log(key);

});

$('.'+this.value).show();

$('.'+this.value).prop('required',true);

//alert( this.value );

});

</script>

{{-- Select Currency like BTC,ETH --}}

<script>

let classesCss1=['select_currency'];

$('.cointType').on('change', function() {

// alert($('.currencyType ').val());

if(this.value=="select_currency"){

alert("Please Select Currency");

}else if($('.currencyType ').val()=='USD'){



classesCss1.filter(word => word !=this.value);

classesCss1.map(function(key1, index) {

$('.loader').show();

$('.'+key1).show();

$('.'+key1).prop('required',false);

console.log(key1);

});

$('.'+this.value).hide();

$('.'+this.value).prop('required',true);

$('.select_currency_to').show();

}

else

{

classesCss1.filter(word => word !=this.value);

classesCss1.map(function(key1, index) {

$('.loader').show();

$('.'+key1).show();

$('.'+key1).prop('required',false);

console.log(key1);

});

$('.'+this.value).hide();

$('.'+this.value).prop('required',true);

}

});

</script>

<script>

let classesCss2=['select_currency_to'];

$('.currencyType').on('change', function() {

classesCss2.filter(word => word !=this.value);

classesCss2.map(function(key2, index) {

$('.loader').show();

$('.'+key2).show();

$('.'+key2).prop('required',false);

console.log(key2);

});

// $('.loader').hide();

$('.'+this.value).hide();

$('.'+this.value).prop('required',true);

});



$(".paymentVal ").change(function(){



$('.paymenticonimg').attr("src","/paymenticon/"+$(this).val()+".png");

$(".paymenticonimg").show();



})

</script>

<style>

.coin-code {

border: 1px  solid #BC873C !important;

color: #BC873C  !important;



}

#bitcoin_value {

border-radius: 26px;

border: #BC873C solid !important;

}

#account_id {

border-radius: 26px;

border: #BC873C solid !important;

}

#bitcoin_convert_to{

border-radius: 26px;



border: #BC873C solid !important;

}





section .section-title{

	text-align:center;

	color:#007b5e;

	margin-bottom:50px;

	text-transform:uppercase;

}





@media (min-width: 768px) and (max-width: 1024px) {
  
  /* CSS */

  #what-we-do .card{

    height: 630px !important;
}
.mobile-hide{
    display:none !important;;
}
  
}

/* 
  ##Device = Tablets, Ipads (landscape)
  ##Screen = B/w 768px to 1024px
*/

@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  
  /* CSS */

#what-we-do .card{

    height: 480px !important;
}

.mobile-hide{
    display:none !important;;
}


  
}


#what-we-do .card{

    height: 350px;

	padding: 1rem!important;

	border: none;

	margin-bottom:1rem;

	-webkit-transition: .5s all ease;

	-moz-transition: .5s all ease;

	transition: .5s all ease;

}

#what-we-do .card:hover{

	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);

	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);

	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);

}





    #what-we-do .card .card-block{

       



    position: relative;

    top: 12%;

     

    }

   #what-we-do .card .card-block .card-title,.card-text{

       

text-align: center;

     

    }  

    

    

#what-we-do .card .card-block a{

	color: #007b5e !important;

	font-weight:700;

	text-decoration:none;

}

#what-we-do .card .card-block a i{

	display:none;

	

}

#what-we-do .card:hover .card-block a i{

	display:inline-block;

	font-weight:700;

	

}

.single-feature-area.active{

    height: 496px;

}





</style>

@endsection