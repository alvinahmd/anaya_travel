<!-- <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <label for="title">Judul:</label>
  <input type="text" name="title" value="{{ $post->title }}">
  <label for="content">Konten:</label>
  <textarea name="content">{{ $post->content }}</textarea>
  <label for="image">Gambar:</label>
  <input type="file" name="image">
  <button type="submit">Simpan Perubahan</button>
</form> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Data Post</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label class="font-weight-bold">GAMBAR</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                <!-- error message untuk title -->
                @error('image')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}">
                <!-- error message untuk title -->
                @error('image')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="title">Category:</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $post->category }}">
                <!-- error message untuk title -->
                @error('image')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label class="font-weight-bold">KONTEN</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ $post->content }}</textarea>
                <!-- error message untuk content -->
                @error('content')
                <div class="alert alert-danger mt-2">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit">Simpan Perubahan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>

</html>