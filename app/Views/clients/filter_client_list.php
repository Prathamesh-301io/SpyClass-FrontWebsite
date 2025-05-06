<script>
    $(document).ready(function() {
        $('.select2').select2();

        function fetchClients(page = 1, search = '') {
            $.ajax({
                url: 'clients/fGetClientList/' + page,
                type: 'GET',
                data: {
                    search: search
                },
                dataType: 'json',
                success: function(response) {
                    $('#fClientDetails').html(response.table);
                    $('#fClientPagination').html(response.pagination);
                    bindPaginationLinks();
                }
            });
        }

        function bindPaginationLinks() {
            $('#fCompanyPagination').find('a').on('click', function(e) {
                e.preventDefault();
                const page = $(this).attr('href').split('page=')[1];
                fetchProducts(page);
            });
        }

        fetchClients();

        $('#searchButton').on('click', function() {
            const search = $('#searchInput').val();
            fetchClients(1, search);
        });

        $('#searchInput').on('keyup', function() {
            const search = $(this).val().toLowerCase();
            fetchClients(1, search);
        });
    });
</script>