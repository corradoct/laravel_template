@extends('layouts.app')

@section('title')
  Faqs
@endsection

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h2>Domande frequenti</h2>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <h3>Prima del corso</h3>
        @foreach ($faqsListBefore as $faq)
          <h4>{{ $faq['question'] }}</h4>
          <p>{{ $faq['answer'] }}</p>
        @endforeach
      </div>

      <div class="col-6">
        <h3>Dopo il corso</h3>
        @foreach ($faqsListAfter as $faq)
          <h4>{{ $faq['question'] }}</h4>
          <p>{{ $faq['answer'] }}</p>
        @endforeach
      </div>

    </div>
  </div>
@endsection
