<section>
    @php
    $category = Route::current()->parameter('category');
    @endphp


    <h1>My {{$category}} library</h1>
    <ul>
        <li>add watched {{$category}} </li>
        <li>add to watch {{$category}} </li>
    </ul>
</section>