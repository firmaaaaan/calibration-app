@extends('components.layouts.main')
@section('content')

    <!-- Tabel Permohonan Kalibrasi User -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-tosca text-white fw-bold">
            Permohonan Kalibrasi Terbaru
            <a href="{{ route('kalibrasi.create') }}" class="btn btn-light btn-sm float-end text-tosca fw-bold">
                <i class="bi bi-plus-circle me-1"></i> Ajukan Baru
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alat</th>
                            <th>Merk</th>
                            <th>No. Seri</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kalibrasis as $i => $kalibrasi)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $kalibrasi->nama_alat }}</td>
                                <td>{{ $kalibrasi->merk }}</td>
                                <td>{{ $kalibrasi->serial_number }}</td>
                                <td>{{ $kalibrasi->created_at->format('Y-m-d') }}</td>
                                <td>
                                    @if ($kalibrasi->status == 'selesai')
                                        <span class="badge bg-success">Selesai</span>
                                    @elseif($kalibrasi->status == 'proses')
                                        <span class="badge bg-warning text-dark">Proses</span>
                                    @else
                                        <span class="badge bg-secondary">Menunggu</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('kalibrasi.show', $kalibrasi->id) }}" class="btn btn-sm btn-tosca">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-secondary">Belum ada permohonan kalibrasi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
