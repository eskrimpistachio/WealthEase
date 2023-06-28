<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Wealth Ease</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        custblack: '#081110',
                        custpink: '#F20070',
                        custgrey: '#182120'
                    },
                    fontFamily: {
                        'roboto': ['Roboto']
                    }
                }
            }
        }
    </script>
</head>

<body class="font-roboto">
    @include('components.navbar')

    <div class="bg-custblack">
        <div class="ml-16 ">
            @yield('container')
        </div>
    </div>


</body>

</html>
