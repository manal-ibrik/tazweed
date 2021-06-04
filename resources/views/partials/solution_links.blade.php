<ul>
    @forelse($solutions as $solution)
        @if ($loop->first)
            <li><a class="active" href="{{route('solutions.index')}}#{{$solution->id}}-section">{{$solution->solutions_title}}</a></li>
        @else
            <li><a href="{{route('solutions.index')}}#{{$solution->id}}-section">{{$solution->solutions_title}}</a></li>
        @endif
    @empty
    <h2>no pages yet</h2>
    @endforelse
</ul>