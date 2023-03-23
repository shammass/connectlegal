<!DOCTYPE html>
<html>
<head>
    <title>Pdf File</title>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet"> 
</head>
<style>
    .main{
        margin-top: 10px;
    }
   .main1{
        position: relative;
        width: 48%;
        margin-right: 20px;
    }
    .main2{
        position: absolute;
        right: 0;
        top: 65px;
        width: 48%;
    }
    .logo{
        position: relative;
        width: 48%;
    }
    .heading{
        position: absolute;
        right: 0;
        top: 20px;
        width: 48%;
    }
    .services{
        position: relative;
    }
    .services1{
        position: absolute;
        right: 0px;
        top: -10px;
        left:33%;
        width:100%
    }
    .lawyer{
        position: relative;
    }
    .lawyer1{
        position: absolute;
        right: 0px;
        top: 39.5%;
        left:35%;
        width:100%
    }
    .customer{
        position: relative;
    }
    .customer1{
        position: absolute;
        right: 0px;
        top: 42.4%;
        left:35%;
        width:100%
    }
    .phone{
        position: relative;
    }
    .phone1{
        position: absolute;
        right: 0px;
        top: 45.4%;
        left:35%;
        width:100%
    }
    .message{
        position: relative;
    }
    .message1{
        position: absolute;
        right: 0px;
        top: 48.4%;
        left:35%;
        width:100%
    }
    .payment{
        position: relative;
    }
    .payment1{
        position: absolute;
        right: 0px;
        top: 51.4%;
        left:35%;
        width:100%
    }
    .price{
        position: relative;
    }
    .price1{
        position: absolute;
        right: 0px;
        top:0;
        left:53%;
    }
    .number{
        position: relative;
    }
    .number1{
        position: absolute;
        right: 10px;
        top:68.4%;
        left:0;
    }
    
</style>
<body>
 
<div style="width: 90%; margin: 0 auto; font-family: 'Poppins', sans-serif;     padding:15px 0; ">
<div >
    <div class="logo" style="width:50%;"><img src="https://connect-legal.jagmohankrishan.com/dashborad_apge/images/off-logo.png" style="width:250px; "></div>
    <div class="heading" style="width:50%;">
        <h4 style="font-size: 24px;font-weight: 600;line-height: 7px;text-align: right;color: #3DC9A1;margin-top: 10px;">Invoice # {{ $data['orderId']}}
        </h4>
        <p style="font-size: 13px;font-weight: 600;line-height: 14px;letter-spacing: 0em;text-align: right;"><img src="https://connect-legal.jagmohankrishan.com/images/calander.png" style="margin: 0 0 -5px 0;width: 21px;"> 12-March-2024</p>
    </div>
</div>

<div class="main">
    <div class="main1">
        <h3 style="font-size: 22px;font-weight: 600;line-height: 25px;letter-spacing: 0em;text-align: left;color: #191919;margin: 10px 0 20px 0;">Invoice Number</h3>
        <div style="border: 1px solid #D9D9D9;border-radius: 15px;padding:5px 20px;height: 150px;">
            <p style="font-size: 14px;font-weight: 400;line-height: 22px;letter-spacing: 0em;text-align: left;margin: 0;">#{{$data['orderId']}}<br>
              {{ $data['address']}}<br>
              Road, Dubai<br>
              {{ $data['email'] }}</p>
        </div> 
    </div>
    <div class="main2">
        <h3 style="font-size: 22px;font-weight: 600;line-height: 25px;letter-spacing: 0em;text-align: left;color: #191919;margin: 10px 0 20px 0;">Billed to</h3>
        <div style="border: 1px solid #D9D9D9;border-radius: 15px;padding:20px;height: 120px;">
            <p style="font-size: 14px;font-weight: 400;line-height: 22px;letter-spacing: 0em;text-align: left;margin: 0;">{{ $data['customer_name'] }} <br> {{ $data['customer_email']}}</p>
        </div>
    </div> 
</div>


<h3 style="font-size: 22px;font-weight: 600;line-height: 25px;letter-spacing: 0em;text-align: left;color: #191919;margin: 30px 0 15px 0;">Order # {{ $data['orderId']}}</h3>

<div class="services" style="margin-top: 20px">
    <div style="margin-right: 2%;">
        <p style="font-size: 14px;font-weight: 500;line-height: 22px;letter-spacing: 0em;text-align: left;color: #156075;padding-bottom: 10px;margin: 0;">Service:</p>
    </div>
    <div class="services1"> 
        <div>
            <p style="font-weight: 400;font-size: 14px;line-height: 22px;color: #191919;margin: 0;">
                <strong>Two-hour Intellectual Property counselling session exclusive for you</strong></p>
        </div>
    </div> 
