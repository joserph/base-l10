<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            {!! Form::label('name', 'Rol Name', ['class' => 'form-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter rol name', 'autofocus']) !!}
        </div>
    </div><!-- Col -->
    
    <div class="col-sm-4">
        <div class="mb-3">
            {!! Form::label('roles', 'Permissions', ['class' => 'form-label']) !!}
            <br>
            @foreach ($permission as $item)
                <label for="permission" class="form-check-label">
                    @isset($role)
                        {{ form::checkbox('permission[]', $item->id, in_array($item->id, $rolePermissions) ? true : false, ['class' => 'form-check-input']) }}
                        {{ $item->name }}
                    @else  
                        {{ form::checkbox('permission[]', $item->id, false, ['class' => 'form-check-input']) }}
                        {{ $item->name }}
                    @endisset
                    
                </label>
                <br>
            @endforeach
        </div>
    </div><!-- Col -->
</div><!-- Row -->