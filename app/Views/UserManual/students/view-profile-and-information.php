<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/students') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Student Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Student Dashboard Overview</h2>

        <!-- Profile -->
        <div id="profile-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Profile & Personal Details</h3>
            <p class="text-gray-700 mb-4">Students can view and update their personal details including contact info, category, and other miscellaneous details.</p>
            <img src="<?= base_url('public/images/UserManual/students-profile.png') ?>" alt="Profile Details" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Fees -->
        <div id="fees-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Academic Fees</h3>
            <p class="text-gray-700 mb-4">Check total fees, view amount paid or due, and download payment receipts through the fees section.</p>
            <img src="<?= base_url('public/images/UserManual/students-fees.png') ?>" alt="Fees Information" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Exams -->
        <div id="exams-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Examinations</h3>
            <p class="text-gray-700 mb-4">Access details of upcoming exams, time tables, and exam-related announcements.</p>
            <img src="<?= base_url('public/images/UserManual/students-exams.png') ?>" alt="Exam Section" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Documents -->
        <div id="documents-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Documents</h3>
            <p class="text-gray-700 mb-4">Students can upload and store important academic or identity documents securely within their dashboard.</p>
            <img src="<?= base_url('public/images/UserManual/students-documents.png') ?>" alt="Documents Section" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Timeline -->
        <div id="timeline-section" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Timeline</h3>
            <p class="text-gray-700 mb-4">The timeline feature tracks important student activities, updates, and progress throughout the academic year.</p>
            <img src="<?= base_url('public/images/UserManual/students-timeline.png') ?>" alt="Timeline Section" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const headerHeight = document.querySelector('header').offsetHeight;

        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                window.scrollTo({
                    top: targetElement.offsetTop - headerHeight,
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
