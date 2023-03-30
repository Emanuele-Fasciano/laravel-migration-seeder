<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-danger">@yield('title')</h1>

    <section>
        @yield('content')
    </section>
</body>
</html>

            {{-- $table->id();
            $table->sting("Azienda");
            $table->sting("Stazione di partenza");
            $table->sting("Stazione di arrivo");
            $table->dateTime('Orario di partenza');
            $table->dateTime('Orario di arrivo');
            $table->sting("Codice Treno");
            $table->smallInteger("Numero Carrozze")->unsigned();
            $table->boolean("In orario");
            $table->boolean("Cancellato");
            $table->timestamps(); --}}