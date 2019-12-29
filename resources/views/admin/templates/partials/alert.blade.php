@if (session('success'))
<script>
    $.notify({
        // options
        message: '{{ session('success') }}'
    },{
        // settings
        type: 'success'
    });
</script>
@endif

@if (session('info'))
<script>
    $.notify({
        // options
        message: '{{ session('info') }}'
    },{
        // settings
        type: 'info'
    });
</script>
@endif

@if (session('danger'))
<script>
    $.notify({
        // options
        message: '{{ session('danger') }}'
    },{
        // settings
        type: 'danger'
    });
</script>
@endif