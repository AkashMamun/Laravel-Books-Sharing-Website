
    <div class="row">


    @foreach($books as $book)
    <div class="col-md-4">
        <div class="single-book">
            <img src="{{ asset('images/books/'.$book->image) }}" alt="" class="img-thumbnail">
            <div class="book-short-info">
                <h5>{{ $book->title }}</h5>
                <p>
                    <a href="{{ route('users.profile',$book->user->username) }}" class=""><i class="fa fa-upload"></i> {{ $book->user->name }}</a>
                </p>
                <a href="{{ route('books.show', $book->slug ) }}" class="btn btn-outline-primary">
                    
                    <i class="fa fa-eye"></i> View</a>
                <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Wishlist</a>

            </div>
        </div>
    </div> <!-- Single Book Item -->

    @endforeach
    
</div>