@extends('layouts.master')

@section('content')

	<div class="container">	
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Title : {{ $content->content_title}}</h1>	
				<video style="width: 400px; height:400px; class="card-img-top" src="{{URL::asset("/uploads/images/$content->content_video")}}" alt="Card image cap" controls>
			    </video>

				<p>Body : {{ $content->content_body}}</p>
				<p>Created at : {{ $content->created_at}}</p>
				<p>Updated at : {{ $content->updated_at}}</p>


			</div>
			  <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox text-center"></div>
		</div>
	</div>
@endsection