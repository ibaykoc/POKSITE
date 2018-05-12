<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <title>POKEMON SITE</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center" >WELCOME TO POKEMON SITE</h1>
                @for ($i = 0; $i < count($cards); $i+=3)
                    <div class="row">
                        @if($i < count($cards))         
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="{{$cards[$i]['imageUrl']}}" alt="{{$cards[$i]['name']}}">
                        </div>
                        @endif
                        @if($i+1 < count($cards))         
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="{{$cards[$i+1]['imageUrl']}}" alt="{{$cards[$i+1]['name']}}">
                        </div>
                        @endif
                        @if($i+2 < count($cards))         
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="{{$cards[$i+2]['imageUrl']}}" alt="{{$cards[$i+2]['name']}}">
                        </div>
                        @endif
                    </div>
                @endfor
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>