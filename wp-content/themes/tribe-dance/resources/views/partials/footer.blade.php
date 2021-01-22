<footer class="bg-gray-100">
<div class="container mx-auto px-16 py-8">

    <div class="flex">


      <div>
      @if (has_nav_menu('secondary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'flex']) !!}
      @endif
      </div>

      <div>
        &copy; {{ App::currentYear() }} {{  App::siteName() }}
      </div>

      <div class="flex-end">
        Payment
      </div>


    </div>

</div>
</footer>
