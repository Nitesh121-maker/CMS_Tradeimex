
@extends('index')
@section('continentdata')
<div class="alldata">
  <div class="option">
    @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif
    <span><a href="/continent"><i class="fa fa-plus" style="font-size: 25px;" aria-hidden="true"></i></a></span>
  </div>
  
    <div class="datalist">

     <div class="alldatamain">
      @if(session('deletemessage'))
        <div class="alert alert-success">
            {{ session('deletemessage') }}
        </div>
      @endif
         <table>
             <tr>
               <th>Country</th>
               <th>Country Code</th>
               <th>Action</th>
             </tr>
       
              @if (!empty($continentdata))
              @foreach ($continentdata as $data)
              <tr>
                    <td>{{$data->continent}}</td>
                    <td>{{$data->continent_code}}</td>
                    <td>
                      <form action="{{url('/continenteditform')}}" method="get" enctype="multipart/form-data" style="display: inline;">
                        @csrf
                        <input type="hidden" name="continent" value="{{$data->continent}}">
                        <input type="hidden" name="continent_Code" value="{{$data->continent_code}}">
                        <button type="submit" class="button edit-button">Edit</button>
                    </form>
            
                    <!-- Delete Form -->
                    <form action="{{url('/deletecontinent')}}" method="get" style="display: inline;">
                        @csrf
                        @method('DELETE') 
                        <input type="hidden" name="continent" value="{{$data->continent}}">
                        <button type="submit" class="button delete-button">Delete</button>
                    </form>       
                    </td>  
              </tr>
              @endforeach
              @else
                  <h3>Please wait for some time, or add new data to see data in the list</h3>
              @endif

           </table>
     </div>
     <div class="alldatafilter">
       <form action="">
         <input type="text" name="continent" id="continent" placeholder="Continent Name....">
         <input type="text" name="continent_Code" id="continent_Code" placeholder="Continent Code....">

         <button>Filter</button>
       </form>
     </div>
    </div>
 </div>
 @endsection