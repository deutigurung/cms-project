<ul>
    @foreach($childs as $child)
        <li>
            {{ $child->title }}
            @if(count($child->childs))
                @include('backend.menus.manageChild',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
