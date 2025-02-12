<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <!----Main Row--------->
           <form name="editfrm" action="{{ URL::to('updateproduct') }}" method="POST" class="forms-sample" enctype= "multipart/form-data">
           <input type="hidden" name="id" value="{{ $data['id'] }}" />
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Article</h4>

                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                               <div class="card">
                                 <div class="card-body">
                                   <h4 class="card-title">Add Article</h4>

                                       <div class="row">
                                           <div class="col-lg-6">
                                           <div class="form-group">
                                               <label for="exampleInputName1">Title</label>
                                               <input type="text" class="form-control" name="articletitle" value="{{ $data['articletitle'] }}">
                                           </div>
                                           </div>

                                           <div class="col-lg-6">
                                               <div class="form-group">
                                               <label> category </label>
                                               <select name="category" class="form-select">
                                                <option value=""></option>
                                                   @php
                                                       $value = \DB::table('categories')->get();
                                                       foreach($value as $val)
                                                       {
                                                   @endphp
                                                     <option value="{{ $val->category_name }}"@php if($data['category']==$val->category_name) { echo 'selected'; } @endphp>
                                                        {{ $val->category_name }}
                                                    </option>
                                                   @php
                                                       }
                                                   @endphp
                                               </select>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-lg-6">
                                           <div class="form-group">
                                               <label for="exampleInputEmail3">Keywords</label>
                                               <input type="text" class="form-control" name="keywords" value="{{ $data['keywords'] }}">
                                           </div>
                                           </div>

                                           <div class="col-lg-6">
                                               <div class="form-group">
                                               <label> papertype </label>
                                               <select name="paper_type" class="form-select">
                                                <option value=""></option>
                                                   @php
                                                       $value = \DB::table('papers')->get();
                                                       foreach($value as $val)
                                                       {
                                                   @endphp
                                                     <option value="{{ $val->paper_name }}"@php if($data['paper_type']==$val->paper_name) { echo 'selected'; } @endphp>
                                                        {{ $val->paper_name }}
                                                    </option>
                                                   @php
                                                       }
                                                   @endphp
                                               </select>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="row">
                                           <div class="col-lg-6">
                                           <div class="form-group">
                                               <label for="exampleInputCity1">Special Tags</label>
                                               <input type="text" class="form-control" name="tags" value="{{ $data['tags'] }}">
                                           </div>
                                           </div>

                                           <div class="col-lg-6">
                                           <div class="form-group">
                                               <label for="exampleInputCity1">University</label>
                                               <input type="text" class="form-control" name="university" value="{{ $data['university'] }}">
                                           </div>
                                           </div>
                                       </div>

                                       <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">Description</label>
                                                <input type="text" class="form-control" name="description" value="{{ $data['description'] }}">
                                            </div>
                                            </div>

                                            <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="type">Type</label>
                                                        <select name="type" id="type" class="form-select" required>
                                                            <option value="Free" {{ $data->type == 'Free' ? 'selected' : '' }}>Free</option>
                                                            <option value="Premium" {{ $data->type == 'Premium' ? 'selected' : '' }}>Premium</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6" id="priceField" style="display: none;">
                                                    <div class="form-group">
                                                        <label for="price">Price</label>
                                                        <input type="number" class="form-control" name="price" id="price" step="0.01" placeholder="Enter price for premium" disabled value="{{ $data['price'] }}">
                                                    </div>
                                                    </div>

                                            <div class="col-lg-6">
                                           <div class="form-group">
                                               <label>Upload Article</label>
                                               <input type="file" class="form-control" name="upload_file">
                                               &nbsp;{{ $data['upload_file'] }}
                                           </div>
                                           </div>

                                           <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">Status</label>
                                                <select name="status" class="form-select">
                                                    <option value="">--Select--</option>
                                                    <option value="Published"@php if($data['status']=='Published') { echo 'selected'; } @endphp>Published</option>
                                                    <option value="Draft"@php if($data['status']=='Draft') { echo 'selected'; } @endphp>Draft</option>
                                                </select>
                                            </div>
                                            </div>
                                       </div>

                                 </div>
                               </div>
                             </div>

                       </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>

            </div> <!---- End main row ------->
           </form>

         </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>

   <script>
        window.onload = function() {
            var typeField = document.getElementById('type');
            var priceField = document.getElementById('priceField');
            var priceInput = document.getElementById('price');

            if (typeField.value === 'Premium') {
                priceField.style.display = 'block';
                priceInput.removeAttribute('disabled');
                priceInput.required = true;
            } else {
                priceField.style.display = 'none';
                priceInput.setAttribute('disabled', 'disabled');
                priceInput.required = false;
                priceInput.value = '';
            }
        };

        document.getElementById('type').addEventListener('change', function () {
            var priceField = document.getElementById('priceField');
            var priceInput = document.getElementById('price');
            if (this.value === 'Premium') {
                priceField.style.display = 'block';
                priceInput.removeAttribute('disabled');
                priceInput.required = true;
            } else {
                priceField.style.display = 'none';
                priceInput.setAttribute('disabled', 'disabled');
                priceInput.required = false;
                priceInput.value = '';
            }
        });
    </script>
