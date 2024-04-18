// Menambahkan event listener untuk tombol "Simpan"
document.getElementById('btn-save').addEventListener('click', function() {
    // Mengambil nilai dari input
    var scheduleDate = document.getElementById('scheduleDate').value;
    var scheduleTitle = document.getElementById('scheduleTitle').value;

    // Melakukan permintaan HTTP POST
    $.ajax({
        url: '/store-schedule',
        type: 'POST',
        data: {
            schedule_date: scheduleDate,
            schedule_title: scheduleTitle
        },
        success: function(response) {
            // Handle jika permintaan berhasil
            console.log(response);
            // Refresh halaman atau manipulasi data lainnya
        },
        error: function(xhr, status, error) {
            // Handle jika terjadi kesalahan
            console.error(error);
        }
    });
});
