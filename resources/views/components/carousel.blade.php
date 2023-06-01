<div id="carouselExampleCaptions" class="carousel slide overlay z-1" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <a href="article/{{ $articlescarousel[0]->slug }}/show">
            <div class="carousel-item active">
            <img src="{{ Storage::url($articlescarousel[0]->image) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block z-3">
                    <h5>{{ $articlescarousel[0]->title }}</h5>
                    <p>{{ $articlescarousel[0]->subtitle }}</p>
                </div>
            </div>
        </a>
        <a href="article/{{ $articlescarousel[1]->slug }}/show">
            <div class="carousel-item">
            <img src="{{ Storage::url($articlescarousel[1]->image) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $articlescarousel[1]->title }}</h5>
                    <p>{{ $articlescarousel[1]->subtitle }}</p>
                </div>
            </div>
        </a>
        <a href="article/{{ $articlescarousel[2]->slug }}/show">
            <div class="carousel-item">
            <img src="{{ Storage::url($articlescarousel[2]->image) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $articlescarousel[2]->title }}</h5>
                    <p>{{ $articlescarousel[2]->subtitle }}</p>
                </div>
            </div>
        </a>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>