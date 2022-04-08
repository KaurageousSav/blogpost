<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
            table {
                width: 50%;
            }
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }

        table.center {
          margin-left: auto; 
          margin-right: auto;
        }
    </style>
</head>
<body>
    <div>
        <a style="display:block;text-align:center" href="/blogs" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-black px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">View All Blogs</a>
        <a style="display:block;text-align:center" href="/blog/create" class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-blue-500 tracking-wide text-black px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add a Blog</a>
    </div>
    
    <h1 style="text-align:center" class="mb-5 mt-4">There are {{$blogs->count()}} blogs</h1>

    <div class="row">
        <div class="col-md-12">
            <table class="center">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Content</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @if ($blogs->count()>0)
                        @foreach ($blogs as $blogs)
                            <tr>
                                <td>{{$blogs->content}}</td>
                            </tr>
                        @endforeach
                    @endif
    
                 
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>