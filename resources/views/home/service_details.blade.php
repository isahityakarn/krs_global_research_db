@php
    $data = [
        (object) [
            'id' => 1,
            'name' => 'Business to Business',
            'description' =>'We have 360* B2B audience profiled & categorised accordingly.White collar| Blue collar| Gray collar',
            'icon' => 'fa fa-briefcase',
        ],

        (object) [
            'id' => 2,
            'name' => 'Gen-pop Sampling',
            'description' => 'General population sampling with core proprietary panel for various research goals.',
            'icon' => 'fa fa-users',
        ],
        (object) [
            'id' => 3,
            'name' => 'Healthcare Research',
            'description' =>
                'Opinion of Patients, Doctors, Physicians & Care Givers provides a great opportunity to delvelop new approach healthcare industry.',
                'icon' => 'fa fa-medkit',
        ],
        (object) [
            'id' => 4,
            'name' => 'ITDMs',
            'description' =>
                'Information technology decision makers opinions plays a great insight role in tech studies.',
                'icon' => 'fa fa-phone',
        ],
        (object) [
            'id' => 5,
            'name' => 'Music Studies',
            'description' => 'Opinion of various music lovers helps in Radio surveys & Music launch surveys',
            'icon' => 'fa fa-music',
        ],
        (object) [
            'id' => 6,
            'name' => 'Mothers-Infant studies',
            'description' =>
                'Only mothers opinion helps various FMCG & cosmetics companies for decision making in this through Pregnancy studies & Infant studies.',
                'icon' => 'fa fa-graduation-cap',
        ],
        (object) [
            'id' => 7,
            'name' => 'Sports Studies',
            'description' => 'Opinions from various sportsman help in developing an dynamic range of sports equipment.',
            'icon' => 'fa fa-camera',
        ],
        (object) [
            'id' => 8,
            'name' => 'Games Studies',
            'description' => 'Studies on Mobile/Tablet Games| PC Games| Play stations| Gaming consoles and much more.',
            'icon' => 'fa fa-trophy',
        ],
        // (object) [
        //     'id' => 9,
        //     'name' => 'Professionals',
        //     'description' => 'Opinions from Photographers, Carpenters, Painters, Artists, Lawyers & much more.',
        //     'icon' => 'fa fa-users-cog',
        // ],
        // (object) [
        //     'id' => 1,
        //     'name' => 'name',
        //     'description' => 'description',
        //     'icon' => 'fa fa-users-cog',
        // ],
    ];
    $images = [
        (object) [
            'id' => 1,
            'img' => 'home/img/service-1.jpg',
        ],
        (object) [
            'id' => 2,
            'img' => 'home/img/service-2.jpg',
        ],
        (object) [
            'id' => 3,
            'img' => 'home/img/service-3.jpg',
        ],
        (object) [
            'id' => 4,
            'img' => 'home/img/service-4.jpg',
        ],
        (object) [
            'id' => 5,
            'img' => 'home/img/service-5.jpg',
        ],
        (object) [
            'id' => 6,
            'img' => 'home/img/service-6.jpg',
        ],
        (object) [
            'id' => 7,
            'img' => 'home/img/service-8.jpg',
        ],
        (object) [
            'id' => 8,
            'img' => 'home/img/service-7.jpg',
        ],
        // (object) [
        //     'id' => 9,
        //     'img' => 'home/img/service-9.jpg',
        // ], 
    ];
@endphp
<section id="service_details">
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    @foreach ($data as $key => $item)
                        @if ($key < 4)
                            <button
                                class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 {{ $key === 0 ? 'active' : '' }}"
                                data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $key + 1 }}" type="button">
                                <i class="{{ $item->icon }} fa-2x me-3"></i>
                                <h4 class="m-0">{{ $item->name }}</h4>
                            </button>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tab-content w-100">
                    @foreach ($images as $key => $item)
                        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="tab-pane-{{ $key+1 }}">
                            <div class="row g-4">
                                <div class="col-md-12" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset($item->img) }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    @foreach ($data as $key => $item)
                        @if ($key >= 4 && $key < 9)
                            <button
                                class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 {{ $key === 0 ? 'active' : '' }}"
                                data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $key + 1 }}" type="button">
                                <i class="{{ $item->icon }} fa-2x me-3"></i>
                                <h4 class="m-0">{{ $item->name }}</h4>
                            </button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</section>