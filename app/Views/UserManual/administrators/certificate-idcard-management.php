<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <a href="<?= base_url('usermanual/administrators') ?>"
            class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
            ← Back to Administrators Manual
        </a>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Certificate & ID Card Management</h2>

        <!-- Student Certificate -->
        <div id="student-certificate" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">1. Student Certificate</h3>
            <p class="text-gray-700 mb-4">
                Administrators can create customized student certificates by filling in the required fields. The form allows the addition of text, images,
                and placeholders for student data like name, date of birth, admission number, and more. These certificates are useful for issuing
                academic, participation, or merit certificates. Customize the header, footer, and body text to match your school’s branding.
            </p>
            <p class="text-gray-700 mb-4">
                Important Fields:
            <ul class="list-disc list-inside pl-5">
                <li><strong>Certificate Name:</strong> The title of the certificate, e.g., Merit Certificate.</li>
                <li><strong>Header Text:</strong> Customize left, center, and right headers.</li>
                <li><strong>Body Text:</strong> Use placeholders like [name], [dob], [class], [roll_no] to auto-fill student information.</li>
                <li><strong>Footer Text:</strong> Add footer information like signatures or school name.</li>
                <li><strong>Student Photo & Background Image:</strong> Upload personalized images to enhance the certificate.</li>
            </ul>
            After creating the certificate, you can download or print it. The generated certificates can be stored for future reference or reprinting.
            </p>
            <div class="grid grid-cols-1 gap-4 mt-3">
                <img src="<?= base_url('public/images/UserManual/administrators/student-certificate-form.png') ?>"
                    alt="Student Certificate Form"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
                <img src="<?= base_url('public/images/UserManual/administrators/student-certificate-preview.png') ?>"
                    alt="Student Certificate Preview"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            </div>
        </div>

        <!-- Generate Certificate -->
        <div id="generate-certificate" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">2. Generate Certificate</h3>
            <p class="text-gray-700 mb-4">
                This section allows the administrator to generate certificates for students by selecting the class, section, and certificate type.
                Multiple students can be selected for bulk certificate generation. After generating the certificates, you can preview, download,
                or print them directly from the interface.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/generate-certificate.png') ?>"
                alt="Generate Certificate"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Student ID Card -->
        <div id="student-id-card" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">3. Student ID Card</h3>
            <p class="text-gray-700 mb-4">
                The Student ID Card section enables the creation of customized ID cards with essential student details and school branding.
                You can add the school logo, signature, and various fields like Student Name, Admission Number, Class, Blood Group, and more.
            </p>
            <p class="text-gray-700 mb-4">
                Key Features:
            <ul class="list-disc list-inside pl-5">
                <li><strong>Logo & Signature:</strong> Upload images to personalize the card.</li>
                <li><strong>Custom Fields:</strong> Include admission number, class, and personal details.</li>
                <li><strong>Design Options:</strong> Choose colors and layout to match the school's theme.</li>
                <li><strong>Print and Download:</strong> Generate ID cards in bulk and download or print directly.</li>
            </ul>
            </p>
            <div class="grid grid-cols-1 gap-4 mt-3">
                <img src="<?= base_url('public/images/UserManual/administrators/student-id-card-form.png') ?>"
                    alt="Student ID Card Form"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
                <img src="<?= base_url('public/images/UserManual/administrators/student-id-card-preview.png') ?>"
                    alt="Student ID Card Preview"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            </div>
        </div>

        <div id="generate-students-id" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Generate Students ID</h3>
            <p class="text-gray-700 mb-4">
                This section allows the administrator to generate Student ID cards by selecting the class, section, and ID card template.
                Multiple students can be selected for bulk ID card generation. After generating the ID cards, you can preview, download,
                or print them directly from the interface. The system supports customization of the ID card layout, including student details,
                logos, and signature fields. This feature ensures that every ID card follows the school's standard format.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/generate-students-id.png') ?>"
                alt="Generate Students ID"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>



        <!-- Staff ID Card -->
        <div id="staff-id-card" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">5. Staff ID Card</h3>
            <p class="text-gray-700 mb-4">
                Similar to Student ID Cards, the Staff ID Card feature allows the creation of personalized ID cards for staff members.
                It includes fields like Staff Name, ID, Designation, Department, Contact Details, and more. These ID cards are essential for
                staff identification and access control within the school.
            </p>
            <div class="grid grid-cols-1 gap-4 mt-3">
                <img src="<?= base_url('public/images/UserManual/administrators/staff-id-card-form.png') ?>"
                    alt="Staff ID Card Form"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
                <img src="<?= base_url('public/images/UserManual/administrators/staff-id-card-preview.png') ?>"
                    alt="Staff ID Card Preview"
                    class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
            </div>
        </div>

        <!-- Generate ID Cards -->
        <div id="generate-id-card" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">6. Generate ID Card</h3>
            <p class="text-gray-700 mb-4">
                Once the ID card template is set up, administrators can generate ID cards for students or staff in bulk. The generated ID cards
                can be printed or downloaded for distribution. These cards help streamline identification and access control within the institution.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/generate-id-card.png') ?>"
                alt="Generate ID Card"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>