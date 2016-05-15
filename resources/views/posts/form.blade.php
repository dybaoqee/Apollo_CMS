<form class="form-horizontal" action="{{ $form['url'] }}" method="{{ $form['method'] }}" enctype="multipart/form-data">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="{{ isset($form['_method'])? $form['_method'] : $form['method'] }}">

    <div class="form-group{!! ($errors->has('title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="title">Post Title</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="title" value="{!! Request::old('title', $form['defaults']['title']) !!}" type="text" class="form-control" placeholder="Post Title">
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('summary')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="summary">Post Summary</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="summary" value="{!! Request::old('summary', $form['defaults']['summary']) !!}" type="text" class="form-control" placeholder="Post Title">
            {!! ($errors->has('summary') ? $errors->first('summary') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('body')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="body">Post Body</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="body" type="text" class="form-control" data-provide="markdown" placeholder="Post Body" rows="10">{!! Request::old('body', $form['defaults']['body']) !!}</textarea>
            {!! ($errors->has('body') ? $errors->first('body') : '') !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="body">Image</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <input name="image" type="file" class="form-control" data-provide="markdown" >
        </div>
    </div>

    <div class="form-group{!! ($errors->has('address')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="address">地址</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <input name="address" value="{!! Request::old('address', $form['defaults']['address']) !!}" type="text" class="form-control" placeholder="地址">
            {!! ($errors->has('address') ? $errors->first('address') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('map')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="map">地图链接</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <input name="map" value="{!! Request::old('map', $form['defaults']['map']) !!}" type="text" class="form-control" placeholder="地图链接">
            {!! ($errors->has('map') ? $errors->first('map') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('promotion')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="promotion">优惠</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <input name="promotion" value="{!! Request::old('promotion', $form['defaults']['promotion']) !!}" type="text" class="form-control" placeholder="优惠">
            {!! ($errors->has('promotion') ? $errors->first('promotion') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('phone')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="phone">电话</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <input name="phone" value="{!! Request::old('phone', $form['defaults']['address']) !!}" type="text" class="form-control" placeholder="电话">
            {!! ($errors->has('phone') ? $errors->first('phone') : '') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>

</form>
