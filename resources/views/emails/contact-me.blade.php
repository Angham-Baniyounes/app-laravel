@component('mail::message')
# A Heading 

Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptas adipisci, iusto magnam sint repellendus, excepturi ullam fugiat quas asperiores, facere aspernatur quasi reiciendis in labore. Ad quisquam expedita dignissimos. 

- A list
- goes 
- here

Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptas adipisci, iusto magnam sint repellendus, excepturi ullam fugiat quas asperiores, facere aspernatur quasi reiciendis in labore. Ad quisquam expedita dignissimos. 

@component('mail::button', ['url' => 'https://laracasts.com'])
    Visit laracasts
@endcomponent
@endcomponent

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>It Work Again!</h1>
    It sound like want to hear more about {{ $topic }}
</body>
</html> --}}