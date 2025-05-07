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

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Academic Information Overview</h2>

        <!-- Class Timetable -->
        <div id="class-timetable" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Class Timetable</h3>
            <p class="text-gray-700 mb-4">
                Easily access your subject-wise lecture timetable for each day of the week. Timings are updated by the school in real-time.
                This helps students plan their studies and avoid missing any lectures.
            </p>
            <img src="<?= base_url('public/images/UserManual/class-timetable.png') ?>" alt="Class Timetable" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Lesson Plan -->
        <div id="lesson-plan" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Lesson Plan</h3>
            <p class="text-gray-700 mb-4">
                Know in advance which topics will be taught on which day. The lesson plan ensures transparency and helps you
                stay academically prepared throughout the term.
            </p>
            <img src="<?= base_url('public/images/UserManual/lesson-plan.png') ?>" alt="Lesson Plan" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Zoom Meetings -->
        <div id="zoom-meetings" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Zoom Meetings</h3>
            <p class="text-gray-700 mb-4">
                View scheduled Zoom meetings for online classes directly from your dashboard. Each meeting shows the subject,
                time, teacher’s name, and joining link. You can also see past meetings for reference.
            </p>
            <img src="<?= base_url('public/images/UserManual/zoom-meetings.png') ?>" alt="Zoom Meetings" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Syllabus Status -->
        <div id="syllabus-status" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Syllabus Status</h3>
            <p class="text-gray-700 mb-4">
                Keep track of how much of the syllabus has been completed per subject. A progress bar shows the percentage covered,
                completion date, and pending chapters. Helps students identify subjects that need more attention.
            </p>
            <img src="<?= base_url('public/images/UserManual/syllabus-status.png') ?>" alt="Syllabus Status" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Teacher Review -->
        <div id="teacher-review" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Teacher Review System</h3>
            <p class="text-gray-700 mb-4">
                Students can rate teachers based on teaching quality, clarity, and support. Each rating includes a 1–5 star system
                and a comment box for suggestions. Feedback remains anonymous and is used to improve teaching quality.
            </p>
            <img src="<?= base_url('public/images/UserManual/teacher-review.png') ?>" alt="Teacher Review" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

       
    </div>
</section>
