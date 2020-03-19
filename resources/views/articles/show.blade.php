@extends ('layouts')
    
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title col p-4 d-flex flex-column position-static">
                    <h2 class="mb-1" class="text-dark"> {{ $article->title }} </h2>
                </div>
            
                <img src="/images/banner.jpg" alt="" class="center" width="400" height="200" />
                
                <p class="card-text mb-1"> {{ $article->body }}</p>

                <p style="margin-top: 1em">
                    @foreach( $article->tags as $tag)
                        <a href="{{ route('articles.index', ['tag' => $tag->name ]) }}">{{ $tag->name }}  </a>
                    @endforeach
                </p> 
                <div class="mb-1 text-muted">{{ $article->updated_at }}</div>
            </div>

            <br><br>

            <!-- <nav class="blog-pagination">
                <a class="btn btn-sm btn-outline-secondary" href="/articles" 
                    tabindex="-1" aria-disabled="true">Back</a>
            </nav> -->

        </div>
    </div>


@endsection