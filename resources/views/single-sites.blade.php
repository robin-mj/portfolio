@include('partials.head')
@include('partials.header')
@php $captures = get_field('captures') @endphp
<div class="wrap">
  <h2>{{the_title()}}</h2>
  <p>{{the_field('description')}}</p>
  @foreach($captures as $capture)
    <div class="photo">
      <img src="{{$capture['capture']}}" alt="">
      <p>{{$capture['desc_capture']}}</p>
    </div>
  @endforeach
</div>
@include('partials.footer')
