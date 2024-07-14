@php
    use App\Models\Config;
    use App\Models\Category;
    $config = Config::where('status', 'active')->first();
    $categories = Category::where('status', 'active')->get();
@endphp
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($config ? $config->favicon : '') }}">
    <link href='https://fonts.googleapis.com/css?family=Anek Bangla' rel='stylesheet'>
    @include('Themes.theme1.layout.headerlink')
    {!! JsonLd::generate() !!}
    @yield('style')
    @include('Themes.theme1.layout.header')
</head>

<body class="bd-font">

    {{-- Age modal --}}
    <div class="modal fade" id="ageVerification" tabindex="-1" aria-labelledby="ageVerificationLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content" style="color: rgba(0, 0, 0, 0.816);padding: 18px">
                <div class="mt-5 d-flex justify-content-center">
                    <img src="{{ asset($config->logo) }}" alt="choti kotha / choti golpo" width="140">
                </div>
                <div class="modal-body text-center">
                    <strong style="font-size: 24px" class="mb-4">This is an adult story website</strong>
                    <p style="color: rgb(15, 14, 14);font-size: 16px">This website contains age-restricted materials
                        including nudity and explicit depictions of sexual
                        activity. By entering, you affirm that you are at least 18 years of age or the age of majority
                        in the jurisdiction you are accessing the website from and you consent to viewing sexually
                        explicit content.</p>
                    <div class="row gx-3">
                        <div class="col-md-6 mb-1">
                            <button type="button" class="btn btn-default btn-full" data-bs-dismiss="modal">I'm 18 or
                                older - Enter</button>
                        </div>
                        <div class="col-md-6 mb-1">
                            <a href="https://www.google.com/" rel="nofollow" type="button"
                                class="btn btn-secondary btn-full">I'm under 18 - Exit</a>
                        </div>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-md-9">
                        <p>Google <a href="https://safety.google/families/parental-supervision/" rel="nofollow">parental
                                controls
                                page</a> explains how you can easily
                            block access to this site.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- preloader -->
    <div id="preloader">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    {{-- Search pop --}}
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="container">
            <div class="text-center mt-5">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2 live-search" type="search" placeholder="Search and press enter ..."
                    aria-label="Search">
                <button class="btn btn-default btn-lg" type="button"><i class="icon-magnifier"></i></button>
            </form>

            <div class="container mt-3" id="search_content">

            </div>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        @include('Themes.theme1.layout.headerNav')

        {{-- main body --}}

        @yield('content')
        {{-- main body --}}


        {{-- this is for custom codes --}}
        @include('Themes.theme1.layout.footerSection')

    </div><!-- end site wrapper -->

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="{{ asset($config ? $config->logo : '') }}" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="#">চটি গল্প</a>
                    <ul class="submenu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('category.view', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="#">Share Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('privacy') }}">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                </li>
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
    @include('Themes.theme1.layout.footer')
    @yield('scripts')
    @include('Themes.theme1.layout.footerlink')
    <script>
        $(document).ready(function() {
            //live search
            let x = $('.live-search').on('input', function() {
                var query = $(this).val();
                const container = document.getElementById('search_content');
                container.innerHTML = '';
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {
                        search: query,
                    },
                    success: function(response) {
                        response.data.forEach(post => {
                            // Create the row element
                            const rowElement = document.createElement('div');
                            rowElement.className = 'row mb-3';

                            // Create the title element
                            const titleElement = document.createElement('h6');
                            titleElement.className = 'my-0 bd-font fw-bolder';
                            const titleLink = document.createElement('a');
                            titleLink.href = `/view/${post.slug}`;
                            titleLink.textContent = post.title;
                            titleLink.style.color = '#203656';
                            titleElement.appendChild(titleLink);

                            // Create the meta element
                            const metaElement = document.createElement('ul');
                            metaElement.className = 'meta list-inline mt-1 mb-0';
                            const dateItem = document.createElement('li');
                            dateItem.className = 'list-inline-item';
                            dateItem.textContent = new Date(post.created_at)
                                .toLocaleDateString('bn-BD', {
                                    year: 'numeric',
                                    month: 'long',
                                    day: 'numeric'
                                });
                            metaElement.appendChild(dateItem);

                            // Append the title and meta to the row element
                            rowElement.appendChild(titleElement);
                            rowElement.appendChild(metaElement);
                            // Append the row element to the container
                            container.appendChild(rowElement);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });

            //Age verification
            // document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('ageVerification'), {
                backdrop: 'static',
                keyboard: false
            });
            myModal.show();
            // });

        });
    </script>
</body>

</html>
