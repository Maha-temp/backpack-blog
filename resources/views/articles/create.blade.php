@extends ('layouts')

    @section('head')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css" rel="stylesheet"/>
    @endsection

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
        <h1 class="heading has-text-wight-bold is-size-2">New Article </h1>
            <form action="/articles" method="POST">
            @csrf
            
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input class="input @error('title') is-danger @enderror" 
                        type="text" name="title" id="title"
                        value="{{ old('title') }}">
                        @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" 
                        name="excerpt" id="excerpt"
                        >{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" 
                        name="body" id="body"
                        >{{ old('body') }}</textarea>
                        @error('body')
                            <p class="help is-danger">{{ $errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="tags">Tags</label>
                    <div class="select is-multiple control md-4 mb-4">
                    
                        <select name="tags[]" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        @error('tags')
                            <p class="help is-danger">{{ @message }}</p>
                        @enderror
                                              
                    </div>
                </div>

                <!-- 
                    <div class="form-group">
                    <label for="tags">Tags</label><br>
                    <input type="checkbox" name="tags[]" value="mysqli" aria-label="Checkbox for following text input">MySQLi<br>
                    <input type="checkbox" name="tags[]" value="php" aria-label="Checkbox for following text input">PHP<br>
                    <input type="checkbox" name="tags[]" value="html" aria-label="Checkbox for following text input">HTML<br>
                    <input type="checkbox" name="tags[]" value="js" aria-label="Checkbox for following text input">JS<br>
                    <input type="checkbox" name="tags[]" value="css" aria-label="Checkbox for following text input">CSS<br>
                    </div> 
                -->

                <div class="field">
                    <div class="control">
                    <button class="btn btn-md btn-outline-secondary" type="submit">Submit</button>
                    
                    
                    </div>
                </div>

                <br><br>

                <nav class="blog-pagination">
                    <button class="btn btn-md btn-outline-secondary" type="submit">Save</button>
                    <a class="btn btn-md btn-outline-secondary" href="/articles" tabindex="-1" aria-disabled="true">Cancle</a>
                </nav>

            </form>
        </div>
    </div>

@endsection