@extends("layouts.base")

@section("content")
    <table>
        <thead>
            <tr>
                <td>
                    Бренд
                </td>
                <td>
                    Модель
                </td>
                <td>
                    Магазин
                </td>
                <td>
                    Стоимость
                </td>
                <td>
                    Последнее изменение
                </td>
            </tr>
        </thead>
        <tbody>
            @forelse($prices as $price)
            <tr>
                <td>
                    {{ $price->product->brand->title }}
                </td>
                <td>
                    {{ $price->product->title }}
                </td>
                <td>
{{--                    {{ $price->product->shop->title }}--}}
                </td>
                <td>
                    {{ $price->price }}
                </td>
                <td>
                    {{ $price->created_at }}
                </td>
            </tr>
            @empty
            <tr>
                <td>
                    Нет данных
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <form action="{{ route("product.store") }}" method="POST">
        @csrf
        @if(session()->has("created"))
            Товар добавлен
        @endif
        <h2>Добавить товар</h2>
        <select id="">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->title }}</option>
            @endforeach
        </select>
        <select name="model_id" id="">
            @foreach($models as $model)
                <option value="{{ $model->id }}">{{ $model->title }}</option>
            @endforeach
        </select>
        <select name="shop_id" id="">
            @foreach($shops as $shop)
                <option value="{{ $shop->id }}">{{ $shop->title }}</option>
            @endforeach
        </select>
        <input type="text" name="title" placeholder="Наименование модели">
        <hr>
        <h2>Api Resource</h2>
        <input type="text" name="api-url" placeholder="Api uri"><br>
        <span><input type="radio" name="method" value="POST">POST</span>
        <span><input type="radio" name="method" value="GET">GET</span><br>
        <input type="text" name="property" placeholder="Свойство"><br>
        <hr>
        <h2>Parse Resource</h2>
        <input type="text" name="parse-url" placeholder="Страница товара"><br>
        <input type="text" name="selector" placeholder="Селектор"><br>
        <button type="submit">Добавить</button>
    </form>
@endsection
