<div class="row">
    <div class="col-12">
        <div class="form-group">
            <p>Role:</p>
            {{ Form::select('role', array('admin' => 'Admin', 'user' => 'User'), null, array('class'=>'form-control','style'=>'' )) }}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn-bg-send white">Submit</button>
        </div>
    </div>

    </div>