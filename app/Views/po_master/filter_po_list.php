<script>
    $(document).ready(function() {
        $('.select2').select2();

        function fetchPOS(page = 1, search = '') {
            $.ajax({
                url: 'manage_purchase_orders/fGetPOsList/' + page,
                type: 'GET',
                data: {
                    search: search
                },
                dataType: 'json',
                success: function(response) {
                    $('#fPODetails').html(response.table);
                    $('#fPOnPagination').html(response.pagination);
                    bindPaginationLinks();
                }
            });
        }

        function bindPaginationLinks() {
            $('#fQuotationPagination').find('a').on('click', function(e) {
                e.preventDefault();
                const page = $(this).attr('href').split('page=')[1];
                fetchPOS(page);
            });
        }

        fetchPOS();

        $('#searchButton').on('click', function() {
            const search = $('#searchInput').val();
            fetchPOS(1, search);
        });

        $('#searchInput').on('keyup', function() {
            const search = $(this).val().toLowerCase();
            fetchPOS(1, search);
        });
    });
</script>