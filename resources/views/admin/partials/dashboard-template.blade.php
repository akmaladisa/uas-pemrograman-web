<!-- resources/views/admin/dashboard.blade.php -->
@include('admin.partials.header')

<div class="container-fluid">
    <div class="row">
        @include('admin.partials.sidebar')
        {{-- @include('admin.partials.content') --}}
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>

@include('admin.partials.footer')
