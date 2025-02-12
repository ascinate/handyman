<x-header/>


<section class="mt-4 others-filed float-start w-100">
    <div class="container">
        <div class="inside-tops-others d-inline-block w-100">
            <div class="tops-sectins d-flex align-items-center justify-content-center w-100">
                <figure class="m-0 sert-div01">
                    <img alt="al" loading="lazy" src="images/left-round.png">
                </figure>
               <h2 class="page-heading mt-4 mx-4"> Service User </h2>
               <figure class="m-0 sert-div01">
                <img alt="al" loading="lazy" src="images/left-round2.png">
               </figure>
           </div>
            <div class="cols-table p-4 d-inline-block w-100">
                <table id="example-datea-services" class="table table-striped nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Relation</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($familymembers as $familymember)
                    <tr>
                        <td><a href="#"> {{ $familymember->name }} </a></td>
                        <td>{{ $familymember->email }}</td>
                        <td>{{ $familymember->phone }}</td>
                        <td>{{ $familymember->relation }}</td>
                        
                        <td>
                            <a href="{{ URL::to('editmember', $familymember->id) }}" class="ctm" data-bs-toggle="tooltip" data-bs-placement="top" title="View"> <i class="ri-eye-fill"></i> </a>
                            <a href="{{ URL::to('deletemember/'.$familymember->id) }}" class="ctm"> <i class="ri-delete-bin-6-fill"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<x-footer/>
