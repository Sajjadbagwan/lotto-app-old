@extends('layouts.layout')
<!--start style section-->
@section('style')

@endsection
<!--end style section-->
<!--start content section-->
@section('content')

<section class="lotry-form-main-wrap lotry-step-2-form-box">
    <div class="container">
        
        <div class="">
            <form action="">
            <h2 class="form-title">Entry Settings</h2>
            <div class="form-inner-body">
                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="Selectionrange">Selection range</label>
                    <div class="input-range-box">
                        <div class="from-range-box">
                            <span class="prize-title">From</span>
                            <input type="number" id="minrange" name="minrange" min="0" max="99">
                        </div>
                        <div class="from-range-box">
                            <span class="prize-title">To</span>
                            <input type="number" id="maxrange" name="maxrange" min="0" max="99">
                        </div>
                    </div>
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="amountselection">Amount of Selections</label>
                    <input type="number" id="amountselection" name="amountselection" min="0" max="6">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="">Separated by</label>
                    <select name="" id="type" class="form-select">
                        <option value="separatoption1">Separat option1</option>
                        <option value="separatoption2">Separat option2</option>
                        <option value="separatoption3">Separat option3</option>
                    </select>
                </div>

                <div class="customFormWrap inlineField example-row">
                    <label class="customFormLabel" for="amountselection">Example</label>
                    <div class="">4-5-8-7-2-2</div>
                </div>
                
                <h2>Options</h2>
                <div class="customFormWrap inlineField">
                    <div class="radio-button-row checkbox-button-row">
                        <div class="radio-row">
                            <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                            <label for="checkbox1">Selected digits in Entry number must be unique</label>
                        </div>
                        <div class="radio-row">
                            <input type="checkbox" id="checkbox2" name="checkbox2" value="">
                            <label for="checkbox2">Order digits (oscending)</label>
                        </div>
                        <div class="radio-row">
                            <input type="checkbox" id="checkbox3" name="checkbox3" value="">
                            <label for="checkbox3">Entries must be unique l.e, no two players can have the same Entry
                                number.</label>
                        </div>
                        <div class="radio-row">
                            <input type="checkbox" id="checkbox4" name="checkbox4" value="">
                            <label for="checkbox4">Entries can only win one prize per draw.</label>
                        </div>
                        <div class="radio-row">
                            <input type="checkbox" id="checkbox5" name="checkbox5" value="">
                            <label for="checkbox5">Automatically Run Draw (only available with RNG)</label>
                        </div>
                    </div>
                </div>
                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="">Draw Time</label>
                    <input type="time" id="timepicker" name="timepicker">
                </div>
                <h3>Lock and Upload Entries</h3>
                <div class="customFormWrap inlineField">
                    <div class="input-range-box entries-box-row">
                        <div class="entries-box">
                            <span>Lock Entries</span>
                            <input type="number" id="minrange" name="minrange" min="0">
                        </div>
                        <div class="entries-box">
                            <select name="" id="type" class="form-select">
                                <option value="United Kingdom">Minutes</option>
                                <option value="United Kingdom">Hours</option>
                                <option value="United Kingdom">Days</option>
                            </select>
                            <span>before draw</span>
                        </div>
                    </div>
                </div>

                <div class="customFormWrap inlineField">
                    <label for="" class="customFormLabel">Upload Entries to:</label>
                    <input type="text" id="" name="" value="" class="form-control">
                </div>

                <div class="customFormWrap inlineField">
                    <label for="" class="customFormLabel">Notify:</label>
                    <input type="text" id="" name="" value="" class="form-control">
                </div>
                <div class="button-group-row">
                <a href="create_lotry_step1" class="allBtn dark">Back</a>
                <a href="create_lotry_step3" class="allBtn dark">Next</a>
                        <!-- <button type="button" class="allBtn dark">Back</button>
                        <button type="button" class="allBtn dark">Next</button> -->
                </div>
                </div>
            </form>
            
        </div>
    </div>
</section>


@endsection
<!--end content section-->
<!--start javascript section-->
@section('javascript')

@endsection
<!--end javascript section-->