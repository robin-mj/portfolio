@include('partials.head')
@include('partials.header')
<div class="wrap-about">
  <img src="{{get_field('portrait')}}" alt="">
  <div>
    <p>{{get_field('about_1')}}</p>
    <p>{{get_field('about_2')}}</p>
  </div>
</div>
@include('partials.footer')
