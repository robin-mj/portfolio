@include('partials.head')
@include('partials.header')
@php $projets = get_field('projets') @endphp
<div class="madiv" id="madiv">
  @foreach($projets as $projet)
      <a class="projects-img" href="{{$projet['lien']}}"> <!--//style="background:center/100% no-repeat url('{{$projet['img_projet']}}')"-->
        <img src="{{$projet['img_projet']}}">
        <p>{{$projet['nom']}}</p>
      </a>
  @endforeach
</div>
@include('partials.footer')

