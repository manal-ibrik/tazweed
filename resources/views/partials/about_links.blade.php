<ul>
    @forelse($Abouts as $Abouts_page)
        @if ($loop->first)
            <li><a class="active" href="{{route('aboutus.index')}}#{{$Abouts_page->id}}-section">{{$Abouts_page->abouts_title}}</a></li>
        @else 
            <li><a class="" href="{{route('aboutus.index')}}#{{$Abouts_page->id}}-section">{{$Abouts_page->abouts_title}}</a></li>
        @endif
    @empty
        <h2>no pages yet</h2>
    @endforelse
</ul>