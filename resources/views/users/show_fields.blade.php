<!-- Name Field -->
<div class="col-sm-12" style="margin-bottom: 1%;">
    <h6><strong>Rol de este usuario:</strong></h6>
    <a href="/roles/{{$user->roles_id}}"><button type="button" class="btn btn-outline-primary">{{ $user->role_name[0]['name'] }}</button></a>
</div>

<!-- Name Field -->
<div class="col-sm-12" style="margin-bottom: 1%;">
    <h6><strong>Rol de este usuario:</strong></h6>
    <a href="/roles/{{$user->roles_id}}"><button type="button" class="btn btn-outline-primary">{{ $user->role_name[0]['name'] }}</button></a>
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

<<<<<<< HEAD

<h1>TRANSACCIONES DE ESTE USUARIO</h1>

<div class="col-sm-12">
    <table class="table">
        <thead class="table-dark">
=======
<<<<<<< HEAD

<h1>TRANSACCIONES DE ESTE USUARIO</h1>

<div class="col-sm-12">
    <table class="table">
        <thead class="table-dark">
=======
<h1>Transacciones de este usuario</h1>

<div class="col-sm-12">
    <table class="table table-bordered">
        <thead>
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
            <tr>
                <th scope="col">Transactions Id</th>
                <th scope="col">Producto</th>
                <th scope="col">Amount</th>
<<<<<<< HEAD
                <th scope="col">payment_method</th>
                <th scope="col">status</th>
=======
<<<<<<< HEAD
                <th scope="col">payment_method</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalAmount = 0;  // Inicializamos la variable para almacenar el total
=======
                <th scope="col">Metodo de pago</th>
                <th scope="col">Status</th>
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
            </tr>
        </thead>
        <tbody>
            @php
<<<<<<< HEAD
                $totalAmount = 0;  // Inicializamos la variable para almacenar el total
=======
            $total_amount = 0;
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
            @endphp
            @foreach ($user->transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
                    <td><a href="/qrcodes/{{$transaction->qrcode_id}}">{{ $transaction->qrcode ? $transaction->qrcode->product_name : 'N/A' }}</a>
                 
                    <img src="../{{ $transaction->qrcode ? $transaction->qrcode->product_url_image_path : 'N/A' }}" width="100px" />
                </td>
                    <td>{{ $transaction->amount }}</td>
<<<<<<< HEAD
=======
=======
                    <td>{{ $transaction->product['product_name'] }}<img src="../{{ $transaction->product['product_url_image_path'] }}" width="100px"></td>
                    <td>${{ $transaction->amount}}</td>
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status }}</td>
                </tr>
                @php
<<<<<<< HEAD
                    $totalAmount += $transaction->amount;  // Sumamos el monto de la transacción al total
=======
<<<<<<< HEAD
                    $totalAmount += $transaction->amount;  // Sumamos el monto de la transacción al total
=======
                $total_amount += $transaction->amount;
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
                @endphp
            @endforeach
        </tbody>
        <tfoot>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
            <tr>
                <td colspan="2"></td>
                <td>Total: ${{ $totalAmount }}</td>
                <td></td>
                <td></td>
            </tr>
<<<<<<< HEAD
=======
=======
            <th>
                <td colspan="5"><b>Total:</b> {{$total_amount}}</td>
            </th>
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
        </tfoot>
    </table>
</div>

<<<<<<< HEAD

<h1>PRODUCTOS DE ESTE USUARIO</h1>
=======
<<<<<<< HEAD

<h1>PRODUCTOS DE ESTE USUARIO</h1>

<div class="col-sm-12">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col ">Producto Id</th>
                <th scope="col">Producto</th>
                <th scope="col">amout</th>
            </tr>
        </thead>
        <tbody>
            @php
            $totalAmount = 0;  // Inicializamos la variable para almacenar el total
            @endphp
            @foreach ($user->qrcodes as $qrcode)
                <tr>
                    <td>{{ $qrcode->id }}</td>
                    <td>
                    <a href="/qrcodes/{{$qrcode->id}}">{{ $qrcode->product_name }}</a>
                        <img src="../{{$qrcode->product_url_image_path}}" width="100px" />
                    </td>
                    <td>{{ $qrcode->amount }}</td>
=======
<h1>Productos de este usuario</h1>
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7

<div class="col-sm-12">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col ">Producto Id</th>
                <th scope="col">Producto</th>
                <th scope="col">amout</th>
            </tr>
        </thead>
        <tbody>
            @php
            $totalAmount = 0;  // Inicializamos la variable para almacenar el total
            @endphp
            @foreach ($user->qrcodes as $qrcode)
                <tr>
                    <td>{{ $qrcode->id }}</td>
<<<<<<< HEAD
                    <td>
                    <a href="/qrcodes/{{$qrcode->id}}">{{ $qrcode->product_name }}</a>
                        <img src="../{{$qrcode->product_url_image_path}}" width="100px" />
                    </td>
                    <td>{{ $qrcode->amount }}</td>
=======
                    <td>{{ $qrcode->product_name }} <img src="../{{$qrcode->product_url_image_path}}" width="100px"/></td>
                    <td>${{ $qrcode->amount}}</td>
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
                </tr>
                @php
                $totalAmount += $qrcode->amount;  // Sumamos el monto de la transacción al total
            @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"></td>
                <td>Total: ${{ $totalAmount }}</td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>