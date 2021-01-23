<header class="bg-pink-300">
    <div class="container mx-auto px-16">
        <div class="flex items-center py-5">


            <a class="brand mr-10" href="{{ home_url('/') }}">
                <img width="100px"
                     src="https://cdn.shopify.com/s/files/1/2301/3747/t/3/assets/logo.png?v=15904693863245551424"/>
            </a>


            <nav class="">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'flex',
                        'walker' => new \App\NavWalker()
                    ]) !!}
                @endif
            </nav>


        </div>
    </div>
</header>
