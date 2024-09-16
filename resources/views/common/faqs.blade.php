<?php
$faqs = [
    [
        'question' => 'How many Waterfalls are in Enugu?',
        'answer' => 'Enugu has so many waterfalls; From the popular Awhum Monastery Waterfall, Pine Forest waterfall, Iyi Nzu, Okwojo, Orsu, Obialuohuu, Ogba Ngwu, Ezeagu Waterfall, Isi Iyi Waterfall and some more',
    ],
    [
        'question' => 'What\'s the biggest swimming pool in Enugu?',
        'answer' => 'Swimming! Hmmm, Nike Lake has the biggest swimming pool in size but it\'s quite pricey. other options could be Aaron\'s place although not open except when lodging, Predia, Golden Royale, Hostel Sunshine, De Castle and Ballroom.',
    ],
    [
        'question' => 'Is there a Paintball Arena in Enugu?',
        'answer' => 'The first arena in the south East is in Enugu. A place where you can enjoy Paintballing with your friends this December. Just get ready to tatatatatataa with your friends.',
    ],
    [
        'question' => 'What places can I visit with my family this  Christmas in Enugu?',
        'answer' => 'There are quite a number of places to visit in Enugu; Awhum Monastery should be in your list, Pine Forest, Nike Lake Resort, Unity Park and maybe Polo Mall',
    ],
    [
        'question' => 'What are the best natural outdoor Picnic spots in Enugu?',
        'answer' => 'Picnic spots will depend on size of group but here\'s a list;  Nike Lake Resort, Ezeagu Tourist Complex, Unity Park, Ngwo Park, Pine Forest, Akwuke Beach, New Berries Park.',
    ],
    [
        'question' => 'What local foods can I eat when I visit Enugu? I\'m not igbo.',
        'answer' => 'Ahhhhhh! Enugu is home to the best meals you can get in the East. Eat Okpa and Maybe pap or custard as breakfast. Abacha/achicha/agububu na ji in the afternoon. Then end the day with some onugbu/oha soup. Thank me later.',
    ],
    [
        'question' => 'Is it better to go to Obudu from Calabar from Calabar or Enugu? ',
        'answer' => 'Although Calabar may seem closer to Obudu because they\'re in the same state but it\'s almost as far as going from Enugu to Obudu. Whichever way you go, it will take about 6-8hrs on road.',
    ],
];

?>
{{-- style css --}}
<style>
    .faq-section {
        max-width: 800px;
        margin: 80px auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        opacity: 0;
        /* Start hidden */
        transform: translateY(20px);
        /* Start slightly below */
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        /* Smooth transition */
    }

    .faq-section.show {
        opacity: 1;
        /* Fully visible */
        transform: translateY(0);
        /* Move to original position */
    }

    .faq-title {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }

    .faq-container {
        border-top: 1px solid #ddd;
    }

    .faq-item {
        border-bottom: 1px solid #ddd;
    }

    .faq-question {
        padding: 15px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        background: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: background-color 0.3s, color 0.3s;
    }

    .faq-question:hover {
        background-color: #f0f0f0;
    }

    .faq-icon {
        transition: transform 0.3s ease;
        font-size: 18px;
    }

    .faq-answer {
        padding: 15px;
        font-size: 16px;
        color: #666;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        opacity: 0;
    }

    .faq-answer.show {
        max-height: 200px;
        /* Adjust as needed */
        opacity: 1;
    }

    .faq-answer.show+.faq-question .faq-icon {
        transform: rotate(180deg);
    }
</style>
{{-- style css end --}}

{{-- faqs --}}

<div class="faq-section">
    <h1 class="section-title text-center" style="padding-bottom: 40px">
        Frequently <span class="text-orange">Asked</span> Questions
    </h1>
    <div class="faq-container">
        @foreach ($faqs as $faq)
            <div class="faq-item">
                <div class="faq-question">
                    <span>{{ $faq['question'] }}</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-answer">{{ $faq['answer'] }}</div>
            </div>
        @endforeach
    </div>
</div>



{{-- faqs ends --}}



{{-- script.js --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show FAQ section with animation
        const faqSection = document.querySelector('.faq-section');
        if (faqSection) {
            faqSection.classList.add('show');
        }

        // Handle FAQ toggling
        const questions = document.querySelectorAll('.faq-question');
        questions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const isActive = answer.classList.contains('show');

                // Hide all other answers
                document.querySelectorAll('.faq-answer').forEach(ans => {
                    ans.classList.remove('show');
                    ans.previousElementSibling.querySelector('.faq-icon').style
                        .transform = 'rotate(0deg)';
                });

                // Toggle the clicked answer
                if (!isActive) {
                    answer.classList.add('show');
                    this.querySelector('.faq-icon').style.transform = 'rotate(180deg)';
                }
            });
        });
    });
</script>
