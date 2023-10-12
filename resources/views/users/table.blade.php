<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="users-table">
            <thead>
            <tr>
<<<<<<< HEAD
                <th>rol</th>
=======
<<<<<<< HEAD
                <th>rol</th>
=======
                <th>Rol</th>
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
                <th>Name</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
<<<<<<< HEAD
                    <td>{{ $user->role_name[0]['name'] }}</td>
                    <td><a href="{{ route('users.show', [$user->id]) }}"><button type="button" class="btn btn-outline-primary">{{ $user->name }}</button></a></td>
=======
<<<<<<< HEAD
                    <td>{{ $user->role_name[0]['name'] }}</td>
                    <td><a href="{{ route('users.show', [$user->id]) }}"><button type="button" class="btn btn-outline-primary">{{ $user->name }}</button></a></td>
=======
                    <td><button type="button" class="btn btn-outline-primary">{{ $user->role_name[0]['name'] }}</button></td>
                    <td>{{ $user->name }}</td>
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
                    <td>{{ $user->email }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$user->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', [$user->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $users])
        </div>
    </div>
</div>