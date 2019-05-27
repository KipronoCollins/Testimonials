<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="client testimonials| Avechi | Kenya | Grand Raffle | Challenge">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="https://avechi.com/pub/media/favicon/stores/19/Favicon.jpg" />
    <link rel="shortcut icon" type="image/x-icon" href="https://avechi.com/pub/media/favicon/stores/19/Favicon.jpg" />
    <title>Avechi Testimonials</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/mobileresponsive.css')}}" rel="stylesheet">
    <style>
        p.paragraph {
            font-family: "Droid Serif";
            font-size: 18px;
            font-weight: 600;
            font-style: italic;
            line-height: 2;
            padding-bottom: 15px;
            word-break: break-all;
        }
        
        .para {
            font-size: 36px;
            font-family: "Droid Serif";
            font-weight: 600;
            letter-spacing: 3px;
            line-height: 2;
            padding-bottom: 15px;
            padding-bottom: 15px;
            margin-top: 20px;
        }
        
        .abutton {
            padding: 5px;
            background-color: goldenrod;
            border: none;
            color: white;
            font-style: italic;
            font-family: "Droid Serif";
            font-size: 17px;
            font-weight: 600;
            font-style: italic;
            line-height: 2;
            border-radius: 10px;
        }
        
        .abutton:hover {
            padding: 5px;
            background-color: white;
            border: 2px solid goldenrod;
            color: goldenrod;
            font-style: italic;
            font-family: "Droid Serif";
            font-size: 17px;
            font-weight: 600;
            font-style: italic;
            line-height: 2;
            border-radius: 10px;
        }
        
        .titly {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        
        @media only screen and (max-width:600px) {
           p.paragraph {
                font-family: "Droid Serif";
                font-size: 12px;
                font-weight: 600;
                font-style: italic;
                line-height: 2;
                word-break: break-all;
            }
            .titly {
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .para {
                font-family: "Droid Serif";
                font-size: 18px;
                font-weight: 600;
                letter-spacing: 2px;
                line-height: 1;
                padding-bottom: 15px;
                padding-bottom: 15px;
                margin-top: 10px;
            }
            .abutton {
                padding: 5px;
                background-color: goldenrod;
                border: none;
                color: white;
                font-style: italic;
                font-family: "Droid Serif";
                font-size: 12px;
                font-weight: 600;
                font-style: italic;
                line-height: 1;
                border-radius: 10px;
            }
            .abutton:hover {
                padding: 5px;
                background-color: white;
                border: 2px solid goldenrod;
                color: goldenrod;
                font-style: italic;
                font-family: "Droid Serif";
                font-size: 12px;
                font-weight: 600;
                font-style: italic;
                line-height: 1;
                border-radius: 10px;
            }
        }
    </style>
</head>

<body>
    <header id="main-wrap">
        <div class="" style="width: 100%">
            <a href="{{route('testimonials.create')}}"> <img src="images/fiesta.jpg" style="width: 100%"> </a>
        </div>
    </header>
    <main role="main" style="margin-top:10px;">
        <!-- Marketing messaging and featurettes==================================================-->
        <div class="container marketing">
            <div class="row titly" style="justify-content:center;align-items:center;display:flex;">
                <p class="para mb-0" style="color:black;text-align:center;line-height: 1;">Avechi clients share their shopping experience with us</p>{{-- Say, feel and Share your shopping experience with Avechi! --}}{{-- --}}</div>{{--
            <div class="row mb-5" style="justify-content:center;align-items:center;display:flex;"> <a href="{{route('testimonials.create')}}" class="btn abutton">Share Your Testimonial</a> </div>--}}@if (session('status'))
            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{session('status')}}</div>@endif
            
                
            @if ($testimonies == null)
            
                <center><p class="paragraph"> Be the first to share your shopping experience <a href="{{ route('testimonials.create') }}" style="color:#9e0101;"> here</a></p></center>
            
            @else
                
            
            <div class="row mt-0">  @foreach ($testimonies as $item)
                <div class="col-lg-4 mt-3">
                    <p class="paragraph"> <sup><i class="fa fa-quote-left" style="font-size:5px" aria-hidden="true"></i></sup>{{$item->testimonial}}<sup><i class="fa fa-quote-right" style="font-size:5px" aria-hidden="true"></i></sup> </p>
                    <img src="../images/{{$item->rate}}.png" style="width:50%" alt="Image">
                <h2 style="font-size:18px">{{$item->firstname}} {{$item->lastname}}</h2> </div>@endforeach </div>{{$testimonies->links()}}

                    @endif
                 
            <hr class="featurette-divider"> </div>
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; Copyright © 2018 Avechi. All rights reserved.</p>
        </footer>
        
    </main>
    
</body>

</html>