@include('layouts.header');
@include('layouts.admin.navbar')
@include('layouts.client.sidebar')

<main id="main" class="main">
@yield('content')
</main>
@include('layouts.foooter');
