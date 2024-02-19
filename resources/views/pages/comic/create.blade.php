@extends ('layout.main-layout')
@secton ('head')
    <title>Home</title>
@endsection

@secton('content')
    <h1>new comic</h1>
    <form 
        action="{{route ('comic.store') }}"
        method="POST">

        @csrf
        @method('POST')

        <label for="title"> Title </label>
        <input type="text" name="title" id="title"> 
        
        <br>

        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <br>

        <label for="price">Price</label>
        <input type="number" name="price" id="price">

        <br>

    </form>
@endsection
