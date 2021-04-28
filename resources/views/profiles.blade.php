<title>Covid Tracker</title>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  border: 5px solid green; 
}
</style>
</head>
<body>
<div class = "center"> 
<h2>Ковид өвчлөлийн лист (Өвчлөл эхлэсэн өдрөөс хойш) Монголд</h2>
</div>
  <div class="center" style="background-color:#aaa; " >

<ul>
@foreach($data as $item)
<li>
<h1>Он сар: {{$item['Date']}} </h1>
<h4> {{$item['Country']}}</h4>
<h3> Нийт өвдсөн байгаа хүний тоо: <danger>{{$item['Confirmed']}}</danger></h3>
<h3> Нийт эдгэсэн байгаа хүний тоо: {{$item['Recovered']}}</h3>
<br><h2><i>Одоогоор өвчтэй байгаа хүний тоо: {{$item['Active']}}</i></h2> </br>
</li>
@endforeach()
</ul>
</div>
</body>
</html>