@extends('mainlayout')
@section('title')
    Matrix - Craft Your Identity, Connect Your World
@endsection

@section('pusherscript')
@endsection

@section('section1')
    <!-- Loading Screen -->
    {{-- <div class="loading-page">
        <div class="loading-content">
            <div class="hello-text">Hello!</div>
        </div>
    </div> --}}

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Craft Your Identity, Connect Your World.</h1>
            <p>Showcase your talents, connect with like-minded professionals, and grow your network.</p>
            <div class="hero-buttons">
                <a href="" class="btn-primary">Get Started</a>
                <a href="" class="btn-secondary">Explore</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <h2>Why Choose Matrix?</h2>
        <div class="about-cards">
            <div class="card">
                <h3>Craft Your Portfolio</h3>
                <p>Showcase your work, skills, and experiences in a seamless, visually appealing format.</p>
            </div>
            <div class="card">
                <h3>Connect with Professionals</h3>
                <p>Discover and connect with others who share your interests and goals.</p>
            </div>
            <div class="card">
                <h3>Grow Your Network</h3>
                <p>Follow, endorse, and collaborate with professionals to expand your opportunities.</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <h2>What You Can Do</h2>
        <div class="features-scroll">
            <div class="feature-item">
                <h3>Build and Customize</h3>
                <p>Use tags to highlight your skills and let others find you easily.</p>
            </div>
            <div class="feature-item">
                <h3>Explore by Tags</h3>
                <p>Search and connect with people based on shared skills and interests.</p>
            </div>
            <div class="feature-item">
                <h3>Follow and Be Followed</h3>
                <p>Create meaningful connections by following others and growing your network.</p>
            </div>
            <div class="feature-item">
                <h3>User-Friendly Interface</h3>
                <p>Enjoy a smooth and intuitive experience as you build and connect.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Hear from Our Users</h2>
        <div class="testimonial-card">
            <p>"Matrix has completely transformed how I showcase my work and connect with other professionals."</p>
            <h4>- Jane Doe</h4>
        </div>
        <div class="testimonial-card">
            <p>"The tagging system is fantastic! It helps me find and connect with people who share my interests."</p>
            <h4>- John Smith</h4>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="quick-links">
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Privacy Policy</a>
        </div>
        <div class="social-icons">
            <a href="">Facebook</a>
            <a href="">Twitter</a>
            <a href="">LinkedIn</a>
        </div>
        <div class="newsletter">
            <input type="email" placeholder="Enter your email">
            <button>Subscribe</button>
        </div>
    </footer>


    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
