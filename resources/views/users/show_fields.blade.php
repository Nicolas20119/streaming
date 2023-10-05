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

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<<<<<<< HEAD
<!-- Roles Id Field -->
<div class="col-sm-12">
    {!! Form::label('roles_id', 'Roles Id:') !!}
    <p>{{ $user->roles_id }}</p>
</div>

=======
>>>>>>> f3987a5228b103f97d303cd47fdf76728d155f0d
<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

<<<<<<< HEAD
=======
<h1>Transacciones</h1>

<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Transactions Id</th>
                <th>Producto</th>
                <th>Amount</th>
                <th>Payment method</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->qrcode_id }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h1>Productos de este usuario</h1>
<div class="col-sm-12">
    <table class="table">
        <thead>
            <tr>
                <th>Producto Id</th>
                <th>Producto</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->qrcodes as $qrcode)
                <tr>
                    <td>{{ $qrcode->id }}</td>
                    <td>{{ $qrcode->product_name }} <img src="../{{ $qrcode->product_url_image_path }}" width="100px"/></td>
                    <td>{{ $qrcode->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
>>>>>>> f3987a5228b103f97d303cd47fdf76728d155f0d
