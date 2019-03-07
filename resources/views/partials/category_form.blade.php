<form class="form-group" action="{{ route('home.indexByCategory') }}" method="get">
    <label for="category_id">Categoria</label>
    <select class="form-control" name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->slug }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Filtra" />
</form>
