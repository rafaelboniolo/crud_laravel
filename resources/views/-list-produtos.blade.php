@foreach($products as $pro)

        {{$pro->id}}
        {{$pro->name}}
        {{$pro->price}}
        {{$pro->description}}
        {{$pro->quantity}}

    <br><br>

@endforeach

<form action="{{route('product.destroy', '1')}}" method="POST">
    {{method_field('DELETE')}}{{ csrf_field() }}                                                
    <input type="submit" value="deletar">   
</form>


<?php
    echo "<a href= 'http://localhost:8000/product/create'> Adicionar";  
?>
