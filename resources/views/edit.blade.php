<h1>edit page</h1>
<form action="/edit" method="POST">
    @csrf
    @method('PUT')
    <input type="file" name="file" placeholder="select image from file" value="{{ $data->image }}" ><br><br>
     <input type="hidden" name="id" value="{{ $data->id }}"><br><br>
    <input type="text" name="name" placeholder="enter book name" value="{{ $data->name}}" ><br><br>

    <input type="number" name="number" placeholder="enter authore_id" value="{{ $data->author_id }}"><br><br>
    <input type="number" name="number" placeholder="enter category_id" value="{{ $data->category_id }}" ><br><br>
    <input type="text" name="text" placeholder="enter content" value="{{ $data->content }}" ><br><br>
    <input type="number" name="number" placeholder="enter rating" value="{{ $data->rating }}"><br><br>
    <input type="number" name="number" placeholder="enter user_id"value="{{ $data->user_id }}" ><br><br>
    <input type="number" name="number" placeholder="enter book price" value="{{ $data->price }}"><br><br>
    <button type="submit">Update</button>
</form>


