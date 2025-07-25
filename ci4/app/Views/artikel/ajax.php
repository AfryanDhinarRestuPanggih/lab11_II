<?= $this->include('template/header'); ?>

<h1>Data Artikel</h1>

<table class="table-data" id="artikelTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script src="<?= base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
<script>
    $(document).ready(function () {

        function showLoadingMessage() {
            $('#artikelTable tbody').html('<tr><td colspan="4">Loading data...</td></tr>');
        }

        function loadData() {
            showLoadingMessage();
            $.ajax({
                url: "<?= base_url('ajax/getData') ?>",
                method: "GET",
                dataType: "json",
                success: function (data) {
                    var tableBody = "";

                    if (data.length === 0) {
                        tableBody = '<tr><td colspan="4">Tidak ada data tersedia.</td></tr>';
                    } else {
                        for (var i = 0; i < data.length; i++) {
                            var row = data[i];
                            tableBody += '<tr>';
                            tableBody += '<td>' + row.id + '</td>';
                            tableBody += '<td>' + row.judul + '</td>';
                            tableBody += '<td><span class="status">' + (row.status ?? '---') + '</span></td>';
                            tableBody += '<td>';
                            tableBody += '<a href="<?= base_url('artikel/edit/') ?>' + row.id + '" class="btn btn-primary">Edit</a> ';
                            tableBody += '<a href="#" class="btn btn-danger btn-delete" data-id="' + row.id + '">Delete</a>';
                            tableBody += '</td>';
                            tableBody += '</tr>';
                        }
                    }

                    $('#artikelTable tbody').html(tableBody);
                },
                error: function () {
                    $('#artikelTable tbody').html('<tr><td colspan="4">Gagal memuat data.</td></tr>');
                }
            });
        }

        loadData();

        $(document).on('click', '.btn-delete', function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
                $.ajax({
                    url: "<?= base_url('artikel/delete/') ?>" + id,
                    method: "DELETE",
                    success: function () {
                        loadData();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Error saat menghapus artikel: ' + textStatus + ' - ' + errorThrown);
                    }
                });
            }
        });

    });
</script>

<?= $this->include('template/footer'); ?>
