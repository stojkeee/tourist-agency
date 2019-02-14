<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <p>Title:</p>
            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <p>Date:</p>
            {{ Form::text('date', null, array('class' => 'datepicker','id' => 'datepicker')) }}
        </div>
        <div class="form-group">
            <p>Price:</p>
            <div class="input-group mb-3">
            {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
                <div class="input-group-prepend">
                    <span class="input-group-text">KM</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <p>Description:</p>
            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
        <div class="form-group">
            <p for="author">Cover:</p>
            <input type="file" class="form-control" name="offercover"/>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn-bg-send white">Submit</button>
        </div>
    </div>

    </div>
