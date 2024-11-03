<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/pdf_export.css')}}">
  <title>Document</title>
</head>
<body>
  <div class="idcards-grid">
    {{-- {{dd($request_ids)}} --}}
    @foreach ($request_ids as $request_id)
    <div>
      <img src="{{ asset('id_cards/'.str_replace('/', '_', $request_id->uuid.'.png')) }}" alt="">

    </div>
    @endforeach
  </div>
</body>
</html>