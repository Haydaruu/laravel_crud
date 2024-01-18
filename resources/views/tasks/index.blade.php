<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">
</head>
<div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <h1>Data Task</h1>
            </div>
            <nav>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('tasks.index') }}">DataTask</a></li>
                <li class="breadcrumb-item"><a href="{{ route('tasks.create') }}">Tambah Task</a></li>
            </ul>
        </nav>
            <!-- wrap @e -->
       
        <!-- main @e -->
        
    </div>        
            <!-- wrap @e -->
       
        <!-- main @e -->
        
    </div>
<a href="{{ route('tasks.create') }}" class="btn btn-primary mt-5 ml-3 mb-3">Create +</a>
</div>
</div>
                  <!--<div class="invoice-bills">-->
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                        <th class="text-center">ID</th>
                                        <th>JUDUL</th>
                                        <th>CONTENT</th>
                                        <th class="text-center">Action</th>
                                    </tr>

                                        @forelse ($tasks as $task)
                                        <tr>
                                        
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>{!! $task->description !!}</td>
                                            <td class="text-center">
                                                <!-- <div class="btn-group" aria-label="Basic example"> -->
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                            <a href="{{ route('tasks.show', $task->id) }}" i class="bi bi-eye-fill  "></i></a>
                                            <a href="{{ route('tasks.edit', $task->id) }}" i class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" i class="bi bi-trash-fill" style="color: #3063bb;"></i></button>
                                        </form>
                                    </td>
                                    </tr>
                                    </thead>
                                    @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                                            </div><!-- .invoice-bills -->
                                        </div><!-- .invoice-wrap -->
                                    </div><!-- .invoice -->
                                </div><!-- .nk-block -->
                            </div>
                            {{ $tasks->links() }}
                        </div>
                    </div>
                </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
               

                <!-- </form> -->
                         <!-- </div>
                       </div>
            </section> -->
    <!-- app-root @e -->
    <!-- select region modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
</body>
</html>

