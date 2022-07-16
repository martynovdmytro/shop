<x-layout>
    <div class="list-group">
        <h4>Products</h4>
{{--        {{ dd($items) }}--}}
        @if(!empty($items))
        @foreach($items as $item)
            <div class="row bg-info rounded m-1">
                <h5 class="col-md-2 m-1 text-black">{{ $item['title'] }}</h5>
                <h5 class="col-md-1 m-1 text-black">{{ $item['price'] }}$</h5>
                <form class="col-md-2 offset-4" method="GET" action="/cart/show">
                    <button class="btn btn-danger w-100 m-2" type="submit">Show</button>
                </form>
                <form class="col-md-2" method="GET" action="/cart/delete/{{ $item['id'] }}">
                    <button class="btn btn-danger w-100 m-2" type="submit">Delete</button>
                </form>
            </div>
        @endforeach
        @else
            <h2>Cart is empty!</h2>
        @endif
    </div>
    <form class="col-md-2" method="GET" name="deleteAll" action="/cart/delete/all">
        <button class="btn btn-danger w-100 m-2" type="submit">Delete All</button>
    </form>
</x-layout>
