@extends ('layouts')
    
@section('content')

<main role="main" class="container">

  <div class="row">
    <div class="col-md-8 blog-main">
     
      <div class="blog-post text-muted">
        <h2 class="blog-post-title mb-4 text-dark">Welcome to our website</h2>
        <p><img src="/images/banner.jpg" alt="" class="center" width="400" height="200" /> </p>

        <p>Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis.
          Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio.
          Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet.
          Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus.
          Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit.
          Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. 
          Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh.
        </p>

        <p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante.
          Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis.
          Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo.
          Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem.
          Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo.
          Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.
        </p>

        <p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante.
          Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis.
          Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo.
          Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem.
          Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo.
          Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.
        </p>
      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
        <div class="p-4 mb-3 bg-light rounded">
            <ul class="style1">
            @foreach($articles as $article)
                <li class="first">
                    <h6><a class="text-dark" href="articles/{{ $article->id }}">{{ $article->title }}</h6></a>
                    <h6><a class="text-muted" href="#">{{ $article->excerpt}}</a></h6>
                </li>
            @endforeach
            </ul>
        </div>

      <div class="p-4">
        <div class="sbox1"><!-- 7 -->
            <h2>Etiam rhoncus</h2>
            <ul class="style2">
                <li><a class="text-muted" href="#">Semper quis egetmi dolore</a></li>
                <li><a class="text-muted" href="#">Quam turpis feugiat dolor</a></li>
                <li><a class="text-muted" href="#">Amet ornare hendrerit lectus</a></li>
                <li><a class="text-muted" href="#">Quam turpis feugiat dolor</a></li>
            </ul>
        </div><!-- 7 -->
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

@endsection