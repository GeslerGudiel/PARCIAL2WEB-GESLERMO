<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('primNombre') }}
            {{ Form::text('primNombre', $cliente->primNombre, ['class' => 'form-control' . ($errors->has('primNombre') ? ' is-invalid' : ''), 'placeholder' => 'Primnombre']) }}
            {!! $errors->first('primNombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primApellido') }}
            {{ Form::text('primApellido', $cliente->primApellido, ['class' => 'form-control' . ($errors->has('primApellido') ? ' is-invalid' : ''), 'placeholder' => 'Primapellido']) }}
            {!! $errors->first('primApellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $cliente->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>