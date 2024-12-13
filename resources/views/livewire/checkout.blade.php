<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagamento</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        
    </head>
    <body>
        <div class="container">
            <div class='row'>
                <div class='col-md-12'>
                    <div class="card">
                        <div class="card-header">   Pagamento   </div>
                            <div class="card-body">
                                <table id="cart" class="table table-hover tablecondensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Curso</th>
                                            <th style="width:10%">Preço</th>
                                            <th style="width:22%" class="textcenter">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-3 hidden-xs"><img 
                                                        src="{{ asset('storage/img/curso/' . $resultado->photo) }}" width="100" height="100" class="imgresponsive"/></div>
                                                        <div class="col-sm-9">
                                                            <h4 class="nomargin"> {{$resultado->category_id}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Price">{{$resultado->price}}.00 Mzn</td>
                                            <td data-th="Quantity">
                                                <input type="number" value="1" class="formcontrol quantity cart_update" min="1" />
                                            </td>
                                            <td data-th="Subtotal" class="text-center">{{$resultado->price}}.00 Mz</td>
                                            <td class="actions" data-th="">
                                                <button class="btn btn-danger btn-sm 
                                                cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" style="textalign:right;"><h3><strong>{{$resultado->price}}.00 Mz</strong></h3></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="text-align:right;">
                                                <form action="{{route('session', $resultado1->id)}}" method="POST">
                                                    @csrf()
                                                    <input type='hidden' name="total" value="{{$resultado->price}}">
                                                    <input type='hidden' name="productname"value="{{$resultado->category_id}}">
                                                    <button class="btn btn-success" type="submit" id="checkout-live-button">
                                                        <i class="fa fa-money"></i> Checkout
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>