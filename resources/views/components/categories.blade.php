<div class="card mb-4">
  <div class="card-header">Categories</div>
  <div class="card-body">
      <div class="row">
          <div class="col-sm-6">
              <ul class="list-unstyled mb-0">
                @foreach($users as $user)
                  <li>
                    <a href="#">{{$user->name}}</a>
                  </li>
                @endforeach
              </ul>
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