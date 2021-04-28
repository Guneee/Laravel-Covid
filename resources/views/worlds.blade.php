<div class="column" style="background-color:#bbb;">
    <h2>Ковид өвчлөлийн лист (Өвчлөл эхлэсэн өдрөөс хойш)</h2>

foreach ($data as item)
<ul>
<li>
<h1>Он сар: {{$items['Date']}} </h1>
<h4> {{$item['Country']}}</h4>
<h3> Нийт өвдсөн байгаа хүний тоо: <danger>{{$item['Confirmed']}}</danger></h3>
<h3> Нийт эдгэсэн байгаа хүний тоо: {{$item['Recovered']}}</h3>
<br><h2><i>Одоогоор өвчтэй байгаа хүний тоо: {{$item['Active']}}</i></h2> </br>
</li>
endforeach()
</ul>
  </div>
</div>