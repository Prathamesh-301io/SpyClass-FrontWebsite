<script>
    $(document).ready(function() {
        $('.select2').select2();

        function fetchInvoices(page = 1, search = '') {
            $.ajax({
                url: 'manage_invoices/fGetInvoicesList/' + page,
                type: 'GET',
                data: {
                    search: search
                },
                dataType: 'json',
                success: function(response) {
                    $('#fInvoiceDetails').html(response.table);
                    $('#fInvoicePagination').html(response.pagination);
                    bindPaginationLinks();
                }
            });
        }

        function bindPaginationLinks() {
            $('#fInvoicePagination').find('a').on('click', function(e) {
                e.preventDefault();
                const page = $(this).attr('href').split('page=')[1];
                fetchProducts(page);
            });
        }

        fetchInvoices();

        $('#searchButton').on('click', function() {
            const search = $('#searchInput').val();
            fetchInvoices(1, search);
        });

        $('#searchInput').on('keyup', function() {
            const search = $(this).val().toLowerCase();
            fetchInvoices(1, search);
        });
    });
</script>