@extends('Layouts.app')

@section('content')
    <div class="container">
        
        @include('layouts.__messages')

        <form action="{{ route('admin:post:edit.update', $post->uuid) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" value="{{ $post->title ?? old('title') }}"
                    class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="exampleFormControlTextarea1"
                    rows="3">{{ $post->body ?? old('body') }}</textarea>
                @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Category</label>
                <select id="disabledSelect" class="form-select @error('category') is-invalid @enderror" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($post->category_id == $category->id ?? old('category'))>{{ $category->name }}</option>
                    @endforeach

                </select>
                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Tags</label>
                <select id="disabledSelect" class="form-select @error('tags') is-invalid @enderror" name="tags[]" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" @selected(in_array($tag->id, $post->tags?->pluck('id')->toArray()))>{{ $tag->name }}</option>
                    @endforeach

                </select>
                @error('tags')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
