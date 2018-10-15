<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
    </head>
    <body>
        <form method="POST" action = "{{ url('/store') }}">

            {{ csrf_field() }}

            <p>
                Product Name:
                <input type="text" name="productName" id="productName">

                <br>
                <br>

                Quantity of Item:
                <input type="text" name="quantity" id="quantity">

                <br>
                <br>

                Price Per Item:
                <input type="text" name="pricePerItem" id="pricePerItem">

                <br>
                <br>

                <button type="submit" class="submit">Submit</button>

            </p>
        </form> 

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Product Name</th>
              <th scope="col">Quantity in stock</th>
              <th scope="col">Price per item</th>
              <th scope="col">Datetime submitted</th>
              <th scope="col">Total value number</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
                <tr>
                  <td>{{ $product->productName }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->created_at }}</td>
                  <td>{{ $product->quantity * $product->price }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <p>Total Value Numbers: {{ $totalValue }}</p>
    </body>
</html>

