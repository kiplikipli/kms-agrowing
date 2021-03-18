function sweetAlert(status) {
    Swal.fire(
        'Success',
        status,
        'success'
    );
};
function errorAlert(status) {
    Swal.fire(
        'Error',
        status,
        'error'
    );
};

function deleteConfirm(e) {
    const form =  $(this).closest('form');
    e.preventDefault();
    Swal.fire({
            title: "Are you sure?",
            text: "Data yang dihapus tidak dapat dikembalikan!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: 'btn btn-danger px-3',
            cancelButtonClass: 'btn btn-light ml-3 px-3',
            cancelButtonColor: "#E3EAEF",
            confirmButtonText: "Hapus",
            cancelButtonText: 'Batal',
            buttonsStyling: false
          }).then(result => {
              if(result.value) {
                  form.submit();
              } 
    });
}

function validConfirm(e) {
    const form =  $(this).closest('form');
    e.preventDefault();
    Swal.fire({
            title: "Are you sure?",
            text: "Data yang telah divalidasi tidak dapat diubah!",
            type: "info",
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success px-3',
            cancelButtonClass: 'btn btn-light ml-3 px-3',
            cancelButtonColor: "#E3EAEF",
            confirmButtonText: "Konfirmasi",
            cancelButtonText: 'Batal',
            buttonsStyling: false
          }).then(result => {
              if(result.value) {
                  form.submit();
              } 
    });
}