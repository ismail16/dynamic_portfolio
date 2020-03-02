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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <link href="{{ asset('frontend_assets/css/font-awesome.min.css') }}" rel="stylesheet" /> -->
    <link href="https://blackrockdigital.github.io/startbootstrap-resume/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />

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
    @else
        <link href="{{ asset('frontend_assets/theme_color/pink.css')}}" rel="stylesheet" />
    @endif



    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body>

    @if($setting->theme_number == 'theme1')
        @include('frontend.pages.theme1')
    @elseif($setting->theme_number == 'theme2')
        @include('frontend.pages.theme2')
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    @if($setting->theme_number == 'theme1')
        <script src="{{ asset('frontend_assets/theme1/wow.min.js')}}"></script>
        <script src="{{ asset('frontend_assets/theme1/custom.js')}}"></script>
    @elseif($setting->theme_number == 'theme2')
        <script src="{{ asset('frontend_assets/theme2/resume.min.js')}}"></script>
    @endif
    

    <script type="text/javascript">
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
                        alert(data.success);
                    }else {
                        alert('Something is Wrong !!');
                        console.log(data)
                    }
                }
            });
        }
    </script>

</body>
</html>
