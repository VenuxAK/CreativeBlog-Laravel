@foreach (range(1, 4) as $blog)
	<div class="col-md-6 mb-4">
		<x-blogs.blog-card />
	</div>
@endforeach
