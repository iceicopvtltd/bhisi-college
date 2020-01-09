<form method="POST" action="{{  isset($news) ? route('news.update', $news->id) : route('news.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($news))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="title">Title<sup class="text-danger h6">*</sup></label>
                            <input type="text" name="title" id="title" value="{{ isset($news) ? $news->title : old('title') }}" class="form-control input-default @error('title') is-invalid @enderror"  autocomplete="title" autofocus />
                            @error('title')  <small class="text-danger">{{ $errors->first('title') }}</small> @enderror
                        </div>

                        <div class="form-group">
                            <label for="news_file">File<sup class="text-danger h6">*</sup></label>
                            <input type="file" class="form-control-file @error('news_file') is-invalid @enderror" " name="news_file" id="news_file" value="{{ isset($news) ? $news->news_file : old('news_file') }}">
                            @error('news_file')  <small class="text-danger">{{ $errors->first('news_file') }}</small> @enderror

                        </div>
                        @if(isset($news))
                        <div class="form-group">
                            <a href="{{asset('storage/' . $news->news_file) }}" class="btn btn-info btn-sm" target="_blank">Click here to view file</a>
                        </div>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
