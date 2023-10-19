<!DOCTYPE html>
<html>
    <body>
        <h3>Dane użytkownika</h3>
        @if($errors->any())
            <ul>
                @foreach($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="UserFormController" method="get">
            <input type="text" name="firstName" placeholder="Podaj imię" autofocus><br><br>
            <input type="text" name="lastName" placeholder="Podaj nazwisko"><br><br>
            <input type="text" name="email" placeholder="Podaj email"><br><br>
            <input type="submit" value="Zatwierdź">
        </form>
    </body>
</html>