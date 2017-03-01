@extends('templates.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="aideus-left">Search results</h2>
        <p class="aideus-desc">{{ $query }}</p>
      </div>
    </div>

    @if(count($results) === 0)
      <p class="aideus-desc">No results found</p>
    @else

      @foreach ($results as $user)
        <div class="row">
          <div class="col-md-12 aideus-left">
            @include('user.partials.searchresult')
          </div>
        </div>
      @endforeach

    @endif

  </div>
@stop
