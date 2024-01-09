@extends('layout')
@section('content')
<div class="heading" style="background:url(img/Slap.jpg) no-repeat">
<h1>Donate</h1>
</div>

<section class="about">
        <div class="content">
        <h1>WHY DOES PARK ISTRA NEED DONATIONS AND WHAT WILL THEY BE GOING FOR?</h1>
            <p>The volunteer program of Park Istra is also covered by donations. Park Istra organizes a large number of volunteer 
                campaigns every year and covers the costs of materials, tools and protective equipment for volunteers who 
                participate in these campaigns. Donations are also needed to provide food, 
                transport and accommodation for the volunteers who participate in these campaigns every year.</p>
        </div>
        <div class="image">
        <img src="/img/don.jpg" alt="">
        </div>
        </section>
        
    <section class="about">
    <div class="image">
        <script src="https://donorbox.org/widget.js" paypalExpress="false"></script>
<iframe src="https://donorbox.org/embed/sustaining-park-istra" name="donorbox" allowpaymentrequest="true" frameborder="0" scrolling="no" seamless="true" style="max-width: 500px; min-width: 310px; max-height:none!important;"></iframe>

        </div>
        <div class="content">
        <p>You can donate by:</p>
    <h3>WIRE TRANSFER</h3>
    <p>
        <ul>
            <li>Name: Park Istra</li>
            <li>Adress: Kastelec 21, 6275 Črni Kal</li>
            <li>IBAN: SI56 6100 0001 3661 536 (Delavska hranilnica d.d., Ljubljana)</li>
            <li>SWIFT/BIC: HDELSI22</li>
            <li>SEPA purpose code: CHAR</li>
            <li>Purpose: Donation</li>
         </ul>
        
        </p>
        <h3>PAYPAL</h3>   
<p>To donate directly via PayPal, just click on the button below:</p>  
<a href="https://www.paypal.com/donate?token=bSOb-E1ilxHrSWaa3Xg6UjP8Xp4v-8h9EyKCvlbOI3LGQGyxGGw4H3bjOX41BMiUjU57F_DnR-m-9u5U" class="btn">PayPal</a>
<h4>THANK YOU FOR YOUR SUPPORT!</h4>
        </div>
       
        
</section>
@endsection