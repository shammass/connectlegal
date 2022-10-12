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
      <ul class="nav nav-tabs nav-fill" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#monday" aria-controls="monday" aria-selected="true"><i class="tf-icons bx bx-calendar"></i> Monday </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#tuesday" aria-controls="tuesday" aria-selected="false"><i class="tf-icons bx bx-calendar"></i> Tuesday</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#wednesday" aria-controls="wednesday" aria-selected="false"><i class="tf-icons bx bx-calendar"></i> Wednesday</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#thursday" aria-controls="thursday" aria-selected="false"><i class="tf-icons bx bx-calendar"></i> Thursday</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#friday" aria-controls="friday" aria-selected="false"><i class="tf-icons bx bx-calendar"></i> Friday</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#saturday" aria-controls="saturday" aria-selected="false"><i class="tf-icons bx bx-calendar"></i> Saturday</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#sunday" aria-controls="sunday" aria-selected="false"><i class="tf-icons bx bx-calendar"></i> Sunday</button>
        </li>
      </ul>
        <form action="{{route('lawyer.store-slots')}}" method="POST">
          @csrf()
          <div class="tab-content">

            <!-- MONDAY -->
            <div class="tab-pane fade show active" id="monday" role="tabpanel">
              <div class="app-time">
                <div id="appended-monday">
                  <div class="app-check col-md-3" id="monday_div_0">
                    <input type="text" class="form-control" name="monday[]" id="monday_0" placeholder="Ex: 9 - 9.30 AM" />    
                    <button type="button" class="btn btn-primary" style="margin-left: 2%;" onclick="appendField('Monday')">+</button>
                    <input type="hidden" name="monday_dynamic" id="monday_dynamic" value="0">
                  </div>
                </div>
              </div>
            </div>

            <!-- TUESDAY -->
            <div class="tab-pane fade" id="tuesday" role="tabpanel">
              <div class="app-time">
                <div id="appended-tuesday">
                  <div class="app-check col-md-3" id="tuesday_div_0">
                    <input type="text" class="form-control" name="tuesday[]" id="tuesday_0" placeholder="Ex: 9 - 9.30 AM" />    
                    <button type="button" class="btn btn-primary" style="margin-left: 2%;" onclick="appendField('Tuesday')">+</button>  
                    <input type="hidden" name="tuesday_dynamic" id="tuesday_dynamic" value="0">
                  </div>
                </div>
              </div>
            </div>

            <!-- WEDNESDAY -->
            <div class="tab-pane fade" id="wednesday" role="tabpanel">
              <div class="app-time">
                <div id="appended-wednesday">
                  <div class="app-check col-md-3" id="wednesday_div_0">
                    <input type="text" class="form-control" name="wednesday[]" id="wednesday_0" placeholder="Ex: 9 - 9.30 AM" />    
                    <button type="button" class="btn btn-primary" style="margin-left: 2%;" onclick="appendField('Wednesday')">+</button>
                    <input type="hidden" name="wednesday_dynamic" id="wednesday_dynamic" value="0">  
                  </div>
                </div>
              </div>
            </div>

            <!-- THURSDAY -->
            <div class="tab-pane fade" id="thursday" role="tabpanel">
              <div class="app-time">
                <div id="appended-thursday">
                  <div class="app-check col-md-3" id="thursday_div_0">
                    <input type="text" class="form-control" name="thursday[]" id="thursday_0" placeholder="Ex: 9 - 9.30 AM" />    
                    <button type="button" class="btn btn-primary" style="margin-left: 2%;" onclick="appendField('Thursday')">+</button>
                    <input type="hidden" name="thursday_dynamic" id="thursday_dynamic" value="0">  
                  </div>
                </div>
              </div>
            </div>

            <!-- FRIDAY -->
            <div class="tab-pane fade" id="friday" role="tabpanel">
              <div class="app-time">
                <div id="appended-friday">
                  <div class="app-check col-md-3" id="friday_div_0">
                    <input type="text" class="form-control" name="friday[]" id="friday_0" placeholder="Ex: 9 - 9.30 AM" />    
                    <button type="button" class="btn btn-primary" style="margin-left: 2%;" onclick="appendField('Friday')">+</button>
                    <input type="hidden" name="friday_dynamic" id="friday_dynamic" value="0">  
                  </div>
                </div>
              </div>
            </div>

            <!-- SATURDAY -->
            <div class="tab-pane fade" id="saturday" role="tabpanel">
              <div class="app-time">
                <div id="appended-saturday">
                  <div class="app-check col-md-3" id="saturday_div_0">
                    <input type="text" class="form-control" name="saturday[]" id="saturday_0" placeholder="Ex: 9 - 9.30 AM" />    
                    <button type="button" class="btn btn-primary" style="margin-left: 2%;" onclick="appendField('Saturday')">+</button>
                    <input type="hidden" name="saturday_dynamic" id="saturday_dynamic" value="0">  
                  </div>
                </div>
              </div>
            </div>

            <!-- SUNDAY -->
            <div class="tab-pane fade" id="sunday" role="tabpanel">
              <div class="app-time">
                <div id="appended-sunday">
                  <div class="app-check col-md-3" id="sunday_div_0">
                    <input type="text" class="form-control" name="sunday[]" id="sunday_0" placeholder="Ex: 9 - 9.30 AM" />    
                    <button type="button" class="btn btn-primary" style="margin-left: 2%;" onclick="appendField('Sunday')">+</button>
                    <input type="hidden" name="sunday_dynamic" id="sunday_dynamic" value="0">  
                  </div>
                </div>
              </div>
            </div>

          </div>
          <button class="btn btn-primary" style="float:right;">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@push('script')
  <script>
    function appendField(day) {
      if(day === "Monday") {
        monDyn = $("#monday_dynamic").val()
        monDyn++
        $("#monday_dynamic").val(monDyn)
        $("#appended-monday").append('<div class="app-check col-md-3" id="monday_div_'+monDyn+'" style="margin-top: 2%;"><input type="text" class="form-control" name="monday[]" id="monday_'+monDyn+'" placeholder="Ex: 9 - 9.30 AM" /><button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="removeField(\'Monday\', '+monDyn+')">-</button></div>')
      }
      else if(day === "Tuesday") {
        tueDyn = $("#tuesday_dynamic").val()
        tueDyn++
        $("#tuesday_dynamic").val(tueDyn)
        $("#appended-tuesday").append('<div class="app-check col-md-3" id="tuesday_div_'+tueDyn+'" style="margin-top: 2%;"><input type="text" class="form-control" name="tuesday[]" id="tuesday_'+tueDyn+'" placeholder="Ex: 9 - 9.30 AM" /><button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="removeField(\'Tuesday\', '+tueDyn+')">-</button></div>')
      }
      else if(day === "Wednesday") {
        wedDyn = $("#wednesday_dynamic").val()
        wedDyn++
        $("#wednesday_dynamic").val(wedDyn)
        $("#appended-wednesday").append('<div class="app-check col-md-3" id="wednesday_div_'+wedDyn+'" style="margin-top: 2%;"><input type="text" class="form-control" name="wednesday[]" id="wednesday_'+wedDyn+'" placeholder="Ex: 9 - 9.30 AM" /><button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="removeField(\'Wednesday\', '+wedDyn+')">-</button></div>')
      }
      else if(day === "Thursday") {
        thurDyn = $("#thursday_dynamic").val()
        thurDyn++
        $("#thursday_dynamic").val(thurDyn)
        $("#appended-thursday").append('<div class="app-check col-md-3" id="thursday_div_'+thurDyn+'" style="margin-top: 2%;"><input type="text" class="form-control" name="thursday[]" id="thursday_'+thurDyn+'" placeholder="Ex: 9 - 9.30 AM" /><button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="removeField(\'Thursday\', '+thurDyn+')">-</button></div>')
      }
      else if(day === "Friday") {
        friDyn = $("#friday_dynamic").val()
        friDyn++
        $("#friday_dynamic").val(friDyn)
        $("#appended-friday").append('<div class="app-check col-md-3" id="friday_div_'+friDyn+'" style="margin-top: 2%;"><input type="text" class="form-control" name="friday[]" id="friday_'+friDyn+'" placeholder="Ex: 9 - 9.30 AM" /><button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="removeField(\'Friday\', '+friDyn+')">-</button></div>')
      }
      else if(day === "Saturday") {
        satDyn = $("#saturday_dynamic").val()
        satDyn++
        $("#saturday_dynamic").val(satDyn)
        $("#appended-saturday").append('<div class="app-check col-md-3" id="saturday_div_'+satDyn+'" style="margin-top: 2%;"><input type="text" class="form-control" name="saturday[]" id="saturday_'+satDyn+'" placeholder="Ex: 9 - 9.30 AM" /><button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="removeField(\'Saturday\', '+satDyn+')">-</button></div>')
      }
      else if(day === "Sunday") {
        sunDyn = $("#sunday_dynamic").val()
        sunDyn++
        $("#sunday_dynamic").val(sunDyn)
        $("#appended-sunday").append('<div class="app-check col-md-3" id="sunday_div_'+sunDyn+'" style="margin-top: 2%;"><input type="text" class="form-control" name="sunday[]" id="sunday_'+sunDyn+'" placeholder="Ex: 9 - 9.30 AM" /><button type="button" class="btn btn-danger" style="margin-left: 2%;" onclick="removeField(\'Sunday\', '+sunDyn+')">-</button></div>')
      }
    }

    function removeField(day, count) {
      if(day === "Monday") {
        $("#monday_div_"+count).remove();
      }
      if(day === "Tuesday") {
        $("#tuesday_div_"+count).remove();
      }
      if(day === "Wednesday") {
        $("#wednesday_div_"+count).remove();
      }
      if(day === "Thursday") {
        $("#thursday_div_"+count).remove();
      }
      if(day === "Friday") {
        $("#friday_div_"+count).remove();
      }
      if(day === "Saturday") {
        $("#saturday_div_"+count).remove();
      }
      if(day === "Sunday") {
        $("#sunday_div_"+count).remove();
      }
    }
  </script>
@endpush