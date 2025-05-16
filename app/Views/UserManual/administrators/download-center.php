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
            <a href="<?= base_url('usermanual/teachers') ?>" class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Teacher Manual
            </a>
        </div>

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Download Center</h2>

        <!-- Upload Contents -->
        <div id="upload-contents" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Upload Contents</h3>
            <p class="text-gray-700 mb-4">
                The Upload Contents section allows you to access all the files and documents uploaded by the admin or authorized personnel. 
                These contents may include important notices, academic documents, learning resources, or any relevant materials shared for students. 
                You can browse through the list, view file details such as title, upload date, and category, and download the necessary documents with just a click. 
                This section is designed to help students stay organized and updated with essential resources. 
                Whether it's study notes, project guidelines, or school circulars, you will find everything in one place.
                Teachers can also upload new materials directly, making it easier for students to stay updated.
            </p>
            <p class="text-gray-700 mt-4">
                The contents are categorized based on type and date, ensuring that the most recent uploads are easily accessible. 
                Stay informed by regularly checking this section for new updates.
            </p>
            <img src="<?= base_url('public/images/UserManual/teachers/upload-contents.png') ?>" alt="Upload Contents" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Assignments -->
        <div id="assignments" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Assignments</h3>
            <p class="text-gray-700 mb-4">
                The Assignments section provides students with access to academic assignments shared by teachers or administrators. 
                Each assignment is listed with a title, upload date, and a brief description, making it easy to identify the required tasks. 
                You can download the assignment files directly from the list and complete the tasks as instructed. 
                This section ensures that you stay updated with your coursework and never miss any important assignments. 
                Teachers regularly update this section with new tasks, so it is recommended to check it frequently.
            </p>
            <p class="text-gray-700 mb-4">
                In case of any changes or updates, you will find the revised files here. 
                Completing assignments on time will help you stay on track with your learning objectives.
            </p>
            <img src="<?= base_url('public/images/UserManual/assignments.png') ?>" alt="Assignments" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Study Material -->
        <div id="study-material" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Study Material</h3>
            <p class="text-gray-700 mb-4">
                In this section, students can access various study materials provided by their teachers. 
                These resources may include lecture notes, reference guides, presentations, or practice papers. 
                The files are organized with titles and brief descriptions to help you easily find the required material. 
                You can download the resources for offline study, enabling better academic preparation. 
                Teachers ensure that relevant study materials are uploaded periodically, covering various subjects and topics.
            </p>
            <p class="text-gray-700 mb-4">
                Make sure to utilize these resources to enhance your understanding and preparation for exams and assignments. 
                Regular updates are made to this section to ensure you have access to the most recent and accurate content.
            </p>
            <img src="<?= base_url('public/images/UserManual/study-material.png') ?>" alt="Study Material" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Syllabus -->
        <div id="syllabus" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Syllabus</h3>
            <p class="text-gray-700 mb-4">
                The Syllabus section provides comprehensive details of your academic curriculum. 
                You can download the syllabus for different subjects, helping you plan your studies throughout the year. 
                Each syllabus document outlines the topics covered, learning objectives, and assessment criteria. 
                Regularly referring to the syllabus helps you understand the scope of your courses and track your progress efficiently.
            </p>
            <p class="text-gray-700 mb-4">
                This section is especially useful for planning your study schedule, ensuring that you cover all the necessary topics before exams. 
                Stay proactive by keeping a copy of the syllabus handy for reference.
            </p>
            <img src="<?= base_url('public/images/UserManual/syllabus.png') ?>" alt="Syllabus" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Other Downloads -->
        <div id="other-downloads" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Other Downloads</h3>
            <p class="text-gray-700 mb-4">
                The Other Downloads section contains additional documents shared by the school administration. 
                These might include holiday lists, event circulars, school guidelines, or any other non-academic content. 
                You can view the file names, descriptions, and download the files for future reference. 
                Staying updated with these documents helps you stay informed about school policies and schedules.
            </p>
            <p class="text-gray-700 mb-4">
                Check this section periodically to ensure you are aware of any new announcements or administrative updates.
            </p>
            <img src="<?= base_url('public/images/UserManual/other-downloads.png') ?>" alt="Other Downloads" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Gallery -->
        <div id="gallery" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Gallery</h3>
            <p class="text-gray-700 mb-4">
                The Gallery section showcases photos and videos from various school events and activities. 
                You can browse through albums and view images that capture memorable moments from school life. 
                The gallery allows you to download high-quality images or videos for personal use. 
                Whether it's annual functions, sports events, or cultural celebrations, you will find it all here.
            </p>
            <p class="text-gray-700 mb-4">
                Stay connected with school activities by exploring this section regularly. 
                Sharing memorable moments with your peers becomes easier with the gallery’s organized layout.
            </p>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <img src="<?= base_url('public/images/UserManual/gallery-1.png') ?>" alt="Event Photo 1" class="rounded-lg shadow-lg w-full">
                </div>
                <div>
                    <img src="<?= base_url('public/images/UserManual/gallery-2.png') ?>" alt="Event Photo 2" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </div>
</section>
