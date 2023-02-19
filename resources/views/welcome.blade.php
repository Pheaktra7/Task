<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            table {
                table-layout: fixed
            }
        </style>
    </head>
    <body>
        <div class="container-fluid bg-light p-2 float-end">
            <h3 class="m-0">ផលិតផល</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-circle-plus"></i> បន្ថែម
            </button>
        </div>
        <table class="table ">
            <tr>
                <th>លេខរៀង</th>
                <th>ប្រភេផលិតផល</th>
                <th>ឈ្មោះ</th>
                <th>ប្រភេទឯកតា</th>
                <th>តម្លៃ</th>
            </tr>
            @foreach($product as $item_product)
                <tr>
                    <td>{{$item_product->id}}</td>
                    <td>{{$item_product->category_name}}</td>
                    <td>{{$item_product->name}}</td>
                    <td>{{$item_product->unit_name}}</td>
                    <td>{{$item_product->price}}</td>
                </tr>
            @endforeach
        </table>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">បន្ថែម ផលិតផល</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('store-form')}}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">ឈ្មោះ</label>
                                    <input type="text" name="product_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">ឈ្មោះអង់គ្លេស</label>
                                    <input type="text" name="product_name_en" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">ប្រភេផលិតផល</label>
                                    <select name="category" id="category" class="form-select">
                                        <option value=""></option>
                                        @foreach ($category as $item_category)
                                            <option value="{{$item_category->id}}">{{$item_category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">ប្រភេទឯកតា</label>
                                    <select name="unit" id="unit" class="form-select">
                                        <option value=""></option>
                                        @foreach ($unit as $item_unit)
                                            <option value="{{$item_unit->id}}">{{$item_unit->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">តម្លៃ</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">បោះបង់</button>
                            <button type="submit" class="btn btn-primary">រក្សាទុក</button>
                        </div>
                    </form>
                </div> 
            </div>
            </div>
        </div>
    </body>
</html>