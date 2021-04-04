@include('partials.head')
@include('partials.header')
@php $galerie = get_field('galerie') @endphp
<div class="wrap">
  <h2>{{the_title()}}</h2>
  <p>{{the_field('desc_globale')}}</p>
  @foreach ($galerie as $photo)
    <div class="photo">
      <img src="{{$photo['argentique']}}" alt="">
      <p>{{$photo['desc']}}</p>
    </div>
  @endforeach
</div>
@include('partials.footer')
