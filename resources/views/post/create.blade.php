<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0
    minimun-scale=1.0">
    <title>Title</title>
</head>
<body>

<form action="#">
    {{--#4 I can use partials to split this logic in components --}}
    {{--#5 I can parameter to my partials to customize a class or id (dropdown component is using field)--}}
    @include('partials.channels.dropdown', ['field'=>'channels_example']);
</form>

</body>
</html>
