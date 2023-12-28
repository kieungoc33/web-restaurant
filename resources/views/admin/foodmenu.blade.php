<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.navbar')

    <div style="position: relative; top: 60px;right -150">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <label>Title</label>
                <input style="color:blue" type="text" name="title" placeholder="Enter Title" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color:blue"  type="num" name="price" placeholder="Enter Price" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" placeholder="Enter Image" required>
            </div>
            <div>
                <label>Description</label>
                <input style="color:blue"  type="text" name="description" placeholder="Enter Description" required>
            </div>
            <div>
                <input type="submit" value= "Save">
            </div>
        </form>
        <div>
            <table bgcolor="black">
                <tr>
                    <th style ="padding:30px">Food name</th>
                    <th style ="padding:30px">Price</th>
                    <th style ="padding:30px">Decription</th>
                    <th style ="padding:30px">Image</th>
                    <th style ="padding:30px">Action</th>
                    <th style ="padding:30px">Action2</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img heigh="200" width="200" src ="/foodimage/{{$data->image}}"></td>
                    <td>
                        <a href="{{url('/deletemenu',$data->id)}}">Delete</a>
                    </td>
                    <td>
                        <a href="{{url('/updateview',$data->id)}}">Update</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    
    </div>
    @include('admin.adminscript')
  </body>
</html>