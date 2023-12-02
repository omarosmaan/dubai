@extends('layout.app')


@section('content')

<br>
<br>
<div class="container">
    {{-- @if ($errors->any())
            <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  --}}
        
      <form action="{{ route('main.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" >

        {{-- معالجة الخطأ وطباعة سبب الخطأ تحت الحثل طبعا ياتي بالغلط من فليدات الي موجود في كوننرول --}}
        @error('title')
        <p style="color: red">{{ $message }}</p>
        @enderror

      </div>
      <div class="mb-3">
        <label for="body" class="form-label">body</label>
        <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        {{-- @error('body')
        <p style="color: red">{{ $message }}</p>
        @enderror --}}
      </div>
      <button type="submit"  class="btn btn-success">save</button>
    </form>
</div>



@endsection