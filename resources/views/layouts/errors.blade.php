
@if(\Illuminate\Support\Facades\Session::has('error') or \Illuminate\Support\Facades\Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <strong>خطا!</strong> {{ \Illuminate\Support\Facades\Session::get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="icon-close" aria-hidden="true"></span>
        </button>
    </div>
@endif

@if(\Illuminate\Support\Facades\Session::has('success') or \Illuminate\Support\Facades\Session::has('success'))

    <div class="alert alert-success" role="alert">
        <strong>موفق!</strong> {{ \Illuminate\Support\Facades\Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="icon-close" aria-hidden="true"></span>
        </button>
    </div>

@endif
@if(\Illuminate\Support\Facades\Session::has('info'))

    <script>
        Swal.fire({
            icon: 'info',
            showCancelButton: false,
            showConfirmButton: false,
            timer: 3500,
            title: 'توجه!',
            text: '{{ \Illuminate\Support\Facades\Session::get('info') }}',
        });

    </script>

@endif
