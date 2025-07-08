<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Portofolio Hanafi Abdullah</title>
</head>
<body class="bg-gradient-to-br from-green-100 via-white to-green-200 min-h-screen font-sans">
    <!-- Navbar -->
    <nav class="bg-green-700/90 p-4 shadow-md fixed w-full z-10">
        <div class="container mx-auto flex justify-between items-center">
            <span class="text-white text-2xl font-bold">Hanafi Abdullah</span>
            <ul class="flex space-x-6">
                <li><a href="#about" class="text-green-100 hover:text-white transition">About</a></li>
                <li><a href="#projects" class="text-green-100 hover:text-white transition">Projects</a></li>
                <li><a href="#skills" class="text-green-100 hover:text-white transition">Skills</a></li>
                <li><a href="#contact" class="text-green-100 hover:text-white transition">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 bg-green-200/60 shadow">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-4">
            <img src="https://media.licdn.com/dms/image/v2/D5603AQFOEkNycu3nFw/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1703322096655?e=2147483647&v=beta&t=rWUsaquzbs9jCmS76aE4XtXx3K480fW_LIKqHJTpgKk" alt="Profile" class="w-40 h-40 rounded-full shadow-lg mb-6 md:mb-0 md:mr-10 border-4 border-green-700">
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold text-green-800 mb-2">Hi, I'm Hanafi Abdullah</h1>
                <p class="text-green-700 text-lg mb-4">Web Developer | Programmer | Tech Enthusiast</p>
                <a href="#contact" class="inline-block bg-green-700 text-white px-6 py-2 rounded shadow hover:bg-green-800 transition">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-green-800 mb-4 text-center">About Me</h2>
        <p class="text-gray-700 max-w-2xl mx-auto text-center">
            Saya adalah seorang web developer yang bersemangat dalam membangun aplikasi web modern, responsif, dan user-friendly. Berpengalaman dalam berbagai teknologi seperti Laravel, Tailwind CSS, dan JavaScript. Saya senang belajar hal baru dan berkolaborasi dalam tim.
        </p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-white/80 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-green-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/400x200/?website" alt="Project 1" class="rounded mb-4">
                    <h3 class="text-2xl font-semibold text-green-800 mb-2">Personal Blog</h3>
                    <p class="text-gray-700 mb-4">Blog pribadi dengan fitur posting, komentar, dan kategori. Dibangun dengan Laravel & Tailwind CSS.</p>
                    <a href="#" class="text-green-700 hover:underline font-semibold">View Project</a>
                </div>
                <!-- Project 2 -->
                <div class="bg-green-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/400x200/?dashboard" alt="Project 2" class="rounded mb-4">
                    <h3 class="text-2xl font-semibold text-green-800 mb-2">Admin Dashboard</h3>
                    <p class="text-gray-700 mb-4">Dashboard interaktif untuk manajemen data, statistik, dan laporan. Menggunakan Laravel & Chart.js.</p>
                    <a href="#" class="text-green-700 hover:underline font-semibold">View Project</a>
                </div>
                <!-- Project 3 -->
                <div class="bg-green-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/400x200/?mobile-app" alt="Project 3" class="rounded mb-4">
                    <h3 class="text-2xl font-semibold text-green-800 mb-2">Mobile App UI</h3>
                    <p class="text-gray-700 mb-4">Desain antarmuka aplikasi mobile yang modern dan responsif menggunakan Figma & Tailwind CSS.</p>
                    <a href="#" class="text-green-700 hover:underline font-semibold">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="container mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">Skills</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full font-semibold shadow">Laravel</span>
            <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full font-semibold shadow">PHP</span>
            <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full font-semibold shadow">JavaScript</span>
            <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full font-semibold shadow">Tailwind CSS</span>
            <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full font-semibold shadow">MySQL</span>
            <span class="bg-green-200 text-green-800 px-4 py-2 rounded-full font-semibold shadow">Git</span>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-green-100/70 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-green-800 mb-6 text-center">Contact Me</h2>
            <form class="max-w-xl mx-auto bg-white/90 rounded-lg shadow-md p-8 space-y-4">
                <input type="text" placeholder="Your Name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400">
                <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400">
                <textarea placeholder="Your Message" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400"></textarea>
                <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800 transition w-full">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700/90 text-green-100 text-center py-4 mt-10">
        &copy; {{ date('Y') }} Hanafi Abdullah. All rights reserved.
    </footer>
</body>
</html>