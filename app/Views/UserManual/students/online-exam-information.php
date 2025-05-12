<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/students') ?>"
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Student Manual
            </a>
        </div>

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Online Exam Information</h2>

        <!-- Exam List -->
        <div id="exam-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Exam List</h3>
            <p class="text-gray-700 mb-4">
                This section displays a list of all upcoming and ongoing online exams. You can view the exam title, subject, start date, end date, and status (Scheduled, Ongoing, or Completed). You can click on any exam to view more details or start the test if it is currently active.
            </p>
            <img src="<?= base_url('public/images/UserManual/exam-list.png') ?>" alt="Exam List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Exam Details -->
        <div id="exam-details" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Exam Details</h3>
            <p class="text-gray-700 mb-4">
                In the exam details section, you will find key information about the selected exam, including the number of questions, total marks, passing marks, exam duration, and time limit. The question types can include:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                <li><strong>Multiple Choice (MCQ):</strong> Select the correct option from the given choices.</li>
                <li><strong>Descriptive:</strong> Write a detailed answer in the provided text box.</li>
                <li><strong>Multiple Select:</strong> Choose multiple correct answers from the given options.</li>
                <li><strong>True or False:</strong> Mark the statement as true or false.</li>
            </ul>
            <p class="text-gray-700 mb-4">
                You will also find information about the exam's start and end time. Make sure to start the exam within the given timeframe.
            </p>
            <img src="<?= base_url('public/images/UserManual/exam-details.png') ?>" alt="Exam Details" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Start Test -->
        <div id="start-test" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Start Exam</h3>
            <p class="text-gray-700 mb-4">
                Once you click the <strong>Start Test</strong> button, the exam timer will begin. The exam interface will display one question at a time, with options to navigate between questions. You can mark questions for review and change answers before submission.
            </p>
            <p class="text-gray-700 mb-4">
                After answering all questions, click the <strong>Submit Test</strong> button to complete the exam. Make sure to review your answers before submission, as some exams may not allow re-attempts.
            </p>
            <img src="<?= base_url('public/images/UserManual/start-test.png') ?>" alt="Start Test" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- View Results -->
        <div id="view-results" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">View Results</h3>
            <p class="text-gray-700 mb-4">
                After submitting the test, you can view your results. The result page displays your score, the correct and incorrect answers, and a breakdown of your performance in each section. You can also analyze your result to identify strengths and areas that need improvement.
            </p>
            <p class="text-gray-700 mb-4">
                You can download or print your result for future reference. In cases where retakes are allowed, you will find an option to reattempt the exam.
            </p>
            <img src="<?= base_url('public/images/UserManual/view-results.png') ?>" alt="View Results" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Print and Analyze Results -->
        <div id="print-analyze" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Print and Analyze Results</h3>
            <p class="text-gray-700 mb-4">
                Use the print option to get a hard copy of your exam result. The analysis feature allows you to see your performance trend over multiple attempts, helping you gauge your progress and prepare more effectively for future exams.
            </p>
            <img src="<?= base_url('public/images/UserManual/print-analyze.png') ?>" alt="Print and Analyze Results" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

    </div>
</section>
