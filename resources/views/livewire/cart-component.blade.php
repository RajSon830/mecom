<div>

    @if (session()->has('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif

    @if (session()->has('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if (empty($cart))
        <p>Your cart is empty.</p>
    @else
        <div class="product_card">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $productId => $item)
                            <tr>
                                <td>{{ $item['title'] }}</td>
                                <td>${{ $item['price'] }}</td>
                                <td>
                                    <input type="number" 
                                           wire:model.lazy="cart.{{ $productId }}.quantity" 
                                           min="1" 
                                           wire:change="updateQuantity(cart.{{ $productId }}, $event.target.value)">
                                </td>
                                <td>${{ $item['price'] * $item['quantity'] }}</td>
                                <td>
                                    <button class="btn btn-danger" wire:click="removeFromCart({{ $productId }})">Remove</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <td></td>
                            <td><h3>Total: {{ $total }}</h3></td>
                            <td><button wire:click="confirmOrder" class="btn btn-primary">Confirm Order</button></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    @endif

</div>
