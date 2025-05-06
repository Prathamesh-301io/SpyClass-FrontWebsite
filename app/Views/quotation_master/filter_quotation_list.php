<script>
    $(document).ready(function() {
        $('.select2').select2();

        function fetchQuotations(page = 1, search = '') {
            $.ajax({
                url: 'manage_quotations/fGetQuotationsList/' + page,
                type: 'GET',
                data: {
                    search: search
                },
                dataType: 'json',
                success: function(response) {
                    $('#fQuotationDetails').html(response.table);
                    $('#fQuotationPagination').html(response.pagination);
                    bindPaginationLinks();
                }
            });
        }

        function bindPaginationLinks() {
            $('#fQuotationPagination').find('a').on('click', function(e) {
                e.preventDefault();
                const page = $(this).attr('href').split('page=')[1];
                fetchProducts(page);
            });
        }

        fetchQuotations();

        $('#searchButton').on('click', function() {
            const search = $('#searchInput').val();
            fetchQuotations(1, search);
        });

        $('#searchInput').on('keyup', function() {
            const search = $(this).val().toLowerCase();
            fetchQuotations(1, search);
        });
    });
</script>