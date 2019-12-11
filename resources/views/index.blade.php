<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="content">
    <div class="row">
        @for($i = 0; $i<50;$i++)
            <span style="border:1px solid black;padding:4px"><a
                    href="@if(request()->has('sort'))?sort={{ request()->get('sort') }}@else ? @endif&@if(request()->has('sortdir'))sortdir={{ request()->get('sortdir') }}@endif&page={{ $i }}">{{ $i+1 }}</a></span>
        @endfor
    </div>
    <table border="1px">
        <tr>
            <th><a href="?sort=Наименование&sortdir={{ request()->get('sortdir') == 'desc' ? 'asc' : 'desc' }}">Наименование @if(request()->get('sort') == 'Наименование') @if(request()->get('sortdir') == 'asc')
                        <img height='12px' width='12px' src="/img/down.png"> @else <img height='14px' width='14px'
                                                                                      src="/img/up.png">@endif @endif
                </a></th>
            <th>
                <a href="?sort=Область&sortdir={{ request()->get('sortdir') == 'desc' ? 'asc' : 'desc' }}">Область @if(request()->get('sort') == 'Область')  @if(request()->get('sortdir') == 'asc')
                        <img height='12px' width='12px' src="/img/down.png"> @else <img height='14px' width='14px'
                                                                                      src="/img/up.png">@endif @endif
                </a></th>
            <th>
                <a href="?sort=Население&sortdir={{ request()->get('sortdir') == 'desc' ? 'asc' : 'desc' }}">Население @if(request()->get('sort') == 'Население') @if(request()->get('sortdir') == 'asc')
                        <img height='12px' width='12px' src="/img/down.png"> @else <img height='14px' width='14px'
                                                                                      src="/img/up.png">@endif @endif
                </a></th>
            <th><a href="?sort=ДатаОснования&sortdir={{ request()->get('sortdir') == 'desc' ? 'asc' : 'desc' }}">ДатаОснования @if(request()->get('sort') == 'ДатаОснования') @if(request()->get('sortdir') == 'asc')
                        <img height='12px' width='12px' src="/img/down.png"> @else <img height='14px' width='14px'
                                                                                      src="/img/up.png">@endif @endif
                </a></th>
        </tr>
        @foreach($citys as $city)
            <tr>
                <td>{{ $city->Наименование }}</td>
                <td>{{ $city->Область }}</td>
                <td>{{ $city->Население }}</td>
                <td>{{ $city->ДатаОснования }}</td>
            </tr>
        @endforeach
    </table>
    @for($i = 0; $i<50;$i++)
        <span style="border:1px solid black;padding:4px"><a
                href="@if(request()->has('sort'))?sort={{ request()->get('sort') }}@else ? @endif&@if(request()->has('sortdir'))sortdir={{ request()->get('sortdir') }}@endif&page={{ $i }}">{{ $i+1 }}</a></span>
    @endfor
</div>
</body>
</html>
