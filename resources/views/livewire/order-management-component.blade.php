<div>

    <h1>Order Management</h1>

    <table>

    <thead>

        <tr>

            <th>Order ID</th>

            <th>Product</th>

            <th>Quantity</th>

            <th>Price Per Item</th>

            <th>Total Price</th>

            <th>User</th>

            <th>Status</th>

            <th>Actions</th>

        </tr>

    </thead>

    <tbody>

        @foreach ($orders as $order)

            <tr>

                <td>{{ $order->id }}</td>

                <td>{{ $order->product->title }}</td>

                <td>{{ $order->quantity }}</td>

                <td>${{ number_format($order->price_per_item, 2) }}</td>

                <td>${{ number_format($order->total_price, 2) }}</td>

                <td>{{ $order->user->name }}</td>

                <td>{{ $order->status }}</td>

                <td>

                    <button wire:click="approveOrder({{ $order->id }})">Approve</button>

                    <button wire:click="cancelOrder({{ $order->id }})">Cancel</button>

                </td>

            </tr>

        @endforeach

    </tbody>

</table>

</div>