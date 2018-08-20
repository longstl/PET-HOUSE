$('.btn-delete-category').click(function () {
    var id = $(this).attr('href');
    swal({
        text: "Are you sure you want to delete this?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then(function() {
        $.ajax({
            'url': '/dashboard/category/' + id,
            'method': 'DELETE',
            'data': {
                '_token':  $('meta[name="_token"]').attr('content')
            },
            success: function (response) {
                swal(
                    'Deleted.',
                    'success'
                )
                setTimeout(function () {
                    window.location.reload();
                }, 2000);

            },
            error: function () {
                swal(
                    'Deleted.',
                    'error'
                )
            }
        });
    });
    return false;
})

