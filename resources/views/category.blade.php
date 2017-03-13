<h3>{{$category->name}}</h3>
<ul>
    @foreach($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
    
    
</ul>