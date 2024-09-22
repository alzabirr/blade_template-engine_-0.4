<h1>This is home page</h1>




{{-- php for loop in blade template  --}}
@for ($i=0; $i<=10; $i++)
    item nummber {{$i}} <br/>


@endfor

{{2+2}} <br/>
{{4-1}} <br/> <br/>

{{-- ------------------------------------------------------ --}}



{{-- raw php inside in blade template engine  --}}

@php


$num1 = 10;
$num2 = 5;
echo $num1+$num2;

@endphp
