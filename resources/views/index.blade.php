<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>検索実装画面</title>
    </head>
    <body>
        <h1 style=" text-align:center; font-size:30px;">検索ページ</h1>
        <form action="/details" method="GET">
            プラン：<input type="text" name="keyword" value="{{$keyword}}"><br>
            　場所：<input type="text" name="keyword1" value="{{$keyword1}}"><br>
            コース：<input type="text" name="keyword2" value="{{$keyword2}}"><br>
            店舗名：<input type="text" name="keyword3" value="{{$keyword3}}"><br>
            　価格：<input type="text" name="keyword4" value="{{$keyword4}}"><br>
            <p style=" text-align:center"><input type="submit" value="検索"></p>
        </form>
         <form action="/meets" method="GET">
            プラン：<input type="text" name="keyword0" value="{{$keyword}}"><br>
            　場所：<input type="text" name="keyword01" value="{{$keyword1}}"><br>
            コース：<input type="text" name="keyword02" value="{{$keyword2}}"><br>
            店舗名：<input type="text" name="keyword03" value="{{$keyword3}}"><br>
            　価格：<input type="text" name="keyword04" value="{{$keyword4}}"><br>
            <p style=" text-align:center"><input type="submit" value="検索"></p>
        </form>
         <form action="/shops" method="GET">
            プラン：<input type="text" name="keyword00" value="{{$keyword}}"><br>
            　場所：<input type="text" name="keyword001" value="{{$keyword1}}"><br>
            コース：<input type="text" name="keyword002" value="{{$keyword2}}"><br>
            店舗名：<input type="text" name="keyword003" value="{{$keyword3}}"><br>
            　価格：<input type="text" name="keyword004" value="{{$keyword4}}"><br>
            <p style=" text-align:center"><input type="submit" value="検索"></p>
        </form>
     @if($details->count())
        <table border="1" style=" text-align:left; padding:0px 10px 0px 50px;">
             <tr>
                <th>plan</th>
                <th>place</th>
                <th>course</th>
                <th>shop</th>
                <th>price</th>
                <th>open</th>
                 <th>close</th>
                 <th>day</th>
            </tr>
    @foreach ($details as $detail)
            <tr>
                <td>{{ $detail->plan}}</td>
                <td>{{ $detail->place}}</td>
                <td>{{ $detail->course}}</td>
                <td>{{ $detail->name}}</td>
                <td>{{ $detail->price}}</td>
                <td>{{ $detail->open}}</td>
                <td>{{ $detail->close}}</td>
                <td>{{ $detail->day}}</td>
            </tr>
    @endforeach
        </table>
    
    @else
        <p>見つかりませんでした。</p>
    @endif
    
    @if($details->count())
        <table border="1" style=" text-align:left; padding:0px 10px 0px 50px;">
             <tr>
                <th>plan</th>
                <th>place</th>
                <th>course</th>
                <th>shop</th>
                <th>price</th>
                <th>open</th>
                 <th>close</th>
                 <th>day</th>
            </tr>
    @foreach ($details as $detail)
            <tr>
                <td>{{ $detail->plan}}</td>
                <td>{{ $detail->place}}</td>
                <td>{{ $detail->course}}</td>
                <td>{{ $detail->name}}</td>
                <td>{{ $detail->price}}</td>
                <td>{{ $detail->open}}</td>
                <td>{{ $detail->close}}</td>
                <td>{{ $detail->day}}</td>
            </tr>
    @endforeach
        </table>
    
    @else
        <p>見つかりませんでした。</p>
    @endif
    
    @if($details->count())
        <table border="1" style=" text-align:left; padding:0px 10px 0px 50px;">
             <tr>
                <th>plan</th>
                <th>place</th>
                <th>course</th>
                <th>shop</th>
                <th>price</th>
                <th>open</th>
                 <th>close</th>
                 <th>day</th>
            </tr>
    @foreach ($details as $detail)
            <tr>
                <td>{{ $detail->plan}}</td>
                <td>{{ $detail->place}}</td>
                <td>{{ $detail->course}}</td>
                <td>{{ $detail->name}}</td>
                <td>{{ $detail->price}}</td>
                <td>{{ $detail->open}}</td>
                <td>{{ $detail->close}}</td>
                <td>{{ $detail->day}}</td>
            </tr>
    @endforeach
        </table>
    
    @else
        <p>見つかりませんでした。</p>
    @endif
    
    
       
    </body>
</html>