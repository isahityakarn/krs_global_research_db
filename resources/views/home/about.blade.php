@php
    $data = [
        (object) [
            'id' => 1,
            'name' => 'Best Project Managers',
            'description' => 'Having the best expert & pilot project managers results in high efficiency.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 1,
            'name' => 'No Project minimum',
            'description' => 'We believe in making win-win deal hence dont charge any project minimum fee.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 1,
            'name' => 'No Pre-payments',
            'description' => 'We respect the integrety of our clients & highly trust them, so we say No Pre-payemnts.',
            'icon' => 'fa fa-users-cog',
        ],
        (object) [
            'id' => 1,
            'name' => 'Quick setup & launch',
            'description' =>
                'We match the industry pace & our 24*7 availablility makes us so quick & reliable that you can count on us!',
            'icon' => 'fa fa-users-cog',
        ],
        // (object) [
        //     'id' => 1,
        //     'name' => 'name',
        //     'description' => 'description',
        //     'icon' => 'fa fa-users-cog',
        // ],
    ];
@endphp
<section id="about">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('home/img/about.jpg') }}"
                            style="object-fit: cover;" alt="">

                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <h6 class="text-primary text-uppercase">About Us</h6> --}}
                    <h1 class="mb-4"><span class="text-primary">About Us</span></h1>
                    <p class="mb-4 text-justify">Krs Global Research is a comprehensive online traffic platform, boasting a network of approximately 3 million proprietary panelists. We assist businesses in gaining valuable insights from consumer opinions, enabling them to make timely, well-informed decisions.
                       <hr>
                        Our core philosophy, “Reliable Analytics,” is reflected in our name: Krs Global Research signifies. This commitment to quality places it at the forefront of our priorities. We adhere to a zero-error policy to ensure high efficiency and aim for excellence in every task. With an experienced IT team and expert project managers, we consistently deliver faster-than-expected results without compromising quality.
                        <hr>
                        Our flexibility allows us to adapt to the unique needs of clients from any part of the globe. Offering 24/7 support, we bridge the time zone gap, ensuring seamless service across different regions and continents.
                        <hr>
                        As proud members of the ESOMAR Association, we strictly follow guidelines for market research, including GDPR and other industry regulations.
                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        @foreach ($data as $key => $item)
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">0{{ $key + 1 }}</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $item->name }}</h6>
                                        <span>{{ $item->description }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
