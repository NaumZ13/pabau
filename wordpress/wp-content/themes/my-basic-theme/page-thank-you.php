<?php

/**
 * Template Name: Thank You Page
 */
get_header();
?>

<main class="min-h-screen bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 flex items-center justify-center">
    <div class="flex flex-col items-center justify-center text-white text-center p-8">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6 tracking-tight drop-shadow-lg animate-fade-in-down">
            Thank You!
        </h1>
        <p class="text-xl md:text-2xl max-w-2xl mx-auto leading-relaxed drop-shadow-md animate-fade-in-up">
            Your submission has been received, and we’ll be in touch soon!
        </p>

        <div class="mt-8 flex justify-center">
            <div class="w-16 h-1 bg-white rounded-full opacity-75 animate-pulse"></div>
        </div>

        <a href="<?php echo home_url(); ?>" class="mt-10 inline-block px-8 py-3 bg-white text-gray-900 font-semibold rounded-full shadow-lg hover:bg-gray-200 transition-all duration-300 transform hover:-translate-y-1 animate-fade-in">
            Back to the Form
        </a>
    </div>
</main>


<?php get_footer(); ?>