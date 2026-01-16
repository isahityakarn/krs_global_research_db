@php
    $data = [
        (object) [
            'id' => 1,
            'name' => 'Business to Business',
            'description' =>
                'We have 360* B2B audience profiled & categorised accordingly.White collar| Blue collar| Gray collar',
            'icon' => 'fa fa-users-cog',
        ],

        (object) [
            'id' => 2,
            'name' => 'Gen-pop Sampling',
            'description' => 'General population sampling with core proprietary panel for various research goals.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 3,
            'name' => 'Healthcare Research',
            'description' =>
                'Opinion of Patients, Doctors, Physicians & Care Givers provides a great opportunity to delvelop new approach healthcare industry.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 4,
            'name' => 'ITDMs',
            'description' =>
                'Information technology decision makers opinions plays a great insight role in tech studies.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 5,
            'name' => 'Music Studies',
            'description' => 'Opinion of various music lovers helps in Radio surveys & Music launch surveys',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 6,
            'name' => 'Mothers-Infant studies',
            'description' =>
                'Only mothers opinion helps various FMCG & cosmetics companies for decision making in this through Pregnancy studies & Infant studies.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 7,
            'name' => 'Sports Studies',
            'description' => 'Opinions from various sportsman help in developing an dynamic range of sports equipment.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 8,
            'name' => 'Games Studies',
            'description' => 'Studies on Mobile/Tablet Games| PC Games| Play stations| Gaming consoles and much more.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 9,
            'name' => 'Professionals',
            'description' => 'Opinions from Photographers, Carpenters, Painters, Artists, Lawyers & much more.',
            'icon' => 'fa fa-users-cog',
        ],
    ];
@endphp



<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-4">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $user->address }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $user->phone }}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $user->email }}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="text-light mb-4">Services</h4>
                @foreach ($data as $key=> $item)
                    @if ($key < 4)
                        <a class="btn btn-link" href="">{{ $item->name }}</a>
                    @endif
                @endforeach
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="text-light mb-4">Services</h4>
                @foreach ($data as $key=> $item)
                    @if ($key >= 4)
                        <a class="btn btn-link" href="">{{ $item->name }}</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</div>
