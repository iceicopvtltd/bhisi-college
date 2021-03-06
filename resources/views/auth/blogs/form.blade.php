<form method="POST" action="{{  isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($blog))
                           @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="content">Description<sup class="text-danger h6">*</sup></label>
                            <textarea name="content" id="content"  class="form-control input-default @error('content') is-invalid @enderror"  autocomplete="content" autofocus cols="6" rows="10">{{ isset($blog) ? $blog->content : old('content') }}</textarea>
                            @error('content')  <small class="text-danger">{{ $errors->first('content') }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
