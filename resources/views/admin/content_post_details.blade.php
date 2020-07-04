@extends('layouts.master')

@section('content')

	<div class="container">	
		<div class="row ">
			<div class="col-md-12 text-center">
				<h1>Title : {{ $content->content_title}}</h1>
				<div class="video_content">
					<img style="width: 400px; height:400px" class="card-img-top" src="/uploads/images/{{ $content['content_image'] }}" alt="Card image cap">
				</div>
				<p>Body : {{ $content->content_body}}</p>
				<p>Created at : {{ $content->created_at}}</p>
				<p>Updated at : {{ $content->updated_at}}</p>


			</div>
			  <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox text-center"></div>
		</div>
	</div>
@endsection