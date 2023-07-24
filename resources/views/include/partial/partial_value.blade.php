<ul>

    @if ($loop -> even)

        <div class="bg-primary">

            <li>{{ $key }}</li>
            <li>{{ $product['product_name'] }}</li>
            <li>{{ $product['product_color'] }}</li>
            <li>{{ $product['product_price'] }}</li>

        </div>

        @else

        <div class="bg-secondary">
        <li>{{ $key }}</li>
        <li>{{ $product['product_name'] }}</li>
        <li>{{ $product['product_color'] }}</li>
        <li>{{ $product['product_price'] }}</li>
        </div>

    @endif

</ul>
