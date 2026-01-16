@php
    $data = [
        (object) [
            'id' => 1,
            'name' => 'Business to Business',
            'description' =>'We have 360* B2B audience profiled & categorised accordingly.White collar| Blue collar| Gray collar',
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
<section id="contact">
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                    data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Book For Your Servy</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-12">
                                <input type="text" class="form-control border-0" placeholder="Your Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-12">
                                <input type="email" class="form-control border-0" placeholder="Your Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-12">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    @foreach ($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>