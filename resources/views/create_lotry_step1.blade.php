@extends('layouts.layout')
<!--start style section-->
@section('style')

@endsection
<!--end style section-->
<!--start content section-->
@section('content')


<section class="lotry-form-main-wrap">
    <div class="container">
        <div class="">
            <form action="">
                <h2 class="form-title">Create New Lottery</h2>
                <div class="form-inner-body">
                    <div class="customFormWrap inlineField">
                        <label class="customFormLabel" for="userfname">Type</label>
                        <select name="" id="type" class="form-select">
                            <option value="Lottery-1">Lottery-1</option>
                            <option value="Lottery-2">Lottery-2</option>
                            <option value="Lottery-3">Lottery-3</option>
                        </select>
                    </div>

                    <div class="customFormWrap inlineField">
                        <label class="customFormLabel" for="lotteryname">Lottery Name</label>
                        <input type="text" id="lotteryname" name="" value="" class="form-control">
                    </div>

                    <div class="customFormWrap inlineField">
                        <label class="customFormLabel" for="">Description</label>
                        <textarea name="" id=""
                            class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt</textarea>
                    </div>

                    <div class="customFormWrap inlineField">
                        <label class="customFormLabel" for="">Default Entry Fee</label>
                        <input type="number" id="" name="" value="" class="form-control">
                    </div>

                    <div class="customFormWrap inlineField">
                        <label class="customFormLabel" for="">Repetion</label>
                        <select name="" id="type" class="form-select">
                            <option value="United Kingdom">one-off</option>
                            <option value="United Kingdom">Weekly</option>
                            <option value="United Kingdom">etc</option>
                        </select>
                    </div>

                    <div class="customFormWrap inlineField">
                        <label for="" class="customFormLabel">First Draw</label>
                        <div class="date-input-group">
                            <span class="input-group-text">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            <input type="text" id="datepicker">
                        </div>
                    </div>

                    <div class="customFormWrap inlineField">
                        <label class="customFormLabel" for="">First Draw's ID</label>
                        <input type="text" id="" name="" value="" class="form-control">
                    </div>
                    <h2>Prize Award Style</h2>
                    <div class="customFormWrap inlineField">
                        <div class="radio-button-row col-gap">
                            <div class="radio-row">
                                <input type="radio" id="radio1" name="radio-button" value="radio1">
                                <label for="radio1">Guaranteed winners-system will select a fixed number of
                                    winners.</label>
                            </div>
                            <div class="radio-row">
                                <input type="radio" id="radio2" name="radio-button" value="radio2">
                                <label for="radio2">Chance of winning-winning combination detemines winners based on
                                    matching
                                    the
                                    combination.</label>
                            </div>
                            <div class="radio-sub-row">
                                <div class="radio-row">
                                    <input type="radio" id="radio3" name="radio-button" value="radio3">
                                    <label for="radio3">Automatic System RNG</label>
                                </div>
                                <div class="radio-row">
                                    <input type="radio" id="radio4" name="radio-button" value="radio4">
                                    <label for="radio4"> Manual Combination Entry</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-group-row">
                        <a href="#" class="allBtn dark"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous</a>
                        <a href="create_lotry_step2" class="allBtn dark">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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