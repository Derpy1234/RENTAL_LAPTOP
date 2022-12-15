@extends('layout')

@section('content')

<div class="container" style="margin-left: 50px; width: 40%;">

    <form action="/store" method="POST">
        @csrf
        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
        @endif 
        <br>
            {{-- @if (Session::get('addData'))
                <div class="alert alert-success">
                    {{ Session::get('addData') }}
                </div>
            @endif  --}}
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama">
           
            <label for="exampleFormControlInput1" class="form-label">Nis</label>
            <input name="nis" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nis">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Purposes</label>
            <textarea name="purpose" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Tujuan Peminjaman"></textarea>
        </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Keterangan Laptop"></textarea>
          </div> 
          <div class="mb-3 d-flex justify-content-between gap-5">
            <div class="d-flex flex-column w-50">
                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                <input name="tanggal" type="date" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="d-flex flex-column w-50" >
                <label for="" class="form-label">Rayon</label>
                <select name="rayon" onfocus="this.size=3;" onblur='this.size=1;' onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                    <option selected hidden>Rayon Kamu</option>
                    <option value="cia1">cia1</option>
                    <option value="cia2">cia2</option>
                    <option value="cia3">cia3</option>
                    <option value="cia4">cia4</option>
                    <option value="cia5">cia5</option>
                  </select>
            </div>
          </div>
          <label for="exampleFormControlInput1" class="form-label">Teacher Name</label>
          <input name="teacher_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Teacher Name">
          <br>
          <button type="submit" class="tombol_login">Kirim</button> 
    </form>
</div>
@endsection