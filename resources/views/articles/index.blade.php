@extends ('layouts')
    
@section('content')


    <div id="wrapper">
        <div id="page" class="container" >
            @forelse( $articles as $article)
                <div id="content">
                    <div class="row mb-2">
                        <div class="col-md-8"><!--  -->
                            <div class="col p-4 d-flex flex-column position-static">  <!--  -->
                                <h4 class="mb-1"><a class="text-dark" href="{{ $article->path() }}"> {{ $article->title }} </a></h4>
                                <p class="card-text mb-1"> {{ $article->excerpt }}</p>
                                <div class="mb-1 text-muted">{{ $article->updated_at }}</div>
                                <a href="{{ $article->path() }}" class="stretched-link">Continue reading</a>

                                <div class="col-auto d-none d-lg-block"></div>
                            </div>  <!--  -->
                        </div><!--  -->
                    </div>
                </div>
                <hr>
            @empty
            <p>No relevant articles yet.. </p>
            @endforelse

        </div>
    </div>
    
    {{ $articles->links() }}

    <br><br><br><br><br><br>
@endsection