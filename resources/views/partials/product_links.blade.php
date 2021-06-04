@foreach ($categories as $cat)
    <li><a href="{{route('products.index')}}#{{$cat->id}}">{{$cat->name}}</a></li>
    @empty
    <h2>no pages yet</h2>
    @endforelse
@endforeach