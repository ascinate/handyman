<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                  </span> Dashboard
                </h3>
              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Article List</h4>
                    <table class="table table-striped" id="example2">
                      <thead>
                        <tr>
                            <th> # </th>
                            <th> File </th>
                            <th> Title </th>
                            <th> Category </th>
                            <th> Papertype </th>
                            <th> Tags </th>
                            <th> Type </th>
                            <th> Price </th>
                            <th> Status </th>
                            <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>ES0{{ $product->id }}</td>
                            <td>
                                @if($product->upload_file)
                                    <a href="{{ asset('uploads/' . $product->upload_file) }}" target="_blank">
                                        {{ $product->upload_file }}
                                    </a>
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $product->articletitle }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->paper_type }}</td>
                            <td>{{ $product->tags }}</td>
                            <td>{{ $product->type }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                            <form action="{{ route('update-status', $product->id) }}" method="POST">
                                    @csrf
                                    @php
                                        if ($product->status == 'Published') {
                                            $buttonClass = 'btn-success';
                                            $buttonText = 'Approved';
                                        } else {
                                            $buttonClass = 'btn-danger';
                                            $buttonText = 'Draft';
                                        }
                                    @endphp
                                    <button type="submit" class="btn btn-sm {{ $buttonClass }}">
                                        {{ $buttonText }}
                                    </button>
                            </form>

                            </td>

                            <td>
                                <a href="{{ URL::to('editproduct/'.$product->id) }}" class="btn btn-sm">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deleteproduct/'.$product->id }}" class="btn btn-sm">
                                    <i class="mdi mdi-delete" style="font-size: 20px;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<x-adminfooter/>
