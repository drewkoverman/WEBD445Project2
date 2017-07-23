@extends('layouts.app')

@section('content')
<div id="app">
  <navigation></navigation>
  <hero title="Ready for a <strong>Stress-Free</strong> Move?" desc="HouseCraft will take all the stress out of moving. The <strong>moving</strong> app will determine to make your move smoothly."></hero>
  <orders></orders>
  <framework></framework>
  <footer-component :year="year" owner="Drew Koverman"></footer-component>
</div>

@endsection
