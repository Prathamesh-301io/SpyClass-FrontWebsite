<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/administrators') ?>"
                class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrator Manual
            </a>
        </div>
        <!-- Book List -->
        <div id="book-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Book List</h3>
            <p class="text-gray-700 mb-4">
                The Book List section displays all available books in the library along with their detailed information.
                Administrators can view the book title, book number, ISBN number, publisher, author, subject, rack number,
                quantity, available copies, book price, post date, and action options. This list allows for efficient management
                of the library collection and quick access to book details. You can sort and filter the book list as needed to find
                specific books or view their availability. Additionally, options for editing or deleting book records are available
                directly from this list, making library management streamlined and organized.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/book-list.png') ?>"
                alt="Book List"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Book -->
        <div id="add-book" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Book</h3>
            <p class="text-gray-700 mb-4">
                The Add Book section allows administrators to add new books to the library inventory. The form requires essential
                details such as the book title, book number, ISBN number, publisher, author, subject, rack number, quantity, book
                price, and post date. You can also include a brief description of the book for future reference. Adding accurate
                information helps maintain an organized library system and ensures that users can find and borrow books efficiently.
                Once added, the book will appear in the book list and be available for issuance.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/add-book.png') ?>"
                alt="Add Book"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Issue/Return -->
        <div id="issue-return" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Issue/Return</h3>
            <p class="text-gray-700 mb-4">
                The Issue/Return section facilitates the lending process by allowing administrators to manage issued books and returns.
                Initially, the member list is displayed, showing all registered members. Clicking on a member's name opens their dashboard,
                which includes a digital ID card, an issue book form, and a list of currently issued books. The issue book form allows
                staff to select a book and set a return date, while the dashboard helps keep track of all active issues. This organized
                layout helps manage book lending effectively and minimizes manual record-keeping errors.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/issue-return.png') ?>"
                alt="Issue/Return"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Students -->
        <div id="add-students" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Students as Members</h3>
            <p class="text-gray-700 mb-4">
                This section allows administrators to add students as library members. The interface displays a list of students filtered
                by class and section. If a student is already a library member, their entry is highlighted for easy identification.
                To add a student as a member, click the "+" button, and a popup form will appear where you can assign a unique library card.
                This feature simplifies the process of enrolling students into the library and ensures that member information is updated regularly.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/add-student-member.png') ?>"
                alt="Add Student Member"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Staff Member -->
        <div id="add-staff-member" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Staff as Members</h3>
            <p class="text-gray-700 mb-4">
                This section functions similarly to the Add Students section but focuses on adding staff members as library members.
                Administrators can select staff from a list, and those who are already members are highlighted. By clicking the "+" button,
                a popup form allows the assignment of a unique library card to each staff member. Adding staff to the library system ensures
                that they can borrow books just like students, making the library accessible to all school members.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/add-staff-member.png') ?>"
                alt="Add Staff Member"
                class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

    </div>
</section>