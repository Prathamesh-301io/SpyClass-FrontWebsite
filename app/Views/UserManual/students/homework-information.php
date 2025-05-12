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

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Homework Information Overview</h2>

        <div id="homework-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Homework List</h3>
            <p class="text-gray-700 mb-4">
                The homework list displays all the assignments given by teachers across different subjects. You can view homework titles, descriptions, assigned dates, due dates, and the subject to which the homework belongs. This helps students keep track of their tasks efficiently.
            </p>
            <p class="text-gray-700 mb-4">
                Each homework item will also have a status indicator (e.g., <span class="text-green-600">Submitted</span>, <span class="text-yellow-600">Pending</span>) to quickly understand what needs to be done.
            </p>
            <img src="<?= base_url('public/images/UserManual/homework-list.png') ?>" alt="Homework List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <div id="submission-status" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Homework Details and Submission Status</h3>
            <p class="text-gray-700 mb-4">
                This section provides comprehensive details on each homework assignment. You can view the homework title, subject, description, assigned date, due date, and submission status. The status may indicate whether the homework is <span class="text-green-600">Submitted</span>, <span class="text-yellow-600">Pending</span>, or <span class="text-red-600">Late</span>.
            </p>
            <p class="text-gray-700 mb-4">
                Additionally, you can check the date and time when the homework was submitted. If the homework submission is marked as late, the system will also indicate the delay duration. Notifications will be sent if the deadline has passed without submission.
            </p>
            <p class="text-gray-700 mb-4">
                Make sure to keep track of submission dates to avoid penalties. You can also view any teacher remarks or feedback related to the submitted homework.
            </p>
            <img src="<?= base_url('public/images/UserManual/submission-status.png') ?>" alt="Homework Details and Submission Status" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <div id="upload-submissions" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Upload Submissions</h3>
            <p class="text-gray-700 mb-4">
                This section allows you to upload your completed homework files. The upload interface supports various file formats (e.g., PDF, DOCX, images). You can also add comments or additional notes while submitting your homework.
            </p>
            <p class="text-gray-700 mb-4">
                Make sure to upload your homework before the due date to avoid late submissions. A confirmation message will appear once your homework is successfully uploaded.
            </p>
            <img src="<?= base_url('public/images/UserManual/upload-submissions.png') ?>" alt="Upload Submissions" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <div id="download-material" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Download Homework Material</h3>
            <p class="text-gray-700 mb-4">
                Sometimes, teachers may upload reference materials, guidelines, or additional resources related to your homework. You can easily download these documents to assist you in completing your tasks.
            </p>
            <p class="text-gray-700 mb-4">
                Ensure to download the material as soon as it is available to have ample time for completion. The material could include sample answers, topic explanations, or helpful links.
            </p>
            <img src="<?= base_url('public/images/UserManual/download-material.png') ?>" alt="Download Homework Material" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>