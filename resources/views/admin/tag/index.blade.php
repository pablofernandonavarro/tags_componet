<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etiquetas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h1 class="page-header">(sistema de etiquetas)</h1>

                @if(session('info'))
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
                @endif

                @if(count($errors))
                <div class="alert alert-success">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('publication.store') }}" method="Post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Título Publicacion</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Contenido publicaion</label>
                        <textarea name="body" class="form-control" rows="7tags"></textarea>
                    </div>
                    <div class="form-group well">
                        <label for="tags">Etiquetas (palabras separadas por coma)</label>
                        <input type="text" name="tags" data-role="tagsinput" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>
                </form>


                <!-- View of the publication with its labels  -->

                <hr>
                @foreach($publications as $publication)
                <div class="panel panel-primary">
                    <div class="panel-heading">{{ $publication->title }}</div>
                    <div class="panel-body">{{ $publication->body }}</div>
                    <div class="panel-footer">
                        @forelse($publication->tags as $tag)
                        <span class="label label-info">{{ $tag->name }}</span>
                        @empty
                        <em>Sin etiquetas</em>
                        @endforelse
                    </div>
                </div>
                @endforeach

                <!-- View of the publication with its labels  -->

            </div>
        </div>
    </div>










    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
</body>

</html>