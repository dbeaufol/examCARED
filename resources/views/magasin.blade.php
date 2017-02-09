@extends('templates.base')
@section('title', 'Magasin')
@section('content')
    <h1>Magasin de musique</h1>
    @if($products instanceof Illuminate\Database\Eloquent\Collection)
        <table id="product-table">
          <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix (€)</th>
            <th>Images</th>
          </tr>
          @foreach ($products as $product)
          <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price / 100 }}</td>
            <td><img style="width: 30%;" src='/img/{{$product->img}}'></td>
          </tr>
          @endforeach
        </table>
      </br>
      </br>
      </br>
      </br>
      @endsection
    @else

    @endif
