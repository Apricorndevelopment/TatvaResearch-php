<?php
$testimonials = [
    [
        "name" => "Ankit Sharma",
        "company" => "Retail Brand Manager",
        "feedback" => "Tatva Research provided deep insights that helped us refine our strategy and understand our customers better.",
        "rating" => 5
    ],
    [
        "name" => "Priya Verma",
        "company" => "Startup Founder",
        "feedback" => "Their research approach is clear, practical, and highly reliable. The team was supportive throughout.",
        "rating" => 4
    ],
    [
        "name" => "Rahul Mehta",
        "company" => "Marketing Director",
        "feedback" => "Excellent analysis and actionable recommendations. Truly a partner in decision-making.",
        "rating" => 5
    ]
];
?>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
            What Our Clients Say
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <?php foreach ($testimonials as $t): ?>
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">

                <p class="text-gray-600 mb-4">
                    “<?= $t['feedback'] ?>”
                </p>

                <!-- Stars -->
                <div class="flex mb-3">
                    <?php for ($i = 0; $i < $t['rating']; $i++): ?>
                        <span class="text-yellow-400 text-xl">★</span>
                    <?php endfor; ?>
                </div>

                <h4 class="font-semibold"><?= $t['name'] ?></h4>
                <p class="text-sm text-gray-500"><?= $t['company'] ?></p>

            </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
