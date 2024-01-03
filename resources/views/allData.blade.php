
@extends('index')
@section('alldata')
<div class="alldata">
  <div class="option">
    <span><a href="/country"><i class="fa fa-plus" style="font-size: 25px;" aria-hidden="true"></i></a></span>
  </div>
    <div class="datalist">
      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif
     <div class="alldatamain">
         <table>
             <tr>
               <th>Country</th>
               <th>Country Code</th>
               <th>Data Type</th>
               <th>Action</th>
             </tr>
       
              @if (!empty($countrydata))
              @foreach ($countrydata as $data)
              <tr>
                    <td>{{$data->country}}</td>
                    <td>{{$data->country_code}}</td>
                    <td>{{$data->Datatype}}</td>

                    <input type="hidden" name="country" value="{{$data->country}}">
                    <input type="hidden" name="country_code" value="{{$data->country_code}}">
                    <input type="hidden" name="datatype" value="{{$data->Datatype}}">
                    <td>
                      <form action="{{url('/edit')}}" method="get" style="display: inline;">
                        @csrf
                        <input type="hidden" name="country" value="{{$data->country}}">
                        <input type="hidden" name="country_code" value="{{$data->country_code}}">
                        <input type="hidden" name="datatype" value="{{$data->Datatype}}">
                        <button type="submit" class="button edit-button">Edit</button>
                    </form>
            
                    <!-- Delete Form -->
                    <form action="{{url('/delete')}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE') 
                        <input type="hidden" name="country" value="{{$data->country}}">
                        <input type="hidden" name="country_code" value="{{$data->country_code}}">
                        <input type="hidden" name="datatype" value="{{$data->Datatype}}">
                        <button type="submit" class="button delete-button">Delete</button>
                    </form>       
                    </td>  
              </tr>
              @endforeach
              @else
                  <tr>Tere is somthing wrong please wait for some time or add new data</tr>
              @endif

           </table>
     </div>
     <div class="alldatafilter">
       <form action="">
         <input type="text" name="country" id="country" placeholder="Country Name....">
         <input type="text" name="Country Code" id="country" placeholder="Country Code....">
         <select name="Datatype" id="">
          <option value="">Select Datatype</option>
          <option value="import">Import</option>
          <option value="export">Export</option>
         </select>
         <button>Filter</button>
       </form>
     </div>
    </div>
 </div>
 @endsection