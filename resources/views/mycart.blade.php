<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>検索実装画面</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https:/fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Fonts -->
         <link rel="dns-prefetch" href="fonts.gstatic.com">
         <link href="https:fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
         <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('sidebar')
        <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                   {{ config('app.name', 'Laravel') }}
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                   
                    </button>
                        
            <div class="">
                <div class="mx-auto" style="max-width:1200px">
                <h1 style="text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">プラン検索</h1>
                        <div class="d-flex flex-row flex-wrap">
                            商品一覧を出したい
                            <form action="{{url('/details')}}" method="GET">
                                <p style=" text-align:center; padding:5px 3px; font-weight:bold;"><input type="text" name="keyword" value="{{$keyword}}"></p>
                                <p style=" text-align:center"><input type="submit" value="検索"></p>
                                
                            </form>
                             
 
                             @if($details->count())
                            <table border="1" style=" text-align:left; padding:0px 10px 0px 50px;">
                                 <tr>
                                    <th>course</th>
                                    <th>price</th>
                                    <th>open</th>
                                    <th>close</th>
                                    <th>day</th>
                                </tr>
                            @foreach ($details as $detail)
                                <tr>
                                    <td>{{ $detail->course}}</td>
                                    <td>{{ $detail->price}}</td>
                                    <td>{{ $detail->open}}</td>
                                    <td>{{ $detail->close}}</td>
                                    <td>{{ $detail->day}}</td>
                                </tr>
                            
                            @endforeach
                             </table>
                            {{$details->links()}} 
                            @else
                            
                            <p>見つかりませんでした。</p>
                            @endif
                           
                </div>
            </div>
        </div>
</div>
       
        
        
        
        
        
        
        
       
        
    </body>
</html>