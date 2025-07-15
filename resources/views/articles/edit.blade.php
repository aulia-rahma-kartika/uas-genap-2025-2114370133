@extends('layouts.app')

@section('content')
    <h2 class="mb-4">{{ isset($article) ? '✏️ Edit Artikel' : '📝 Tambah Artikel' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($article) ? route('articles.update', $article->id) : route('articles.store') }}" method="POST" class="card shadow-sm p-4 mb-4">
        @csrf
        @if(isset($article))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $article->title ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Artikel</label>
            <textarea name="content" rows="6" class="form-control" required>{{ old('content', $article->content ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ (old('category_id', $article->category_id ?? '') == $cat->id) ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="is_publish" value="1"
                {{ old('is_publish', $article->is_publish ?? false) ? 'checked' : '' }}>
            <label class="form-check-label">
                Publikasikan Artikel
            </label>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Publikasi</label>
            <input type="datetime-local" name="published_at" class="form-control"
                value="{{ old('published_at', isset($article) && $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('Y-m-d\TH:i') : '') }}">
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('articles.index') }}" class="btn btn-secondary me-2">Kembali</a>
            <button type="submit" class="btn btn-success">
                {{ isset($article) ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
@endsection
