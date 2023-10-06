<!-- Rol Field -->
<div class="col-sm-12">
    {!! Form::label('rol', 'Rol:') !!}
    <p><button type="button" class="btn btn-outline-primary">{{ $user->role_name[0]['name'] }}</button></p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<h1>Transacciones de este usuario</h1>

<div class="col-sm-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Transactions Id</th>
                <th scope="col">Producto</th>
                <th scope="col">Amount</th>
                <th scope="col">Metodo de pago</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @php
            $total_amount = 0;
            @endphp
            @foreach ($user->transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->product['product_name'] }}<img src="../{{ $transaction->product['product_url_image_path'] }}" width="100px"></td>
                    <td>${{ $transaction->amount}}</td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status }}</td>
                </tr>
                @php
                $total_amount += $transaction->amount;
                @endphp
            @endforeach
        </tbody>
        <tfoot>
            <th>
                <td colspan="5"><b>Total:</b> {{$total_amount}}</td>
            </th>
        </tfoot>
    </table>
</div>

<h1>Productos de este usuario</h1>

<div class="col-sm-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Produc Id</th>
                <th scope="col">Producto</th>
                <th scope="col">Amount</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($user->qrcodes as $qrcode)
                <tr>
                    <td>{{ $qrcode->id }}</td>
                    <td>{{ $qrcode->product_name }} <img src="../{{$qrcode->product_url_image_path}}" width="100px"/></td>
                    <td>${{ $qrcode->amount}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>