<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <strong>Title:</strong>
            {!! Form::text('title', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
            <strong>Body:</strong>
            {!! Form::text('body', null, array('placeholder' => 'Body','class' => 'form-control')) !!}
        </div>
        @if ($errors->has('body'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>