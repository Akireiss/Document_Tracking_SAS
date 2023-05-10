@include('layouts.header');
@include('layouts.admin.navbar')
@include('layouts.user.sidebar')

<main id="main" class="main">
@yield('content')
</main>
@include('layouts.foooter');
