@extends('layouts.master')

@section('content')
	<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">

            <h1 class="text-center text-success">{{ Session::get('message')}}</h1>
                <form action="{{ route('create_content')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}

                     <div class="form-group">
                        <label class="control-label col-md-3">Content Title</label>
                        <div class="col-md-9">
                            <input type="text" name="content_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('content_title') ? $errors->first('content_title') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="content_type" class="control-label col-md-3">Content Type</label>
                        <div class="col-md-9" >
	                        <select class="form-control" name="content_type" id="check">
						      <option value="2">Post</option>
						      <option value="1">Video</option>
						    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Content Image</label>
                        <div class="col-md-9">
                            <input type="file" name="content_image" accept="image/*">
                            <span class="text-danger">{{ $errors->has('content_image') ? $errors->first('content_image') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group" id="video">
                        <label class="control-label col-md-3">Content Video</label>
                        <div class="col-md-9">
                            <input type="file" name="content_video" accept="image/*">
                            <span class="text-danger">{{ $errors->has('content_video') ? $errors->first('content_video') : ' '}}</span>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3">Content Body</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="content_body"></textarea>
                            <span class="text-danger">{{ $errors->has('content_body') ? $errors->first('content_body') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content_type" class="control-label col-md-3">Content Section</label>
                        <div class="col-md-9">
	                        <select class="form-control" name="section">
						      <option value="1">Section-1</option>
						      <option value="2">Section-2</option>
						    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="status" value="1"/> Published</label>
                            <label><input type="radio" name="status" value="0"/> Unpublished</label><br>
                            <span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" value="Create Content" class="btn btn-success btn-block"/>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#video').hide();
        $('#check').change(function(){
            if( $('#check').val()==2){
              $('#video').hide();

           }else{
            $('#video').show();
           }

        })
    
});
</script>




