<style>
    html {
        scroll-behavior: smooth;
    }

    .download-icon {
        margin-left: 8px;
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

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Download Center</h2>

        <!-- Assignments -->
        <div id="assignments" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Assignments</h3>
            <p class="text-gray-700 mb-4">
                Access assignments uploaded by teachers and administrators. Download the required files and stay updated with your academic tasks.
            </p>
            <p class="text-gray-700 mb-4">
                You can view the assignment title, upload date, and download the file directly from the list.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/assignments.png') ?>" alt="Assignments" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Study Material -->
        <div id="study-material" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Study Material</h3>
            <p class="text-gray-700 mb-4">
                Access study materials such as lecture notes, presentations, and other resources shared by your teachers. These files can be downloaded and used for your academic preparation.
            </p>
            <p class="text-gray-700 mb-4">
                The list shows the file title, description, and download option.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/study-material.png') ?>" alt="Study Material" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Syllabus -->
        <div id="syllabus" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2" >Syllabus</h3>
            <p class="text-gray-700 mb-4">
                View and download the syllabus for your classes. The syllabus helps you plan your study schedule and track progress throughout the academic year.
            </p>
            <p class="text-gray-700 mb-4">
                You can find the syllabus for each subject listed along with download options.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/syllabus.png') ?>" alt="Syllabus" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Other Downloads -->
        <div id="other-downloads" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Other Downloads</h3>
            <p class="text-gray-700 mb-4">
                This section includes various additional documents shared by the administration, such as holiday lists, circulars, and guidelines. Download the required files for reference.
            </p>
            <p class="text-gray-700 mb-4">
                Each file includes a brief description and a download link.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/other-downloads.png') ?>" alt="Other Downloads" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Gallery -->
        <div id="gallery" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Gallery</h3>
            <p class="text-gray-700 mb-4">
                Browse photos and videos from school events. The gallery provides an option to view images and watch videos directly from the interface.
            </p>
            <p class="text-gray-700 mb-4">
                You can also download high-resolution versions for personal use or sharing.
            </p>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <img src="<?= base_url('public/images/UserManual/students/gallery-1.png') ?>" alt="Event Photo 1" class="rounded-lg shadow-lg w-full">
                </div>
                <div>
                    <img src="<?= base_url('public/images/UserManual/students/gallery-2.png') ?>" alt="Event Photo 1" class="rounded-lg shadow-lg w-full">
                   
                </div>
            </div>
        </div>
    </div>
</section>

