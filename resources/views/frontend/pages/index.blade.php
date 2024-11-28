<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" href="{{ asset('images/logo/'.$setting->logo)}}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Ismail Portfolio</title>
    <link rel="stylesheet" href="{{ asset('frontend_assets/bootstrap/css/bootstrap.min.css') }}">

    <link href="{{ asset('frontend_assets/css/font-awesome.min.css') }}" rel="stylesheet" />


    @if($setting->theme_number == 'theme1')
        <link href="{{ asset('frontend_assets/theme1/animate.css')}}" rel="stylesheet" />
        <link href="{{ asset('frontend_assets/theme1/style.css')}}" rel="stylesheet" />
    @elseif($setting->theme_number == 'theme2')
        <link href="{{ asset('frontend_assets/theme2/resume.min.css')}}" rel="stylesheet" />
    @endif

    @if($setting->theme_color == 'pink')
        <link href="{{ asset('frontend_assets/theme_color/pink.css')}}" rel="stylesheet" />
    @elseif($setting->theme_color == 'green')
        <link href="{{ asset('frontend_assets/theme_color/green.css')}}" rel="stylesheet" />
    @elseif($setting->theme_color == 'brown')
        <link href="{{ asset('frontend_assets/theme_color/brown.css')}}" rel="stylesheet" />
    @elseif($setting->theme_color == 'blue')
        <link href="{{ asset('frontend_assets/theme_color/blue.css')}}" rel="stylesheet" />
    @elseif($setting->theme_color == 'light')
        <link href="{{ asset('frontend_assets/theme_color/light.css')}}" rel="stylesheet" />
    @elseif($setting->theme_color == 'dark')
        <link href="{{ asset('frontend_assets/theme_color/dark.css')}}" rel="stylesheet" />
    @else
        <link href="{{ asset('frontend_assets/theme_color/pink.css')}}" rel="stylesheet" />
    @endif

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend_assets/theme_color/customs.css')}}" rel="stylesheet" />

</head>

<body>

    @if($setting->theme_number == 'theme1')
        @include('frontend.pages.theme1')
    @elseif($setting->theme_number == 'theme2')
        @include('frontend.pages.theme2')
    @endif



    <button onclick="topFunction()" id="gotoTop" title="Go to top" class="border theme_color">
        <i class="fa fa-chevron-up"></i>
    </button>

    <script src="{{ asset('frontend_assets/bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/bootstrap/js/bootstrap.min.js')}}"></script>

    @if($setting->theme_number == 'theme1')
        <script src="{{ asset('frontend_assets/theme1/wow.min.js')}}"></script>
        <script src="{{ asset('frontend_assets/theme1/custom.js')}}"></script>
    @elseif($setting->theme_number == 'theme2')
        <script src="{{ asset('frontend_assets/theme2/resume.min.js')}}"></script>
    @endif


    <script type="text/javascript">
        $("#about").click(function() {
            $('html, body').animate({
                scrollTop: $("#abouts").offset().top
            }, 1500);
        }); 
        $("#experience").click(function() {
            $('html, body').animate({
                scrollTop: $("#experiences").offset().top
            }, 1500);
        }); 
        $("#portfolio").click(function() {
            $('html, body').animate({
                scrollTop: $("#portfolios").offset().top
            }, 1500);
        }); 
        $("#education").click(function() {
            $('html, body').animate({
                scrollTop: $("#educations").offset().top
            }, 1500);
        }); 
        $("#skill").click(function() {
            $('html, body').animate({
                scrollTop: $("#skills").offset().top
            }, 1500);
        }); 
        $("#award").click(function() {
            $('html, body').animate({
                scrollTop: $("#awards").offset().top
            }, 1500);
        }); 

        $("#contact").click(function() {
            $('html, body').animate({
                scrollTop: $("#contacts").offset().top
            }, 1500);
        });


        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("gotoTop").style.display = "block";
            } else {
                document.getElementById("gotoTop").style.display = "none";
            }
           
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
         
             $('html, body').animate({scrollTop:0}, 'slow');
        }

        function contact_form_post(){
            $("#contact_form").submit(function(e){
                return false;
            });
            var token = $('meta[name="csrf-token"]').attr('content');
            var name = $('#contact_name').val()
            var email = $('#contact_email').val()
            var message = $('#contact_message').val()

            $.ajax({
                url: "{{ route('contact.post' )}}",
                method: "POST",
                data: { _token : token, name:name, email:email, message:message},
                success: function (data) {
                    if (data.success) {
                        alert(data.success)
                        window.location.reload();  
                    }else {
                        alert('Something is Wrong !!');
                        console.log(data)
                    }
                }
            });
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });
    </script>
</body>
</html>
