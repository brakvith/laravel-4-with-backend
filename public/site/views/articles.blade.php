@include('site::_partials/header')

<h2>Articles</h2>

<hr>

<?php
/* ?>
<ul class="articles">
	@foreach ($entries as $entry)
		<li>
			<article>
				@if ($entry->image)
					<figure><a href="{{ route('article', $entry->slug) }}"><img src="{{ Image::thumb($entry->image, 150) }}" alt=""></a></figure>
				@endif

				<h3><a href="{{ route('article', $entry->slug) }}">{{ $entry->title }}</a></h3>
				<h5>Created at {{ $entry->created_at }} &bull; by {{ $entry->author->email }}</h5>
				<p>{{ Str::limit($entry->body, 100) }}</p>
				<p><a href="{{ route('article', $entry->slug) }}" class="more">Read more</a></p>
			</article>
		</li>
	@endforeach
</ul>
<?php
*/ ?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

@include('site::_partials/footer')
