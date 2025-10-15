<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Loving Memory of Janena Manuel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'memorial-blue': '#4a69bd',
                        'memorial-light': '#6a89cc',
                        'memorial-cream': '#f9f7f7',
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Source Sans Pro', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1.5s ease-in-out',
                        'slide-up': 'slideUp 1s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .memory-image {
            transition: transform 0.3s ease;
        }
        .memory-image:hover {
            transform: scale(1.05);
        }
        .video-container {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-memorial-cream font-sans text-gray-700">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-gradient-to-br from-memorial-blue to-memorial-light text-white py-12 px-4 rounded-b-3xl shadow-lg">
            <div class="max-w-3xl mx-auto text-center animate-fade-in">
                <h1 class="font-serif text-4xl md:text-5xl font-light mb-4">In Loving Memory</h1>
                <div class="text-2xl md:text-3xl font-light mb-2">Janena Manuel</div>
                <div class="text-lg md:text-xl opacity-90 italic">Always in our hearts</div>
                <div class="mt-6 text-white/80">
                    <i class="fas fa-heart mx-1"></i>
                    <i class="fas fa-heart mx-1"></i>
                    <i class="fas fa-heart mx-1"></i>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow max-w-4xl mx-auto w-full px-4 py-8">
            <!-- Video Section -->
            <section class="mb-12 animate-slide-up">
                <div class="video-container bg-white rounded-2xl p-6 md:p-8">
                    <h2 class="font-serif text-2xl md:text-3xl text-memorial-blue text-center mb-6">A Tribute to Janena</h2>
                    <div class="relative w-full pb-[56.25%] h-0 rounded-xl overflow-hidden bg-black">
                        <!-- Replace with your actual video URL -->
                        <video controls class="absolute top-0 left-0 w-full h-full" poster="placeholder.jpg" autoplay muted>
                            <source src="janena-tribute-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <!-- If using YouTube/Vimeo embed:
                        <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
                                class="absolute top-0 left-0 w-full h-full"
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                        -->
                    </div>
                    <div class="mt-4 text-center text-gray-500 text-sm">
                        Click play to watch our tribute video
                    </div>
                </div>
            </section>

            <!-- Tribute Message -->
            <section class="mb-12 animate-slide-up">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-md">
                    <h2 class="font-serif text-2xl md:text-3xl text-memorial-blue mb-6 text-center">Remembering Janena Manuel</h2>
                    <div class="space-y-4 text-lg leading-relaxed">
                        <p>We gather here today to honor the beautiful life of Janena Manuel, whose kindness, wisdom, and gentle spirit touched everyone she met.</p>
                        
                        <div class="bg-blue-50 border-l-4 border-memorial-blue p-4 my-6 rounded-r-lg">
                            <p class="font-serif text-lg italic text-gray-700 text-center">"Those we love don't go away, they walk beside us every day."</p>
                        </div>
                        
                        <p>Her laughter was contagious, her advice was invaluable, and her presence made every room brighter. Though she is no longer with us physically, her legacy of love and compassion will continue to inspire us all.</p>
                        
                        <p>We will forever cherish the memories we shared and carry her spirit in our hearts.</p>
                    </div>
                </div>
            </section>

            <!-- Memories Gallery -->
            <section class="mb-12 animate-slide-up">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-md">
                    <h2 class="font-serif text-2xl md:text-3xl text-memorial-blue mb-2 text-center">Cherished Memories</h2>
                    <p class="text-center text-gray-600 mb-6">These moments capture the joy and love that Janena Manuel brought into our lives.</p>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <!-- Replace these with actual images -->
                        <div class="memory-image aspect-square bg-gradient-to-br from-blue-100 to-purple-100 rounded-xl overflow-hidden flex items-center justify-center">
                            <span class="text-gray-500 text-sm text-center p-2"></span>
                        </div>
                        <div class="memory-image aspect-square bg-gradient-to-br from-yellow-100 to-orange-100 rounded-xl overflow-hidden flex items-center justify-center">
                            <span class="text-gray-500 text-sm text-center p-2"></span>
                        </div>
                        <div class="memory-image aspect-square bg-gradient-to-br from-green-100 to-teal-100 rounded-xl overflow-hidden flex items-center justify-center">
                            <span class="text-gray-500 text-sm text-center p-2"></span>
                        </div>
                        <div class="memory-image aspect-square bg-gradient-to-br from-pink-100 to-red-100 rounded-xl overflow-hidden flex items-center justify-center">
                            <span class="text-gray-500 text-sm text-center p-2"></span>
                        </div>
                        <div class="memory-image aspect-square bg-gradient-to-br from-purple-100 to-indigo-100 rounded-xl overflow-hidden flex items-center justify-center">
                            <span class="text-gray-500 text-sm text-center p-2"></span>
                        </div>
                        <div class="memory-image aspect-square bg-gradient-to-br from-blue-100 to-cyan-100 rounded-xl overflow-hidden flex items-center justify-center">
                            <span class="text-gray-500 text-sm text-center p-2"></span>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gradient-to-br from-memorial-blue to-memorial-light text-white py-8 mt-8">
            <div class="max-w-3xl mx-auto text-center px-4">
                <p class="text-lg mb-2">Forever in our hearts • Always remembered</p>
                <div class="flex justify-center space-x-6 mt-4 text-white/80">
                    <i class="fas fa-dove text-xl"></i>
                    <i class="fas fa-heart text-xl"></i>
                    <i class="fas fa-star text-xl"></i>
                </div>
                <p class="mt-6 text-white/70 text-sm">In loving memory of Janena Manuel (1990 - 2025)</p>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add subtle animation to memory items on scroll
            const memoryItems = document.querySelectorAll('.memory-image');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            memoryItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(item);
            });
            
            console.log("Tribute page loaded in memory of Janena Manuel");
        });
    </script>
</body>
</html>