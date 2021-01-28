<section class="blogs blog-page sidebar section-padding  section-bg" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="s-h-title">
                        My <span>Blog</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-images">
                                    <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                </div>
                                <div class="blog-details">
                                    <ul class="post-meta-one">
                                        <li>
                                            <p><i class="fa fa-user"></i> By, <span class="username">{{ $post->author }}</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-clock-o"></i> {{ $post->created_at->format('d M Y') }} </p>
                                        </li>
                                    </ul>

                                    <div class="blog-title" data-toggle="modal" data-id="{{ $post->id }}" data-target="#blogmodal">
                                        {{ Str::limit($post->title, 20) }}
                                    </div>
                                    <p class="text">
                                        {{ Str::limit($post->content) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
