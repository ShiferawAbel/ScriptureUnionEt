<x-mail::message>
# New NewsLetter Has Been Uploaded

<h1>{{$newsletter->title}}</h1>
<p>{!! $newsletter->description !!}</p>
<a href="{{url('storage/'.$newsletter->pdf_file)}}" target="_blank" rel="noopener noreferrer">Downlod</a>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
