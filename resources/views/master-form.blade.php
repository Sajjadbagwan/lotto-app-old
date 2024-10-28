@extends('layouts.layout')
<!--start style section-->
@section('style')

@endsection
<!--end style section-->
<!--start content section-->
@section('content')

<section class="lotry-form-main-wrap lotry-step-2-form-box">
            <form action="">
            <h2 class="form-title">Form Elements</h2>
            <div class="form-inner-body">
                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="defaultinput">Default</label>
                    <input type="text" id="defaultinput" name="defaultinput">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="emailinput">Email Input</label>
                    <input type="email" id="emailinput" name="emailinput" placeholder="Enter Email">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="disabledinput">Disabled</label>
                    <input type="text" id="disabledinput" name="disabledinput" placeholder="Disabled input here..." disabled>
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="inputReadOnly">Read-only Input</label>
                    <input type="text" id="inputReadOnly" name="inputReadOnly" value="Read-Only Input"  readonly="readonly">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="roundedinput">Rounded Input</label>
                    <input type="text" id="roundedinput" name="roundedinput" class="input-rounded">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="inputFocus">Input focus</label>
                    <input type="text" id="inputFocus" name="inputFocus" value="This is focused...">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="inputPlaceholder">Placeholder</label>
                    <input type="text" id="inputPlaceholder" name="inputPlaceholder" placeholder="placeholder">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" name="inputPassword" placeholder="Password">
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="">Select Box</label>
                    <select name="" id="type" class="form-select">
                        <option value="separatoption1">Separat option1</option>
                        <option value="separatoption2">Separat option2</option>
                        <option value="separatoption3">Separat option3</option>
                    </select>
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="textareaDefault">Textarea</label>
                    <textarea rows="3" id="textareaDefault"></textarea>
                </div>

                <div class="customFormWrap inlineField has-success">
                    <label class="customFormLabel" for="inputSuccess">Input with success</label>
                    <input type="text" id="inputSuccess" name="inputSuccess">
                </div>

                <div class="customFormWrap inlineField has-warning">
                    <label class="customFormLabel" for="inputWarning">Input with warning</label>
                    <input type="text" id="inputWarning" name="inputWarning">
                </div>

                <div class="customFormWrap inlineField has-danger">
                    <label class="customFormLabel" for="inputError">Input with error</label>
                    <input type="text" id="inputError" name="inputError">
                </div>
                
                <div class="customFormWrap inlineField">
                        <label for="" class="customFormLabel">Left Icon</label>
                        <div class="input-group">
                            <span class="input-group-text">
                            <i class="fa fa-male" aria-hidden="true"></i>
                            </span>
                            <input type="text"  placeholder="Left icon">
                        </div>
                </div>
                 
                <div class="customFormWrap inlineField">
                        <label for="" class="customFormLabel">Right Icon</label>
                        <div class="input-group input-group-right-icon">
                            <input type="text"  placeholder="Right icon">
                            <span class="input-group-text">
                            <i class="fa fa-male" aria-hidden="true"></i>
                            </span>
                        </div>
                </div>
                
                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="">File Upload</label>
                    <div class="form-upload">
                        <label for="file-upload-1">Select File
                        <input type="file" id="file-upload-1" class="file-upload">
                        </label>
                        <p id="filename-1" class="filename">file1.jpg</p>
                    </div>
                </div>

                <div class="customFormWrap inlineField">
                    <label class="customFormLabel" for="">Timepicker</label>
                    <input type="time" id="timepicker" name="timepicker">
                </div>
                </div>
                <div class="checkbox-radio-box-section">
                    <h2 class="form-title">Custom Checkbox & Radio</h2>
                    <div class="checkbox-radio-box-inner-section">
                    <div class="customFormWrap inlineField">
                        <div class="radio-button-row checkbox-button-row">
                            <div class="radio-row checkbox-default">
                                <input type="checkbox" id="checkbox1" name="checkbox1" value="">
                                <label for="checkbox1">Checkbox Default</label>
                            </div>
                            <div class="radio-row checkbox-primary">
                                <input type="checkbox" id="checkbox2" name="checkbox2" value="">
                                <label for="checkbox2">Checkbox Primary</label>
                            </div>
                            <div class="radio-row checkbox-success">
                                <input type="checkbox" id="checkbox3" name="checkbox3" value="">
                                <label for="checkbox3">Checkbox Success</label>
                            </div>
                            <div class="radio-row checkbox-warning">
                                <input type="checkbox" id="checkbox4" name="checkbox4" value="">
                                <label for="checkbox4">Checkbox Warning</label>
                            </div>
                            <div class="radio-row checkbox-danger">
                                <input type="checkbox" id="checkbox5" name="checkbox5" value="">
                                <label for="checkbox5">Checkbox Danger</label>
                            </div>
                            <div class="radio-row checkbox-disabled">
                                <input type="checkbox" id="checkbox6" name="checkbox6" value="" disabled>
                                <label for="checkbox6">Checkbox Disabled</label>
                            </div>
                            <div class="radio-row checkbox-disabled">
                                <input type="checkbox" id="checkbox7" name="checkbox7" value="" disabled checked>
                                <label for="checkbox7">Checked & Disabled</label>
                            </div>
                        </div>
                    </div>
                    <div class="customFormWrap inlineField">
                        <div class="radio-button-row">
                            <div class="radio-row radiobox-default">
                                <input type="radio" id="radio1" name="radio-button" value="radio1">
                                <label for="radio1">Radio Default</label>
                            </div>
                            <div class="radio-row radiobox-primary">
                                <input type="radio" id="radio2" name="radio-button" value="radio2">
                                <label for="radio2">Radio Primary</label>
                            </div>
                            <div class="radio-row radiobox-success">
                                <input type="radio" id="radio3" name="radio-button" value="radio3">
                                <label for="radio3">Radio Success</label>
                            </div>
                            <div class="radio-row radiobox-warning">
                                <input type="radio" id="radio4" name="radio-button" value="radio4">
                                <label for="radio4">Radio Warning</label>
                            </div>
                            <div class="radio-row radiobox-danger">
                                <input type="radio" id="radio5" name="radio-button" value="radio5">
                                <label for="radio5">Radio Danger</label>
                            </div>
                            <div class="radio-row radiobox-disabled">
                                <input type="radio" id="radio6" name="radio-button" value="radio6" disabled>
                                <label for="radio6">Radio Disabled</label>
                            </div>
                            <div class="radio-row radiobox-disabled">
                                <input type="radio"  disabled checked>
                                <label>Checked & Disabled</label>
                            </div>
                        </div>
                    </div>


                    <div class="customFormWrap inlineField toggle-box">
                      <label class="toggle switch-primary">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                      </label>
                      <label class="toggle switch-success">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                      </label>
                      <label class="toggle switch-warning">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                      </label>
                      <label class="toggle switch-danger">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                      </label>
                      <label class="toggle switch-info">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                      </label>
                      <label class="toggle switch-dark">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                      </label>
                    </div>


                    </div>
                </div>
            </form>
</section>


@endsection
<!--end content section-->
<!--start javascript section-->
@section('javascript')

@endsection
<!--end javascript section-->