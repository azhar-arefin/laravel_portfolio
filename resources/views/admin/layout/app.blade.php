<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
        <!-- ======= Styles ====== -->
        <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
</head>
<body>
    

@include('admin.layout.header')

    @yield('content')






<!-- =========== Scripts =========  -->
<script src="{{asset('js/main.js')}}"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>