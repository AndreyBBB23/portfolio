<section id="portfolio" class="project-gallery section-padding  section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="s-h-title">
                        My <span>Portfolio</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="project-gallery-filter d-flex justify-content-center">
                    <ul class="project-gallery-menu d-inline-block">
                        <li class="filter active" data-filter="all">All</li>
                        @foreach($categories as $category)
                            <li class="filter" data-filter=".cat-{{ $category->id }}">{{ $category->title }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="row project-gallery-item">
                    @foreach($projects as $project)
                        <div class="mix col-md-6 col-lg-4 gallery-item {{ $project->getClassCategory() }}">
                            <a href="#" class="gallery-item-content pp">
                                <div  class="item-thumbnail">
                                    <img src="{{ asset($project->image) }}" alt="">
                                    <div class="content-overlay">
                                        <div class="content">
                                            <h4 class="project-title">
                                                {{ $project->title }}
                                            </h4>
                                            @foreach($project->categories as $project_cat)
                                                <span class="project-category">{{ $project_cat->title }}</span><br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>
