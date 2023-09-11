{{-- <h1>{{"lpp"}}</h1> --}}


{{-- @php
 echo $myName
@endphp --}}

{{-- <h1>{{$myName}}</h1> --}}

{{-- @if (false) I'm true @else I'm false @endif --}}

{{-- @php
    $fruits = ["apple","orange","mango","pineapple"];
    @endphp

    <ul>
        @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>
        @endforeach
        </ul> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @php
        $str = 'hello hello';
        $fruits = ['apple', 'mango', 'orange', 'pineapple'];
        $mySelf = (object) [
            'name' => 'lpp',
            'age' => 21,
            'job' => 'developer',
        ];
    @endphp

    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>

    {{ '<h1>hello</h1>' }}

    {!! '<h1>hello</h1>' !!}

    <script>
        console.log("{{ $str }}");
        const fruits = @json($fruits);
        console.log(fruits);
        console.log(@json($mySelf));
    </script>

</body>

</html>
