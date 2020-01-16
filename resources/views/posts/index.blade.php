@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($posts as $post)


	<div class="row">
		<div class="col-6">

			<div class="d-flex align-items-center">

				<div class="pr-4">
					<img src="{{ $post->user->profile->def_profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
				</div>

				<div>
					<div class="font-weight-bold">
						<a href="/profile/{{ $post->user->id }}">
							<span class="text-dark">{{ $post->user->username }}</span>
						</a>
						<a href="#" class="pl-3 border-left">Follow</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<p><span class="font-weight-bold">
				<div class="font-weight-bold">
				</span> {{ $post->caption }}</p>
			</div>

		</div>
	</div>

	<div class="row pb-5">

		<div class="col-6 offset-3">
			<a href="/p/{{ $post->id }}">
         <img src="/storage/{{ $post->image }}" class="w-100">
       </a>
		</div>
	</div>
	


	@endforeach
	<div class="row">
		<div class="col-12 d-flex justify-content-center">
			{{ $posts->links() }}
		</div>
	</div>
</div>
@endsection('content')