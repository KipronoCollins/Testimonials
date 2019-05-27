<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Administrator</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/mobileresponsive.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://avechi.com/pub/media/favicon/stores/19/Favicon.jpg" />
    <link rel="shortcut icon" type="image/x-icon" href="https://avechi.com/pub/media/favicon/stores/19/Favicon.jpg" />
    <style>
        input[type=submit] {
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        
        input[type=submit]:hover {
            background-color: blue;
            color: black;
        }
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <main role="main" class="mt-5">
        <div class="container marketing"> <a class=" text-success btn btn-outline-success" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: one;">{{csrf_field()}}</form>
            <div class="container table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Order Number </th>
                            <th> Testimonial </th>
                            <th> Rating </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody> 
                        @if ($testimony == null)
                        <tr><td colspan="6" style="text-align:center;"> No new Testimonials to approve </td></tr>
                        @else
                        @foreach ($testimony as $testimonial)
                        <tr>
                            <td>{{$testimonial->id}}</td>
                            <td style="word-break:break-all;">{{$testimonial->ordernumber}}</td>
                            <td style="word-break:break-all;">{{$testimonial->testimonial}}</td>
                            <td>{{$testimonial->rate}}</td>
                            <td>
                                <form action="{{route('testimonials.update', $testimonial->id)}}" method="POST"> @csrf{{method_field('PATCH')}}
                                    <input type="hidden" id="status" name="status" value="post">
                                    <input type="submit" class="btn btn-success m-3" value="POST"> </form>
                                <form action="{{route('testimonials.update', $testimonial->id)}}" method="POST"> @csrf{{method_field('PATCH')}}
                                    <input type="hidden" id="status" name="status" value="withhold">
                                    <input type="submit" class="btn btn-danger m-3" value="WITHHOLD"> </form>
                            </td>
                        </tr>@endforeach
                        <tr>
                                <td colspan="6">{{$testimony->links()}}</td>
                                
                            </tr>
                        @endif
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    
</body>

</html>