<!DOCTYPE html>
<html>
    Imię i nazwisko: {{$firstName}} {{$lastName}} <br>
    Miasto: {{$city}} <br>
    Hobby: <br>
    <ul>
        @foreach($hobby as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</html>