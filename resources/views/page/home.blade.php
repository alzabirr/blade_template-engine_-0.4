@include("layout.header")
<h1>This is home page</h1>




{{-- php for loop in blade template  --}}
@for ($i=0; $i<=10; $i++)
    item nummber {{$i}} <br/>


@endfor

{{2+2}} <br/>
{{4-1}} <br/> <br/>
<hr>
{{-- ------------------------------------------------------ --}}



{{-- raw php inside in blade template engine  --}}

@php


$num1 = 10;
$num2 = 5;
echo $num1+$num2;





@endphp

{{-- --------------------------------------------------------------- --}}
<hr>

<h1>including Child/Subview</h1>
{{-- component er vitor theke contach,hero,features gula (home page a show hbe ) --}}


@include("component.features")
@include("component.hero")
@include("component.testimonial")

@include("layout.footer")
