<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<section class="py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-6">
            <a href="<?= base_url('usermanual/administrators') ?>" 
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 rounded-md shadow">
                ← Back to Administrator Manual
            </a>
        </div>
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-8 text-center">Inventory Management</h2>

        <div id="issue-item" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Issue Item</h3>
            <p class="text-gray-700 mb-4">
                The Issue Item section is used to manage items issued to users within the school system. Administrators or designated staff can view the list of 
                issued items, including details like issue date, return date, and the user it was issued to. Each entry provides options to return the item or delete the record. 
                Additionally, new items can be issued through a form, where essential details like user type, issue to, issue by, issue date, and return date are recorded. 
                The system ensures that only authorized users can issue or return items, maintaining proper inventory tracking. Administrators can also add notes or specify 
                the item category, item name, and quantity while issuing items. This module helps in keeping track of resource utilization and availability.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/issue-item.png') ?>" 
                 alt="Issue Item" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">

                 <img src="<?= base_url('public/images/UserManual/administrators/add-issue-item.png') ?>" 
                 alt="Issue Item" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto mt-1">
        </div>

        <!-- Item Supplier -->
        <div id="item-supplier" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Item Supplier</h3>
            <p class="text-gray-700 mb-4">
                The Item Supplier section helps manage the suppliers from whom items are procured. Administrators can add, update, delete, or view supplier details, including 
                name, phone, email, address, contact person name, phone, and email. Each supplier record also includes a description field for additional notes or details. 
                The ability to manage supplier information efficiently helps maintain a smooth procurement process and ensures that accurate contact information is always available.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/item-supplier.png') ?>" 
                 alt="Item Supplier" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Item Store -->
        <div id="item-store" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Item Store</h3>
            <p class="text-gray-700 mb-4">
                The Item Store section allows administrators to create and manage different storage locations for inventory items. Each store has a unique name, stock code, and 
                description. By categorizing items under specific stores, it becomes easier to manage and track stock levels. The store management feature also supports 
                adding, editing, and deleting store records, ensuring that item storage is well-organized and easily accessible.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/item-store.png') ?>" 
                 alt="Item Store" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Item Category -->
        <div id="item-category" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Item Category</h3>
            <p class="text-gray-700 mb-4">
                The Item Category section organizes inventory items into various categories for easy management and reporting. Administrators can define new categories, 
                update existing ones, or delete categories that are no longer needed. Each category can have a name and a description to specify the type of items it includes. 
                Grouping items by category ensures better organization and faster searching when issuing or stocking items.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/item-category.png') ?>" 
                 alt="Item Category" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Item -->
        <div id="add-item" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Item</h3>
            <p class="text-gray-700 mb-4">
                The Add Item section allows administrators to add new items to the inventory. The form requires essential details such as item name, item category, unit, 
                and a description. This module supports full CRUD operations, making it simple to add, update, or delete items. Proper item categorization helps streamline 
                inventory management and enhances tracking of resources within the school.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/add-item.png') ?>" 
                 alt="Add Item" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

        <!-- Add Item Stock -->
        <div id="add-item-stock" class="mb-12">
            <h3 class="text-xl font-semibold text-purple-700 mb-2">Add Item Stock</h3>
            <p class="text-gray-700 mb-4">
                The Add Item Stock section is where administrators record the quantity and details of items being added to the inventory. The form captures the item category, 
                item name, supplier, store, quantity, purchase price, date, and a description. Administrators can also attach documents related to the purchase for reference. 
                This section supports full CRUD operations and helps maintain accurate stock records.
            </p>
            <img src="<?= base_url('public/images/UserManual/administrators/add-item-stock.png') ?>" 
                 alt="Add Item Stock" 
                 class="rounded-xl shadow-lg w-full max-w-3xl mx-auto">
        </div>

    </div>
</section>
