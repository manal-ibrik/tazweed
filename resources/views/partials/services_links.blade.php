<ul>
    @forelse($services as $service)
        @if ($loop->first)
            <li><a class="active" href="{{route('services.index')}}#{{$service->id}}-section">{{$service->services_title}}</a></li>
        @else
            <li><a href="{{route('services.index')}}#{{$service->id}}-section">{{$service->services_title}}</a></li>
        @endif
    @empty
    <h2>no pages yet</h2>
    @endforelse
</ul>