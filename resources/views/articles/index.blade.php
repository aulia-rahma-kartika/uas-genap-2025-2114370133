@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">📰 Daftar Artikel</h2>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">
        + Tambah Artikel
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover table-striped mb-0">
            <thead class="table-light">
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Dipublikasikan</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category->name ?? '-' }}</td>
                        <td>
                            <span class="badge {{ $article->is_publish ? 'bg-success' : 'bg-secondary' }}">
                                {{ $article->is_publish ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td>{{ $article->published_at }}</td>
                        <td class="text-end">
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau hapus?')">
                                    🗑 Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada artikel.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
