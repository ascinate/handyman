<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('insertproduct') }}" method="POST" class="forms-sample" enctype= "multipart/form-data">
            @csrf

            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Article</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" name="articletitle" placeholder="Title" required>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> category </label>
                                    <select name="category" class="form-select" required>
                                        <option value=""></option>
                                        @foreach(\DB::table('categories')->get() as $val)
                                            <option value="{{ $val->category_name }}"> {{ $val->category_name }} </option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Keywords</label>
                                    <input type="text" class="form-control" name="keywords">
                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> papertype </label>
                                    <select name="paper_type" class="form-select" required>
                                        <option value=""></option>
                                        @foreach(\DB::table('papers')->get() as $val)
                                            <option value="{{ $val->paper_name }}"> {{ $val->paper_name }} </option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Special Tags</label>
                                    <input type="text" class="form-control" name="tags">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">University</label>
                                    <input type="text" class="form-control" name="university">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label for="type">Type</label>
                                            <select name="type" id="type" class="form-select" required>
                                            <option value="Free">Free</option>
                                            <option value="Premium">Premium</option>
                                            </select>
                                    </div>
                                 </div>

                                 <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Upload Article</label>
                                            <input type="file" class="form-control" name="upload_file">
                                        </div>
                                 </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Description</label>
                                    <input type="text" class="form-control" name="description">
                                </div>
                                </div>
                                <div class="col-lg-6" id="priceField" style="display: none;">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" id="price" step="0.01" placeholder="Enter price for premium" disabled>
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
         priceInput.value = ''; //
       }
     });
   </script>
