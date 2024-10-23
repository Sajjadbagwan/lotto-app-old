@extends('layouts.layout')
<!--start style section-->
@section('style')

@endsection
<!--end style section-->
<!--start content section-->
@section('content')


<section class="lotry-form-main-wrap lotry-step-3-form-box lotry-step-4-form-box">
    <div class="container">
        <div class="">
            <form action="">
                <h2>Default Fee Settings</h2>
                <div class="customFormWrap inlineField flex-column">
                    <div class="radio-button-row">
                        <div class="prizes-box">
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="elmfee">Default ELM Fee</label>
                                <input type="number" id="elmfee" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="prizefee">Default Prize Fee</label>
                                <input type="number" id="prizefee" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel" for="pricetotal">Default Profit</label>
                                <div class="">{20%}</div>
                            </div>
                        </div>
                        <div class="win-setting-box">
                            <h2>Win Settings</h2>
                            <div class="win-setting-radio-btn">
                                <div class="radio-row">
                                    <input type="radio" id="radio1" name="radio-button" value="radio1">
                                    <label for="radio1">Weather Lottery Style (Match Digit Position)</label>
                                </div>
                                <div class="radio-row">
                                    <input type="radio" id="radio2" name="radio-button" value="radio2">
                                    <label for="radio2">Gatherwell Style (first or last n)</label>
                                </div>
                            </div>
                        </div>
                        <h2>Default Prizes</h2>
                        <div class="prizes-box fix-prizes-box">
                            <div class="customFormWrap inlineField multipal-input-title">
                                <label class="customFormLabel" for="prize"></label>
                                <div class="multipal-title-row">
                                    <div class="prize-title">Match</div>
                                    <div class="prize-title">Type</div>
                                    <div class="prize-title">Prize</div>
                                    <div class="prize-title">Insured</div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="firstPrize">1st Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Match</span>
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="cash">Cash</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Insured</span>
                                        <div class="radio-row">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="secondprize">2nd Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Match</span>
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="Cash">Cash</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Insured</span>
                                        <div class="radio-row">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="thirdprize">3rd Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Match</span>
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="other">other</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Insured</span>
                                        <div class="radio-row">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fourthprize">4th Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Match</span>
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="entries">Entries</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Insured</span>
                                        <div class="radio-row">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fifthprize">5th Prize</label>
                                <div class="customFormWrap inlineField">
                                    <div class="row">
                                        <span>Match</span>
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <select name="" id="type" class="form-select">
                                            <option value="none">None</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                    </div>
                                    <div class="row">
                                        <span>Insured</span>
                                        <div class="radio-row">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="radio-button-row">
                        <div class="customFormWrap inlineField example-row">
                            <div class="prize-title">Rollover</div>
                        </div>
                        <div class="prizes-box">
                            <div class="radio-row rollover-bt-space">
                                <input type="checkbox" id="checkbox2" name="checkbox2" value="">
                                <label for="checkbox2">Rollover if no 1st prize winner.</label>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="firstPrize">Rollover amount per draw</label>
                                <input type="number" id="firstPrize" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="secondprize">Maximum Rollover</label>
                                <input type="number" id="secondprize" name="" value="" class="form-control">
                            </div>
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel" for="pricetotal">Maximum Draws before payout:</label>
                                <div class="">{20}</div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <div class="rollover-text">
                                    The system will choose a winner at random and award the {£1000} once the threshold is
                                    reached.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="button-group-row">
                    <button type="button" class="allBtn dark">Back</button>
                    <button type="button" class="allBtn dark">Finish</button>
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