@extends('layouts.main')

@section('content')

<form method="post" action="{{route('trackers.store')}}">
    @method('POST')
    @csrf

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Trackers Editor</h3>
            </div>

         <div class="card-body">
         <div class="form-group">
            <label for="name">student_id</label>
            <input type="number" name="student_id" class="form-control">
        </div>

    <div class="form-group">
        <label for="">gareeba_from_hisbu</label>
        <input type="number" name="gareeba_from_hisbu" class="form-control">
    </div>

    <div class="form-group">
        <label for="">gareeba_from_rubu</label>
        <input type="number" name="gareeba_from_rubu" class="form-control">
    </div>

    <div class="form-group">
        <label for="">gareeba_from_page</label>
        <input type="number" name="gareeba_from_page" class="form-control">
    </div>

    <div class="form-group">
        <label for="">gareeba_from_ayah</label>
        <input type="number" name="gareeba_from_ayah" class="form-control">
    </div>

    <div class="form-group">
        <label for="">gareeba_to_hisbu</label>
        <input type="number" name="gareeba_to_hisbu" class="form-control">
    </div>

    <div class="form-group">
        <label for="">gareeba_to_rubu</label>
        <input type="number" name="gareeba_to_rubu" class="form-control">
    </div>

    <div class="form-group">
        <label for="">gareeba_to_page</label>
        <input type="number" name="gareeba_to_page" class="form-control">
    </div>

    <div class="form-group">
        <label for="">gareeba_to_ayah</label>
        <input type="number" name="gareeba_to_ayah" class="form-control">
    </div>
    <div class="form-group">
        <label for="">baeedha_from_hisbu</label>
        <input type="number" name="baeedha_from_hisbu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">baeedha_from_rubu</label>
        <input type="number" name="baeedha_from_rubu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">baeedha_to_hisbu</label>
        <input type="number" name="baeedha_to_hisbu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">baeedha_to_rubu</label>
        <input type="number" name="baeedha_to_rubu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">furusat</label>
        <input type="number" name="furusat" class="form-control">
    </div>

    <div class="form-group">
        <label for="">jadheedh_from_hisbu</label>
        <input type="number" name="jadheedh_from_hisbu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">jadheedh_from_rubu</label>
        <input type="number" name="jadheedh_from_rubu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">jadheedh_from_page</label>
        <input type="number" name="jadheedh_from_page" class="form-control">
    </div>
    <div class="form-group">
        <label for="">jadheedh_from_ayah</label>
        <input type="number" name="jadheedh_from_ayah" class="form-control">
    </div>
    <div class="form-group">
        <label for="">jadheedh_to_hisbu</label>
        <input type="number" name="jadheedh_to_hisbu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">jadheedh_to_rubu</label>
        <input type="number" name="jadheedh_to_rubu" class="form-control">
    </div>
    <div class="form-group">
        <label for="">jadheedh_to_page</label>
        <input type="number" name="jadheedh_to_page" class="form-control">
    </div>
    <div class="form-group">
        <label for="">jadheedh_to_ayah</label>
        <input type="number" name="jadheedh_to_ayah" class="form-control">
    </div>
    <div class="form-group">
        <label for="">date</label>
        <input type="date" name="date" class="form-control" required>
    </div>
    <a class="btn btn-info" href="{{ url()->previous() }}" >back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>

@endsection