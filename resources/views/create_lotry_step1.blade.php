@extends('layouts.layout')
<!--start style section-->
@section('style')

@endsection
<!--end style section-->
<!--start content section-->
@section('content')

<h1 class="page-title">lotry form step</h1>
<section class="lotry-form-main-wrap">
    
<!-- -->
<div class="content">
  <div class="content__inner">
    <div class="overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info <span>1</span></button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Address <span>2</span></button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Order Info <span>3</span></button>
              <button class="multisteps-form__progress-btn" type="button" title="Message">Message <span>4</span></button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form">
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active">
                <h2 class="form-title">Create New Lottery</h2>
                <div class="form-inner-body">
                    <div class="customFormWrap inlineField require">
                        <label class="customFormLabel" for="userfname">Type</label>
                        <div class="input-require-box">
                            <select name="" id="type" class="form-select">
                                <option value="Lottery-1">Lottery-1</option>
                                <option value="Lottery-2">Lottery-2</option>
                                <option value="Lottery-3">Lottery-3</option>
                            </select>
                            <div class="error-massage">
                                This field is required.
                            </div>
                        </div>
                    </div>

                    <div class="customFormWrap inlineField require">
                        <label class="customFormLabel" for="lotteryname">Lottery Name</label>
                        <div class="input-require-box">
                            <input type="text" id="lotteryname" name="" value="" class="form-control">
                            <div class="error-massage">
                                This field is required.
                            </div>
                        </div>
                    </div>

                    <div class="customFormWrap inlineField require">
                        <label class="customFormLabel" for="">Description</label>
                        <div class="input-require-box">
                            <textarea name="" id=""
                                class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            </textarea>
                                <div class="error-massage">
                                    This field is required.
                                </div>
                        </div>
                    </div>

                    <div class="customFormWrap inlineField require">
                        <label class="customFormLabel" for="">Default Entry Fee</label>
                        <div class="input-require-box">
                           <input type="number" id="" name="" value="" class="form-control">
                           <div class="error-massage">
                                    This field is required.
                            </div>
                        </div>
                    </div>

                    <div class="customFormWrap inlineField require">
                        <label class="customFormLabel" for="">Repetion</label>
                        <div class="input-require-box">
                            <select name="" id="type" class="form-select">
                                <option value="United Kingdom">one-off</option>
                                <option value="United Kingdom">Weekly</option>
                                <option value="United Kingdom">etc</option>
                            </select>
                            <div class="error-massage">
                                    This field is required.
                            </div>
                        </div>
                    </div>

                    <div class="customFormWrap inlineField require">
                        <label for="" class="customFormLabel">First Draw</label>
                        <div class="input-require-box">
                            <div class="date-input-group">
                                <span class="input-group-text">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                                <input type="text" id="datepicker">
                            </div>
                            <div class="error-massage">
                                    This field is required.
                            </div>
                        </div>
                    </div>

                    <div class="customFormWrap inlineField require">
                        <label class="customFormLabel" for="">First Draw's ID</label>
                        <div class="input-require-box">
                           <input type="text" id="" name="" value="" class="form-control">
                           <div class="error-massage">
                                    This field is required.
                            </div>
                        </div>
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
                    <div class="button-row d-flex mt-4">
                    <button class="btn allBtn dark ml-auto js-btn-next" type="button" title="Next">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                  </div>

                </div>
              </div>
 
              <div class="lotry-step-2-form-box multisteps-form__panel shadow p-4 rounded bg-white">
    
            <h2 class="form-title">Entry Settings</h2>
            <div class="form-inner-body">
                <div class="customFormWrap inlineField require">
                    <label class="customFormLabel" for="Selectionrange">Selection range</label>
                    <div class="input-range-box">
                        <div class="from-range-box">
                            <!-- <span class="prize-title">From</span> -->
                            <div class="input-require-box">
                               <input type="number" id="minrange" name="minrange" min="0" max="99" placeholder="From">
                               <div class="error-massage">
                                    This field is required.
                                </div>
                            </div>
                        </div>
                        <div class="from-range-box">
                            <!-- <span class="prize-title">To</span> -->
                            <div class="input-require-box">
                                <input type="number" id="maxrange" name="maxrange" min="0" max="99" placeholder="To">
                                <div class="error-massage">
                                    This field is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customFormWrap inlineField require">
                    <label class="customFormLabel" for="amountselection">Amount of Selections</label>
                    <div class="input-require-box">
                        <input type="number" id="amountselection" name="amountselection" min="0" max="6">
                        <div class="error-massage">
                                    This field is required.
                                </div>
                    </div>
                </div>

                <div class="customFormWrap inlineField require">
                    <label class="customFormLabel" for="">Separated by</label>
                    <div class="input-require-box">
                    <select name="" id="type" class="form-select">
                        <option value="separatoption1">Separat option1</option>
                        <option value="separatoption2">Separat option2</option>
                        <option value="separatoption3">Separat option3</option>
                    </select>
                    <div class="error-massage">
                                    This field is required.
                                </div>
                    </div>
                </div>

                <div class="customFormWrap inlineField example-row">
                    <label class="customFormLabel" for="amountselection">Example</label>
                    <div class="">4-5-8-7-2-2</div>
                </div>
                
                <h2>Options</h2>
                <div class="customFormWrap inlineField">
                    <div class="radio-button-row checkbox-button-row">
                        <div class="radio-row checkbox-success">
                            <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                            <label for="checkbox1">Selected digits in Entry number must be unique</label>
                        </div>
                        <div class="radio-row checkbox-success">
                            <input type="checkbox" id="checkbox2" name="checkbox2" value="">
                            <label for="checkbox2">Order digits (oscending)</label>
                        </div>
                        <div class="radio-row checkbox-success">
                            <input type="checkbox" id="checkbox3" name="checkbox3" value="">
                            <label for="checkbox3">Entries must be unique l.e, no two players can have the same Entry
                                number.</label>
                        </div>
                        <div class="radio-row checkbox-success">
                            <input type="checkbox" id="checkbox4" name="checkbox4" value="">
                            <label for="checkbox4">Entries can only win one prize per draw.</label>
                        </div>
                        <div class="radio-row checkbox-success">
                            <input type="checkbox" id="checkbox5" name="checkbox5" value="">
                            <label for="checkbox5">Automatically Run Draw (only available with RNG)</label>
                        </div>
                    </div>
                </div>
                <div class="customFormWrap inlineField require">
                    <label class="customFormLabel" for="">Draw Time</label>
                    <div class="input-require-box">
                        <input type="time" id="timepicker" name="timepicker">
                        <div class="error-massage">
                                    This field is required.
                                </div>
                    </div>
                </div>
                <h3>Lock and Upload Entries</h3>
                <div class="customFormWrap inlineField require">
                    <div class="input-range-box entries-box-row">
                        <div class="entries-box">
                            <span>Lock Entries</span>
                            <div class="input-require-box">
                               <input type="number" id="minrange" name="minrange" min="0">
                               <div class="error-massage">
                                    This field is required.
                                </div>
                            </div>
                        </div>
                        <div class="entries-box require">
                          <div class="input-require-box">
                            <select name="" id="type" class="form-select">
                                <option value="United Kingdom">Minutes</option>
                                <option value="United Kingdom">Hours</option>
                                <option value="United Kingdom">Days</option>
                            </select>
                            <div class="error-massage">
                                    This field is required.
                                </div>
                            </div>
                            <span>before draw</span>
                        </div>
                    </div>
                </div>

                <div class="customFormWrap inlineField require">
                    <label for="" class="customFormLabel">Upload Entries to:</label>
                    <div class="input-require-box">
                      <input type="text" id="" name="" value="" class="form-control">
                      <div class="error-massage">
                                    This field is required.
                                </div>
                    </div>
                </div>

                <div class="customFormWrap inlineField require">
                    <label for="" class="customFormLabel">Notify:</label>
                    <div class="input-require-box">
                    <input type="text" id="" name="" value="" class="form-control">
                    <div class="error-massage">
                                    This field is required.
                                </div>
                    </div>
                </div>
                <div class="button-row d-flex mt-4">
                    <button class="btn allBtn dark js-btn-prev" type="button" title="Prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Prev</button>
                    <button class="btn allBtn dark ml-auto js-btn-next" type="button" title="Next">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
 
              <div class="lotry-step-3-form-box multisteps-form__panel shadow p-4 rounded bg-white">
            
                <h2 class="form-title">Prizes</h2>
                <div class="form-inner-body">
                <div class="customFormWrap inlineField">
                    <div class="radio-button-row">
                        <div class="radio-row">
                            <input type="radio" id="radio5" name="radio-button" value="radio5">
                            <label for="radio5">Percentage of Proceeds</label>
                        </div>
                        <div class="prizes-box mb-25">
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel mobile-hide" for="prize"></label>
                                <div class="prize-title">Prize</div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="firstPrize">1st Prize</label>
                                <div class="input-require-box">
                                   <input type="number" id="firstPrize" name="" value="" class="form-control">
                                   <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="secondprize">2nd Prize</label>
                                <div class="input-require-box">
                                    <input type="number" id="secondprize" name="" value="" class="form-control">
                                    <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="thirdprize">3rd Prize</label>
                                <div class="input-require-box">
                                    <input type="number" id="thirdprize" name="" value="" class="form-control">
                                    <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="fourthprize">4th Prize</label>
                                <div class="input-require-box">
                                   <input type="number" id="fourthprize" name="" value="" class="form-control">
                                   <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="fifthprize">5th Prize</label>
                                <div class="input-require-box">
                                   <input type="number" id="fifthprize" name="" value="" class="form-control">
                                   <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel" for="pricetotal">Price Total</label>
                                <div class="">{40%}</div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="elmfee">Default ELM Fee</label>
                                <div class="input-require-box">
                                   <input type="number" id="elmfee" name="" value="" class="form-control">
                                   <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField example-row">
                                <label class="customFormLabel" for="pricetotal">Profit</label>
                                <div class="">{20%}</div>
                            </div>
                        </div>
                        <div class="radio-row">
                            <input type="radio" id="radio6" name="radio-button" value="radio6">
                            <label for="radio6">Fixed Prizes</label>
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
                                <label class="customFormLabel prize-main-bold-title" for="firstPrize">1st Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="cash1">Cash1</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <div class="input-require-box">
                                        <input type="number" id="quantity1" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel  prize-main-bold-title" for="secondprize">2nd Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="cash1">Cash1</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize2" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <div class="input-require-box">
                                        <input type="number" id="quantity2" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel  prize-main-bold-title" for="thirdprize">3rd Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="Other">Other</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize3" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <div class="input-require-box">
                                        <input type="number" id="quantity3" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel  prize-main-bold-title" for="fourthprize">4th Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="Entries">Entries</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize4" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <div class="input-require-box">
                                        <input type="number" id="quantity4" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel  prize-main-bold-title" for="fifthprize">5th Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="cash1">Cash1</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize5" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Quantity</span>
                                        <div class="input-require-box">
                                        <input type="number" id="quantity5" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField example-row top-space">
                                <label class="customFormLabel" for="pricetotal">Total</label>
                                <div class="">{1,200}</div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="elmfee">Default ELM Fee</label>
                                <div class="input-require-box">
                                <input type="number" id="elmfee1" name="" value="" class="form-control">
                                <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-row d-flex mt-4 col-12">
                      <button class="btn allBtn dark js-btn-prev" type="button" title="Prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Prev</button>
                      <button class="btn allBtn dark ml-auto js-btn-next" type="button" title="Next">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                    </div>
               </div>
              </div>
 
              <div class="multisteps-form__panel shadow p-4 rounded bg-white lotry-step-3-form-box lotry-step-4-form-box">
                <h2 class="form-title">Default Fee Settings</h2>
                <div class="form-inner-body">
                <div class="customFormWrap inlineField flex-column">
                    <div class="radio-button-row">
                        <div class="prizes-box">
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="elmfee">Default ELM Fee</label>
                                <div class="input-require-box">
                                <input type="number" id="elmfee" name="" value="" class="form-control">
                                <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="prizefee">Default Prize Fee</label>
                                <div class="input-require-box">
                                <input type="number" id="prizefee" name="" value="" class="form-control">
                                <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
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
                                    <input type="radio" id="radio7" name="radio-button" value="radio7">
                                    <label for="radio7">Weather Lottery Style (Match Digit Position)</label>
                                </div>
                                <div class="radio-row">
                                    <input type="radio" id="radio8" name="radio-button" value="radio8">
                                    <label for="radio8">Gatherwell Style (first or last n)</label>
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
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Match</span>
                                        <div class="input-require-box">
                                           <input type="number" id="matchprize" name="" value="" class="form-control">
                                           <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="cash">Cash</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row checkbox-button-row">
                                        <span>Insured</span>
                                        <div class="radio-row checkbox-success">
                                            <input type="checkbox" id="checkbox6" name="checkbox6" value="">
                                            <label for="checkbox6"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="secondprize">2nd Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Match</span>
                                        <div class="input-require-box">
                                           <input type="number" id="matchprize" name="" value="" class="form-control">
                                           <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="Cash">Cash</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row checkbox-button-row">
                                        <span>Insured</span>
                                        <div class="radio-row checkbox-success">
                                            <input type="checkbox" id="checkbox7" name="checkbox7" value="">
                                            <label for="checkbox7"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="thirdprize">3rd Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Match</span>
                                        <div class="input-require-box">
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="other">other</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row checkbox-button-row">
                                        <span>Insured</span>
                                        <div class="radio-row checkbox-success">
                                            <input type="checkbox" id="checkbox8" name="checkbox8" value="">
                                            <label for="checkbox8"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fourthprize">4th Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Match</span>
                                        <div class="input-require-box">
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="entries">Entries</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row checkbox-button-row">
                                        <span>Insured</span>
                                        <div class="radio-row checkbox-success">
                                            <input type="checkbox" id="checkbox9" name="checkbox9" value="">
                                            <label for="checkbox9"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField">
                                <label class="customFormLabel" for="fifthprize">5th Prize</label>
                                <div class="customFormWrap inlineField require">
                                    <div class="row">
                                        <span>Match</span>
                                        <div class="input-require-box">
                                        <input type="number" id="matchprize" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Type</span>
                                        <div class="input-require-box">
                                        <select name="" id="type" class="form-select">
                                            <option value="none">None</option>
                                            <option value="cash2">Cash2</option>
                                            <option value="cash3">Cash3</option>
                                        </select>
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Prize</span>
                                        <div class="input-require-box">
                                        <input type="text" id="Prize1" name="" value="" class="form-control">
                                        <div class="error-massage">
                                       This field is required.
                                     </div>
                                        </div>
                                    </div>
                                    <div class="row checkbox-button-row">
                                        <span>Insured</span>
                                        <div class="radio-row checkbox-success">
                                            <input type="checkbox" id="checkbox10" name="checkbox10" value="">
                                            <label for="checkbox10"></label>
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
                            <div class="checkbox-button-row">
                                <div class="radio-row rollover-bt-space checkbox-success">
                                    <input type="checkbox" id="checkbox11" name="checkbox11" value="">
                                    <label for="checkbox11">Rollover if no 1st prize winner.</label>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="firstPrize">Rollover amount per draw</label>
                                <div class="input-require-box">
                                <input type="number" id="firstPrize" name="" value="" class="form-control">
                                <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
                            </div>
                            <div class="customFormWrap inlineField require">
                                <label class="customFormLabel" for="secondprize">Maximum Rollover</label>
                                <div class="input-require-box">
                                <input type="number" id="secondprize" name="" value="" class="form-control">
                                <div class="error-massage">
                                       This field is required.
                                     </div>
                                </div>
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
                <div class="button-row d-flex mt-4">
                    <button class="btn allBtn dark js-btn-prev" type="button" title="Prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Prev</button>
                    <button class="btn allBtn dark ml-auto" type="button" title="Send">Send</button>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


   
</section>


@endsection
<!--end content section-->
<!--start javascript section-->
@section('javascript')

@endsection
<!--end javascript section-->