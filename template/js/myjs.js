const flashData = $('.flash-data').data('flashData');
// console.lag(flashData);

if (flashData) {
    Swall.fire({
        title: 'Data ',
        text: ' Berhasil' + + flashData,
        type: 'success'
    });
}

// tombol hapus
$(document).ready(function () {

    $('.tombol-hapus').on('click', function (e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Anda Yakin',
            text: "Menghapus Data..?",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#d63330',
            cancelButtonColor: '#d6c830',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.value == true) {
                document.location.href = href;
            }
        })
    });
})
