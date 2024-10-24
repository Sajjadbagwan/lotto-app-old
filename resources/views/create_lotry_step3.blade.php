@extends('layouts.layout')
<!--start style section-->
@section('style')

@endsection
<!--end style section-->
<!--start content section-->
@section('content')


<section class="lotry-form-main-wrap lotry-step-3-form-box">
    <div class="container">
        <div class="">
            <form action="">
                <h2 class="form-title">Prizes</h2>
                <div class="form-inner-body">
                <div class="customFormWrap inlineField">
                    <div class="radio-button-row">
                        <div class="radio-row">
                            <input type="radio" id="radio1" name="radio-button" value="radio1">
                            <label for="radio1">Percentage of Proceeds</label>
                        </div>
                        <div class="prizes-box mb-25">
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel mobile-hide" for="prize"></label>
                                <div class="prize-title">Prize</div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="firstPrize">1st Prize</label>
                                <input type="number" id="firstPrize" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="secondprize">2nd Prize</label>
                                <input type="number" id="secondprize" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="thirdprize">3rd Prize</label>
                                <input type="number" id="thirdprize" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fourthprize">4th Prize</label>
                                <input type="number" id="fourthprize" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fifthprize">5th Prize</label>
                                <input type="number" id="fifthprize" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel" for="pricetotal">Price Total</label>
                                <div class="">{40%}</div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="elmfee">Default ELM Fee</label>
                                <input type="number" id="elmfee" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel" for="pricetotal">Profit</label>
                                <div class="">{20%}</div>
                            </div>
                        </div>
                        <div class="radio-row">
                            <input type="radio" id="radio2" name="radio-button" value="radio2">
                            <label for="radio2">Fixed Prizes</label>
                        </div>
                        <div class="prizes-box fix-prizes-box">
                            <div class="customFormWrap inlineField multipal-input-title">
                                <label class="customFormLabel" for="prize"></label>
                                <div class="multipal-title-row">
                                    <div class="prize-title">Type</div>
                                    <div class="prize-title">Prize</div>
                                    <div class="prize-title">Quantity</div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="firstPrize">1st Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="cash1">Cash1</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <input type="number" id="quantity1" name="" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="secondprize">2nd Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="cash1">Cash1</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize2" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <input type="number" id="quantity2" name="" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="thirdprize">3rd Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="Other">Other</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize3" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <input type="number" id="quantity3" name="" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fourthprize">4th Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="Entries">Entries</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize4" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <input type="number" id="quantity4" name="" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fifthprize">5th Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="cash1">Cash1</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize5" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <input type="number" id="quantity5" name="" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField example-row top-space">
                                <label class="customFormLabel" for="pricetotal">Total</label>
                                <div class="">{1,200}</div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="elmfee">Default ELM Fee</label>
                                <input type="number" id="elmfee1" name="" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-group-row">
                <a href="create_lotry_step2">Back</a>
                <a href="create_lotry_step4">Next</a>
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