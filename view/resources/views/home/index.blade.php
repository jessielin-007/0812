{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab</title>
    <style>
        .fail {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Home Index</h1>

    <select name="city" id="city">
        <option value="2" {{($cityId ==2)?'selected':''}}>台北</option>
        <option value="4" {{($cityId ==4)?'selected':''}}>台中</option>
        <option value="6" {{($cityId ==6)?'selected':''}}>台南</option>
    </select>

    <p>Hello! {{ $userName }}</p>
    {{-- <div>{{ $lines }}</div> --}}
    {{-- <div>{!! $lines !!}</div> --}}
    {{-- <ul>
        <li>90</li>
        <li>91</li>
        <li>92</li>
    </ul> --}}
    
    <ul>
        @foreach ($scoreList as $score)
        <li>{{$score}}</li>
        @endforeach
    </ul>

    <hr>

    <ul>
        @foreach ($scoreList as $score)
            <li class="{{ ($score < 60) ? 'fail' : 'pass' }}">
                {{$score}}
            </li>
        @endforeach
    </ul>

    <hr>

    {{-- @foreach ($studentList as $student)
            <li class="{{ ($student->className) }}">
                {{$student->score}}
            </li>
    @endforeach --}}
</body>
</html>     


@extends('layout.master')

@section('head')
    <style>
        .fail {
            color: red;
        }
    </style>    
@endsection

@section('content')
    <h1>Home Index</h1>
    <p>Hello! {{ $userName }}</p>
    <div>{!! $lines !!}</div>
    <ul>
    @foreach ($scoreList as $score)
        <li class="{{ ($score < 60) ? 'fail' : '' }}">
            {{$score}}
        </li>
    @endforeach
    </ul>

    <select name="city" id="city">
        <option value="2" {{ ($cityId == 2) ? 'selected' : '' }}>台北</option>
        <option value="4" {{ ($cityId == 4) ? 'selected' : '' }}>台中</option>
        <option value="6" {{ ($cityId == 6) ? 'selected' : '' }}>台南</option>
    </select>

@endsection