<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style type="text/css">
        body {
            background-color: #000000;
            color: #FFFFFF;
                        
        }
         .thumb {
             width: 200px;
             height: 150px;
             margin: 3px auto 3px auto;


         }
        
        #photo 
        { width: 600px; 
          height: 450px;
            margin: 0 auto 10px auto;
            display: block;
        }

        h1 {
            font-size: 32pt;
            text-align: center;
        }


        h2 {
            font-size: 18pt;
            text-align: center;
        }
        
        h3 {
            font-size: 14pt;
            text-align: center;
        }

        h3 a{color:rgb(255, 72, 0);}
        h3 a:visited{color:rgb(255, 72, 0);}

        #wrapper 
        { 
            width: 85vw;
            margin: 0px auto 0px auto;
        }

        #thumbwrapper {
            display: flex;
            height: 300px;
            flex-flow: row wrap;
        }

        #logo {
            width: 200px;
            margin: 0 auto 10px auto;
            display: block;
        }
    </style>
    @yield('css')

    <script type="text/javascript">
        function swap(elem) {            
            document.getElementById("photo").src = elem.src;
        }
    </script>
    @yield('js')
</head>
<body>
<div id="wrapper">
    <h1>The SEAGull</h1>
    <h3>
        @if (route('exterior') == url()->current())
            Exterior Photos
        @else
            <a href="{{ route('exterior') }}">Exterior Photos</a>
        @endif
        &nbsp;&nbsp;
        @if (route('interior') == url()->current())
            Interior Photos
        @else
            <a href="{{ route('interior') }}">Interior Photo</a>
        @endif
        &nbsp;&nbsp;
        @if (route('performance') == url()->current())
            Performance Specifications
        @else
            <a href="{{ route('performance') }}">Performance Specifications</a>
        @endif      
        &nbsp;&nbsp;
        @if (route('information') == url()->current())
            More Information
        @else
            <a href="{{ route('information') }}">More Information</a>
        @endif
        &nbsp;&nbsp;
        @if (route('pricing') == url()->current())
            Pricing
        @else
            <a href="{{ route('pricing') }}">Pricing</a>
        @endif	
        &nbsp;&nbsp;
        @if (route('videos') == url()->current())
            Videos
        @else
            <a href="{{ route('videos') }}">Videos</a>
        @endif		
    </h3>
    @yield('page')
</div>
</body>
</html>
