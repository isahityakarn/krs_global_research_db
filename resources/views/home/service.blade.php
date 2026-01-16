@php
    $data = [
        (object) [
            'id' => 1,
            'name' => 'Business to Business',
            'description' =>
                'We have 360* B2B audience profiled & categorised accordingly.White collar| Blue collar| Gray collar',
            'icon' => 'fa fa-briefcase',
        ],

        (object) [
            'id' => 2,
            'name' => 'Gen-pop Sampling',
            'description' => 'General population sampling with core proprietary panel for various research goals.',
            'icon' => 'fa fa-users',
        ],
        (object) [
            'id' => 1,
            'name' => 'Healthcare Research',
            'description' =>
                'Opinion of Patients, Doctors, Physicians & Care Givers provides a great opportunity to delvelop new approach healthcare industry.',
            'icon' => 'fa fa-medkit',
        ],
        (object) [
            'id' => 1,
            'name' => 'ITDMs',
            'description' =>
                'Information technology decision makers opinions plays a great insight role in tech studies.',
            'icon' => 'fa fa-phone',
        ],
        (object) [
            'id' => 1,
            'name' => 'Music Studies',
            'description' => 'Opinion of various music lovers helps in Radio surveys & Music launch surveys',
            'icon' => 'fa fa-music',
        ],
        (object) [
            'id' => 1,
            'name' => 'Mothers-Infant studies',
            'description' =>
                'Only mothers opinion helps various FMCG & cosmetics companies for decision making in this through Pregnancy studies & Infant studies.',
            'icon' => 'fa fa-graduation-cap',
        ],
        (object) [
            'id' => 1,
            'name' => 'Sports Studies',
            'description' => 'Opinions from various sportsman help in developing an dynamic range of sports equipment.',
            'icon' => 'fa fa-camera',
        ],
        (object) [
            'id' => 1,
            'name' => 'Games Studies',
            'description' => 'Studies on Mobile/Tablet Games| PC Games| Play stations| Gaming consoles and much more.',
            'icon' => 'fa fa-trophy',
        ],
        (object) [
            'id' => 1,
            'name' => 'Professionals',
            'description' => 'Opinions from Photographers, Carpenters, Painters, Artists, Lawyers & much more.',
            'icon' => 'fa fa-university',
        ],
        // (object) [
        //     'id' => 1,
        //     'name' => 'name',
        //     'description' => 'description',
        //     'icon' => 'fa fa-users',
        // ],
    ];
@endphp
<section id="service">
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach ($data as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="{{ $item->icon }} fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">{{ $item->name }}</h5>
                            <p>{{ $item->description }}</p>
                            <a class="text-secondary border-bottom" href="">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</section>