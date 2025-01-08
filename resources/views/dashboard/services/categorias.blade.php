<div class="row pb-2 text-center justify-content-center g-0">
    <div class="col-lg-12 col-12">

        <div id="pill" class="owl-carousel owl-theme">
            @foreach ($getAllCategories as $getAllCategorie)
                <div class="pill">
                   <a href="{{ route('category',  ['id' => $getAllCategorie->id, 'title' => Str::slug($getAllCategorie->title)]) }}">   <h6 class="mb-0"> {{ $getAllCategorie->title }}</h6></a> 
                </div>
            @endforeach
        </div>
    </div>

</div>
