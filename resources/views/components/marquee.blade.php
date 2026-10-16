<!-- Dual-Row Logo Marquee Grid (Matching User Reference Image) -->
<section class="py-12 md:py-16 bg-[#FAFAFC] border-y border-slate-200/80 relative overflow-hidden">
    
    <!-- Modern Tech Background: Gradient Mesh + Ambient Glow + Grid tipis (Crystal Clear Marquee Logos) -->
    <div class="absolute inset-0 pointer-events-none select-none overflow-hidden z-0">
        <!-- 1. Ambient Glow Spheres -->
        <div class="absolute -top-10 left-1/4 w-[500px] h-[250px] bg-indigo-500/10 rounded-full blur-[100px]"></div>
        <div class="absolute -bottom-10 right-1/4 w-[500px] h-[250px] bg-cyan-400/10 rounded-full blur-[100px]"></div>

        <!-- 2. Grid Tipis (Thin Subtle Geometric Grid with Radial Mask) -->
        <div class="absolute inset-0 bg-grid-subtle mask-radial-wide"></div>
    </div>

    <!-- Header Label -->
    <div class="text-center max-w-2xl mx-auto mb-8 px-4 relative z-10">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-50 border border-indigo-200 text-indigo-700 text-xs font-bold mb-2 shadow-2xs">
            <i class="fa-solid fa-cubes text-cyan-600"></i>
            <span>Teknologi &amp; Ekosistem Unggulan</span>
        </div>
        <h3 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight font-heading">
            Didukung Framework &amp; Standar Industri Modern
        </h3>
        <p class="text-xs sm:text-sm text-slate-500 mt-1">
            Dibangun dengan perkakas terbaik untuk performa tinggi, stabilitas, dan skalabilitas bisnis.
        </p>
    </div>

    @php
        $row1 = [
            ['name' => 'Laravel', 'file' => 'laravel.svg'],
            ['name' => 'PHP', 'file' => 'php.svg'],
            ['name' => 'Tailwind CSS', 'file' => 'tailwindcss.svg'],
            ['name' => 'Vue.js', 'file' => 'vuejs.svg'],
            ['name' => 'React', 'file' => 'react.svg'],
            ['name' => 'TypeScript', 'file' => 'typescript.svg'],
            ['name' => 'MySQL', 'file' => 'mysql.svg'],
            ['name' => 'PostgreSQL', 'file' => 'postgresql.svg'],
            ['name' => 'Vite', 'file' => 'vite.svg'],
            ['name' => 'Docker', 'file' => 'docker.svg'],
            ['name' => 'Python', 'file' => 'python.svg'],
            ['name' => 'Node.js', 'file' => 'nodejs.svg'],
        ];

        $row2 = [
            ['name' => 'AWS Cloud', 'file' => 'aws.svg'],
            ['name' => 'Cloudflare', 'file' => 'cloudflare.svg'],
            ['name' => 'GitHub', 'file' => 'github.svg'],
            ['name' => 'Redis', 'file' => 'redis.svg'],
            ['name' => 'Figma', 'file' => 'figma.svg'],
            ['name' => 'JavaScript', 'file' => 'javascript.svg'],
            ['name' => 'Bootstrap', 'file' => 'bootstrap.svg'],
            ['name' => 'HTML5', 'file' => 'html5.svg'],
            ['name' => 'CSS3', 'file' => 'css3.svg'],
            ['name' => 'Google Cloud', 'file' => 'googlecloud.svg'],
            ['name' => 'Tailwind CSS', 'file' => 'tailwindcss.svg'],
            ['name' => 'Laravel 12', 'file' => 'laravel.svg'],
        ];
    @endphp

    <!-- Marquee Slider Container with Soft Edge Masks -->
    <div class="relative w-full overflow-hidden [mask-image:linear-gradient(to_right,transparent,black_7%,black_93%,transparent)] space-y-4 sm:space-y-5 select-none">
        
        <!-- ROW 1 (Gliding Left) -->
        <div class="animate-marquee flex items-center gap-4 sm:gap-5">
            <!-- Group 1 -->
            <div class="flex items-center gap-4 sm:gap-5 shrink-0">
                @foreach($row1 as $item)
                <div class="w-28 h-16 min-[400px]:w-32 min-[400px]:h-18 sm:w-40 sm:h-22 md:w-44 md:h-24 rounded-2xl bg-white border border-slate-200/90 hover:border-indigo-400/80 shadow-2xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-center justify-center p-3 sm:p-5 shrink-0 group">
                    <img src="{{ asset('images/tech/' . $item['file']) }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}" class="h-7 sm:h-10 w-auto max-w-[75px] sm:max-w-[105px] object-contain transition-transform group-hover:scale-110 duration-300">
                </div>
                @endforeach
            </div>

            <!-- Duplicate Group 1 for Seamless Infinite Loop -->
            <div class="flex items-center gap-4 sm:gap-5 shrink-0" aria-hidden="true">
                @foreach($row1 as $item)
                <div class="w-28 h-16 min-[400px]:w-32 min-[400px]:h-18 sm:w-40 sm:h-22 md:w-44 md:h-24 rounded-2xl bg-white border border-slate-200/90 hover:border-indigo-400/80 shadow-2xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-center justify-center p-3 sm:p-5 shrink-0 group">
                    <img src="{{ asset('images/tech/' . $item['file']) }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}" class="h-7 sm:h-10 w-auto max-w-[75px] sm:max-w-[105px] object-contain transition-transform group-hover:scale-110 duration-300">
                </div>
                @endforeach
            </div>
        </div>

        <!-- ROW 2 (Gliding Right / Reverse) -->
        <div class="animate-marquee-reverse flex items-center gap-4 sm:gap-5">
            <!-- Group 2 -->
            <div class="flex items-center gap-4 sm:gap-5 shrink-0">
                @foreach($row2 as $item)
                <div class="w-28 h-16 min-[400px]:w-32 min-[400px]:h-18 sm:w-40 sm:h-22 md:w-44 md:h-24 rounded-2xl bg-white border border-slate-200/90 hover:border-cyan-400/80 shadow-2xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-center justify-center p-3 sm:p-5 shrink-0 group">
                    <img src="{{ asset('images/tech/' . $item['file']) }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}" class="h-7 sm:h-10 w-auto max-w-[75px] sm:max-w-[105px] object-contain transition-transform group-hover:scale-110 duration-300">
                </div>
                @endforeach
            </div>

            <!-- Duplicate Group 2 for Seamless Infinite Loop -->
            <div class="flex items-center gap-4 sm:gap-5 shrink-0" aria-hidden="true">
                @foreach($row2 as $item)
                <div class="w-28 h-16 min-[400px]:w-32 min-[400px]:h-18 sm:w-40 sm:h-22 md:w-44 md:h-24 rounded-2xl bg-white border border-slate-200/90 hover:border-cyan-400/80 shadow-2xs hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex items-center justify-center p-3 sm:p-5 shrink-0 group">
                    <img src="{{ asset('images/tech/' . $item['file']) }}" alt="{{ $item['name'] }}" title="{{ $item['name'] }}" class="h-7 sm:h-10 w-auto max-w-[75px] sm:max-w-[105px] object-contain transition-transform group-hover:scale-110 duration-300">
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
