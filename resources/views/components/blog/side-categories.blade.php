@props(['categories'])

<div class="widget">
  <h4 class="widget-title mb-3">Categories</h4>
  <ul class="unordered-list bullet-primary text-reset">
    @foreach($categories as $category)
      <li><a href="{{ route('categories.show', $category) }}">{{ $category->name }} ( {{$category->posts_count}})</a></li>
    @endforeach
  </ul>
</div>