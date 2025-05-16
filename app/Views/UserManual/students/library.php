<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/students') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Student Manual
            </a>
        </div>

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Library</h2>

        <!-- Books List -->
        <div id="books-list" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Books List</h3>
            <p class="text-gray-700 mb-4">
                This section displays the complete list of books available in the library. You can search for books by title, author, or genre.
                Each entry includes the book title, author name, publication year, and availability status.
            </p>
            <p class="text-gray-700 mb-4">
                You can also view the book's detailed information, including a brief description and genre classification.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/books-list.png') ?>" alt="Books List" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Issued Books -->
        <div id="issued-books" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Issued Books</h3>
            <p class="text-gray-700 mb-4">
                This section displays the list of books issued to you. It includes details like the book title, issue date, return date, 
                and the status of the book (Issued/Returned).
            </p>
            <p class="text-gray-700 mb-4">
                You can also view the fine amount (if any) for overdue books. Make sure to return the books on or before the due date to avoid penalties.
            </p>
            <p class="text-gray-700 mb-4">
                If allowed, you can request a renewal for an issued book through this section.
            </p>
            <img src="<?= base_url('public/images/UserManual/students/issued-books.png') ?>" alt="Issued Books" class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>
    </div>
</section>
