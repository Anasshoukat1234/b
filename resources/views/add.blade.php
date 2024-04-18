<h1>Add Books</h1>
<form action={{ route("customer.store") }} method="POST">
    @csrf
    <input type="file" name="file" placeholder="select image from file" ><br><br>
    <input type="text" name="name" placeholder="enter book name"><br><br>
    <input type="number" name="author_id" placeholder="enter Author_id"><br><br>
    <input type="number" name="category_id" placeholder="enter category_id" ><br><br>
    <input type="text" name="content" placeholder="enter content" ><br><br>
    <input type="number" name="rating" placeholder="enter rating"><br><br>
    <input type="number" name="user_id" placeholder="enter user_id"><br><br>
    <input type="number" name="price" placeholder="enter book price"><br><br>
    <button type="submit">Add</button>
</form>



