@php
$data = [
    (object) [
        'id' => 1,
        'name' => 'Business to Business',
        'description' => 'We have a 360* B2B audience profiled & categorised accordingly. White collar| Blue collar| Gray collar',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“Working with their B2B panel has significantly enhanced our outreach strategies.”',
        'client_name' => 'John Williams',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 2,
        'name' => 'Gen-pop Sampling',
        'description' => 'General population sampling with core proprietary panel for various research goals.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“Their gen-pop sampling is thorough and provides actionable insights.”',
        'client_name' => 'Emma Johnson',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 3,
        'name' => 'Healthcare Research',
        'description' => 'Opinions of patients, doctors, physicians & caregivers provide great opportunities to develop new approaches in the healthcare industry.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“The healthcare research helped us understand our target better than ever.”',
        'client_name' => 'Dr. Alice Brown',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 4,
        'name' => 'ITDMs',
        'description' => 'Information technology decision makers opinions play a crucial role in tech studies.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“Their ITDM panel gave us precise insights into technology trends.”',
        'client_name' => 'Michael Scott',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 5,
        'name' => 'Music Studies',
        'description' => 'Opinions of various music lovers help in radio surveys & music launch surveys.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“The music studies panel provided data that improved our radio programming.”',
        'client_name' => 'Olivia Taylor',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 6,
        'name' => 'Mothers-Infant Studies',
        'description' => 'Mothers\' opinions help various FMCG & cosmetics companies in decision-making through pregnancy and infant studies.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“Their insights into infant care helped shape our latest product range.”',
        'client_name' => 'Sophia Davis',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 7,
        'name' => 'Sports Studies',
        'description' => 'Opinions from various sports professionals help in developing a dynamic range of sports equipment.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“The sports studies gave us a competitive edge in developing new sports gear.”',
        'client_name' => 'James Miller',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 8,
        'name' => 'Games Studies',
        'description' => 'Studies on Mobile/Tablet Games, PC Games, PlayStations, Gaming consoles, and more.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“The insights into the gaming industry have been instrumental for our game designs.”',
        'client_name' => 'Liam Wilson',
        'client_image' => 'home/img/testimonial-1.jpg'
    ],

    (object) [
        'id' => 9,
        'name' => 'Professionals',
        'description' => 'Opinions from Photographers, Carpenters, Painters, Artists, Lawyers & much more.',
        'icon' => 'fa fa-users-cog',
        'testimonial' => '“Their panel of professionals helped us target niche markets effectively.”',
        'client_name' => 'Amelia Moore',
        'client_image' => 'home/img/testimonial-1.jpg'
    ]
];
   
@endphp
<section id="testimonial">
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">Testimonial</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            @foreach ($data as $item)
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{ asset($item->client_image) }}"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">{{ $item->client_name }}</h5>
                <p>{{ $item->testimonial }}</p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">{{ $item->description }}</p>
                </div>
            </div>
            @endforeach
         
          
        </div>
    </div>
</div>
</section>