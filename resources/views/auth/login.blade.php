
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="https://avechi.com/pub/media/favicon/stores/19/Favicon.jpg" />
    <link rel="shortcut icon" type="image/x-icon" href="https://avechi.com/pub/media/favicon/stores/19/Favicon.jpg" />

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/mobileresponsive.css" rel="stylesheet">
    <link href="https://demo.phpjabbers.com/1542877085_568/index.php?controller=pjFront&action=pjActionLoadCss&layout=layout1" type="text/css" rel="stylesheet" />
    <style>
        .paragraph{
            font-family: "Droid Serif";
    font-size: 17px;
    font-weight: 400;
    font-style: italic;
    line-height: 2;
    padding-bottom: 15px;
        }
      .abutton{
          padding: 10px;
          background-color: goldenrod;
          border: none;
          color: white;
          font-style: italic;
          font-family: "Droid Serif";
          font-size: 17px;
          font-weight: 600;
          font-style: italic;
          line-height: 2;
     }  
    </style>
     <style>
            * {
                box-sizing: border-box;
            }
            
            input[type=email], select {
                width: 39%;
                margin-right: 10px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }
           
input[type=password] {
                width: 39%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }


            
           
            .names{
                width: 30%;
                float: left;
                margin-right: 6px;
            }
            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
                
            font-family: "Droid Serif";
    font-size: 17px;
    font-weight: 600;
    font-style: italic;
    line-height: 2;
    padding-bottom: 15px;
        }
            input[type=submit] {
                background-color: goldenrod;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }
            
            input[type=submit]:hover {
                background-color: #ff0012;
            }
            
            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
            
            .col-25 {
                float: right;
                width: 25%;
                margin-top: 6px;
            }
            
            .col-75 {
                /* float: left; */
                width: 75%;
                margin-top: 6px;
            }
            
            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            .centralize{
                justify-content: center;
                align-items: center;
                display: flex;
            }
            .form{
                width: 50%;
            }
            .inputs{
                width: 60%;
            }
            
            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 800px) {
                .col-25, .col-75, input[type=submit],input[type=email],input[type=password],textarea, .names,.form,.inputs {
                    width: 100%;
                    margin-top: 0;
                }
            }
            </style>
          
  </head>
  <body>

              
              
    <main role="main" class="mt-5">
           
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

            <div class="container centralize">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-

right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class=" names inputs" name="email" value="{{ old('email') }}" 

required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-

right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class=" names inputs" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 

name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            
                                
                            </a>
                        </div>
                    </div>
                </form>
            </div>
          
            
      </div><!-- /.container -->


     
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/"></script>
  </body>
</html>
