<?php
/* Template Name: Home */
get_header();
?>

<main class="flex flex-col min-h-screen">
    <div class="relative flex flex-col items-center justify-center p-16 text-white bg-gradient-to-r from-blue-500 to-sky-700">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-center">Lead Capture Form</h1>
        <p class="text-lg max-w-3xl text-center text-gray-200 ">Unlock the power of Pabau's Lead Capture Widget—embed it on your site and turn visitors into patients effortlessly.</p>
    </div>

    <div class="bg-white">
        <form id="leadForm" class="p-8 space-y-3 max-w-6xl mx-auto mt-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="relative z-0 w-full mb-4 group">
                    <input type="text" name="firstname" id="firstname" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="firstname" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">First Name</label>
                </div>
                <div class="relative z-0 w-full mb-4 group">
                    <input type="text" name="lastname" id="lastname" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="lastname" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">Last Name</label>
                </div>
                <div class="relative z-0 w-full mb-4 group">
                    <input type="text" name="salutaion" id="salutaion" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="salutaion" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">Salutation (Mr/Miss)</label>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="relative z-0 w-full mb-4 group">
                    <input type="email" name="email" id="email" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="email" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">Email</label>
                </div>
                <div class="relative z-0 w-full mb-4 group">
                    <input type="text" name="mobile" id="mobile" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="mobile" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">Mobile</label>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="relative z-0 w-full mb-4 group">
                    <input type="text" name="country" id="country" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="country" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">Country</label>
                </div>
                <div class="relative z-0 w-full mb-4 group">
                    <input type="text" name="county" id="county" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="county" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">County</label>
                </div>
                <div class="relative z-0 w-full mb-4 group">
                    <input type="text" name="city" id="city" class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="city" class="peer-focus:font-medium absolute text-xs text-gray-500 duration-300 transform -translate-y-5 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-5">City</label>
                </div>
            </div>
            <button type="submit" class="relative w-full text-white bg-gradient-to-r from-blue-600 to-sky-600 font-semibold py-2.5 px-5 rounded-lg overflow-hidden group transition-all duration-300 hover:shadow-lg hover:scale-105 focus:outline-none focus:ring-4 focus:ring-purple-300/50">
                <span class="relative z-10">Submit Now</span>
                <span class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></span>
                <span class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.2),transparent_70%)]"></span>
            </button>
        </form>
    </div>
</main>

<?php get_footer(); ?>