</div>


<div >
    <div class="lawyer" style="margin-right: 2%;">
        <p style="font-size: 14px;font-weight: 500;line-height: 22px;letter-spacing: 0em;text-align: left;color: #156075;padding-bottom: 10px;margin: 0;">Lawyer:</p>
    </div>
    <div class="lawyer1"> 
        <div>
            <p style="font-weight: 400;font-size: 14px;line-height: 22px;color: #191919;margin: 0;">
                 {{$data['lawyer']}} </p>
        </div>
    </div> 
</div>

<div>
    <div class="customer" style="margin-right: 2%;">
        <p style="font-size: 14px;font-weight: 500;line-height: 22px;letter-spacing: 0em;text-align: left;color: #156075;padding-bottom: 10px;margin: 0;">Custommer:</p>
    </div>
    <div class="customer1"> 
        <div>
            <p style="font-weight: 400;font-size: 14px;line-height: 22px;color: #191919;margin: 0;">
             {{$data['customer_name']}} </p>
        </div>
    </div> 
</div>

<div >
    <div class="phone" style="margin-right: 2%;">
        <p style="font-size: 14px;font-weight: 500;line-height: 22px;letter-spacing: 0em;text-align: left;color: #156075;padding-bottom: 10px;margin: 0;">Phone:</p>
    </div>
    <div > 
        <div class="phone1">
            <p style="font-weight: 400;font-size: 14px;line-height: 22px;color: #191919;margin: 0;">
               {{$data['mobile']}} </p>
        </div>
    </div> 
</div>

<div>
    <div class="message" style="margin-right: 2%;">
        <p style="font-size: 14px;font-weight: 500;line-height: 22px;letter-spacing: 0em;text-align: left;color: #156075;padding-bottom: 10px;margin: 0;">Message:</p>
    </div>
    <div class="message1"> 
        <div>
            <p style="font-weight: 400;font-size: 12px;line-height: 22px;color: #191919;margin: 0;">
               <i>“{{$data['message']}}”</i> </p>
        </div>
    </div> 
</div>

<div >
    <div class="payment" style="margin-right: 2%;">
        <p style="font-size: 14px;font-weight: 500;line-height: 22px;letter-spacing: 0em;text-align: left;color: #156075;padding-bottom: 10px;margin: 0;">Payment:</p>
    </div>
    <div> 
        <div class="payment1">
            <p style="font-weight: 400;font-size: 14px;line-height: 22px;color: #191919;margin: 0;">
             <strong>AED {{$data['amount']}}</strong>   </p>
        </div>
    </div> 
</div>

<!--  -->

<h3 style="font-size: 22px;font-weight: 600;line-height: 25px;letter-spacing: 0em;text-align: left;color: #191919;margin: 30px 0 15px 0;">Details
</h3>
<div class="price" style="margin: 15px 0 10px 0;">
    <div style="width:49%;margin-right: 2%;">
        <p style="font-size: 16px;font-weight: 600;line-height: 22px; text-align: left;color: #191919; margin: 0;"><b>Service</b></p>
    </div>
    <div class="price1" style="width: 49%;"> 
        <div>
            <p style="font-size: 16px;font-weight: 600;line-height: 22px; text-align: right;color: #191919; margin: 0;"> 
             <strong>Price</strong>   </p>
        </div>
    </div> 
</div>

<div style="display: flex;border-top: 1px solid #DEDEDE;border-bottom: 1px solid #DEDEDE;padding:0px 15px 25px 15px;">
    <div class="number" style="margin-right: 2%;">
       <p style="font-weight: 300;font-size: 14px;line-height: 22px;color: #191919;margin: 0;">Two-hour Intellectual Property counselling session exclusive for you </p> 
       <p style="font-weight: 300;font-size: 14px;line-height: 22px;color: #191919;margin: 0;">Tax</p>
    </div>
    <div class="number1" style="padding:0px 15px 15px;"> 
        <div>
            <p style="font-weight: 300;font-size: 14px;color: #191919;text-align: right;">
                AED380<br> 
                AED50<br> 
                AED20 
        </div>
    </div> 
</div>

<p style="font-size: 16px;font-weight: 600;line-height: 22px; text-align: right;color: #191919; margin: 0;"> 
             <strong>AED450</strong>   </p>

</div>

</body>
</html>