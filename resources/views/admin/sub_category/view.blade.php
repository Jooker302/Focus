@extends('layouts.admin')

@section('content')
    <div class="m-6">

        <div class="flex justify-end">
            <a href="{{ url('add-category') }}"
                class="m-4 border-2 border-cyan-500 text-black rounded-2xl p-2 hover:text-white hover:bg-cyan-500 hover:border-white"
                href="{{ url('add-category') }}">Add Sub Category</a>
        </div>

        <div class="m-2">
            <table id="myTable">
                <thead>
                    <th>
                        ID
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Action
                    </th>
                </thead>
                <tbody>
                    @foreach ($categorys as $category)
                        <tr>
                            <td>
                                {{ $category->id ?? '' }}
                            </td>
                            <td>
                                @php
                                    $main = \App\Models\Category::find( $category->category_id);
                                @endphp
                                {{$main->name ?? ''}}
                            </td>
                            <td>
                                {{ $category->name ?? '' }}
                            </td>
                            <td>
                                <div class="flex justify-center">
                                    <form action="{{ url('edit-sub-category') }}" method="get">
                                        <input type="hidden" name="id" value="{{ $category->id ?? '' }}">
                                        <input type="submit" value="Edit"
                                            class="px-2 py-1 border-2 border-yellow-500 text-black rounded-2xl hover:bg-yellow-500 hover:text-white">
                                    </form>
                                    <a href="{{ url('delete-sub-category', $category->id) }}"
                                        class="px-2 py-1 mx-1 border-2 border-red-500 text-black rounded-2xl hover:bg-red-500 hover:text-white">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
