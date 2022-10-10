@extends('lawyer.layouts.navbar_content')
@section('title', 'Profile')
@section('page-style')
<style>
    .app-time {
  border: 1px solid #fff;
  padding: 20px 30px;
  box-shadow: 2px 4px 10px 0px #c7cacce3;
}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 5px;
  right: 0;
  bottom: 0;
  left: 40px;
  height: 20px;
  width: 20px;
  transition: all 0.15s ease-out 0s;
  background: #fff;
  border: 1px solid #999;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #e5e7eb;
}
.option-input:checked {
  border: 1px solid #fff;
}
.option-input:checked::before {
  color: #d9486d;
  height: 40px;
  width: 40px;
  position: absolute;
  content: "✔";
  display: inline-block;
  font-size: 12px;
  left: 4px;
  line-height: 20px;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: "";
  display: block;
  position: relative;
  z-index: 100;
}

.option-input.radio {
  border-radius: 50%;
}
.option-input.radio::after {
  border-radius: 50%;
}
.app-check {
  display: flex;
}
.app-border {
  border: 1px solid #ece9e9;
  border-radius: 7px;
  padding: 5px 7px 5px 9px;
  padding-left: 40px;
  min-height: 30px;
}

.option-input.radio:checked + .app-border {
  background: #d9486d;
}
.option-input.radio:disabled,
.option-input.radio:disabled + .app-border {
  cursor: not-allowed;
  opacity: 0.6;
}
.app-label {
  position: relative;
  top: 5px;
  margin-right: 10px;
}

</style>
@endsection
@section('content')
    @include('admin.layouts.flash-message') 
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Create Slots</h5>
            <div class="card-body">
                <form action="{{route('lawyer.store-slots')}}" method="POST">
                    @csrf()
                    <div class="app-time">
  <div>
    <p>Timings</p>
    <p>9:00AM to 12:00PM</p>
    <div class="app-check">
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">9:00 AM
        </label>
      </div>
      <input type="radio" class="option-input radio" disabled name="example" />
      <div class="app-border">

        <label class="app-label">9:30 AM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">10:00 AM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">10:30 AM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">11:00 AM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">11:30 AM
        </label>
      </div>
    </div>
  </div>
  <div>
    <p>Timings</p>
    <p>1:00PM to 5:00PM</p>
    <div class="app-check">
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">1:00 PM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">1:30 PM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">2:00 PM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">2:30 PM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">3:00 PM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">3:30 PM
        </label>
      </div>
      <input type="radio" class="option-input radio" name="example" />
      <div class="app-border">

        <label class="app-label">4:00 PM
        </label>
      </div>

      <input type="radio" class="option-input radio" name="example" disabled />
      <div class="app-border">

        <label class="app-label">4:30 PM
        </label>
      </div>

    </div>
  </div>
</div>
                </form>
            </div>
        </div>
    </div>
@endsection