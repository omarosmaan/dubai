@extends('layout.app')


@section('content')
<main>
  
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">مثال الألبوم</h1>
        <p class="lead text-body-secondary">وصف قصير حول الألبوم أدناه (محتوياته ، ومنشؤه ، وما إلى ذلك). اجعله قصير ولطيف، ولكن ليست قصير جدًا حتى لا يتخطى الناس هذا الألبوم تمامًا.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">الدعوة الرئيسية للعمل</a>
          <a href="#" class="btn btn-secondary my-2">عمل ثانوي</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <a href="{{ route('main.create') }}" class="btn btn-primary">Create post</a>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($posts as $post)
            <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text></svg>
                  <div class="card-body">
                    <h1>{{ $post->title }}</h1>
                    <p class="card-text">{{ $post->body }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                      </div>
                      <small class="text-body-secondary">9 دقائق</small>
                    </div>
                  </div>
                </div>
              </div>
        
            
        @empty
            
        @endforelse
       
      </div>
    </div>
  </div> 

</main>
@endsection
