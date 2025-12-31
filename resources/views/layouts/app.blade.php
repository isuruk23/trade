<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | NexTradeX</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
  <link rel="stylesheet" href="{{ asset('public/css/admin.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('public/images/favicon.ico') }}">
</head>
<body>
   
            
            <!-- Main Content Area -->
            @yield('content')
       
  @yield('scripts')
</body>
</html>