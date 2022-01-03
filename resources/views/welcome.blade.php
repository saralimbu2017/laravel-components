<x-my-component>
    @section('main-content')
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
            <div class="card-body">
            <div class="small text-muted">January 1, 2021</div>
            <h2 class="card-title h4">Post Title</h2>
             <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
            <a class="btn btn-primary" href="#!">Read more →</a>
            </div>
        </div>


        <nav aria-label="Pagination">
            <hr class="my-0" />
            <ul class="pagination justify-content-center my-4">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">15</a></li>
                <li class="page-item"><a class="page-link" href="#!">Older</a></li>
            </ul>
        </nav>

    @endsection

    @section('sidebar')
        <!-- Search widget-->
        <x-home-search></x-home-search>
                  
        <!-- Categories widget-->
        <!-- <x-categories :users="$users"></x-categories> -->
        <div class="card mb-4">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                    <!-- <ul class="list-unstyled mb-0">
                        @foreach($users as $user)
                        <li>
                            <a href="#">{{$user->name}}</a>
                        </li>
                        @endforeach
                    </ul> -->
          </div>
          <div class="col-sm-6">
              <ul class="list-unstyled mb-0">
                  <li><a href="#!">JavaScript</a></li>
                  <li><a href="#!">CSS</a></li>
                  <li><a href="#!">Tutorials</a></li>
              </ul>
          </div>
        </div>
        </div>
       </div>
                    <!-- Side widget-->
        <x-side-widget></x-side-widget>
                   
    @endsection

</x-my-component>