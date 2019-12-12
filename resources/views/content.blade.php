{{ $pagination->render() }}
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
{{ $pagination->render() }}