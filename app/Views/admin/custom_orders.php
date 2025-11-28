@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Custom Orders</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Order Date</th>
                            <th>Delivery Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customOrders as $customOrder)
                            <tr>
                                <td>{{ $customOrder->id }}</td>
                                <td>{{ $customOrder->customer->name }}</td>
                                <td>{{ $customOrder->order_date }}</td>
                                <td>{{ $customOrder->delivery_date }}</td>
                                <td>{{ $customOrder->status }}</td>
                                <td>
                                    <a href="{{ route('custom_orders.show', $customOrder->id) }}">Show</a>
                                    <a href="{{ route('custom_orders.edit', $customOrder->id) }}">Edit</a>
                                    <form action="{{ route('custom_orders.destroy', $customOrder->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
