@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-8">
			<h2>section 1</h2>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							@if($section1_big->content_type == 1)
						    <div class="video_content">
						    	<!-- <video style="width: 100%" class="card-img-top" src="{{URL::asset("/uploads/images/$section1_big->content_image")}}" alt="Card image cap" controls>
						    	</video> -->
						    	<img style="width: 100%" class="card-img-top" src="/uploads/images/{{ $section1_big['content_image'] }}" alt="Card image cap">
						    	<a href="{{ route('content_show' ,['id'=>$section1_big->id])}}">
						    	    <i class="fas fa-play" href="{{asset('uploads')}}/images/$section1_big->content_video">
						    	    	
						    	    </i>
						    	</a>
						    </div>
						    @else
						    	<img style="width: 100%" class="card-img-top" src="https://via.placeholder.com/200x200.jpg?text=Content" alt="Card image cap">
						    @endif
						    <div class="card-body">
						        <h5 class="card-title p-2 pb-0">{{ $section1_big->content_title }}</h5>
						      
						    </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							@foreach($section1_small as $item)
							<div class="col-md-6 mb-2">
								<div class="card">
								    @if($item->content_type == 1)
								    <div class="video_content">
								    	<!-- <video style="width: 100%" class="card-img-top"  src="{{URL::asset("/uploads/images/$item->content_image")}}" alt="Card image cap" controls>
								    	</video> -->
								    	<img style="width: 100%" class="card-img-top" src="/uploads/images/{{ $item['content_image'] }}" alt="Card image cap">
						    	        <a href="{{ route('content_show' ,['id'=>$item->id])}}">
						    	        	<i class="fas fa-play" href="{{asset('uploads')}}/images/$item->content_video"></i>
						    	        </a>
								    </div>
								    @else
								    	<img style="width: 100%" class="card-img-top" src="https://via.placeholder.com/200x200.jpg?text=Content" alt="Card image cap">
								    @endif
								    <div class="card-body">
								        <h5 class="card-title p-2 pb-0">{{ $item->content_title }}</h5>
									
								    </div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4">
		<h2>section 2</h2>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							@if($section2_big->content_type == 2)
						    <div class="video_content">
						    	<img style="width: 100%" class="card-img-top" src="/uploads/images/{{ $section2_big['content_image'] }}" alt="Card image cap">
						    </div>
						    @else
						    	<img style="width: 100%" class="card-img-top" src="https://via.placeholder.com/200x200.jpg?text=Content" alt="Card image cap">
						    @endif
						    <div class="card-body">
						        <h5 class="card-title p-2 pb-0">{{ $section2_big->content_title }}</h5>
						     
						    </div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							@foreach($section2_small as $item)
							<div class="col-md-6 mb-2">
								<div class="card">
								    @if($item->content_type == 2)
								    <div class="video_content">
								    	<img style="width: 100%" class="card-img-top" src="/uploads/images/{{ $item['content_image'] }}"  alt="Card image cap">
								    </div>
								    @else
								    	<img style="width: 100%" class="card-img-top" src="https://via.placeholder.com/200x200.jpg?text=Content" alt="Card image cap">
								    @endif
								    <div class="card-body">
								        <h5 class="card-title p-2 pb-0">{{ $item->content_title }}</h5>
								  
								    </div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
@endsection