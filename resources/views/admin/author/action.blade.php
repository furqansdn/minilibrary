<a name="" id="" class="btn btn-warning" href="{{route('admin.author.edit', $model)}}" role="button">Edit</a> 
<button name="" class="btn btn-danger" href="{{route('admin.author.destroy', $model )}}" role="button" id="delete">Hapus</button>


{{-- Sweetalert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#delete').on('click', function (e) {  
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data yang sudah dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
        if (result.value) {
            document.getElementById('deleteForm').action = href;
            document.getElementById('deleteForm').submit();

            Swal.fire(
            'Deleted!',
            'Data kamu berhasil dihapus.',
            'success'
            )
        }
        })



    })
</script>