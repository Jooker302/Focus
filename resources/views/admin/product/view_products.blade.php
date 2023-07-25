@extends('layouts.admin')

@section('content')
    <div class="m-6">
        <div class="flex justify-end">
            <a href="{{ url('add-product') }}"
                class="m-4 border-2 border-cyan-500 text-black rounded-2xl p-2 hover:text-white hover:bg-cyan-500 hover:border-white"
                href="{{ url('add-product') }}">Add Product</a>
        </div>

        <div class="m-2" style="overflow-x: auto;">
            <table id="myTable">
                <thead>
                    <th>
                        ID
                    </th>
                    <th>
                        Category ID
                    </th>
                    <th>
                        Sub Category ID
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Top
                    </th>
                    <th>
                        Action
                    </th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ $product->id ?? '' }}
                            </td>
                            <td>
                                {{ $product->category_id ?? '' }}
                            </td>
                            <td>
                                {{ $product->sub_category_id ?? '' }}
                            </td>

                            <td>
                                <img style="height: 200px; width: 200px" src="{{$product->image}}" alt="No Image">

                            </td>
                            <td>
                                {{ $product->name ?? '' }}
                            </td>
                            <td>
                                {{ $product->price ?? '' }}
                            </td>
                            <td>
                                {{ $product->top ?? '' }}
                            </td>
                            <td>
                                <div class="flex justify-center">
                                    <form action="{{ url('edit-product') }}" method="get">
                                        <input type="hidden" name="id" value="{{ $product->id ?? '' }}">
                                        <input type="submit" value="Edit"
                                            class="px-2 py-1 border-2 border-yellow-500 text-black rounded-2xl hover:bg-yellow-500 hover:text-white">
                                    </form>
                                    <a href="{{ url('delete-product', $product->id) }}"
                                        class="px-2 py-1 mx-1 border-2 border-red-500 text-black rounded-2xl hover:bg-red-500 hover:text-white">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
